<?php 
include("include/database.php");
session_start();
ini_set('display_errors', 0);

if (isset($_SESSION['user_details'])) {
    $user_id = $_SESSION['user_details']['user_id'];
    }
if (isset($_POST['submit_rating'])){
  
    $product_id = $_POST["product_id"];
    $rating = $_POST["rating"];

    
    
    // Insert the rating into the database
    $sql = "INSERT INTO `star_rating` (`user_id`, `product_id`, `rating`)
            VALUES ('$user_id','$product_id','$rating')"; 
    
    if ($db->query($sql) === TRUE) {
       
        header("location:buy.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error; // Use $db->error here
    }
}

// Close the connection
$db->close();
?>
