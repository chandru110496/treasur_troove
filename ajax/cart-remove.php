<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
include("../include/database.php");

// 
$user_id;
$user;
$user_table;

if (isset($_SESSION['user_details'])) {
	$user_id = $_SESSION['user_details']['user_id'];
	$user_table = "user_details";
	$user = "user_id";
} else if (isset($_SESSION['vendor_details'])) {
	$user_id = $_SESSION['vendor_details']['vendor_id'];
	$user_table = "vendor_details";
	$user = "vendor_id";
} else if (isset($_SESSION['s_provider'])) {
	$user_id = $_SESSION['s_provider']['user_id'];
	$user_table = "service_provider";
	$user = "user_id";
}

$product_id = $_GET['prd_id'];
$sql = "DELETE FROM my_cart  WHERE product_id='$product_id' AND $user='$user_id' AND status!='Completed';";

$query = mysqli_query($db, $sql);


