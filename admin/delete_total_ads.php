<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    

    $sql = "DELETE FROM `all_ads` WHERE ad_id =$id";
    $result=mysqli_query($conn,$sql);
   if($result){
     echo "<script>alert('ads are Deleted successfully!');</script>";
     echo "<script>window.location.href ='total_ads.php'</script>";
    echo($id);
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>