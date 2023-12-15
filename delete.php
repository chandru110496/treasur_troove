<?php 
include ('include/database.php');
if (isset($_GET['del_inv'])) {
	$id = $_GET['del_inv'];

    $sql="DELETE FROM `order` WHERE `order`.`order_id`=$id";
    $exc=$db->query($sql);
 
if ($exc==TRUE) {
	// $_SESSION['message'] = "Address deleted!"; 
    echo "<script>alert('Deleted Successfully')
    window.location='paymenthistory.php';
    </script>";}
}

?>
