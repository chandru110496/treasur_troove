<?php

include("include/conn.php"); 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the vendor ID from the URL parameter
    $product_id = $_GET['id'];
    $email=$_GET['email'];
    $product_name=$_GET['product_name'];
   echo $sql = "UPDATE `product_details` SET status = 'rejected' WHERE product_id = $product_id";
    if ($conn->query($sql) === TRUE) {
        // Send notification email to the vendor
        // Implement your email sending code here (using PHP's mail function or a library like PHPMailer)
        $vendor_email = $email;
        $subject = "Product Reject Status";
        $message = "Dear Vendor,\n\nYour product '{$product_name}' has been Rejected. With Regards,Treasure Trove";
        mail($vendor_email, $subject, $message);
        // Redirect back to the admin panel after approval
        header("Location:hot_buy.php?type=hot");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
            }
        $conn->close();
        }
?>
