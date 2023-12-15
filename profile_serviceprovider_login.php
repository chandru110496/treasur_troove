<?php

// AND `status`=1
session_start();
include('./include/database.php');

    $email = $_POST['log_email'];
    $password = $_POST['log_password'];
    
    $sql = "SELECT  * FROM `service_provider` WHERE `s_email`='$email' AND `password`='$password'";

    $result = $db->query($sql);
   
    if ($result->num_rows >0) {
        //   email and password already exist in db then profile.php page has ebile to open
        $s_provider = $result->fetch_assoc();
        $_SESSION['s_provider'] = $s_provider;
        // $_SESSION['name'] = $s_provider['name'];
        // $_SESSION['email'] = $s_provider['email'];
        // $_SESSION['vendor_id'] = $s_provider['vendor_id'];
        echo 'success';
    }else{
        echo 'error';
    }
    
?>