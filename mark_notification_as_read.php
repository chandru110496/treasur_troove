<?php
include("include/database.php");

// Get the messageId from the AJAX request
if (isset($_POST['messageId'])) {
    $messageId = $_POST['messageId'];
    
    // Update the notification status to mark it as read in the database
    $sql = "UPDATE war_title SET is_read = 1 WHERE id = $id";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $messageId);
    
    if ($stmt->execute()) {
        // Success, return a response to the JavaScript function
        echo json_encode(["success" => true]);
    } else {
        // Error, return a response to the JavaScript function
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }
} else {
    // Invalid request, return a response to the JavaScript function
    echo json_encode(["success" => false, "error" => "Invalid request"]);
}

// Close the database connection
$db->close();
?>
