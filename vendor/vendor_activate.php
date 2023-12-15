<?php
include('include/conn.php');

   extract($_POST);
   $Sql="UPDATE `vendor_details` SET `status` = '$status' WHERE `vendor_details`.`vendor_id`='$ven_id'";
//    $res=myaqli_query($db,$Sql);
   $res=$conn->query($Sql);

   if($res==TRUE){

echo 1;
   }
else{

    echo 0;
}

?>



