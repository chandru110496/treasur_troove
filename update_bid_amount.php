<?php
include("include/database.php");
session_start();

$bid_id = $_GET['bid_id'];
$userr = $_GET['user_id'];

$user_type = (isset($_SESSION['user_details'])) ? 'user_id' : 'vendor_id';
$user_table = (isset($_SESSION['user_details'])) ? 'user_details' : 'vendor_details';



// fetch currency symbol
$cur_sys_query = "SELECT symbol from currency c ,$user_table u  WHERE u.$user_type='$userr' AND c.name=u.cur_type ";
$cur_smt = $db->query($cur_sys_query);
$cur_result = $cur_smt->fetch_assoc();
$currency_symbol = $cur_result['symbol'];



$sql = "SELECT product_new_price   ,product_old_price FROM `bid_product_details` WHERE `bid_id`='$bid_id'";
$result = $db->query($sql);

$bid_amount;
if ($row = mysqli_fetch_assoc($result)) {
   $bid_amount = $row['product_new_price']+$row['product_old_price'];
}

$result = [$currency_symbol, $bid_amount];
echo json_encode($result);
