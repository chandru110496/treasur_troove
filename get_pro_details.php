<?php include("include/database.php");


$pro_id=$_POST['proId'];
if($_POST['model']=="buy"){
    // $sql="SELECT * FROM `product_details` LEFT JOIN star_rating ON star_rating.product_id = product_details.product_id  WHERE product_details.product_id='$pro_id'";
    // echo "SELECT * FROM `product_details` JOIN star_rating ON star_rating.product_id = product_details.product_id  WHERE product_details.product_id='$pro_id'";
    $sql="SELECT `product_details`.*,AVG(`star_rating`.`rating`) AS `rates`,COUNT(`star_rating`.`user_id`) AS `total_rating`  FROM `product_details` LEFT JOIN star_rating ON star_rating.product_id = product_details.product_id  WHERE product_details.product_id='$pro_id'";
    $get_excr = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($get_excr);
    
    echo json_encode($row);
   
}



// -- JOIN `category` ON `category`.`category_id` = `product_details`.`category_id`

?>

