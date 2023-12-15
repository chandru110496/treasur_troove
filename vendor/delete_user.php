<?php
include('include/conn.php');
$id=$_GET['deleteid'];

$sql="DELETE FROM `user_details` WHERE user_id=$id";
$res=mysqli_query($conn,$sql);
if($res){
    echo"<script>alert('Successfully Deleted');</script>";
}
?>