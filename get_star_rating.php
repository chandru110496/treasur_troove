<?php
include("include/database.php");

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $sql_rst = "SELECT AVG(rating) AS avg_rating, COUNT(rating) AS total_ratings
                FROM star_rating
                WHERE product_id = $product_id";
    
    // Execute the query and retrieve the data
    // ... your PHP code to execute the query ...
    
    echo json_encode($data); 
}
?>
