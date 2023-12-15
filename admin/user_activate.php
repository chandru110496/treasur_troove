<?php
include('include/conn.php');

$user_id = $_GET['user_id'];
$status = $_GET['user_status'];
$Sql = "UPDATE `user_details` SET `status` ='$status' WHERE `user_details`.`user_id`='$user_id'";
//    UPDATE `user_details` SET `status` = '1' WHERE `user_details`.`user_id` = 11; 
//    $res=myaqli_query($db,$Sql);
$res = $conn->query($Sql);

// if ($res == TRUE) {

//    echo 1;
// } else {

//    echo 0;
// }
header("Location:user.php");
