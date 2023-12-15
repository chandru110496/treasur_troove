<?php
include("config.php");

$user_id = $_GET['user_id'];
// $user_id=63;

$sql = "SELECT * FROM `user_details` WHERE `user_id`='$user_id' ";
$result = $db->query($sql);
$row = $result -> fetch_assoc();
// echo '<pre>'.print_r($row).'</pre>';exit;

$json_data = json_encode($row);

// Set headers for JSON response
header('Content-Type: application/json');
header('Content-Length: ' . strlen($json_data));

// Send JSON response
echo $json_data;
?>