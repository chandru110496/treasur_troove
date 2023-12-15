<?php

include("include/conn.php"); 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the vendor ID from the URL parameter
    $vendor_id = $_GET['id'];

    $sql = "UPDATE vendor_details SET status = 'approved' WHERE vendor_id = $vendor_id";

    if ($conn->query($sql) === TRUE) {
        // Send notification email to the vendor
        // Implement your email sending code here (using PHP's mail function or a library like PHPMailer)
        $vendor_email = "sridhar623016@gmail.com";
        $subject = "Vendor Approval Notification";
        $message = "Dear Vendor, Your registration has been approved.";
        mail($vendor_email, $subject, $message);

        // Redirect back to the admin panel after approval
        header("Location: Vendors.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
?>
