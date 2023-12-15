<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `invest_details` WHERE invest_id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Data Deleted successfully!');</script>";
    echo "<script>window.location.href ='slider.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>