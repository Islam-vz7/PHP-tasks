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
    $confirm_password = $_POST['confirm_password'];

    if (empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Please fill all fields.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT id FROM users WHERE email = '$email'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $error = "Email already registered.";
        } else {
            $query = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
            if (mysqli_query($connect, $query)) {
                header("Location: login.php");
                exit;
            } else {
                $error = "Error: Could not register user.";
            }
        }
    }
}
?>