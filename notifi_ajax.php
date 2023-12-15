<?php
include("include/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['messageId'])) {

    $messageId = $_POST['messageId'];


    $updateSql = "UPDATE war_title SET is_read=1 WHERE id = $messageId ";

    $db->query($updateSql);


    echo json_encode(['status' => 'success', 'html' => $html]);
}
?>






