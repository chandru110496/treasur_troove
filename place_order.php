
<?php     
include("include/database.php"); 
?>
<?php

session_start();
 $user_id=$_SESSION['user_details']['user_id'];
 $user_name=$_SESSION['user_details']['user_name'];
include("include/database.php");

$sql = "SELECT MAX(order_id) as last_order_id from `order`";
// exit();
$query=mysqli_query($db, $sql); 
while($row=mysqli_fetch_array($query)){
 $order_id = $row['last_order_id'];
} 
$new_order = $order_id+1;
$current_date = date('Y-m-d');

if(isset($_SESSION['cart'])){ 
        $sum =0; 
        $sql="SELECT * FROM product_details WHERE product_id IN ("; 
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
        $total = $qty * $price;
        $sum = $total+$sum;
        $quantity[] =  $qty;
            $q1 = $qty+1;
            $q2 = $qty-1;
           $total_qty = array_sum ($quantity); 
        //     $user_data[] = array(
        //      "id" =>  $id,
        //     "product_name" => $product_name,
        //     "product_price" => $price,
        //     "pro_qty" => $proquantity,
        //     "total" => $total,
        //     "image" => $image,
        //     "qty" => $qty,
        //     "plus_qty" => $q1,
        //     "minus_qty" => $q2,
        // );

        $add_to_cart_sql = "INSERT INTO `my_cart`(`order_id`, `user_id`, `product_id`, `product_name`, `quantity`, `price`, `date`, `amount`, `status`) VALUES ('{$new_order}', '{$user_id}', '{$id}', '{$product_name}', '{$qty}', '{$price}', '{$current_date}', '{$total}', 'Completed')";
        $cart_query = mysqli_query($db, $add_to_cart_sql);



  }

}

$add_to_cart_sql = "INSERT INTO `order`(`order_unique_id`, `total_amount`,`total_qty`, `payment_status`, `payment_date`, `payment_mode`, `user_id`, `status`,`product_id`,`user_name`) VALUES ('{$new_order}', '{$sum}', '{$total_qty}','Paid', '{$current_date}', 'Online', '{$user_id}', 'Completed','{$id}','{$user_name}')";
$cart_query = mysqli_query($db, $add_to_cart_sql);

if($cart_query ==TRUE){
    $last_id = $db->insert_id;
    $join = "SELECT *
    FROM `order`
    JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`
    JOIN `billing_address` ON `order`.`user_id` = `billing_address`.`user_id`
    ORDER BY `order`.`product_id`";
    $results = $db->query($join);
    $row = mysqli_fetch_assoc($results);
    
    if ($row !== NULL) { // Use !== instead of == for strict comparison
        // print_r($row); // Uncomment this line if you want to see the contents of $row
        $user_id = $row['user_id'];
        $product_id = $row['product_id'];
        $pro_name = $row['product_name'];
        $stock_quantity = $row['stock_quantity'];
        $total_amountt = $row['total_amount'];
        $total_qty = $row['total_qty'];
        $user_name = $row['first_name'];
        $address = $row['address'];
        $date = $row['payment_date'];
        $payment_mode = $row['payment_mode'];
        $invoice_num = $row['payment_mode'];
    
        $ins = "INSERT INTO `invoice`(`receiver_name`, `billing_address`, `invoice_date`, `grand_amount`,`payment`,`product_id`,`order_for_id`)
                VALUES ('$user_name', '$address', '$date', '$total_amountt','$payment_mode','$product_id','$last_id')"; 
                // Add closing parenthesis ')' at the end of the VALUES
    
        $result_in = $db->query($ins);
        if ($result_in == TRUE) {
            $ipu = "SELECT *
            FROM `order`
            JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`";
    $ttt = $db->query($ipu);
    
    // Check if the query was successful
    if ($ttt) {
        while ($row = mysqli_fetch_assoc($ttt)) {
            $product_id = $row['product_id'];
            $stock_quantity = $row['stock_quantity'];
            $total_qty = $row['total_qty'];
    
            $stock = $stock_quantity - $total_qty;
            if ($stock >= 0) {
                $bal_stock = "UPDATE `product_details` SET `balanced_stock`='$stock' WHERE `product_id`='$product_id'";
                $stocks = $db->query($bal_stock);
    
                if (!$stocks) {
                    echo "Error updating stock: " . $db->error;
                }
            } else {
                echo "Not enough stock for product ID: $product_id";
            }
        }
    } else {
        echo "Error in query: " . $db->error;
    }
    } else {
        echo "No rows found in the result.";
    }

if(!empty($_SESSION["cart"])) {					
  unset($_SESSION["cart"]);				
?>
<script>window.location="buy.php";</script>
<?php 
      }
else{
?>
<script>window.location="paymenthistory.php";</script>
<?php 
}

};
};












