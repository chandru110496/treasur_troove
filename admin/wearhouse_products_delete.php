<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `wearhouse_products` WHERE product_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('warehouse products Deleted successfully!');</script>";
    echo "<script>window.location.href ='wearhouse_products.php?type=hot'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>