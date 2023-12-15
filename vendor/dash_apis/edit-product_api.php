<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/product_obj.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);

date_default_timezone_set("Asia/Kolkata");
//$user->dd = date('F, d Y');


$user->product_id = $_POST['product_id'];
$user->category_id = $_POST['category_id'];
$user->product_name = $_POST['product_name'];
$user->category_name = $_POST['category_name'];
$user->subcategory_name = $_POST['subcategory_name'];
// echo '<pre>'.print_r($user->subcategory_name).'</pre>';exit;
$user->sku_no = $_POST['sku_no'];
$user->price = $_POST['price'];
$user->old_price = $_POST['old_price'];
$user->brand_name = $_POST['brand_name'];
$user->specification = $_POST['specification'];
$user->description = $_POST['description'];
$user->image_name1 = $_POST['image_name1'];
$user->image_name2 = $_POST['image_name2'];
$user->image_name3 = $_POST['image_name3'];
$user->image_name4 = $_POST['image_name4'];
$user->image_name5 = $_POST['image_name5'];

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
        $moveResult = move_uploaded_file($fileTmpLoc, "../../upload/product/$fileName");
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
        $moveResult2 = move_uploaded_file($fileTmpLoc2, "../../upload/product/$fileName2");
        if($moveResult2!= true)
        {
             $fileName2 = $file2;
        } 
$user->filename2 = $fileName2;
    }  else{
        $user->filename2 = $user->image_name2;
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
        $moveResult3 = move_uploaded_file($fileTmpLoc3, "../../upload/product/$fileName3");
        if($moveResult3!= true)
        {
             $fileName3 = $file3;
        } 
$user->filename3 = $fileName3;
    }else{
        $user->filename3 = $user->image_name3;
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
        $moveResult4 = move_uploaded_file($fileTmpLoc4, "../../upload/product/$fileName4");
        if($moveResult4!= true)
        {
             $fileName4 = $file4;
        } 
$user->filename4 = $fileName4;
    }else{
        $user->filename4 = $user->image_name4;
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
        $moveResult5 = move_uploaded_file($fileTmpLoc5, "../../upload/product/$fileName5");
        if($moveResult5!= true)
        {
             $fileName5 = $file5;
        } 
$user->filename5 = $fileName5;
}else{  
    $user->filename5 = $user->image_name5;
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