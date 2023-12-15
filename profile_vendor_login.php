<?php

// AND `status`=1
session_start();
include('./include/database.php');


    $email = $_POST['log_email'];
    $password = $_POST['log_password'];
    
    $sql = "SELECT  * FROM `vendor_details` WHERE `email`='$email' AND `password`='$password'";

    $result = $db->query($sql);
   
    if ($result->num_rows >0) {
        //   email and password already exist in db then profile.php page has ebile to open
        $vendor_details = $result->fetch_assoc();
        $_SESSION['vendor_details'] = $vendor_details;
        $_SESSION['name'] = $vendor_details['name'];
        $_SESSION['email'] = $vendor_details['email'];
        $_SESSION['vendor_id'] = $vendor_details['vendor_id'];
        echo 'success';
    }else{
        echo 'error';
    }
    


?>
