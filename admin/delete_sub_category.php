<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `sub_category` WHERE sub_category_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('sub_Category Deleted successfully!');</script>";
    echo "<script>window.location.href ='sub_category.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>