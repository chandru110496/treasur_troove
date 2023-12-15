<?php
include('include/conn.php');

$ven_id = $_GET['vendor_id'];
$code = $_GET['status'];
if ($code == 1)
   $status = 'approved';
else
   $status = 'rejected';
$Sql = "UPDATE `vendor_details` SET `v_status` = '$status' WHERE `vendor_details`.`vendor_id`='$ven_id'";
//    $res=myaqli_query($db,$Sql);
$res = $conn->query($Sql);

header("Location:Vendors.php");

// if ($res == TRUE) {

//    echo 1;
// } else {

//    echo 0;
// }
