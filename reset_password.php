<?php

// AND `status`=1
session_start();
include('include/database.php');

    $user_id = $_SESSION['user_details']['user_id'];
    $new_password = $_POST['new_password'];
    $sql = "UPDATE `user_details` SET `password`='$new_password' WHERE `user_id`='$user_id'";

    // Execute the query
    $result = $db->query($sql);
print_r($result);
    if ($result === TRUE) {
        echo "<script>alert('Successfully Updated');</script>";
        echo "<script>window.location.href = 'profile.php';</script>";
    } else {
        echo "ERROR: Could not execute $sql. " . $db->error;
    }