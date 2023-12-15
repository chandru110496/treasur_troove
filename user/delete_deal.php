<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `deal_product_details` WHERE deal_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='deal.php?type=hot'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>