<?php
include '../connection.php';

//post = send and save to sqldb

//get = read data to sqldb

$userName = $_POST['user_name'];
$userEmail = $_POST['user_email'];
$userPassword = md5($_POST['user_password']);

$sqlQuery = "INSERT INTO users_table SET user_name = '$user_Name', user_email = '$user_Email', user_password = '$user_Password',";

$resultOfQuery = $connectNow -> query($sqlQuery);

if($resultOfQuery){
    echo json_decode(array('Success' =>true));
} else {
    echo json_decode(array('Success Fail' =>false));
}
?>