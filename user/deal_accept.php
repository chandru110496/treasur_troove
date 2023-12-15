<?php
include('include/conn.php');
   extract($_POST);  
   // print_r($_POST); 


   $detail_qry="SELECT * FROM `user_dealing` WHERE `dealing_id`= '$dealing_id'";
   $exc=$conn->query($detail_qry);
   $result=$exc->fetch_assoc();
   $deal_id=$result['deal_for_id'];
   $dealer_for_id=$result['dealer_for_id'];
   $provider_id=$result['provider_id'];
   $dealing_price=$result['dealing_price'];
   // print_r($result);
  

   $upd_dealing_query="UPDATE `user_dealing` SET `win_status`=1 WHERE `dealing_id`= '$dealing_id'";
   $upd_dealing_exc=$conn->query($upd_dealing_query);
   if($upd_dealing_exc){
      $Sql="UPDATE `deal_product_details` SET `is_win`='$deal_id' WHERE `deal_id`='$deal_id' ";
      $res=$conn->query($Sql);
      if($res){
         echo "dealing successfully updated";
      }else{
         echo "error check in deal_product_details";
      }
      
   }else{
      echo "Not updated in user_dealing  table";
   }

   

 

   // $Sql="UPDATE `user_dealing` SET `deal_status` ='$status' WHERE `user_dealing`.`dealing_id`='$dealing_id'";
//    $res=$conn->query($Sql);

//    if($res==TRUE){

// echo 1;
//    }
// else{

//     echo 0;
// }

?>