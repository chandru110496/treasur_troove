<?php
include("include/database.php");
session_start();
$bidId = $_POST['bid'];
$newBid = $_POST['bid_amount'];
$userr = $_POST['user_id_no'];

$user_type;
if (isset($_SESSION['user_details'])) {
    $user_type = "user_id";
} else if (isset($_SESSION['vendor_details'])) {
    $user_type = "vendor_id";
}
$user_type = (isset($_SESSION['user_details'])) ? 'user_id' : 'vendor_id';
$user_table = (isset($_SESSION['user_details'])) ? 'user_details' : 'vendor_details';
$sql = "UPDATE `bid_product_details` SET `$user_type` = '$userr',product_new_price = '$newBid' WHERE `bid_product_details`.`bid_id` = '$bidId'";
$stmt = $db->query($sql);
// Execute the SQL statement


// fetch currency symbol
$cur_sys_query = "SELECT symbol from currency c ,$user_table u  WHERE u.$user_type='$userr' AND c.name=u.cur_type ";
$cur_smt = $db->query($cur_sys_query);
$cur_result = $cur_smt->fetch_assoc();
$currency_symbol = $cur_result['symbol'];

if ($stmt == 1) {

    $get_qry = "SELECT * FROM `bid_product_details` WHERE `bid_id`='$bidId'";
    $exc = $db->query($get_qry);
    $result = $exc->fetch_assoc();
    // echo json_encode($result);
    $price = $result['product_new_price'];


    //  to update or insert the user / vendor details to the bid_userlist table  

    $sqlf = "INSERT INTO `bid_userlist`(`bidlist_userid`,`bidlist_amount`,`bid_id`) VALUES ('$userr','$newBid','$bidId')";
    $result = $db->query($sqlf);
    $resultf = $exc->fetch_assoc();

    $red = $db->query($sqlf);
    $result = [$currency_symbol, $price];
    if ($red == TRUE) {
        // echo "datas inserted  are successfullly";
        echo json_encode($result);
        exit();
    } else {
        echo "not inserted the datas";
        exit();
    }
    //  to update or insert the user / vendor details to the bid_userlist table  
} else {
    echo "Error updating bid";
    exit();
}
?>



// if (isset($_SESSION['user_details'])) {

// $sqlf = "INSERT INTO `bid_userlist`(`bidlist_userid`,`bidlist_amount`,`bid_id`) VALUES ('$userr','$newBid','$bidId')";
// $result = $db->query($sqlf);
// $resultf = $exc->fetch_assoc();

// $red = $db->query($sqlf);

// if ($red == TRUE) {
// // echo "datas inserted are successfullly";
// return $price;
// } else {
// echo "not inserted the datas";
// }
// } else if (isset($_SESSION['vendor_details'])) {
// $sqlf = "INSERT INTO `bid_userlist`(`bidlist_userid`,`bidlist_amount`,`bid_id`) VALUES ('$userr','$newBid','$bidId')";
// $result = $db->query($sqlf);
// $resultf = $exc->fetch_assoc();

// $red = $db->query($sqlf);

// if ($red == TRUE) {
// // echo "datas inserted are successfullly";
// return $price;
// } else {
// echo "not inserted the datas";
// }
// }