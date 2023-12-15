<?php include('./include/conn.php');

if(isset($_GET['delete'])){
    $id=$_GET['delete'];

    $sql = "DELETE FROM `largecards` WHERE catalog_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='largecards.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>