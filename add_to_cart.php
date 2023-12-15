<?php
include("include/database.php");
session_start();


$user_id;
$user_type;

if (isset($_SESSION['user_details'])) {
  $user_id = $_SESSION['user_details']['user_id'];
  $user_type = "user_details";
} else if (isset($_SESSION['vendor_details'])) {
  $user_id = $_SESSION['vendor_details']['vendor_id'];
  $user_type = "vendor_details";
} else if (isset($_SESSION['s_provider'])) {
  $user_id = $_SESSION['s_provider']['user_id'];
  $user_type = "service_provider";
}



if (isset($_POST['product_id'])) {
  $productId = $_POST['product_id'];
  $sql_Prod = "SELECT * FROM product_details WHERE product_id=$productId";
  $prd_smt = $db->query($sql_Prod);
  $prdt;
  if ($row = $prd_smt->fetch_assoc())
    $prdt = $row;
  $cur_date = date('Y-m-d');
  $amount = 1 * $prdt['product_new_price'];
  $sql_cart = "INSERT INTO my_cart (user_id,product_id,product_name,price,date,amount) VALUES ('$user_id','$productId','$prdt[product_name]','$prdt[product_new_price]','$cur_date','$amount') ";
  $cart_smt = $db->query($sql_cart);

  // $sql_cart_count = "SELECT count(count) count FROM (SELECT count(product_id) count FROM my_cart WHERE user_id=$user_id AND status!='Completed' GROUP by product_id) AS t ";
  $sql_cart_count = "SELECT COUNT(DISTINCT product_id) count FROM my_cart WHERE user_id=$user_id AND status!='Completed'";
  $count_smt = $db->query($sql_cart_count);
  $cart_count;
  if ($row = $count_smt->fetch_assoc())
    $cart_count = $row;
  echo json_encode($cart_count);
  // Here, you can perform the necessary logic to add the product to the cart
  // For example, you can store the product ID in a session variable or a database

  // Example: Storing the product ID in a session variable
  // $_SESSION['cart'][] = $productId;

  // Return a success response
  // echo 'success';
}
// else {
//   // Return an error response if the product ID is not provided
//   echo 'error';
// }
if (isset($_POST['action'])) {
  if ($_REQUEST['action'] == 'getCartCount') {
    $user_id = $_REQUEST['user_id'];
    $sql_cart_count = "SELECT COUNT(DISTINCT product_id) count FROM my_cart WHERE user_id=$user_id AND status!='Completed'";
    $count_smt = $db->query($sql_cart_count);
    $cart_count;
    if ($row = $count_smt->fetch_assoc())
      $cart_count = $row;
    echo json_encode($cart_count);
  }
}
