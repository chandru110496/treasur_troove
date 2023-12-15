<?php
include('./include/header.php');
include('./include/conn.php');

$keyword = $_GET['keyword'];

$query = "SELECT keyword FROM suggestions WHERE keyword LIKE '%$keyword%' LIMIT 10";
$result = $conn->query($query);

$suggestions = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = array("keyword" => $row['keyword']);
    }
}

echo json_encode($suggestions);
?>
