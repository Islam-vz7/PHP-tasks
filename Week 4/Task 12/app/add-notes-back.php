<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$error = '';
$note = ['title' => '', 'description' => '', 'done' => 0]; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? null;
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $done = isset($_POST['done']) ? 1 : 0;

    if (empty($title)) {
        $error = "Please enter a title for the note.";
    } else {
        if ($id) {
            $query = "UPDATE notes SET title = '$title', description = '$description', done = '$done' WHERE id = '$id'";
        } else {
            $query = "INSERT INTO notes (title, description, done) VALUES ('$title', '$description', '$done')";
        }
        if (mysqli_query($connect, $query)) {
            header("Location: notes.php");
            exit;
        } else {
            $error = "Error saving note: " . mysqli_error($connect);
        }
    }
} elseif (isset($_GET['id'])) {
    // Fetch the note to edit
    $id = $_GET['id'];
    $query = "SELECT * FROM notes WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $note = $row;
    }
}
?>