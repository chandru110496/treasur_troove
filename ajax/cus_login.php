<?php  
session_start();

include("../include/database.php");
if(isset($_POST['submit'])){
 $email=$_POST['email'];
 $page=$_POST['page'];
 $password=$_POST['password'];
 $sql = "SELECT * FROM `register` WHERE  email = '$email' AND  password = '$password'";
 $result = $db->query($sql);
//  echo '<pre>'.print_r($result).'</pre>';
 $user_details = mysqli_fetch_assoc($result);
 $_SESSION['user_details'] = $user_details;
//  echo '<pre>'.print_r($_SESSION).'</pre>';
 if($result->num_rows==1){  
     
     if($page == ''){
         header("Location: ../index.php?reg_status=3");
     } else{
         header("Location: ../shoping-cart.php?reg_status=3");
     }
   }
 else {
    header("Location: ../login.php?status=1&page=cart");
}
}