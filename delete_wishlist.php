<?php include("include/database.php");

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `wishlist` WHERE wishlist_id =$id";
    $result=mysqli_query($db,$sql);
   if($result){
    echo "<script>alert('Remove From Wislist successfully!');</script>";
    echo "<script>window.location.href ='wishlist.php'</script>";
       
    }
    else{
    echo (mysqli_error($db));
    }
}


?>