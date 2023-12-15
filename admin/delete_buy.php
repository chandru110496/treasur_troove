<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `product_details` WHERE product_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='hot_buy.php?type=hot'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>