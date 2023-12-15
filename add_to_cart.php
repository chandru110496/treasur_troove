<?php
include("include/database.php");
session_start();


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
function checkForProductInCart($productId, $user_id, $user, $db)
{
  $sql = "SELECT count(*) count from my_cart WHERE product_id=$productId AND $user=$user_id AND status!='Completed' ";
  $smt = $db->query($sql);
  if ($smt->fetch_assoc()['count'] > 0)
    return true;
  else
    return false;
}

function updateCart($productId, $user_id, $user, $db)
{
  $sql_f = "SELECT quantity , price  FROM my_cart WHERE $user=$user_id AND product_id=$productId AND status!='Completed'";
  $smt = $db->query($sql_f);
  $result = "";
  if ($row = $smt->fetch_assoc())
    $result = $row;
  // UPDATE `my_cart` SET `cart_id` = '1' WHERE `my_cart`.`unique_id` = 1;
  $quantity=$result['quantity']+1;
  $amount=$quantity*$result['price'];
  $sql_u="UPDATE my_cart SET quantity ='$quantity' , amount='$amount' WHERE $user=$user_id AND product_id=$productId AND status!='Completed' ";
  $smt=$db->query($sql_u);
}

function addProductToCart($productId, $user_id, $user, $db)
{
  $sql_Prod = "SELECT * FROM product_details WHERE product_id=$productId";
  $prd_smt = $db->query($sql_Prod);
  $prdt = "";
  if ($row = $prd_smt->fetch_assoc())
    $prdt = $row;
  $cur_date = date('Y-m-d');
  $amount = 1 * $prdt['original_price'];
  $sql_cart = "INSERT INTO my_cart ($user,product_id,product_name,quantity,price,date,amount) VALUES ('$user_id','$productId','$prdt[product_name]','1','$prdt[original_price]','$cur_date','$amount') ";
  $cart_smt = $db->query($sql_cart);
}
function getCartCount($user_id, $user, $db)
{
  $sql_cart_count = "SELECT COUNT(DISTINCT product_id) count FROM my_cart WHERE $user=$user_id AND status!='Completed'";
  $count_smt = $db->query($sql_cart_count);
  $cart_count = "";
  if ($row = $count_smt->fetch_assoc())
    $cart_count = $row;
  echo json_encode($cart_count);
}

if (isset($_POST['product_id'])) {
  $productId = $_POST['product_id'];

  // check for product detail is already added by the user / vendor in cart if status is not completed
  $AvailOrNot = checkForProductInCart($productId, $user_id, $user, $db);

  //  if so available update the quantity
  if ($AvailOrNot) {
    updateCart($productId, $user_id, $user, $db);
    getCartCount($user_id, $user, $db);
  }
  // else add the product to the cart for the user / vendor 
  else {
    addProductToCart($productId, $user_id, $user, $db);
    getCartCount($user_id, $user, $db);
  }
}

if (isset($_POST['action'])) {
  if ($_REQUEST['action'] == 'getCartCount') {
    $user_id = $_REQUEST['user_id'];
    getCartCount($user_id, $user, $db);
  }
}
