<?php
include("include/head.php");
$id = $_SESSION['user_details']['user_id'];
// print_r($id);
?>
<!doctype html>
<html lang="zxx">
<!-- Mirrored from templates.envytheme.com/eeza/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:04:54 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Links of CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/remixicon.css">
  <link rel="stylesheet" href="assets/css/odometer.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
  <link rel="stylesheet" href="assets/css/fancybox.min.css">
  <link rel="stylesheet" href="assets/css/selectize.min.css">
  <link rel="stylesheet" href="assets/css/metismenu.min.css">
  <link rel="stylesheet" href="assets/css/simplebar.min.css">
  <link rel="stylesheet" href="assets/css/dropzone.min.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link rel="stylesheet" href="assets/css/dark.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/slide.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Treasure Trove</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style>
    .elect-modal {
      padding: 50px;
    }

    /* search */
    .search-box {
      position: absolute;
      transform: translate(10%, 20%);
      background: #2f3640;
      border-radius: 40px;
      height: 44px;
      padding: 7px;
      margin-left: 100px;
      margin-top: -70px;
      box-shadow: 0px 0px 10px 0px rbg(0, 0, 0, 0.2);
    }

    .search-btn {
      border: none;
      background: crimson;
      border-radius: 50%;
      float: right;
      display: flex;
      width: 30px;
      height: 30px;
      justify-content: center;
      align-items: center;
      outline: none;
      transition: 0.6s;
      font-weight: bold;
      color: #FFFFFF;
      box-shadow: 0px 0px 10px 0px crimson;
    }

    .search-txt {
      background: none;
      border: none;
      outline: none;
      float: left;
      padding: 0px;
      font-size: 16px;
      transition: 0.6s;
      color: crimson;
      font-weight: bold;
      line-height: 30px;
      width: 0px;
    }

    .search-box:hover>.search-txt {
      width: 240px;
      padding: 0 6px;
    }

    .search-box:hover>.search-btn {
      background: crimson;
      color: #FFFFFF;
      box-shadow: 0px 5px 20px 0px crimson;
    }

    /* sidenav */
    .controls-area {
      border: 1px solid black;
      padding: 15px;
      background-color: #6697c9;
      margin-bottom: 20px;
    }

    .controls-list li a {
      font-family: 'Poppins', sans-serif;
    }

    .options-button {
      display: inline-block;
      height: 40px;
      width: 100px;
      text-align: center;
      line-height: 40px;
      border: 1px solid gainsboro;
      /* padding: 12px; */
      background-color: white;
      text-decoration: none;
      color: black;
    }

    .options-block {
      background-color: #f8f9fa;
      padding: 15px 30px;
      margin-bottom: 12px;
    }

    .options-title {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .options-list {
      padding: 0;
      list-style: none;
    }

    .options-list li {
      padding: 6px 0px;
    }

    .options-list li a {
      text-decoration: none;
      color: #898787;
    }


    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 700px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }





    .edit-user-upload {
      position: relative;
      max-width: 205px;
      margin: 50px auto;
    }

    .edit-user-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }

    .edit-user-upload .avatar-edit input {
      display: none;
    }

    .edit-user-upload .avatar-edit input+label {
      display: inline-block;
      width: 34px;
      height: 34px;
      margin-bottom: 0;
      border-radius: 100%;
      background: #FFFFFF;
      border: 1px solid transparent;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      font-weight: normal;
      transition: all 0.2s ease-in-out;
    }

    .edit-user-upload .avatar-edit input+label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }

    .edit-user-upload .avatar-edit input+label:after {
      content: "\f040";
      font-family: 'FontAwesome';
      color: #757575;
      position: absolute;
      top: 10px;
      left: 0;
      right: 0;
      text-align: center;
      margin: auto;
    }

    .edit-user-upload .edit-user-preview {
      width: 192px;
      height: 192px;
      position: relative;
      border-radius: 100%;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .edit-user-upload .edit-user-preview>div {
      width: 100%;
      height: 100%;
      border-radius: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }


    input[type="radio"] {
      appearance: none;
    }

    input[type="radio"]+label {
      cursor: pointer;
      position: relative;
      padding-left: 30px;
      line-height: 20px;
    }

    input[type="radio"]+label::before {
      content: "";
      display: inline-block;
      width: 20px;
      aspect-ratio: 1;
      border: 1px solid #686de0;
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      opacity: 1;
      transition: all 0.3s;
    }

    input[type="radio"]+label::after {
      content: "";
      display: inline-block;
      width: 10px;
      aspect-ratio: 1;
      border: 1px solid #686de0;
      background: #686de0;
      border-radius: 50%;
      position: absolute;
      left: 5px;
      top: 50%;
      transform: translateY(-50%);
      opacity: 0;
      transition: all 0.3s;
    }


    .goog-te-gadget .goog-te-combo {
      margin: 1px 0;
      width: 160px;
    }
  </style>
</head>

<body>
  <!-- Start Preloader Area -->
  <div class="preloader-area">
    <div class="spinner">
      <div class="inner">
        <div class="disc"></div>
        <div class="disc"></div>
        <div class="disc"></div>
      </div>
    </div>
  </div>
  <!-- End Preloader Area -->

  <?php
  $id = $_GET['edit'];
  $sql = "SELECT * FROM `user_details` WHERE user_id=$id";
  $res = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($res);
  $profile = $row['user_img'];
  $name = $row['user_name'];
  $email = $row['email_address'];
  $mobile = $row['mobile_number'];
  $pass = $row['password'];
  $cpass = $row['cpassword'];
  $country = $row['country'];
  $state = $row['state'];
  $district = $row['city'];
  // print_r($row);
  ?>


  <!-- Start Shop Area -->
  <form action="" method="POST" enctype='multipart/form-data'>
    <h2 style="text-align: center;">
      <?php if (isset($_SESSION['user_details'])) {
        echo $_SESSION['user_details']['user_name'];
      } else {
        echo 'My Profile';
      }
      ?>
    </h2>

    <div class="edit-user-upload">
      <div class="edit-user-preview">
        <div class="form-group col-lg-2 col-md-2">
          <img src='upload/profile/<?= $profile ?>' alt="" style="width:180px;height:180px;object-fit:cover;border-radius:50%">
          <br>
          <input type="file" name="image" id="uploadfile2" style="width: 250px;" class="form-control">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-25">
          <label for="fname">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" value="<?= $name ?>" name="fname" placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">E-mail</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="your email">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Mobile no</label>
        </div>
        <div class="col-75">
          <input type="text" id="mobile" value="<?= $mobile ?>" name="mobile" placeholder="Your mobile number..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Country</label>
        </div>
        <div class="col-75">
          <input type="text" value="<?= $country ?>" id="lname" name="country" placeholder="Enter your country..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">State</label>
        </div>
        <div class="col-75">
          <input type="text" value="<?= $state ?>" id="lname" name="state" placeholder="Enter your state..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">District</label>
        </div>
        <div class="col-75">
          <input type="text" value="<?= $district ?>" id="lname" name="district" placeholder="Enter your district..">
        </div>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-success" type="submit" name="update" value="Submit">Submit</button>
      </div>
    </div>
  </form>

  <?php
  if (isset($_POST['update'])) {
    $firstname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $id = $_SESSION['user_details']['user_id'];
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $fileName = $_FILES["image"]["name"];
    $fileTmpLoc = $_FILES["image"]["tmp_name"];
    $fileType = $_FILES["image"]["type"];
    $fileSize = $_FILES["image"]["size"];
    $fileErrorMsg = $_FILES["image"]["error"];
    $kaboom = explode(".", $fileName);
    $fileExt = end($kaboom);
    if (!$fileTmpLoc) {
      $file = 'no_img.jpg';
    } else if ($fileSize > 524288000) {
      $file = "ERROR: Your file was larger than 5 Mb in size.";
      unlink($fileTmpLoc);
      echo '2';
      exit();
    } else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName)) {
      $file = "ERROR: Your file format is bad.";
      unlink($fileTmpLoc);
      echo '3';
      exit();
    } else if ($fileErrorMsg == 1) {
      $file = "ERROR: An error occured while processing the file. Try again.";
    }
    $moveResult = move_uploaded_file($fileTmpLoc, "upload/profile/$fileName");
    if ($moveResult != true) {
      $fileName = $file;
    }


    if (!$fileTmpLoc)
      // if profile is not set new
      $sql = "UPDATE `user_details` SET `user_name`='$firstname', `email_address`='$email', `mobile_number`='$mobile', `country`='$country', `state`='$state', `city`='$district' WHERE `user_id`='$id'";
    else
      // if profile is set new
      $sql = "UPDATE `user_details` SET `user_name`='$firstname', `email_address`='$email', `mobile_number`='$mobile', `country`='$country', `state`='$state',`user_img`='$fileName', `city`='$district' WHERE `user_id`='$id'";

    $result = $db->query($sql);
    if ($result == TRUE) {
      echo "<script>alert('Successfully Updated');</script>";
      echo "<script>window.location.href = 'profile.php';</script>";
    } else {
      echo "ERROR: Could not execute $sql. " . $db->error;
    }
  }
  ?>
  <style>
    .elect-modal {
      padding: 50px;
    }

    /* search */
    .search-box {
      position: absolute;
      transform: translate(10%, 20%);
      background: #2f3640;
      border-radius: 40px;
      height: 44px;
      padding: 7px;
      margin-left: 100px;
      margin-top: -70px;
      box-shadow: 0px 0px 10px 0px rbg(0, 0, 0, 0.2);
    }

    .search-btn {
      border: none;
      background: crimson;
      border-radius: 50%;
      float: right;
      display: flex;
      width: 30px;
      height: 30px;
      justify-content: center;
      align-items: center;
      outline: none;
      transition: 0.6s;
      font-weight: bold;
      color: #FFFFFF;
      box-shadow: 0px 0px 10px 0px crimson;
    }

    .search-txt {
      background: none;
      border: none;
      outline: none;
      float: left;
      padding: 0px;
      font-size: 16px;
      transition: 0.6s;
      color: crimson;
      font-weight: bold;
      line-height: 30px;
      width: 0px;
    }

    .search-box:hover>.search-txt {
      width: 240px;
      padding: 0 6px;
    }

    .search-box:hover>.search-btn {
      background: crimson;
      color: #FFFFFF;
      box-shadow: 0px 5px 20px 0px crimson;
    }

    /* sidenav */

    .controls-area {
      border: 1px solid black;
      padding: 15px;
      background-color: #6697c9;
      margin-bottom: 20px;
    }

    .controls-list li a {
      font-family: 'Poppins', sans-serif;
    }

    .options-button {
      display: inline-block;
      height: 40px;
      width: 100px;
      text-align: center;
      line-height: 40px;
      border: 1px solid gainsboro;
      /* padding: 12px; */
      background-color: white;
      text-decoration: none;
      color: black;
    }

    .options-block {
      background-color: #f8f9fa;
      padding: 15px 30px;
      margin-bottom: 12px;
    }

    .options-title {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .options-list {
      padding: 0;
      list-style: none;
    }

    .options-list li {
      padding: 6px 0px;
    }

    .options-list li a {
      text-decoration: none;
      color: #898787;
    }


    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 700px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }





    .edit-user-upload {
      position: relative;
      max-width: 205px;
      margin: 50px auto;
    }

    .edit-user-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }

    .edit-user-upload .avatar-edit input {
      display: none;
    }

    .edit-user-upload .avatar-edit input+label {
      display: inline-block;
      width: 34px;
      height: 34px;
      margin-bottom: 0;
      border-radius: 100%;
      background: #FFFFFF;
      border: 1px solid transparent;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      font-weight: normal;
      transition: all 0.2s ease-in-out;
    }

    .edit-user-upload .avatar-edit input+label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }

    .edit-user-upload .avatar-edit input+label:after {
      content: "\f040";
      font-family: 'FontAwesome';
      color: #757575;
      position: absolute;
      top: 10px;
      left: 0;
      right: 0;
      text-align: center;
      margin: auto;
    }

    .edit-user-upload .edit-user-preview {
      width: 192px;
      height: 192px;
      position: relative;
      border-radius: 100%;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .edit-user-upload .edit-user-preview>div {
      width: 100%;
      height: 100%;
      border-radius: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    input[type="radio"] {
      appearance: none;
    }

    input[type="radio"]+label {
      cursor: pointer;
      position: relative;
      padding-left: 30px;
      line-height: 20px;
    }

    input[type="radio"]+label::before {
      content: "";
      display: inline-block;
      width: 20px;
      aspect-ratio: 1;
      border: 1px solid #686de0;
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      opacity: 1;
      transition: all 0.3s;
    }

    input[type="radio"]+label::after {
      content: "";
      display: inline-block;
      width: 10px;
      aspect-ratio: 1;
      border: 1px solid #686de0;
      background: #686de0;
      border-radius: 50%;
      position: absolute;
      left: 5px;
      top: 50%;
      transform: translateY(-50%);
      opacity: 0;
      transition: all 0.3s;
    }

    input[type="radio"]:checked+label::after {
      opacity: 1;
    }
  </style>
  </head>

  <body>

    <!-- Start Preloader Area -->
    <!-- <div class="preloader-area">
    <div class="spinner">
        <div class="inner">
            <div class="disc"></div>
            <div class="disc"></div>
            <div class="disc"></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div> -->
    <!-- End Preloader Area -->


    <!-- End Navbar Area -->






    <!-- Start Go Top Area -->
    <div class="go-top">
      <i class="ri-arrow-up-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/fancybox.min.js"></script>
    <script src="assets/js/selectize.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/sticky-sidebar.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/slide.js"></script>
    <script src="assets/js/main.js"></script>

  </body>

  <!-- Mirrored from templates.envytheme.com/eeza/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:05:36 GMT -->

</html>










<!-- extra styles to be add in edit your Profile -->




<style>
  .search-box {
    position: relative;
    background: #fff;
    border-radius: 40px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  .search-btn {
    background: crimson;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: bold;
  }

  .search-txt {
    background: none;
    border: none;
    font-size: 16px;
    color: crimson;
    font-weight: bold;
  }

  .search-box:hover>.search-txt {
    width: 240px;
    padding: 0 6px;
  }

  .search-box:hover>.search-btn {
    background: crimson;
    box-shadow: 0px 5px 20px 0px crimson;
  }
</style>
<style>
  .edit-user-upload {
    text-align: center;
  }

  .edit-user-upload .avatar-edit input+label {
    background: #f1f1f1;
    border-color: #d6d6d6;
    color: #333;
  }

  .edit-user-upload .edit-user-preview {
    margin: 20px auto;
  }
</style>
<style>
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  input[type="text"],
  input[type="email"],
  input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  label {
    font-weight: bold;
  }

  .btn-success {
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    font-weight: bold;
  }

  .btn-success:hover {
    background-color: #1e7e34;
  }


  body {
    background-color: #f4f4f4;
    font-family: Arial, sans-serif;
  }

  h2 {
    text-align: center;
    color: #333;
    margin-top: 20px;
  }
</style>