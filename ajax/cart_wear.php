<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
session_start();
$userName= $_SESSION['user_name'];
$userEmail= $_SESSION['user_mail'];
$userID= $_SESSION['user_id'];
include("../include/database.php");
if(isset($_SESSION['cart'])){ 
        $sum =0; 
        $sql="SELECT * FROM wearhouse_products WHERE product_id IN ("; 
        foreach($_SESSION['cart'] as $id => $value) { 
        $sql.=$id.","; 
        } 
        $sql=substr($sql, 0, -1).") ORDER BY product_name ASC"; 
        // exit();
        $query=mysqli_query($db, $sql); 
        while($row=mysqli_fetch_array($query)){
        $qty = $_SESSION['cart'][$row['product_id']]['qty'];
        // exit();
        $price = $row['product_new_price'];
        $price_1 = $row['product_old_price'];
        $id = $row['product_id'];
        $image=$row['product_image1'];
        $product_name = $row['product_name'];
        $proquantity = $qty;
        $pro_code = $row['pro_code'];
        $total = $qty * $price;
        $sum = $total+$sum;
        $quantity[] =  $qty;
            $q1 = $qty+1;
            $q2 = $qty-1;
           $total_qty = array_sum ($quantity); 
            $user_data[] = array(
             "id" =>  $id,
            "product_name" => $product_name,
            "product_price" => $price,
            "pro_qty" => $proquantity,
            "total" => $total,
            "image" => $image,
            "qty" => $qty,
            "plus_qty" => $q1,
            "minus_qty" => $q2,
        );
    }
echo json_encode($user_data);
}
