<?php
include("include/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the vendor ID from the URL parameter
    $vendor_id = $_GET['id'];
    // Update the status of the vendor to 'rejected' in the database

    $sql = "UPDATE `vendor_details` SET `v_status` = 'rejected' WHERE `vendor_id` = '$vendor_id'";

    if ($conn->query($sql) === TRUE) {
        $sqls = "SELECT `email` FROM `vendor_details` WHERE `vendor_id` = '$vendor_id'";
        $result = $conn->query($sqls);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $vendor_email = $row['email'];

            // Send notification email to the vendor
            // Implement your email sending code here (using PHP's mail function or a library like PHPMailer)
            $subject = "Vendor Approval Notification";
            $message = "Dear Vendor, Your registration has been rejected.";
            mail($vendor_email, $subject, $message);

            // Redirect back to the admin panel after rejection
            header("Location: vendors.php");
            exit();
        } else {
            echo "No vendor found with the provided ID.";
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
