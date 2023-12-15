<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `save_activities` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Activity Deleted successfully!');</script>";
    echo "<script>window.location.href ='save_activities.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>