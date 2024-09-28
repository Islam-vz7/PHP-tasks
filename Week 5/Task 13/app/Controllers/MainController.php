<?php 


class MainController {

    public static function home()
    {
        include_once './Views/welcome.php';
    }
    public static function login()
    {
        include_once './Views/login.php';
    }

    public static function delete_class(){
        // require_once "./FileManager.php";

        $deleteModel = new Model('classes');
        // $fileManager = new FileManager();

        $class = $deleteModel->first('id', $_GET['id']);

        // if(file_exists($class['image_url']))  $fileManager->remove($class['image_url']);

        if($deleteModel->delete($_GET['id'])) {
        $_SESSION['success'] = 'Class deleted successfully!';
        header('location: ../classes');
        } 
    }

    public static function update_class() {
        $updateModel = new Model('classes');

         $class = $updateModel->first('id', value: $_GET['id']);
         $id = $_GET['id'];
        require_once './Views/update_class.php';
    }

    public static function update_class_back() {
        $id = $_GET['id'];

        $updateModel = new Model('classes');

        $class = $updateModel->first('id', value: $_GET['id']);
        


        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
            
        //     if(!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        
        //         $query = mysqli_query($connect, "SELECT image_url FROM classes WHERE id  = '$id' LIMIT 1");
        
        //         $result = mysqli_fetch_assoc($query)['image_url'];
                
        //         if(file_exists($result)) {
        //             unlink($result);
        //         }
        
        //         $imgTem = $_FILES['image']['tmp_name'];
        //         $imgName = $_FILES['image']['name'];
                
        //         $nameArr = explode( '.' , $imgName);
        
        //         $ext = end($nameArr);
        
        //         $newPath = './images/' . time() . '.' . $ext;
        
        //         move_uploaded_file($imgTem, $newPath);
        // }

            $name = $_POST['name'];
            // $image = $_POST['image'];


            if(!$name) {
                $_SESSION['error'] = 'Please enter new name!';
                exit();
            }

            if($updateModel->update($name, $id)) {
                $_SESSION['success'] = 'Updated successfully!';

                header('location: ../classes');
                
                exit();
            } 
        }
    }

    public static function loginStore()
    {
        $customerModel = new Model('customers');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!($email && $password)) {
                $_SESSION['error'] = 'Email & Password are required !';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']); // return back
                exit();
            }

            $user = $customerModel->first('email', $email);
            if($user) {
                if(password_verify($password, $user['password'])) {
                    setcookie('mindset_user',  json_encode($user), time() + (24 * 60 * 60));
                    $_SESSION['success'] = 'Login successfully!';
                    header('location: ../classes');
                    exit();
                } else {
                    $_SESSION['error'] = 'Password is invalid !';
                    header('Location: ' . $_SERVER['HTTP_REFERER']); // return back
                    exit();
                }
            } else {
                $_SESSION['error'] = 'Email is invalid !';
                header('Location: ' . $_SERVER['HTTP_REFERER']); // return back
                exit();
            }
        }
    }

    public static function register()
    {
        $countryModel = new Model('countries');

        $countries = $countryModel->all();

        include_once './Views/register.php';
    }

    public static function registerStore()
    {
        
        $customerModel = new Model('customers');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password =password_hash( $_POST['password'], PASSWORD_DEFAULT);
            $country = $_POST['country'];


            if(!$name) {
                $_SESSION['error'] = 'Please enter your name!';
                header('location: ../register');
                exit();
            }

            if(!$email) {
                $_SESSION['error'] = 'Please enter your email!';
                header('location: ../register');
                exit();
            }
            
            if(! (  str_contains($email, '@') && str_contains($email, '.')  )) {
                $_SESSION['error'] = 'Please enter a real email !';
                header('location: ../register');
                exit();
            }


            if(!$password) {
                $_SESSION['error'] = 'Please enter your password!';
                header('location: ../register');
                exit();
            }


            $data = [
                'name' => $name, 
                'email' => $email , 
                'country' => $country, 
                // 'password' => $password
            ];

            if(!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                $imgTem = $_FILES['image']['tmp_name'];
                $imgName = $_FILES['image']['name'];
                
                $nameArr = explode( '.' , $imgName);
            
                $ext = end($nameArr);
            
                $data['profile'] = './Views/images/' . time() . '.' . $ext;
            
                move_uploaded_file($imgTem, $data['profile']);
            }
            
            if($customerModel->create($data)) {

                unset($data['password']);

                setcookie('mindset_user',  json_encode($data), time() + (24 * 60 * 60));
                
                $_SESSION['success'] = 'Registered successfully!';

                header('location: ../classes');
                
                exit();
            } 

        }
    }
    
    public static function classes()
    {

        $classModel = new Model('classes');

        $classes = $classModel->all();

        include_once './Views/classes.php';
    }

    public static function create_classes(){

        // require_once "./Views/FileManager.php";
        
        // $classModel = new Model('classes');
        // $fileManager = new FileManager();

        // if( $_SERVER['REQUEST_METHOD'] == 'POST') {

        //     $className = $_POST['name'];
        
        //     if(!$className) {
        //         $_SESSION['error'] = 'Please enter class name!';
        //         header('location: ./create_classes.php');
        //         exit();
        //     }
        
        //     $data = ['name' => $className];
        
        //     if(!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        //         $data['image_url'] = $fileManager->upload($_FILES['image']);
        //     }
        
        //     if($classModel->create($data)) {
        //         $_SESSION['success'] = 'Class Added successfully!';
        //         header('location: ../classes');
        //         exit();
        //     } 
        // }
        include_once './Views/create_classes.php';
    }
    
    public static function create_classes_back()
    {
        
        $createModel = new Model('classes');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            // $image = $_POST['image'];


            if(!$name) {
                $_SESSION['error'] = 'Please enter your name!';
                exit();
            }


            $data = [
                'name' => $name, 
                // 'image_url' => $image
            ];


            if(!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                $imgTem = $_FILES['image']['tmp_name'];
                $imgName = $_FILES['image']['name'];
                
                $nameArr = explode( '.' , $imgName);
            
                $ext = end($nameArr);
            
                $data['profile'] = './Views/images/' . time() . '.' . $ext;
            
                move_uploaded_file($imgTem, $data['profile']);
            }

            
            if($createModel->create($data)) {


                setcookie('mindset_user',  json_encode($data), time() + (24 * 60 * 60));
                
                $_SESSION['success'] = 'Registered successfully!';

                header('location: ../classes');
                
                exit();
            } 

        }
    }

    public static function logout()
    {
        
        setcookie('mindset_user', '', time() - (24 * 60 * 60));


        header('location: ../');

    }

}