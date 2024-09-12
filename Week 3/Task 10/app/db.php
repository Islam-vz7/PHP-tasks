<?php 


$host = 'db';
$db = 'students';
$username = 'root';
$password = '123';   

$connect = mysqli_connect($host , $username , $password , $db);

if(!$connect) {
    echo mysqli_connect_error();
}