<?php
include('include/database.php');
// print_r($_GET);
extract($_GET);
echo  $product_id;
echo  $user_id;
$sql="INSERT INTO `wishlist`( `product_id`, `user_id`) VALUES ('$product_id','$user_id')";
if($db->query($sql)){
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                                        echo '<script>
                                            Swal.fire({
                                                icon: "success",
                                                title: "Add to your wishlist",
                                                showConfirmButton: false,
                                                timer: 1500
                                            }).then(function() {
                                                
                                                window.location.href = "buy.php";
                                            });
                                        </script>';
// echo("added to wishlist");
}else{
       echo "ERROR: Could not able to execute $sql. " . $db->error;
   }
?>