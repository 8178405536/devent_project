<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$server ='localhost';
$db = 'chair';
// "Sumit@5656


$con = mysqli_connect($server,$username,$password,$db);
?>