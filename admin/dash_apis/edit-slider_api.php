<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/slider_obj.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);

date_default_timezone_set("Asia/Kolkata");
//$user->dd = date('F, d Y');


$user->id = $_POST['id'];
$user->slider_title = $_POST['slider_title'];
$user->slider_cont = $_POST['slider_cont'];
$user->image_name1 = $_POST['image_name1'];
$user->image_name2 = $_POST['image_name2'];

// -----------images-------------------

$fileName = $_FILES["image"]["name"]; 
if($fileName != '')	{ 								
$fileTmpLoc = $_FILES["image"]["tmp_name"]; 
$fileType = $_FILES["image"]["type"];
$fileSize = $_FILES["image"]["size"];
$fileErrorMsg = $_FILES["image"]["error"];
$kaboom = explode(".", $fileName); 
$fileExt = end($kaboom);
        if (!$fileTmpLoc) 
        {
            $file = 'no_img.jpg';
        }
        else if($fileSize > 524288000)
        {
            $file = "ERROR: Your file was larger than 5 Mb in size."; unlink($fileTmpLoc);
            echo '2';
            exit();
        }
        else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName) )
        {
            $file = "ERROR: Your file format is bad."; unlink($fileTmpLoc);
            echo '3';
            exit();

        }
        else if ($fileErrorMsg == 1)
        {
            $file = "ERROR: An error occured while processing the file. Try again.";
        }
        $moveResult = move_uploaded_file($fileTmpLoc, "../../upload/slider_banner/$fileName");
        if($moveResult!= true)
        {
             $fileName = $file;
        } 
$user->filename = $fileName;
    }else{
        
        $user->filename = $user->image_name1;
    }
$fileName2 = $_FILES["image2"]["name"]; 
if($fileName2 != '')	{									
$fileTmpLoc2 = $_FILES["image2"]["tmp_name"]; 
$fileType2 = $_FILES["image2"]["type"];
$fileSize2 = $_FILES["image2"]["size"];
$fileErrorMsg2 = $_FILES["image2"]["error"];
$kaboom2 = explode(".", $fileName2); 
$fileExt2 = end($kaboom2);
        if (!$fileTmpLoc2) 
        {
            $file2 = 'no_img.jpg';
        }
        else if($fileSize2 > 524288000)
        {
            $file2 = "ERROR: Your file was larger than 5 Mb in size."; unlink($fileTmpLoc2);
            echo '2';
            exit();
        }
        else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName2) )
        {
            $file2 = "ERROR: Your file format is bad."; unlink($fileTmpLoc2);
            echo '3';
            exit();

        }
        else if ($fileErrorMsg2 == 1)
        {
            $file2 = "ERROR: An error occured while processing the file. Try again.";
        }
        $moveResult2 = move_uploaded_file($fileTmpLoc2, "../../upload/slider_banner/$fileName2");
        if($moveResult2!= true)
        {
             $fileName2 = $file2;
        } 
$user->filename2 = $fileName2;
    }  else{
        $user->filename2 = $user->image_name2;
    }

// ----------------end images-------------------




    if($user->updateInfo()){
        echo '1';
        exit();
    } else{
        echo '0';
        exit();
    }



?>