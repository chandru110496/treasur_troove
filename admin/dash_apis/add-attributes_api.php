<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/attributes.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);

date_default_timezone_set("Asia/Kolkata");
//$user->dd = date('F, d Y');

$user->attributes_name = $_POST['attributes_name'];

    if($user->createInfo()){
        echo '1';
        exit();
    } else{
        echo '0';
        exit();
    }
?>