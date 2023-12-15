<?php
error_reporting(0);
include("include/head.php");

ini_set('display-errors', 0);
if (isset($_SESSION['user_details'])) {
  $id = $_SESSION['user_details']['user_id'];
  $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
} else if (isset($_SESSION['vendor_details'])) {
  $id = $_SESSION['vendor_details']['vendor_id'];
} else if (isset($_SESSION['s_provider'])) {
  $id = $_SESSION['s_provider']['user_id'];
} else {
  echo '<script>alert("Login First To View Account Details")</script>';
?>
  <meta http-equiv="refresh" content="0;URL='profile-authentication.php'" />
<?php
  header('Loaction:profile-authentication.php');
} ?>
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





    .avatar-upload {
      position: relative;
      max-width: 205px;
      margin: 50px auto;
    }

    .avatar-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }

    .avatar-upload .avatar-edit input {
      display: none;
    }

    .avatar-upload .avatar-edit input+label {
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

    .avatar-upload .avatar-edit input+label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
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

    .avatar-upload .avatar-preview {
      width: 192px;
      height: 192px;
      position: relative;
      border-radius: 100%;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
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
  <div id="scrollButtonContainer">
    <button onclick="goBack()" class="back">
      <i class="ri-arrow-left-line button"></i>
    </button>
  </div>
  <style>
    #scrollButtonContainer {
      position: fixed;
      bottom: 5px;
      /* Adjust the distance from the bottom as needed */
      right: 20px;
      /* Adjust the distance from the right as needed */
      z-index: 9999;
      /* Ensures it appears on top of other elements */
    }
  </style>
  <script>
    function goBack() {
      // Scroll down by a specific amount when the button is clicked
      window.scrollBy(10, 100); // Adjust the 100 to the desired scroll amount
    }
  </script>


  <?php if (isset($_SESSION['user_details'])) {
    $id = $_SESSION['user_details']['user_id'];
    $sqls = "SELECT * FROM `user_details` WHERE `user_id` ='$id'";
  } else if (isset($_SESSION['vendor_details'])) {
    $id = $_SESSION['vendor_details']['vendor_id'];
    $sqls = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$id'";
  } else if (isset($_SESSION['s_provider'])) {
    $id = $_SESSION['s_provider']['user_id'];
    $sqls = "SELECT * FROM `service_provider` WHERE `user_id` ='$id'";
  } ?>
  <?php
  $stmt = $db->query($sqls);
  $result;

  if ($row = mysqli_fetch_assoc($stmt)) {
    $result = $row;
    // print_r($result);
  }
  ?>

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

  <!-- End Navbar Area -->

  <!-- Start Shop Area -->
  <h2 style="text-align: center;">
    <?php if (isset($_SESSION['user_details'])) {
      echo $_SESSION['user_details']['user_name'];
      //  echo $_SESSION['user_id'];
    } else if (isset($_SESSION['vendor_details'])) {
      echo $_SESSION['vendor_details']['name'];
    } else {
      echo 'My Profile';
    }
    ?>
  </h2>

  <div class="avatar-upload">
    <!-- <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div> -->
    <div class="avatar-preview">
      <div id="imagePreview">
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $profileImageURL = $result['user_img'];
        ?>

          <!-- Display the profile image -->
          <img src="./upload/profile/<?php echo $profileImageURL; ?>" alt="Profile Image" style="width:100%;height:100%;border-radius:100%;border:3px solid lightgrey">

        <?php
        } else if (isset($_SESSION['vendor_details'])) {
          // User is logged in, display the profile image
          $profileImageURL = $result['vendor_image'];
        ?>
          <!-- Display the profile image -->
          <img src="./upload/vendors/<?php echo $profileImageURL; ?>" alt="Profile Image" style="width:100%;height:100%;border-radius:100%;border:3px solid lightgrey">
        <?php

        } else if (isset($_SESSION['s_provider'])) {
          // User is logged in, display the profile image
          $profileImageURL = $result['user_img'];
        ?>
          <!-- Display the profile image -->
          <img src="./upload/s_provider/<?php echo $profileImageURL; ?>" alt="Profile Image" style="width:100%;height:100%;border-radius:100%;border:3px solid lightgrey">
        <?php

        } else {
          // User is not logged in, no image to display
        ?>
          <p>No image to display.</p>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $username = $_SESSION['user_details']['user_name'];
        ?>

          <!-- Display the profile image -->
          <p><?= $username ?></p>
        <?php
        } else {
          // User is not logged in, no image to display
        ?>
          <p>--------</p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Mobile no</label>
      </div>
      <div class="col-75">
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $mobile = $_SESSION['user_details']['mobile_number'];
        ?>
          <!-- Display the profile image -->
          <p><?= $mobile ?></p>
        <?php
        } else {
          // User is not logged in, no image to display
        ?>
          <p>No Mobile number display.</p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <!-- <input type="text" id="lname" name="email" placeholder="Enter your email.."> -->
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $email = $_SESSION['user_details']['email_address'];
        ?>
          <!-- Display the profile image -->
          <p><?= $email ?></p>
        <?php
        } else {
          // User is not logged in, no image to display
        ?>
          <p>No Email address.</p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $country = $_SESSION['user_details']['country'];
        ?>
          <!-- Display the profile image -->
          <p><?= $country ?></p>
        <?php
        } else {
          // User is not logged in, no image to display
        ?>
          <p>user Can't register</p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">State</label>
      </div>
      <div class="col-75">
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $state = $_SESSION['user_details']['state'];
        ?>

          <!-- Display the profile image -->
          <p><?= $state ?></p>

        <?php
        } else {
          // User is not logged in, no image to display
        ?>
          <p>------------</p>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">District</label>
      </div>
      <div class="col-75">
        <?php
        if (isset($_SESSION['user_details'])) {
          // User is logged in, display the profile image
          $district = $_SESSION['user_details']['city'];
        ?>
          <!-- Display the profile image -->
          <p><?= $district ?></p>
        <?php
        } else {
          // User is not logged in, no image to display
        ?>
          <p>------------</p>
        <?php
        }
        ?>
      </div>
    </div>
    <button class="btn btn-success">
      <a href="edit_user.php?edit='<?= $id ?>'"><i class="fa fa-edit btn btn-success"></i>Edit Your Profile</a>
    </button>
  </div>

  <!-- End Shop Area -->

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
  <script src="js/main.min.js"></script>
  <script src="js/common.js"></script>
  <script>
    if ($("#bid_counter17").length) {
      // If you need specific date then comment out 1 and comment in 2
      // let endDate = "2020/03/20"; //This is 1
      let endDate = (new Date().getFullYear()) + '/' + (new Date().getMonth() + 1) + '/' + (new Date().getDate() + 1); //This is 2
      let counterElement = document.querySelector("#bid_counter17");
      let myCountDown = new ysCountDown(endDate, function(remaining, finished) {
        let message = "";
        if (finished) {
          message = "Expired";
        } else {
          var re_days = remaining.totalDays;
          var re_hours = remaining.hours;
          message += re_days + "d  : ";
          message += re_hours + "h  : ";
          message += remaining.minutes + "m  : ";
          message += remaining.seconds + "s";
        }
        counterElement.textContent = message;
      });
    }
  </script>
</body>

<!-- Mirrored from templates.envytheme.com/eeza/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:05:36 GMT -->

</html>
<style>
  .back {


    border: none;
    cursor: pointer;


    color: var(--white-color);
    background: #00b9ff;
    width: 45px;
    text-align: center;
    height: 45px;
    border-radius: 50%;



    -webkit-box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
  }

  .back i {

    right: 0;
    left: 0;
    top: 45%;
    -webkit-transform: translateY(-45%);
    transform: translateY(-45%);
    text-align: center;
    font-size: 13px;
    margin-left: auto;
    margin-right: auto;
  }
</style>
<!--  End of the search your Product  items -->
<!-- go back button -->
<script>
  function goBack() {
    // This will take you back to the previous page in the browser's history.
    history.back();
  }
</script>