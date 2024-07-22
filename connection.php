<?php
$serverHost = "localhost";
$user = "root";
$password = "";
$database = "fullstack_flutter_php";

$connectNow = new mysqli($serverHost, $user, $password, $database);

// Check connection

// if ($connectNow->connect_error) {
//     die("Connection failed: " . $connectNow->connect_error);
// } 
// echo "Connected successfully";
?>