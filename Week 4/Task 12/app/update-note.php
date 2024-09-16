<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $done = isset($_POST['done']) ? 1 : 0;

    $query = "UPDATE notes SET done = '$done' WHERE id = '$id'";
    if (mysqli_query($connect, $query)) {
        header("Location: notes.php");
        exit;
    } else {
        echo "Error updating note: " . mysqli_error($connect);
    }
}
?>
