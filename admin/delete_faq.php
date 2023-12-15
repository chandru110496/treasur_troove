<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `faq` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Datas Deleted successfully!');</script>";
    echo "<script>window.location.href ='faq.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}
?>