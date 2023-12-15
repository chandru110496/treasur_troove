<?php
include("include/database.php");
$cu_Id=$_POST['currency_id'];
$user_id=$_POST['user_id'];
// Prepare the SQL statement with placeholders to prevent SQL injection
 $sql = "UPDATE `user_details` SET `cur_type`='$cu_Id' WHERE `user_id` ='$user_id'";
$stmt = $db->query($sql);
echo json_encode($stmt);
if($stmt==TRUE){
    echo " cureency updated";
}
else{
    echo "Error updating bid";
}
?>
