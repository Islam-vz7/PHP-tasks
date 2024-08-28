<!-- Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. Implement a method to display student information. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: start;
            height: 100px;
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }

        .box {
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 5px 5px 20px #000000;
            padding: 40px 60px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>
          



          <!-- PHP Section --- -->
          <?php 
          
          class Student {

            //Data
            public $name;
            public $age;
            public $grade;

            public function __construct($name, $age, $grade) {
                $this->name = $name;
                $this->age = $age;
                $this->grade = $grade;
            } 
            public function getName() {
                return $this->name;
            }
            public function getAge() {
                return $this->age;
            }
            public function getGrade() {
                return $this->grade;
            }
            public function display() {
                echo "Name: $this->name";
                echo "<br>";
                echo "Age: $this->age";
                echo "<br>";
                echo "Grade: $this->grade";

                echo "<br>";
                echo "<br>";
            }

        }
            $student1 = new Student("Islam", 22, "A+");
            $student1->display();

            $student2 = new Student("Folan", 25, "C");
            $student2->display();
        ?>





        </h1>
    </div>
</body>
</html>