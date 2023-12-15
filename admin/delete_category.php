<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `category` WHERE category_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Category Deleted successfully!');</script>";
    echo "<script>window.location.href ='category.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>