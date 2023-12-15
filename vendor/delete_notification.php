<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `save_slider` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('notifications Deleted successfully!');</script>";
    echo "<script>window.location.href ='notifications.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>