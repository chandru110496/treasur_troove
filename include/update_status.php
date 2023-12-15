<?php
// Your database connection code here
include("include/database.php");
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Update the status column in the database
    $query = "UPDATE war_title SET status = '$status' WHERE id = '$id'";
    $result = $db->query($query);

    if ($result) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
