<?php
 include("include/database.php");

   extract($_POST);
   $Sql="UPDATE `billing_details` SET `status` ='$status' WHERE `billing_details`.`address_id`='$address_id'";
//    UPDATE `user_details` SET `status` = '1' WHERE `user_details`.`user_id` = 11; 
//    $res=myaqli_query($db,$Sql);
   $res=$conn->query($Sql);

   if($res==TRUE){

echo 1;
   }
else{
    echo 0;
}

?>