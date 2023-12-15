<?php include('include/database.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `war_title` WHERE id=$id";
    $result=$db->query($sql);
   if($result){
    echo "<script>alert('Activity Deleted successfully!');</script>";
    echo "<script>window.location.href ='buy.php'</script>";
       
    }
    else{
    echo (mysqli_error($db));
    }
}


?>