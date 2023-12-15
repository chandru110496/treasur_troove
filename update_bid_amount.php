<?php
include("include/database.php");

$bid_id = $_GET['bid_id'];
$sql = "SELECT product_new_price new_price FROM `bid_product_details` WHERE `bid_id`='$bid_id'";
$result = $db->query($sql);

$bid_amount;
if ($row = mysqli_fetch_assoc($result)) {
   $bid_amount=$row['new_price'];
}

echo $bid_amount;
