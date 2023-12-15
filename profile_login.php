<?php

// AND `status`=1
session_start();
include('./include/database.php');

    $email = $_POST['log_email'];
    $password = $_POST['log_password'];
    // $image = $_FILES['pf_image']['name'];
    $sql = "SELECT  * FROM `user_details` WHERE `email_address`='$email' AND `password`='$password'";
    $result = $db->query($sql);
// $base64Image = base64_encode($imageData);
    if ($result->num_rows >0) {
       
        //   email and password already exist in db then profile.php page has ebile to open
        $user_details = $result->fetch_assoc();
       
        $_SESSION['user_details'] = $user_details;
        // $_SESSION['user_name'] = $user_details['user_name'];
        // $_SESSION['user_mail'] = $user_details['email_address'];
        // $_SESSION['user_id'] = $user_details['user_id'];
        //  $_SESSION['currency_type'] = $user_details['cur_type'];
        echo 'success';
    }else{
        echo 'error';
    }
?>
