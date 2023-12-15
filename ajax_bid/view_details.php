<?php
include("config.php");

$product_id = $_GET['product_id'];

$sql = "SELECT * FROM `product_details` JOIN `category` ON `product_details`.`category_id` = `category`.`category_id` JOIN `sub_category` ON `product_details`.`category_id` = `sub_category`.`category_id` WHERE `product_id`='$product_id' ";
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