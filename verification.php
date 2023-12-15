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
                                    <a href="gallery.php?ads=<?php echo 3 ?>" class="nav-link"><?php echo $ads_name ?></a>
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
                                    <li class="nav-item" id="ddd" style="color:#1657cb">
                                           Invite Friends
                                           <ul class="dropdown-menu" style="right: -20px;">
                                        <?php $url ="https://treasuretroove.teckzy.co.in/"; ?>

                                        <style>
                                            .ss{
                                                display: flex;
                                            }
                                            #ddd{
                                                color: #2F4858;
                                                font-size: var(--font-size);
                                                font-weight: 600;

                                                padding-right: 0px;
                                                padding-top: 10px;
                                                padding-bottom: 10px;
                                                -webkit-transition: var(--transition);
                                                transition: var(--transition);
                                                font-family: var(--heading-font-family);
                                            }
                                        
                                        </style>
                        <p><b style="color:#1657cb"><u>Share Link  At:</u></b></p>
                      <div class="ss">      
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode("Welcome to Treasure Trove: " . $url); ?>">
                    <img src="assets/images/facebook.png" alt="">
                        </a>
                        <a href="https://www.instagram.com/share?url=<?php echo urlencode("Welcome to Treasure Trove: " . $url); ?>">
                            <img src="assets/images/instagram.png" alt="">
                        </a>
                        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode("Welcome to Treasure Trove: " . $url); ?>">
                            <img src="assets/images/whatsapp.png" alt="">
                        </a>
                        <a href="mailto:?subject=Check%20out%20this%20page&body<?php echo urlencode("Welcome to Treasure Trove: " . $url); ?>">
                            <img src="assets/images/email.png" alt="">
                        </a>
                        </div> </ul></li>
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
                                    <?php if (isset($_SESSION['user_details'])) { ?>
                                        <a class="dropdown-item" style="border-top: 1px solid black;" href="log_out.php">
                                        Logout
                                    </a>
                                    <?php    } else if (isset($_SESSION['vendor_details'])) { ?>
                                        <a class="dropdown-item" style="border-top: 1px solid black;" href="log_out.php">
                                        Logout
                                    </a>
                                    <?php  } else if (isset($_SESSION['s_provider'])) { ?>
                                        <a class="dropdown-item" style="border-top: 1px solid black;" href="log_out.php">
                                        Logout
                                    </a>
                                       
                                   <?php } ?> 

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
        <h3 class="text-center" style="margin-top:29px;font-weight:500" >GET OTP</h3>
        <div class="profile-authentication-area ptb-100">
            <div class="container" style="margin-top:29px;">
                <div class="profile-authentication-tabs">
                   
                    <!-- login page -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="register" role="tabpanel">
                            <div class="eeza-authentication-form">
                                <form method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                        <input type="text" class="form-control" id="otp_code" name="otp_code" placeholder="OTP Code">
                                    </div>
                                    
                                    
                                    <button type="submit" name="verify" id="verify" value="Verify" class="default-btn">Get OTP<i class="flaticon-send"></i></button>
                                    
       
                                    
                                </form>
                                
                            </div>
                           
                            
                        </div>
                    
                       

                    </div>
                </div>
            </div>
        </div>
        
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



<!-- verification -->
<?php 
    include("include/database.php");
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            
            ?>
             <script>
                 alert("Verfication  Done, Create New Password");
                   window.location.replace("create_pass.php");
             </script>
             <?php
        }

    }

?>