<?php
print_r("<script>alert('hello boss ')</script>");
//action.php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
include("include/database.php");


$user_id = $_SESSION['user_details']['user_id'];
print_r("<script>alert(<?= $user_id; ?>+`befor entering the block`)</script>");
// if (isset($_POST["action"])) {

if ($_POST["action"] == 'remove') {
	// foreach ($_SESSION["cart"] as $k => $v) {
	// 	if ($_POST["product_id"] == $k)
	// 		unset($_SESSION["cart"][$k]);
	// 	if (empty($_SESSION["cart"]))
	// 		unset($_SESSION["cart"]);
	// }
	$product_id = $_POST["product_id"];
	$user_id = $_SESSION['user_details']['user_id'];
	print_r("<script>alert(<?= $user_id; ?>)</script>");
	$sql = " DELETE FROM my_cart WHERE user_id=$user_id AND product_id=$product_id AND status!='Completed' ";
	$smt = $db->query($sql);
	echo true;
	exit();
}
if ($_POST["action"] == 'empty') {
	unset($_SESSION["shopping_cart"]);
}
// }
