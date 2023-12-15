<?php include('./include/conn.php');

if(isset($_GET['delid'])){
    $id=$_GET['delid'];


    $sql = "DELETE FROM `jobs` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='jobs.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>