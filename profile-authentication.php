<?php include("include/database.php");
session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<style>
    @media(min-width:991px) {

        .nav-item {
            padding-left: 20px;
        }
    }

    .about {


        padding: 15px 20px;
        line-height: initial;

        background-color: var(--white-color);

        border-radius: 5px;
        -webkit-box-shadow: unset;
        box-shadow: unset;
        -webkit-transition: var(--transition);
        transition: var(--transition);
        font-size: 15px;
        font-weight: 400;
        width: 512px;
        border-radius: 5px;

    }



    .button-nav {
        position: relative;
        cursor: pointer;
        background: transparent;
        border: 1px solid silver;
        padding: 0.5em;
        display: inline-block;
        zoom: 1;
        border-radius: 4px;
    }

    .button-nav .line {
        display: block;
        background: #969696;
        height: 3px;
        width: 25px;
        margin: 3px 0;
    }

    .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu {

        right: -50px;

    }

    .header-top {
        padding: 10px;
        background: #fff;
        border-bottom: 1px solid #dad5d5;
    }

    .header-top h1 {
        margin: 0;
        display: inline-block;
        font-size: 1.5em;
        vertical-align: text-bottom;
        line-height: 1;
        font-weight: 400;
    }

    .navigation {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        background: #fff;
        z-index: 1001;
        min-width: 250px;
        overflow: auto;
        display: none;
        box-shadow: -1px 2px 6px 1px #9e9e9e;
    }

    .navigation.open {
        display: block;
    }

    .navigation-button {
        padding: 10px;
        text-align: right;
    }

    .navigation-heading {
        margin: 0;
        font-weight: 400;
        color: #777777;
        padding: 10px;
    }

    .navigation-list {
        padding: 0;
        list-style: none;
        margin: 0;
    }

    .navigation-list a {
        color: #159bfb;
        text-decoration: none;
        display: block;
        padding: 10px;
    }

    .navigation-list {
        padding: 0;
        list-style: none;
        margin: 0;
    }

    .navigation-list a {
        color: #159bfb;
        text-decoration: none;
        display: block;
        padding: 10px;
    }
