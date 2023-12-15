<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `inner_sub_category` WHERE in_sub_category_id =$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='Inner_category.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>