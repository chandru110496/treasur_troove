<?php include('./include/conn.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `war_title` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo "<script>alert('Datas Deleted successfully!');</script>";
    echo "<script>window.location.href ='war_title.php'</script>";
       
    }
    else{
    echo (mysqli_error($conn));
    }
}


?>