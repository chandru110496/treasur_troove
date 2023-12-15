<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `advertise` WHERE ads_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('ads Deleted successfully!');</script>";
    echo "<script>window.location.href ='advertise.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>