<?php
//    header('Content-Type: application/json');
//    header('Access-Control-Allow-Origin: *');
//    header('Access-Control-Allow-Method: POST');
//    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method, Authorization, X-Requested-With');

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

session_start();

$userName= $_SESSION['userName'];
$userEmail= $_SESSION['userEmail'];
$userID= $_SESSION['cus_id'];


include("../include/config.php");


//$data = json_decode(file_get_contents("php://input"), true);

    $time_add = date('Y-m-d');
 
        if(isset($_SESSION['cart'])){ 
        $sum =0; 
        $sql="SELECT * FROM product WHERE id IN ("; 

        foreach($_SESSION['cart'] as $id => $value) { 
        $sql.=$id.","; 
        } 
        $sql=substr($sql, 0, -1).") ORDER BY product_name ASC"; 
        $query=mysqli_query($conn, $sql); 
        while($row=mysqli_fetch_array($query)){
        $qty = $_SESSION['cart'][$row['id']]['qty'];
        $price = $row['sale_price'];
        $price_1 = $row['price'];
        $id = $row['id'];
        $package_code = $row['pro_code'];
        $weight = $row['qty'];
        $img = $row['image_1'];
        
        $product_name = $row['product_name'];
        $total = $qty * $price;
        $sum = $total+$sum; 
        
             $order = "INSERT INTO `cart_one`(`id`, `product_id`, `pro_qty`, `user_id`, `status`, `order_date`, `delivery_status`, `product_name`, `qty`, `sale_price`, `image_1`) VALUES ('$id', '$id', '$qty', '$userID', '1', '$time_add', 'On Process', '$product_name', '$weight', '$price', '$img')";
            
            $order_sql = mysqli_query($conn, $order);

    }}
        
    if($order_sql)
        {
           if(!empty($_SESSION["cart"])) {
					
            unset($_SESSION["cart"]);				
        ?>
         <script>window.location="../my-profile.php?status=Processing";</script>
        <?php 

                }
        else{
        ?>
        <script>window.location="../my-profile.php?status=Processing";</script>
        <?php 



        }


        }
        
?>
