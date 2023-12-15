<?php
include("include/conn.php");
// $sqls = "SELECT  `email` FROM `vendor_details` WHERE `vendor_id` = '$vendor_id'";
// $row=$conn->query($sqls);  
// $email= $row['email']; 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the vendor ID from the URL parameter
    $vendor_id = $_GET['id'];
  

    // Update the status of the vendor to 'rejected' in the database
  

    $sql = "UPDATE vendor_details SET status = 'rejected' WHERE vendor_id = $vendor_id";

    if ($conn->query($sql) === TRUE) {
        // Send notification email to the vendor
        // Implement your email sending code here (using PHP's mail function or a library like PHPMailer)
        $vendor_email = "Vendor Approval Notification";
        $subject = "Vendor Approval Notification";
        $message = "Dear Vendor, Your registration has been rejected.";
        mail($vendor_email, $subject, $message);

        // Redirect back to the admin panel after rejection
        header("Location: Vendors.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

?>
