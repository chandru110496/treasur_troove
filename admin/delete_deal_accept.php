<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
   
    $sql = "UPDATE user_dealing SET `accept_sts`= 1 WHERE dealing_id=$id";

    $result=mysqli_query($conn,$sql);
    // print_r($result);
    
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='deal_report.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>