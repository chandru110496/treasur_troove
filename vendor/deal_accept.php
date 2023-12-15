<?php
include('include/conn.php');
   extract($_POST);                                            
   $Sql="UPDATE `deal_product_details` SET `status` ='$status' WHERE `deal_product_details`.`deal_id`='$deal_id'";
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