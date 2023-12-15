<?php
// Include your database connection
include("include/database.php");
// Get the product ID from the URL
// $product_id = $_GET['product_id'];
// Query to get average rating and total count
        $sql_rst = "SELECT AVG(rating) AS avg_rating, COUNT(rating) AS total_ratings
                    FROM star_rating
                    WHERE product_id = 138";
        $get_exc = mysqli_query($db, $sql_rst);
        $row = mysqli_fetch_assoc($get_exc);
        $avg_rating = $row['avg_rating'];
        $total_ratings = $row['total_ratings'];
        
        $stars = '';
        for ($i = 1; $i <= 5; $i++) {
    if ($i <= round($avg_rating)) {
        $stars .= '<span class="star full-star">★</span>'; // Full star
    } else {
        $stars .= '<span class="star empty-star">☆</span>'; // Empty star
    }
}
?>

<style>
    .star {
        font-size: 20px; /* Adjust the size as needed */
        color: #FFD700; /* Star color */
        margin-right: 2px; /* Space between stars */
    }
    
    .empty-star {
        color: #ccc; /* Empty star color */
    }
</style>

<div class="rating-display">
    <p>Average Rating: <?php echo $stars; ?> (<?php echo round($avg_rating, 2); ?>)</p>
    <p>Total Ratings: <?php echo $total_ratings; ?></p>
</div>
