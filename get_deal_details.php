<?php include("include/database.php");

$pro_id=$_POST['proId'];

if($_POST['model']=="buy"){
    $sql="SELECT * FROM `deal_product_details` WHERE `deal_id`='$pro_id'";
    $exc=$db->query($sql);

    $row=$exc->fetch_assoc();

    echo json_encode($row);

    
}


?>

