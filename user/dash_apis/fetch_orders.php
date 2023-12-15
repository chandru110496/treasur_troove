<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// database connection will be here
// database connection will be here
session_start();
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/orders_obj.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// instantiate user object
$user = new User($db);
//$user->brand = $_GET['brand'];
$type = '';
if($_GET && $_GET['type']){
    $type = $_GET['type'];
}
    $stmt = $user->getData($type);
    $itemCount = $stmt->rowCount();

//    echo json_encode($itemCount);

    if($itemCount > 0){
        
        $employeeArr = array();
//        $employeeArr = array();
//        $employeeArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = $row;

            array_push($employeeArr, $e);
        }
        echo json_encode($employeeArr);
    }

    else{
        http_response_code(200);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>