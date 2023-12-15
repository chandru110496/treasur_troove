<?php include("include/database.php");

$pro_id=$_POST['proId'];

if($_POST['model']=="ware"){
    $sql="SELECT * FROM `wearhouse_products` WHERE `deal_id`='$pro_id'";
    $exc=$db->query($sql);

    $row=$exc->fetch_assoc();

    echo json_encode($row);

    
}




?>

