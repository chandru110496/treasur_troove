<?php     
include("include/database.php");
$user_id = $_SESSION['user_details']['user_id'];
$amount=$_POST['razorpay_amount'];
$user_id=$_POST['user_id'];



$sqlf="INSERT INTO `donation` ( `user_id`, `amount`) VALUES ( '$user_id', '$amount');";
$resultf=$db->query($sqlf);
                             //    echo $sql;
  if($resultf==TRUE){

    header("location:savelife.php");

  }                  

?>
