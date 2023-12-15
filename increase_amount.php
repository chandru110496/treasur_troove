<?php include("include/database.php");

$bid_price=$_POST['proId'];

$_POST['model'];
    $sql="SELECT * FROM `bid_product_details` WHERE `bid_id`='$data-min_amo'";
    $Sql="UPDATE `bid_product_details` SET `status` ='$status' WHERE `user_details`.`user_id`='$user_id'";
    $exc=$db->query($sql);

    $row=$exc->fetch_assoc();

    echo json_encode($row);

    





?>

