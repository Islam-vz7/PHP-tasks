<?php
session_start();
require 'connect.php';

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];

                $cookie_name = "user";
                $cookie_value = $user['id'];
                $timeout = time() + (30 * 60); 
                setcookie($cookie_name, $cookie_value, $timeout, "/");

                header("Location: index.php");
                exit;
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "No user found with that email.";
        }
    }
}
?>