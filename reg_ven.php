<?php

include("include/database.php");
session_start(); 
    if(isset($_POST['register'])){
        // Retrieve form data
        $image = $_FILES['vendor_image']['name'];
        $name = $_POST['fname'];
        $phone = $_POST['mobile'];
        $country_code = $_POST['country_code'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['cpassword'];
       
        
       
        $address = $_POST['address'];
        $pan_no = $_POST['pan_no'];
        $pan_card_img = $_FILES['pan_card_image']['name'];
        $aadhar_no = $_POST['aadhar_no'];
        $aadhar_front_img = $_FILES['aadhar_front_image']['name'];
        $aadhar_back_img = $_FILES['aadhar_back_image']['name'];
        $gst_no = $_POST['gst_no'];
        $gst_certificate_img = $_FILES['gst_certificate']['name'];
        $zipcode = $_POST['zipcode'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        // check the file extension 
        $imageExtension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $panCardExtension = strtolower(pathinfo($pan_card_img, PATHINFO_EXTENSION));
        $aadharFrontExtension = strtolower(pathinfo($aadhar_front_img, PATHINFO_EXTENSION));
        $aadharBackExtension = strtolower(pathinfo($aadhar_back_img, PATHINFO_EXTENSION));
        $gstCertificateExtension = strtolower(pathinfo($gst_certificate_img, PATHINFO_EXTENSION));
        // if (
        //     !in_array($imageExtension, $allowedExtensions) ||
        //     !in_array($panCardExtension, $allowedExtensions) ||
        //     !in_array($aadharFrontExtension, $allowedExtensions) ||
        //     !in_array($aadharBackExtension, $allowedExtensions) ||
        //     !in_array($gstCertificateExtension, $allowedExtensions)
        // ){
        //     echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        // }

        // Move uploaded files to a permanent location
        $targetDir = "./upload/vendors/";
        $targetImage = $targetDir . basename($image);
        $targetPanCardImg = $targetDir . basename($pan_card_img);
        $targetAadharFrontImg = $targetDir . basename($aadhar_front_img);
        $targetAadharBackImg = $targetDir . basename($aadhar_back_img);
        $targetGstCertificateImg = $targetDir . basename($gst_certificate_img);
        move_uploaded_file($_FILES['vendor_image']['tmp_name'], $targetImage);
        move_uploaded_file($_FILES['pan_card_image']['tmp_name'], $targetPanCardImg);
        move_uploaded_file($_FILES['aadhar_front_image']['tmp_name'], $targetAadharFrontImg);
        move_uploaded_file($_FILES['aadhar_back_image']['tmp_name'], $targetAadharBackImg);
        move_uploaded_file($_FILES['gst_certificate']['tmp_name'], $targetGstCertificateImg);




        // Check if email already exists
        $existingEmailQuery = "SELECT COUNT(*) FROM `vendor_details` WHERE `email`='$email'";
        $existingEmailResult = $db->query($existingEmailQuery);
        $emailCount = $existingEmailResult->fetch_row()[0];

        if ($emailCount > 0) {
            echo "<script>alert('Email already exists. Please enter a different email.');</script>";
        } else {

        // Perform database insertion for vendor_details table
        // $sql = "INSERT INTO `vendor_details` (`image`, `name`, `phone`, `email`,`address`, `pan_no`, `pan_card_img`, `aadhar_no`, `aadhar_front_img`, `aadhar_back_img`, `gst_no`, `gst_certificate_img`, `password`, `confirm_password`,`country`,`state`,`city`,`pincode`,)
        // VALUES ('$image', '$name', '$phone','$email', '$address','$pan_no', '$pan_card_img', '$aadhar_no', '$aadhar_front_img', '$aadhar_back_img', '$gst_no', '$gst_certificate_img','$password', '$confirm_password','$country','$state','$city','$zipcode')";
    

       $sql="INSERT INTO `vendor_details` (`vendor_image`, `name`, `phone`, `email`, `country_code`,`address`, `pan_no`, `pan_card_img`, `aadhar_no`, `aadhar_front_img`, `aadhar_back_img`, `gst_no`, `gst_certificate_img`,`password`, `confirm_password`, `country`, `state`, `city`, `pincode`) VALUES ('$image', '$name', '$phone', '$email','$country_code', '$address', '$pan_no', '$pan_card_img', '$aadhar_no', '$aadhar_front_img', '$aadhar_back_img', '$gst_no', '$gst_certificate_img','$password', '$confirm_password', '$country', '$state', '$city', '$zipcode')";
       $result = $db->query($sql);
        if ($result == TRUE) {
            header("location:vendor_register.php");
            echo "Registration submitted. Please wait for approval.";
        } else {
            echo "ERROR: Could not execute $sql.". $db->error;
        }
        }
        }
?>
