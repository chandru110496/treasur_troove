<?php
include("config.php");

$vendor_id = $_GET['vendor_id'];

$sql = "SELECT * FROM `vendor_details` WHERE `vendor_id`='$vendor_id' ";
$result = mysqli_query($conn, $sql);
$row = $result -> fetch_assoc();

$json_data = json_encode($row);

// Set headers for JSON response
header('Content-Type: application/json');
header('Content-Length: ' . strlen($json_data));

// Send JSON response
echo $json_data;

?>