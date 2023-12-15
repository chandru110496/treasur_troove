<?php
$user_id = $_SESSION['user_details']['user_id'];
session_start();
ini_set('display_errors', 0);
include("../include/database.php");
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $state = $_POST['state'];
    $pin_code = $_POST['pin_code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    // $password = $_POST['password'];
    $user_id = $_POST['user_id'];
    $address_id=$_POST['address_id'];
    $ssn = $_POST['ssn'];
    if($user_id == TRUE){        
        $sql = "INSERT INTO `billing_address`(`user_id`, `first_name`, `last_name`, `address`, `town`, `state`, `pin_code`, `phone`, `email`, `country`,`ssn`) VALUES ('{$user_id}', '{$first_name}', '{$last_name}', '{$address}', '{$town}', '{$state}', '{$pin_code}', '{$phone}', '{$email}', '{$country}','{$ssn}')";
    }  else{
        $sql = "UPDATE `billing_address` SET `first_name`='{$first_name}',`last_name`='{$last_name}',`address`='{$address}',`town`='{$town}',`state`='{$state}',`pin_code`='{$pin_code}',`phone`='{$phone}', `email`='{$email}',`country`='{$country}',`ssn`='{$ssn}' WHERE `user_id`='{$user_id}'";
    }
    
    $query = mysqli_query($db, $sql);
    if($query){
        header("location:../checkout.php");
    }
    
}


?>