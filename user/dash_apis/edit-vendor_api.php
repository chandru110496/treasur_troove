<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/vendor_obj.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);

date_default_timezone_set("Asia/Kolkata");
//$user->dd = date('F, d Y');


$user->vendor_id = $_POST['vendor_id'];
$user->vendor_name = $_POST['vendor_name'];
$user->phone = $_POST['phone'];
$user->email = $_POST['email'];
$user->city = $_POST['city'];
$user->states = $_POST['states'];
$user->pincode = $_POST['pincode'];
$user->address = $_POST['address'];
$user->pan_number = $_POST['pan_number'];
$user->aadhar_no = $_POST['aadhar_no'];
$user->gst = $_POST['gst'];

$user->image1 = $_POST['image1'];
$user->pan_photo1 = $_POST['pan_photo1'];
$user->aadharimage11 = $_POST['aadharimage11'];
$user->aadharimage21 = $_POST['aadharimage21'];
$user->gst_img1 = $_POST['gst_img1'];

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
        $moveResult = move_uploaded_file($fileTmpLoc, "../../upload/vendors/$fileName");
        if($moveResult!= true)
        {
             $fileName = $file;
        } 
$user->filename = $fileName;
    }else{
        
        $user->filename = $user->image1;
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
        $moveResult2 = move_uploaded_file($fileTmpLoc2, "../../upload/vendors/$fileName2");
        if($moveResult2!= true)
        {
             $fileName2 = $file2;
        } 
$user->filename2 = $fileName2;
    }  else{
        $user->filename2 = $user->pan_photo1;
    }
$fileName3 = $_FILES["image3"]["name"]; 
if($fileName3 != '')	{									
$fileTmpLoc3 = $_FILES["image3"]["tmp_name"]; 
$fileType3 = $_FILES["image3"]["type"];
$fileSize3 = $_FILES["image3"]["size"];
$fileErrorMsg3 = $_FILES["image3"]["error"];
$kaboom3 = explode(".", $fileName3); 
$fileExt3 = end($kaboom3);
        if (!$fileTmpLoc3) 
        {
            $file3 = 'no_img.jpg';
        }
        else if($fileSize3 > 524288000)
        {
            $file3 = "ERROR: Your file was larger than 5 Mb in size."; unlink($fileTmpLoc3);
            echo '2';
            exit();
        }
        else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName3) )
        {
            $file3 = "ERROR: Your file format is bad."; unlink($fileTmpLoc3);
            echo '3';
            exit();

        }
        else if ($fileErrorMsg3 == 1)
        {
            $file3 = "ERROR: An error occured while processing the file. Try again.";
        }
        $moveResult3 = move_uploaded_file($fileTmpLoc3, "../../upload/vendors/$fileName3");
        if($moveResult3!= true)
        {
             $fileName3 = $file3;
        } 
$user->filename3 = $fileName3;
    }else{
        $user->filename3 = $user->aadharimage11;
    }
$fileName4 = $_FILES["image4"]["name"]; 	
if($fileName4 != '')	{								
$fileTmpLoc4 = $_FILES["image4"]["tmp_name"]; 
$fileType4 = $_FILES["image4"]["type"];
$fileSize4 = $_FILES["image4"]["size"];
$fileErrorMsg4 = $_FILES["image4"]["error"];
$kaboom4 = explode(".", $fileName4); 
$fileExt4 = end($kaboom4);
        if (!$fileTmpLoc4) 
        {
            $file4 = 'no_img.jpg';
        }
        else if($fileSize4 > 524288000)
        {
            $file4 = "ERROR: Your file was larger than 5 Mb in size."; unlink($fileTmpLoc4);
            echo '2';
            exit();
        }
        else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName4) )
        {
            $file4 = "ERROR: Your file format is bad."; unlink($fileTmpLoc4);
            echo '3';
            exit();

        }
        else if ($fileErrorMsg4 == 1)
        {
            $file4 = "ERROR: An error occured while processing the file. Try again.";
        }
        $moveResult4 = move_uploaded_file($fileTmpLoc4, "../../upload/vendors/$fileName4");
        if($moveResult4!= true)
        {
             $fileName4 = $file4;
        } 
$user->filename4 = $fileName4;
    }else{
        $user->filename4 = $user->aadharimage21;
    }
$fileName5 = $_FILES["image5"]["name"]; 
if($fileName5 != '')	{									
$fileTmpLoc5 = $_FILES["image5"]["tmp_name"]; 
$fileType5 = $_FILES["image5"]["type"];
$fileSize5 = $_FILES["image5"]["size"];
$fileErrorMsg5 = $_FILES["image5"]["error"];
$kaboom5 = explode(".", $fileName5); 
$fileExt5 = end($kaboom5);
        if (!$fileTmpLoc5) 
        {
            $file5 = 'no_img.jpg';
        }
        else if($fileSize5 > 524288000)
        {
            $file5 = "ERROR: Your file was larger than 5 Mb in size."; unlink($fileTmpLoc5);
            echo '2';
            exit();
        }
        else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName5) )
        {
            $file5 = "ERROR: Your file format is bad."; unlink($fileTmpLoc5);
            echo '3';
            exit();

        }
        else if ($fileErrorMsg5 == 1)
        {
            $file5 = "ERROR: An error occured while processing the file. Try again.";
        }
        $moveResult5 = move_uploaded_file($fileTmpLoc5, "../../upload/vendors/$fileName5");
        if($moveResult5!= true)
        {
             $fileName5 = $file5;
        } 
$user->filename5 = $fileName5;
}else{  
    $user->filename5 = $user->gst_img1;
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