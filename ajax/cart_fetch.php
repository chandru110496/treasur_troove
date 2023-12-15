<?php
// ini_set('error_reporting', 0);
// ini_set('display_errors', 0);
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
session_start();
include("../include/database.php");


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
// echo $user.$user_id.$user_table;
// $user_id=$_REQUEST['user_id'];
// $user_id = 78;
$sql = "SELECT * from my_cart c, (SELECT * FROM product_details where product_id IN (SELECT  distinct product_id  FROM my_cart WHERE $user=$user_id AND status!='Completed')) p where c.product_id=p.product_id AND c.$user=$user_id AND c.status!='Completed';";

$query = mysqli_query($db, $sql);
$hasData = false;

while ($row = mysqli_fetch_array($query)) {
    // echo json_encode($row);
    // $price = $row['product_new_price'];
    // $price_1 = $row['product_old_price'];
    // $id = $row['product_id'];
    // $image = $row['product_image1'];
    // $product_name = $row['product_name'];
    // // $proquantity = $qty;
    // $pro_code = $row['pro_code'];

    // $sum = $total + $sum;
    // $quantity[] =  $qty;
    // $q1 = $qty + 1;
    // $q2 = $qty - 1;
    // $total_qty = array_sum($quantity);
    $total = $row['product_new_price'] *  $row['quantity'];
    $user_data[] = array(
        "id" =>  $row['product_id'],
        "product_name" => $row['product_name'],
        "product_price" => $row['product_new_price'],
        "pro_qty" => $row['quantity'],
        "total" => $total,
        "image" => $row['product_image1']
        // "qty" => $qty,
        // "plus_qty" => $q1,
        // "minus_qty" => $q2,
    );
    $hasData = true;
}
if ($hasData)
    echo json_encode($user_data);
else {
    echo json_encode('not availabel');
}
// }
