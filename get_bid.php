<?php include("include/database.php");

$pro_id=$_POST['bidId'];

if($_POST['model']=="bid"){
    $sql="SELECT * FROM `bid_product_details` ";
    $exc=$db->query($sql);

    $row=$exc->fetch_assoc();

    echo json_encode($row);

    
}elseif($_POST['model']=="bit"){
echo "bit";
}




?>