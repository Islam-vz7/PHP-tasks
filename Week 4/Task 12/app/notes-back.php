<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id']) && !isset($_COOKIE['user'])) {
  header("Location: login.php");
  exit;
} elseif (isset($_COOKIE['user'])) {
 
  $_SESSION['user_id'] = $_COOKIE['user'];
  
}

$query = "SELECT * FROM notes";
$result = mysqli_query($connect, $query);

$notes = [];
while ($row = mysqli_fetch_assoc($result)) {
  $notes[] = $row;
}
?>