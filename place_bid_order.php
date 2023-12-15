
<?php     
include("include/database.php");



$sqlf="UPDATE `bid_product_details` SET `is_paid`=1";
$resultf=$db->query($sqlf);
                             //    echo $sql;
  if($resultf==TRUE){

    header("location:winning_bid.php");

  }                  

?>











