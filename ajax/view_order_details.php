<?php
include("config.php");

$order_id = $_GET['order_id'];

$sql = "SELECT * FROM `my_cart m` JOIN `order o` ON `o.order`.`o.user_id` = `m.my_cart`.`m.user_id` JOIN `user_details u` ON `m.order`.`m.user_id` = `u.user_details`.`u.user_id` WHERE `m.order_id`='$order_id' ";
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