<?php include('./include/conn.php');

if(isset($_GET['delid'])){
    $id=$_GET['delid'];


    $sql = "DELETE FROM `job_reports` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Removed User successfully!');</script>";
    echo "<script>window.location.href ='Job_report.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>