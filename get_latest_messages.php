<?php
// Connect to your database
include("include/database.php");
// ...

// Retrieve the latest messages
$query = "SELECT * FROM war_title ORDER BY timestamp DESC";
$result=$db->query($query);

$messages = array();
while ($row = mysqli_fetch_assoc($result)) {
    $messages[] = $row['description'];
}

// Return the latest messages as JSON
echo json_encode($messages);
?>







