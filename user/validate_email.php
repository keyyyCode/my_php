<?php
include '../connection.php';




$userEmail = $_POST['user_email'];


 $sqlQuery = "SELECT * FROM users_table WHERE user_email = '$user_Email',";

 $resultOfQuery = $connectNow -> query($sqlQuery);

if($resultOfQuery -> num_rows > 0){
    echo json_decode(array('Success' =>true));
} else {
    echo json_decode(array('Success Fail' =>false));
}
?>