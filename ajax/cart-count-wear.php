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
        // exit();$total_qtys
        $query=mysqli_query($db, $sql); 
        while($row=mysqli_fetch_array($query)){
        $qty = $_SESSION['cart'][$row['product_id']]['qty'];
        // exit();
        $price = $row['product_new_price'];
        $price_1 = $row['product_old_price'];
        $id = $row['product_id'];
        $sub_category_id=$row['sub_category_id'];
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
           
           
           $sql_tax = "SELECT * FROM sub_category WHERE sub_category_id = $sub_category_id";
           $query_tax=mysqli_query($db, $sql_tax); 
            while($row_tax=mysqli_fetch_array($query_tax)){
            
                $tax = $row_tax['tax'];
            
            }
            
            $tax_price[] = round(($price*$tax/100)*$proquantity);
           
            
    }
    
    $taxs = array_sum ($tax_price); 
    
    
    $quantity[] =  $qty;
        
            $q1 = $qty+1;
            $q2 = $qty-1;
        
            // $total_qty = array_sum ($quantity);

                     
         $link = 'checkout.php';
        $text = 'Proceed To Checkout';
        $total_qtys = $total_qty;
        $sums = $sum; 
    
    
}

else{
        $link = 'index.php';
        $text = 'Continue Shopping';
        $total_qtys = '0';
        $sums = '0';
    }

$user_data[] = array(
             "total_qty" =>  $total_qtys,
             "total_price" =>  $sums,
             "sub_total" =>  $sums+$taxs,
             "link" =>  $link,
             "text" =>  $text,
             "tax" =>  $taxs
        );
echo json_encode($user_data);