</style>


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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Eeza - Job Board & Hiring + Dashboard HTML Template</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
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
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logo.png" class="black-logo" alt="image" style="height:65px;">
                            <!-- <img src="assets/images/logo-2.png" class="white-logo" alt="image"> -->

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo.png" class="black-logo" alt="image" style="height:65px;">
                        <!-- <img src="assets/images/logo-2.png" class="white-logo" alt="image"> -->

                    </a>
                    <!-- Start Navbar Area -->

                    <div class="main">

                        <div class="header-top">
                            <button class="button-nav">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>

                        </div>

                        <!-- navigation open -->
                        <div class="navigation" id="navigation-demo">
                            <nav>
                                <div class="navigation-button">
                                    <button class="button-nav">Close</button>
                                </div>

                                <h3 class="navigation-heading">Categories</h3>
                                <ul class="navigation-list" style="display:block;">

                                    <?php

                                    $sql = "SELECT * FROM `advertise`";

                                    $result = $db->query($sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // print_r($result);
                                        $ads_id = $row['ads_id'];
                                        $ads_name = $row['ads_name'];
                                    ?>
                                        <li><a href="matrimony.php?ads=<?php echo $ads_id ?>"><?php echo $ads_name ?></a></li>


                                    <?php } ?>
                                </ul>

                            </nav>
                        </div>
                        <!-- navigation close -->


                    </div>



                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="margin-right:0px;">
                        <ul class="navbar-nav m-auto" style="margin-right: 20px;">
                            <!-- <li class="nav-item">
                                <a href="wearhouse-landingpg.php" class="nav-link active">
                                    Warehouse
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="bid.php" class="nav-link">
                                    Bid
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php

                                    $sql = "SELECT * FROM `category` LIMIT 10 ";
                                    $result = $db->query($sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $category_name = $row['category_name'];
                                        $category_id = $row['category_id'];

                                    ?>
                                        <li class="nav-item">
                                            <a href="mens.php?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php

                                                $sc_id = $row['category_id'];

                                                $sqls = "SELECT *
                                FROM `bid_product_details`
                                JOIN `sub_category` ON `bid_product_details`.`category_id` = `sub_category`.`category_id`
                                WHERE `bid_product_details`.`category_id` = '$sc_id'";
                                                // echo $sql;
                                                $results = $db->query($sqls);
                                                //  print_r($results);
                                                while ($rows = mysqli_fetch_assoc($results)) {
                                                    // print_r($rows);
                                                    $sub_category_name = $rows['sub_category_name'];
                                                    $sub_category_id = $rows['sub_category_id'];
                                                ?>
                                                    <li class="nav-item"><a href="kids.php?sub_cat_id=<?php echo $sub_category_id ?>" class="nav-link"><?php echo $sub_category_name; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li> <?php } ?>
                                </ul>




                            <li class="nav-item">

                                <a href="buy.php" class="nav-link">
                                    Buy
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php

                                    $sql = "SELECT * FROM `category` LIMIT 10 ";
                                    $result = $db->query($sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $category_name = $row['category_name'];
                                        $category_id = $row['category_id'];

                                    ?>
                                        <li class="nav-item">
                                            <a href="mens.php?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php

                                                $sc_id = $row['category_id'];

                                                $sqls = "SELECT *
                                FROM `product_details`
                                JOIN `sub_category` ON `product_details`.`category_id` = `sub_category`.`category_id`
                                WHERE `product_details`.`category_id` = '$sc_id'";
                                                // echo $sql;
                                                $results = $db->query($sqls);
                                                //  print_r($results);
                                                while ($rows = mysqli_fetch_assoc($results)) {
                                                    // print_r($rows);
                                                    $sub_category_name = $rows['sub_category_name'];
                                                    $sub_category_id = $rows['sub_category_id'];
                                                ?>
                                                    <li class="nav-item"><a href="kids.php?sub_cat_id=<?php echo $sub_category_id ?>" class="nav-link"><?php echo $sub_category_name; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li> <?php } ?>
                                </ul>
                            <li class="nav-item">
                                <a href="make-deal.php" class="nav-link">
                                    Deal
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php

                                    $sql = "SELECT * FROM `category` LIMIT 10 ";
                                    $result = $db->query($sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $category_name = $row['category_name'];
                                        $category_id = $row['category_id'];

                                    ?>
                                        <li class="nav-item">
                                            <a href="mens.php?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php

                                                $sc_id = $row['category_id'];

                                                $sqls = "SELECT *
                                FROM `deal_product_details`
                                JOIN `sub_category` ON `deal_product_details`.`category_name` = `sub_category`.`category_id`
                                WHERE `deal_product_details`.`category_name` = '$sc_id'";
                                                // echo $sql;
                                                $results = $db->query($sqls);
                                                //  print_r($results);
                                                while ($rows = mysqli_fetch_assoc($results)) {
                                                    // print_r($rows);
                                                    $sub_category_name = $rows['sub_category_name'];
                                                    $sub_category_id = $rows['sub_category_id'];
                                                ?>
                                                    <li class="nav-item"><a href="kids.php?sub_cat_id=<?php echo $sub_category_id ?>" class="nav-link"><?php echo $sub_category_name; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li> <?php } ?>
                                </ul>

                            <li class="nav-item">
                                <a href="supplier.php" class="nav-link">
                                    Supplier
                                    <!-- <i class="ri-arrow-down-s-line"></i> -->
                                </a>

                            </li>
                            <li class="nav-item">
                                <?php

                                $sql = "SELECT `ads_id` FROM `advertise` WHERE `ads_id`=3";

                                $result = $db->query($sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    // print_r($result);
                                    $ads_id = $row['ads_id'];
                                    // $ads_name = $row['ads_name'];
                                ?>
                                    <a href="matrimony.php?ads=<?php echo 3 ?>" class="nav-link"><?php echo $ads_name ?></a>
                                <?php } ?>
                                </a>
                            </li>

                            <?php if (isset($_SESSION['user_details']) == FALSE) { ?>
                                <!-- <li class="nav-item">
                                    <a href="profile-authentication.php"><i class="flaticon-user"></i>Login</a>
                                    <i class="ri-arrow-down-s-line"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="profile-authentication.php" class="nav-link">User Login
                                            </a>

                                        </li>
                                        <li class="nav-item">
                                            <a href="vendor_register.php" class="nav-link">Vendor Login
                                            </a>

                                        </li>
                                    </ul>
                                </li> -->




                                <li class="nav-item">
                                    <a href="profile-authentication.php"><i class="flaticon-user"></i> Register</a>
                                    <i class="ri-arrow-down-s-line"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="profile-authentication.php" class="nav-link">User
                                            </a>

                                        </li>
                                        <li class="nav-item">
                                            <a href="vendor_page.php" class="nav-link">Vendor
                                            </a>

                                        </li>
                                        <li class="nav-item">
                                            <a href="service_provider.php" class="nav-link">Service Provider
                                            </a>

                                        </li>
                                    </ul>
                                </li><?php } ?>
                            <style>
                                .goog-te-combo {

                                    border: none;
                                    color: var(--paragraph-color);
                                    font-size: 15px;
                                    font-family: var(--heading-font-family);
                                    font-weight: 600;
                                }

                                .goog-te-combo:active {

                                    border: none;

                                }

                                .goog-te-gadget img {

                                    visibility: hidden;
                                }

                                .VIpgJd-ZVi9od-l4eHX-hSRGPd,
                                .VIpgJd-ZVi9od-l4eHX-hSRGPd:link,
                                .VIpgJd-ZVi9od-l4eHX-hSRGPd:visited,
                                .VIpgJd-ZVi9od-l4eHX-hSRGPd:hover,
                                .VIpgJd-ZVi9od-l4eHX-hSRGPd:active {
                                    font-size: 0px;
                                    font-weight: bold;
                                    color: #444;
                                    text-decoration: none;
                                }

                                .goog-te-gadget {
                                    font-family: arial;
                                    font-size: 0px;
                                    color: #666;
                                    white-space: nowrap;

                                }

                                .goog-te-gadget .goog-te-combo {
                                    margin: 12px 0;
                                    width: 136px;
                                }

                                .goog-te-combo:active {
                                    border: none
                                }

                                .dropdown-item {
                                    width: 215px;
                                    margin-left: 20px;
                                }
                            </style>
                            <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                            </script>
                            <div id="google_translate_element"> </div>
                            <script>
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                            pagelanguage: 'en'
                                        },
                                        'google_translate_element'
                                    );
                                }
                            </script>
                            <html>

                            <head>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            // includedLanguages: 'ta,ar,bn,es,fr,hi,id,ja,ko,ms,pt,ru,zh-CN,de,nl,it,no,pa,el-GR,eo,'
                                            includedLanguages: 'ta,ar,bn,es,fr,hi,id,ja,ko,ms,pt,ru,zh-CN,de,nl,it,no,pa,el-GR,eo,ur,zu,tr,th,te,tg,tk,uk,uz,zu,,yi,sv,sb,tn,sa,sr,ru,mn,mi,or,la,mi,mn,nn,ne,lo,km,kk,ks,is,hu,he,gu,gn,ka,gd,et,nl,hr,cs,my,bs,be,eu,af,sq'
                                        }, 'google_translate_element');
                                    }

                                    function translateText() {
                                        var selectedLang = $("#language").val();
                                        googleTranslateElementInit();
                                        setTimeout(function() {
                                            $('.skiptranslate').remove();
                                            $('body').children().each(function() {
                                                $(this).html($(this).html().replace(/(&#xA0;)/g, " "));
                                                $(this).html($(this).html().replace(/(&nbsp;)/g, " "));
                                                $(this).html($(this).html().replace(/(&amp;)/g, "&"));
                                                $(this).html($(this).html().replace(/(&#39;)/g, "'"));
                                            });
                                            $('.goog-te-menu-value span:first-child').text(selectedLang);
                                            $('.goog-te-menu-value span:first-child').css('text-transform',
                                                'capitalize');
                                        }, 1000);
                                    }
                                </script>
                            </head>

                            <body>
                                <div id="google_translate_element"></div>
                            </body>

                            </html>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Currency
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu" style="height: 450px; overflow-y: scroll;">
                                    <?php
                                    $sql = "SELECT * FROM `currency`";
                                    //    echo $sql;
                                    $result = $db->query($sql);
                                    $currency_details = $result->fetch_assoc();
                                    //  $_SESSION['currency'] = $currency_details;
                                    //  $_SESSION['currency_name'] = $currency_details['name'];
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        //      // print_r($result);
                                        $currency = $row['name'];
                                        $currency_symbol = $row['symbol'];
                                        $currency_id = $row['id'];
                                        $image = $row['image'];
                                    ?>
                                        <li class="nav-item" style="display:flex;">
                                            <img src="./upload/currency/<?php echo $image; ?>" style="width:25px;height:25px;margin-top:8px;" alt="flag">
                                            <a href="#" class="nav-link cur" data-proId=<?php echo $currency ?>><?php echo $currency ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="profile.php" class="nav-link" style="margin-left:-28px;">
                                    <?php if (isset($_SESSION['user_details'])) { ?>
                                        <img src="upload/profile/<?php echo $_SESSION['user_details']['user_img'] ?>" class="sc-himrzO kCyZje rounded-circle" style="width: 30px;
    height: 30px;border:none;
">
                                    <?php    } else if (isset($_SESSION['vendor_details'])) { ?>
                                        <img src="upload/vendors/<?php echo $_SESSION['vendor_details']['vendor_image'] ?>" class="sc-himrzO kCyZje rounded-circle" style="width: 25px;
   height: 25px;
">
                                    <?php    } else if (isset($_SESSION['s_provider'])) { ?>
                                        <img src="upload/s_provider/<?php echo $_SESSION['s_provider']['user_img'] ?>" class="sc-himrzO kCyZje rounded-circle" style="width: 25px;
   height: 25px;
">
                                    <?php  } else {
                                        echo 'image';
                                    } ?> My Account </a>

                                <ul class="dropdown-menu">

                                    <a class="dropdown-item" href="notifications.php">
                                        Notification
                                    </a>
                                    <a class="dropdown-item" href="paymenthistory.php">
                                        Payment History
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Setting
                                    </a>
                                    <a class="dropdown-item" href="savelife.php">
                                        Save a Life
                                    </a>
                                    <a class="dropdown-item" href="cart.php">
                                        Shoping cart
                                    </a>
                                    <a class="dropdown-item" href="winning_bid.php">
                                        Winning Bid
                                    </a>
                                    <a class="dropdown-item" href="wishlist.php">
                                        Wish List
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Logout
                                    </a>

                    </div>
                    </li>

                    </ul>
            </div>
            </nav>
        </div>
    </div>
    </div>




    <style>
        .nav-items {
            display: inline-block;
            margin: 5px;
            position: relative;
            margin-left: 15px;
            margin-right: 15px;
        }

        .profile-authentication-tabs {
            width: 600px;
        }
    </style>

    <body>
        <!-- Start Profile Authentication Area -->
        <h3 class="text-center" style="margin-top:29px;font-weight:500">User Login/Register</h3>
        <div class="profile-authentication-area ptb-100">
            <div class="container" style="margin-top:29px;">
                <div class="profile-authentication-tabs">
                    <div class="authentication-tabs-list">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab" data-bs-toggle="tab" href="#user_log" role="tab" aria-controls="register">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " id="login-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="login">Register</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="forgot_pasword.php" role="tab">Reset Password</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- registeration page -->
                        <div class="tab-pane fade " id="register" role="tabpanel">
                            <div class="eeza-authentication-form">
                                <?php if (isset($_POST['register'])) {

                                    // Check if email already exists
                                    $existingEmailQuery = "SELECT COUNT(*) FROM `user_details` WHERE `email_address`='" . $_POST['email'] . "' ";
                                    $existingEmailResult = $db->query($existingEmailQuery);
                                    $emailCount = $existingEmailResult->fetch_row()[0];

                                    if ($emailCount > 0) {
                                        echo "<script>alert('Email already exists. Please enter a different email.');</script>";
                                    } else {

                                        $firstname = $_POST['fname'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $cpassword = $_POST['cpassword'];
                                        $mobile = $_POST['mobile'];
                                        $dob = $_POST['dob'];
                                        $ssn = $_POST['ssn'];
                                        $zipcode = $_POST['zipcode'];
                                        $country = $_POST['country'];
                                        $state = $_POST['state'];
                                        $city = $_POST['city'];
                                        $image = $_FILES['image']['name'];
                                        $otp = rand(100000, 999999);

                                        // Check the file extension
                                        if ($image != "") {
                                            $product_image1Extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                            $allowedExtensions = array("jpg", "jpeg", "png", "gif");
                                            if (!in_array($product_image1Extension, $allowedExtensions)) {
                                                echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
                                            } else {
                                                // Move uploaded files to a permanent location
                                                $targetDir = "./upload/profile/";
                                                $targetproduct_image1 = $targetDir . basename($image);
                                                move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
                                            }
                                        } else {
                                            $image = "";
                                        }
                                        //    -----------
                                        $sql = "INSERT INTO `user_details`(`user_name`, `mobile_number`, `email_address`, `password`, `cpassword`, `dob`, `ssn_no`, `country`, `state`, `city`, `zipcode`, `user_img`,`status`,`otp`) VALUES ('$firstname','$mobile','$email','$password','$cpassword',' $dob ','$ssn','$country','$state','$city','$zipcode','$image','0',' $otp')";
                                        $result = $db->query($sql);
                                        if ($result) {
                                            // echo "Successfully registered";
                                            // ini_set();
                                            ini_set("SMTP", "ssl://smtp.gmail.com");
                                            ini_set("smtp_port", "25");
                                            echo '<script type="text/javascript" >alert("temperroy data saved with status 0")</script>';
                                            $mailto = $email;
                                            $from = "development2@teckzy.com";
                                            $name = $firstname;
                                            $subject = "Treasuse Troove Verification for User Registration";
                                            $message = "Dear " . $name . "/n/nWe have received a request for User Registration to Treasure Troove /n/nThe OTP for user verification is - " . $otp;
                                            $header = "FROM: " . $from;
                                            $result = mail($mailto, $subject, $message, $header);
                                            echo '<script type="text/javascript" >alert("mail progress over wait for result....")</script>';
                                            if (true) {
                                                echo '<script type="text/javascript" >alert("meassage sent   VVVVVVVVV "+<?= $otp ?>)</script>';
                                                $code = base64_encode($email); ?>
                                                <form method="POST" action="validate_otp.php" enctype="multipart/form-data">
                                                    <input type="hidden" name="code" id="email" value="<?= $code ?>">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter the OTP" required>
                                                    </div>
                                                    <button type="submit" name="validate_otp" id="validate_otp" value="" class="default-btn">Vefify OTP<i class="flaticon-send"></i></button>
                                                    <!-- <button type="submit" name="register" class="default-btn">Register <i class="flaticon-send"></i></button> -->
                                                </form>
                                    <?php

                                            }
                                        } else {
                                            echo '<script type="text/javascript" >alert(" XXXXXXXXX meassage not send")</script>';
                                            echo "ERROR: Could not execute $sql." . $db->error;
                                        }
                                    }
                                    ?>

                                <?php } else { ?>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control" placeholder=" Name" id="username">
                                            <p id="name_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder=" email" id="email">
                                            <p id="email_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                                            <p id="pass_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" id="cpassword">
                                            <p id="cpass_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" maxlength="10" minlength="10" placeholder=" Mobile Number" id="mobile">
                                            <p id="mobile_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 pl-5 text-muted">
                                                    Choose Your <br> Profile Image
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="file" name="image" class="form-control" placeholder="upload your Profile Image" id="profile">
                                                </div>
                                            </div>
                                            <p id="prof_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 pl-5 text-muted">
                                                    Date Of <br> Birth
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="date" name="dob" class="form-control" placeholder="DOB" id="">
                                                </div>
                                            </div>
                                            <p id="r" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="ssn" class="form-control" minlength="9" maxlength="9" placeholder="Social Security Number" id="">
                                            <p id="r" style="color:red;"></p>
                                        </div>

                                        <div class="form-group">
                                            <select name="country" class="form-control" onChange="getSubcat(this.value);" style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;">
                                                <option value="">Select countries</option>
                                                <?php $query = mysqli_query($db, "select * from countries");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="innercategory" for="basicinput"></label>
                                            <div class="form-group">
                                                <select style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;" onChange="getInnersubcat(this.value);" class="form-control" name="state" id="subcategory">
                                                    <option value="" class="form-group">Select States</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="" for="basicinput"></label>
                                            <div class="form-group">
                                                <select style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;" class="form-control" name="city" id="innercategory">
                                                    <option value="" class="form-group">Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="zipcode" class="form-control about" maxlength="6" minlength="6" placeholder="zip/postalcode" id="">
                                            <p id="state_error" style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="about" class="about" placeholder="Write about you.." id="about" style="resize:none;" rows="4" cols="50"></textarea>
                                            <p id="about_error" style="color:red;"></p>
                                        </div>
                                        <div class="remember-me-wrap">
                                            <p>
                                                <input type="checkbox" id="test2" required>
                                                <label for="test2">I Accept All <a href="terms-of-service.php">Terms & Conditions</a></label>
                                            <p id="test_error" style="color:red;"></p>
                                            </p>
                                        </div>
                                        <button type="submit" name="register" class="default-btn">Register <i class="flaticon-send"></i></button>
                                    </form>
                                <?php } ?>
                            </div>
                            <script src="./assets/js/jquery.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $("form").submit(function(event) {
                                        var fname = $("#username").val();
                                        var email = $("#email").val();
                                        var password = $("#password").val();
                                        var cpassword = $("#cpassword").val();
                                        var mobile = $("#mobile").val();
                                        var isChecked = $("#test2").is(":checked");
                                        if (fname == "") {
                                            // alert("Please  name.");
                                            document.getElementById('name_error').innerHTML = "Please  Name";
                                            event.preventDefault();
                                        } else if (fname.length <= 3) {
                                            document.getElementById('name_error').innerHTML = "Username must have more than 3 letters.";
                                            event.preventDefault();
                                        } else {
                                            document.getElementById('name_error').innerHTML = "";
                                        }
                                        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                        if (email == "" || !emailPattern.test(email)) {
                                            // alert("Please enter a valid email address.");
                                            document.getElementById('email_error').innerHTML = "Please enter a valid email address.";
                                            event.preventDefault();
                                        } else {
                                            document.getElementById('email_error').innerHTML = "";
                                        }
                                        if (password == "") {
                                            // alert("Please  password.");
                                            document.getElementById('pass_error').innerHTML = "Please  Password";
                                            event.preventDefault();
                                        } else {
                                            document.getElementById('pass_error').innerHTML = "";
                                        }
                                        if (cpassword == "") {
                                            // alert("Please confirm your password.");
                                            document.getElementById('cpass_error').innerHTML = "Please  Confirm Password";
                                            event.preventDefault();
                                        } else if (password != cpassword) {
                                            // alert("Passwords do not match.");
                                            document.getElementById('cpass_error').innerHTML = "Password do not match";
                                            event.preventDefault();
                                        } else {
                                            document.getElementById('cpass_error').innerHTML = "";
                                        }
                                        // Mobile Number Validation
                                        var mobilePattern = /^[6-9]\d{9}$/;
                                        if (mobile == "" || !mobilePattern.test(mobile)) {
                                            $('#mobile_error').html("Please enter a valid 10-digit mobile number starting with 6-9");
                                            event.preventDefault();
                                        } else {
                                            $('#mobile_error').html("");
                                        }
                                        if (!isChecked) {
                                            // alert("Please accept the terms and conditions.");
                                            document.getElementById('test_error').innerHTML = "Please accept the terms and conditions.";
                                            event.preventDefault();
                                        } else {
                                            document.getElementById('test_error').innerHTML = "";
                                        }
                                    });
                                });
                            </script>
                        </div>
                        <!-- login page -->
                        <div class="tab-pane fade show active" id="user_log" role="tabpanel">
                            <div class="eeza-authentication-form">
                                <form method="POST" action="profile_login.php" id="login-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="log_email" name="log_email" placeholder="Email" Required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="log_password" name="log_password" placeholder="Password" required>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                            <p>
                                                <input type="checkbox" name="remember_me" id="test1" value="1">
                                                <label for="test1">Remember me</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
                                            <a href="forgot_pasword.php" class="lost-your-password">Lost your password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" name="login_button" id="login_button" value="login" class="default-btn">Log In <i class="flaticon-send"></i></button>
                                </form>
                                <!-- <span class="sub-title"><span>Or</span></span>
                                <div id="login-message"></div>
                                <div class="login-with-account">
                                    <ul>
                                        <li><a href="#" class="facebook">Log In with Facebook <i class="ri-facebook-line"></i></a></li>
                                        <li><a href="#" class="google">Log In with Google <i class="ri-google-line"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <!-- reset - password -->
                        <div class="tab-pane fade" id="reset-password" role="tabpanel">
                            <div class="eeza-authentication-form">
                                <form method="POST" action="reset_password.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Enter Your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="new_password" placeholder="Enter Your New Password">
                                    </div>
                                    <div class="remember-me-wrap">
                                        <p>
                                            <input type="checkbox" id="test3">
                                            <label for="test3">Remember me</label>
                                        </p>
                                    </div>
                                    <button type="submit" name="" class="default-btn"> Submit<i class="flaticon-send"></i></button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#login_button').click(function(e) {
                    e.preventDefault();
                    var email = $('#log_email').val();
                    var password = $('#log_password').val();
                    var saveCredential = $('#test1').is(":checked");
                    if (saveCredential) {
                        alert(password);
                    }
                    $.ajax({
                        url: 'profile_login.php',
                        type: 'post',
                        data: {
                            log_email: email,
                            log_password: password
                        },
                        success: function(response) {
                            if (response === 'success') {
                                window.location.href = 'index.php';
                            } else {
                                // $('#login-message').html('Invalid email or password.');
                                window.location.href = 'profile-authentication.php';
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                            $('#login-message').html('Error occurred while logging in.');
                        }
                    });
                });
            });
        </script>
        <!-- Start Profile Authentication Area -->
        <?php
        include("include/footer.php"); ?>
        <!-- go to back page button -->
        <style>
            .back {
                border: none;
                cursor: pointer;
                color: var(--white-color);
                background: #00b9ff;
                width: 35px;
                text-align: center;
                height: 35px;
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
            // function goBack() {
            //     // This will take you back to the previous page in the browser's history.
            //     history.back();
            // }
            // $(document).ready(function() {
            //     $(".innercategory").click(function() {
            //         alert("sridah");

            // $.ajax({
            //     type: "POST",
            //     url: "innercategory.php",
            //     data: 'sub_cat_id=' + val,                 
            //     success: function(data) {
            //         $("#innercategory").html(data);

            //     }
            // });
            //     })
            // });
        </script>
        <script>
            // function getSubcat(val) {
            //     // alert(val);    
            //     // exit();        
            //     $.ajax({
            //         type: "POST",
            //         url: "get_subcat.php",
            //         data: 'cat_id=' + val,

            //         success: function(data) {
            //             $("#subcategory").html(data);
            //         }
            //     });

            // }

            function selectCountry(val) {
                $("#search-box").val(val);
                $("#suggesstion-box").hide();
            }
        </script>


        <script>
            function getSubcat(states) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("subcategory").innerHTML = this.responseText;

                    }

                };
                xhttp.open("GET", "get_subcat.php?cat_id=" + states, true);

                xhttp.send();
            }

            function getInnersubcat(cities) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("innercategory").innerHTML = this.responseText;

                    }

                };
                xhttp.open("GET", "get_subcat.php?sub_cat_id=" + cities, true);

                xhttp.send();
            }
        </script>
        <!-- go to back page end -->