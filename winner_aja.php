<?php
include("include/database.php");
 $bid_id = $_GET['bid_id'];
 $sql="SELECT * FROM `bid_product_details` WHERE `bid_id`='$bid_id'";
 $result=$db->query($sql);
 if (isset($_SESSION['user_details'])) {
    $user_name="user";
} 
    else if(isset($_SESSION['vendor_details'])){
    $user_name ="vendor";
}
    else if(isset($_SESSION['s_provider'])){
    $user_name ="Service Provider";
}


if($row=mysqli_fetch_assoc($result)){
    // print_r($result);
    $bid_id = $row['bid_id'];      
       
    $product_name = $row['product_name'];      
    $bid_id = $row['bid_id'];      
    $bid_price=$row['product_new_price'];
    $user=$row['user_id'];
}

//   $sqlf="INSERT INTO `my_cart`(`user_id`,`product_id`,`bidlist_amount`,`bid_id`) VALUES (' $user','$user_name','$bid_price','$bid_id')";

$sqlf="INSERT INTO `my_cart`( `user_id`, `product_id`, `product_name`, `quantity`,`amount`) VALUES (' $user','$bid_id','$product_name',1,'$bid_price')";
$resultf=$db->query($sqlf);
echo json_encode($resultf);

// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
//     include("../include/config.php");
// $sqlAssign = "SELECT * FROM `bid_product_details` where `status` = '1'";											
// $resultAssign = mysqli_query($db, $sqlAssign);											
// $count_pro = mysqli_num_rows($resultAssign);      
// $data[]='Showing Total Products '.$count_pro;

?>
