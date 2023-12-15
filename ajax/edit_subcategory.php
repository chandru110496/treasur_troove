<?php
include("config.php");

$sub_category_id = $_GET['sub_category_id'];

$sql = "SELECT * FROM `sub_category` JOIN `category` ON `sub_category`.`category_id`= `category`.`category_id` WHERE `sub_category_id`='$sub_category_id' ";
$result = mysqli_query($conn, $sql);
$row = $result -> fetch_assoc();
// echo '<pre>'.print_r($row).'</pre>';exit;

$json_data = json_encode($row);

// Set headers for JSON response
header('Content-Type: application/json');
header('Content-Length: ' . strlen($json_data));

// Send JSON response
echo $json_data;

?>