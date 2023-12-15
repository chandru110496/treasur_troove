<?php
include('./include/database.php');
// AND `status`=1
session_start();

$provider_id = $_SESSION['s_provider']['user_id'];

$product_new_price = $_POST['amount'];
$deal_id = $_POST['deal_for_id'];
$upload_pro_id = $_POST['dealer_for_id'];

date_default_timezone_set('Asia/Kolkata');
$deal_date = date('Y-m-d H:i:s');

$sql = "UPDATE `deal_product_details` SET `deal_vendor_id`='$provider_id',`product_new_price`='$product_new_price',`deal_product`=1 WHERE `deal_id`='$deal_id'";

$stmt = $db->query($sql);

if ($stmt == TRUE) {
    $sqle = "INSERT INTO `user_dealing`(`deal_for_id`, `dealer_for_id`, `provider_id`, `deal_dt`, `dealing_price`) VALUES ('$deal_id','$upload_pro_id','$provider_id','$deal_date','$product_new_price')";
    $res = $db->query($sqle);
    if ($res == TRUE) {
        echo "<script>alert('Place The Deal successfully');</script>";
        header('location:make-deal.php');
        exit; // Add exit here to prevent further execution of the code.
    }
} else {
    echo "Error Place the deal";
}
?>
