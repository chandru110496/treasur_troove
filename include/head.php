<!--  which is included for following pages
1.buy.php
2.profile.php
3.bid.php 
4.index.php
5.wishlist
6.deal.php

-->
<?php
include("include/database.php");
ini_set('error-reporting', 0);
ini_set('display-errors', 0);
session_start();
if (isset($_SESSION['user_details']))
    $cur_type = $_SESSION['user_details']['cur_type'];
$haspermision = false;

if (isset($_SESSION['user_details'])) {
    $id = $_SESSION['user_details']['user_id'];
    $sqls = "SELECT * FROM `user_details` WHERE `user_id` ='$id'";
    $haspermision = true;
} else if (isset($_SESSION['vendor_details'])) {
    $id = $_SESSION['vendor_details']['vendor_id'];
    $sqls = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$id'";
    $haspermision = true;
} else if (isset($_SESSION['s_provider'])) {
    $id = $_SESSION['s_provider']['user_id'];
    $sqls = "SELECT * FROM `service_provider` WHERE `user_id` ='$id'";
    $haspermision = true;
}
if ($haspermision) {
    $stmt = $db->query($sqls);
    $resultProfile;

    if ($row = mysqli_fetch_assoc($stmt)) {
        $resultProfile = $row;
        // print_r($resultProfile);
    }
}
?>
<script>
    let user_id = <?= $id ?>;
</script>
<!doctype html>

<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="favicon.png">
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
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/filter.css">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" type="img/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Treasure Troove</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">


    <style>
        .fa-heart {
            position: absolute;
            left: 7px;
            top: 7px;

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

        .navigation-backdrop {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;

            background: rgba(212, 212, 212, 0.36);
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



        * {
            box-sizing: border-box;
        }

        body {
            color: grey;

        }

        #sidebar {
            width: 20%;
            padding: 10px;
            margin: 0;
            float: left;
        }

        #products {

            /* width: 80%; */
            padding: 10px;
            margin: 0;
            float: right;
            /* z-index: -1; */
        }

        ul {
            list-style: none;
            padding: 5px;
        }

        li a {
            color: darkgray;
            text-decoration: none;
        }

        li a:hover {
            text-decoration: none;
            color: darksalmon;
        }

        .fa-circle {
            font-size: 20px;
        }

        #red {
            color: #e94545d7;
        }

        #teal {
            color: rgb(69, 129, 129);
        }

        #blue {
            color: #0000ff;
        }

        .card {
            width: 250px;
            display: inline-block;
            height: 300px;
            border-radius: 15px;
            margin-bottom: 30px;
            position: relative;
        }

        .card-img-top {
            width: 250px;
            /* height: 210px; */
            height: 230px;
            border-radius: 15px 15px 0 0;
        }

        .card-body p {
            margin: 2px;
        }

        .card-body {
            padding: 0;
            padding-left: 2px;
            text-align: center;
        }

        .filter {
            display: none;
            padding: 0;
            margin: 0;
        }

        @media(min-width:991px) {
            .navbar-nav {
                margin-left: 35%;
            }

            .nav-item {
                padding-left: 20px;
            }

            .card {
                width: 190px;
                display: inline-block;
                height: 346px;
            }

            .card-img-top {
                width: 188px;
                height: 210px;

            }

            #mobile-filter {
                display: none;
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .navbar-nav {
                margin-left: 20%;
            }

            .nav-item {
                padding-left: 10px;
            }

            .card {
                width: 230px;
                display: inline-block;
                height: 300px;
                margin-bottom: 10px;
            }

            .card-img-top {
                width: 230px;
                height: 210px;
            }

            #mobile-filter {
                display: none;
            }
        }

        @media(min-width:568px) and (max-width:767px) {
            .navbar-nav {
                margin-left: 20%;
            }

            .nav-item {
                padding-left: 10px;
            }

            .card {
                width: 205px;
                display: inline-block;
                height: 300px;
                margin-bottom: 10px;
            }

            .card-img-top {
                width: 203px;
                height: 210px;
            }

            .fa-circle {
                font-size: 15px;
            }

            #mobile-filter {
                display: none;
            }
        }

        @media(max-width:567px) {
            .navbar-nav {
                margin-left: 0%;
            }

            .nav-item {
                padding-left: 10px;
            }

            #sidebar {
                width: 100%;
                padding: 10px;
                margin: 0;
                float: left;
            }

            #products {
                width: 100%;
                padding: 5px;
                margin: 0;
                float: right;
                /* z-index: -1; */
            }

            .card {
                width: 230px;
                display: inline-block;
                height: 300px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .card-img-top {
                width: 230px;
                height: 210px;

            }

            .list-group-item {
                padding: 3px;
            }

            .offset-1 {
                margin-left: 8%;
            }

            .filter {
                display: block;
                margin-left: 70%;
                margin-top: 2%;
            }

            #sidebar {
                display: none;
            }

            #mobile-filter {
                padding: 10px;
            }
        }

        .btn_grad_blgr {
            display: flex;
            margin: 0 auto;
            margin-bottom: 0px;
            border: 0;
            border-radius: 15px;
            padding: 10px 12px;
            font-size: 14px;
            font-weight: 300;
            background: #1657cb;
            color: #fff;
            text-transform: uppercase;
        }

        #myImg {
            height: 210px;
            border-radius: 0px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 32%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }


        .mb-4 {
            margin-bottom: 0rem !important;
        }

        .btn_grad_blgr:hover {
            background: #043fa9;
            color: white;
        }


        .btn_grad_blgr {

            height: 32px;
            align-items: center;
            margin-bottom: 7px;


        }

        .btn_grad_blgr:hover {
            background: #043fa9;
            color: white;
        }

        .card {
            width: 190px;
            display: inline-block;
            margin-left: 10px;
            margin-bottom: 30px;
            border-radius: 15px;
        }


        .parent {
            display: flex;
        }

        .container input {
            border: 1px solid grey;
            position: relative;

        }

        .container input:hover {
            border: 1px solid #0000fe;


        }

        .container input:focus {
            outline: none;


        }

        .search {
            position: absolute;
            top: 27px;
            left: 223px;
            color: #0000fe;
        }


        .fas.fa-heart {
            color: grey;
            cursor: pointer;
        }

        .fas.fa-heart.active {
            color: #1657cb;
        }
    </style>

    <style>
        .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu {

            right: -50px;

        }

        /* taazameat  */
        .swal-modal {
            width: 511px !important;
        }

        .swal-footer {
            text-align: center;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }


        .swal-text {
            text-align: center;
            font-weight: 800;

        }

        .swal-button {
            background-color: #12a9f1;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 900;
            font-size: 16px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer;
        }



        .header__cart {
            text-align: right;
            padding: 24px 0;
        }

        .header__cart ul {
            display: inline-block;
            margin-right: 25px;
        }

        .header__cart ul li {
            list-style: none;
            display: inline-block;
            margin-right: 15px;
        }

        .header__cart ul li:last-child {
            margin-right: 0;
        }

        .header__cart ul li a {
            position: relative;
        }

        .header__cart ul li a i {
            font-size: 24px;
            color: #1c1c1c;
        }

        .header__cart ul li a span {
            height: 13px;
            width: 13px;
            background: #6e0236;
            font-size: 10px;
            color: #ffffff;
            line-height: 13px;
            text-align: center;
            font-weight: 700;
            display: inline-block;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: -12px;
        }

        .header__cart .header__cart__price {
            font-size: 14px;
            color: #6f6f6f;
            display: inline-block;
        }

        .header__cart .header__cart__price span {
            color: #252525;
            font-weight: 700;
        }




        /* notification css */



        .icon-button {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            color: #333333;
            background: #dddddd;
            border: none;
            outline: none;
            border-radius: 50%;
        }

        .icon-button:hover {
            cursor: pointer;
        }

        .icon-button:active {
            background: #cccccc;
        }

        .icon-button__badge {
            position: absolute;
            top: -10px;
            right: -10px;
            width: 20px;

            height: 20px;
            background: #00aefe;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }



        /* new style foe */
        .main-navbar .navbar .navbar-nav .nav-item:first-child {
            margin-left: -23px;
        }

        /* my account align ment changes */
    </style>


</head>

<body>
    <style>
        .product-con {
            display: flex;
            width: 100%;
        }

        .pro-con {
            margin: 10px;
            padding: 10px;
            width: 100%;
        }

        /* .list-pro {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                margin: 0 20px;
            } */
    </style>

    <!-- Start Preloader Area -->
    <div class="preloader-area d-none">
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
                        <a href="bid.php">
                            <img src="" class="black-logo" alt="image" style="height:70px;">
                            <!-- <img src="assets/images/logo-2.png" class="white-logo" alt="image"> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="bid.php">
                        <img src="assets/images/logo.png" class="black-logo" alt="image" style="height:70px;width:90%;">
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
                                        <li><a href="matrimony.php?ads=<?php echo $ads_id ?>"><?php echo $ads_name ?></a>
                                        </li>


                                    <?php } ?>
                                </ul>

                            </nav>
                        </div>
                        <!-- navigation close -->
                    </div>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="margin-right:0px;">
                        <ul class="navbar-nav m-auto" style="margin-right: 20px;">
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
                                            <!-- <a href="?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a> -->
                                            <a href="category_bid.php?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                $sc_id = $row['category_id'];
                                                $sqls = "SELECT *
                                                    FROM `sub_category` WHERE `sub_category`.`category_id` = '$sc_id'";
                                                // echo $sql;
                                                $results = $db->query($sqls);
                                                //   print_r($results);
                                                while ($row = mysqli_fetch_assoc($results)) {
                                                    $rows = array_unique($row);
                                                    //  print_r($rows);
                                                    $sub_category_name = $rows['sub_category_name'];
                                                    $sub_category_id = $rows['sub_category_id'];
                                                ?>
                                                    <li class="nav-item"><a href="bid_products.php?sub_cat_id=<?php echo $sub_category_id ?>" class="nav-link"><?php echo $sub_category_name; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li> <?php } ?>
                                </ul>
                            </li>
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
                                            <a href="category_buy.php?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a>
                                            <!-- <a href="#" class="nav-link"><?php echo $category_name; ?></a> -->
                                            <ul class="dropdown-menu">
                                                <?php
                                                $sc_id = $row['category_id'];

                                                $sqls = "SELECT *
                                                    FROM `sub_category` WHERE `sub_category`.`category_id` = '$sc_id'";
                                                // echo $sql;
                                                $results = $db->query($sqls);
                                                //   print_r($results);
                                                while ($row = mysqli_fetch_assoc($results)) {
                                                    $rows = array_unique($row);
                                                    //  print_r($rows);
                                                    $sub_category_name = $rows['sub_category_name'];
                                                    $sub_category_id = $rows['sub_category_id'];
                                                ?>
                                                    <li class="nav-item"><a href="kids.php?sub_cat_id=<?php echo $sub_category_id  ?>&category=<?= urlencode($category_name) ?>" class="nav-link"><?php echo $sub_category_name; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li> <?php } ?>
                                </ul>
                            </li>
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
                                            <a href="category_deal.php?cat_id=<?php echo $category_id ?>" class="nav-link"><?php echo $category_name; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                $sc_id = $row['category_id'];
                                                $sqls = "SELECT * FROM `sub_category`
                                    JOIN `category` ON `sub_category`.`category_id` = `category`.`category_id` 
                                    WHERE `category`.`category_id` = '$sc_id'";
                                                // echo $sqls;
                                                $results = $db->query($sqls);
                                                //  print_r($results);
                                                while ($rows = mysqli_fetch_assoc($results)) {
                                                    //print_r($rows);
                                                    $sub_category_name = $rows['sub_category_name'];
                                                    $sub_category_id = $rows['sub_category_id'];
                                                ?>
                                                    <li class="nav-item"><a href="deal_products.php?sub_cat_id=<?php echo $sub_category_id ?>" class="nav-link">
                                                            <?php echo $sub_category_name; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li> <?php } ?>
                                </ul>
                            </li>

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

                            </li>
                            <?php if (isset($_SESSION) == FALSE) { ?>
                                <li class="nav-item">
                                    <a href="profile-authentication.php"><i class="flaticon-user"></i>Login/Register</a>
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
                                </li>
                            <?php } ?>

                            <style>
                                .goog-te-combo {
                                    border: none;
                                    color: var(--paragraph-color);
                                    font-size: 15px;
                                    font-family: var(--heading-font-family);
                                    font-weight: 600;
                                    width: 94px;
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

                                }

                                .goog-te-combo:active {
                                    border: none
                                }

                                .dropdown-item {
                                    margin-left: 20px;
                                    width: 215px;
                                }
                            </style>
                            <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            <script>
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                            pagelanguage: 'en'
                                        },
                                        'google_translate_element'
                                    );
                                }
                            </script>
                            <!--  start of translatation of web-page  -->
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en',
                                        includedLanguages: 'ta,ar,bn,es,fr,hi,id,ja,ko,ms,pt,ru,zh-CN'
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
                                        $('.goog-te-menu-value span:first-child').css('text-transform', 'capitalize');
                                    }, 1000);
                                }
                            </script>
                            <li >
                                <div  id="google_translate_element"></div>
                            </li>
                            <!-- style for translate type -->
                            <style>
                                .goog-te-combo{
                                    background-color: #fff;
                                    color: rgb(47, 72, 88);
                                    margin-top: 20px;
                                }
                            </style>

                            <!-- end of translation of web page -->
                            <!-- currency start here -->
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
                            <!-- end of the currency -->
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link" style="margin-left:-28px;display:flex;">
                                    <?php if (isset($_SESSION['user_details'])) { ?>
                                        <img src="upload/profile/<?php echo $resultProfile['user_img'] ?>" class="sc-himrzO kCyZje rounded-circle" style="width: 30px;margin-left:50px;height: 30px;border:none;">
                                    <?php } else if (isset($_SESSION['vendor_details'])) { ?>
                                        <img src="upload/vendors/<?php echo $resultProfile['vendor_image'] ?>" class="sc-himrzO kCyZje rounded-circle" style="width: 25px;height: 25px;">
                                    <?php } else { ?>
                                        <img src="upload/profile/blank-profile-picture.webp" class="sc-himrzO kCyZje rounded-circle" style="width: 25px;height: 25px;">
                                    <?php
                                    }
                                    if (isset($_SESSION['user_details'])) {
                                        echo $_SESSION['user_details']['user_name'];
                                    } else if (isset($_SESSION['vendor_details'])) {
                                        echo $_SESSION['vendor_details']['vendor'];
                                    } else {
                                    ?>
                                        My Account
                                    <?php
                                    } ?>
                                    <!-- My Account -->
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if (!isset($_SESSION['user_details'])) { ?>
                                        <a class="dropdown-item" href="profile-authentication.php">Register/Login</a>
                                    <?php } ?>
                                    <a class="dropdown-item" href="savelife.php"> Save a Life</a>
                                    <a class="dropdown-item" href="paymenthistory.php">Payment History</a>
                                    <a class="dropdown-item" href="winning_bid.php">Winning Bid</a>
                                    <a class="dropdown-item" href="winning_unbid.php">Bid unpaid list</a>
                                    <?php if (isset($_SESSION['user_details'])) { ?>
                                        <a class="dropdown-item" href="user/deal.php?type=hot">
                                            Upload Deal Products
                                        </a>
                                    <?php } ?>
                                    <a class="dropdown-item" href="wishlist.php"> Wish List</a>
                                    <a class="dropdown-item" href="#">Setting</a>
                                    <li class="nav-item" id="ddd" style="color:#1657cb">
                                        Invite Friends
                                        <ul class="dropdown-menu" style="right: -20px;">
                                            <?php $url = "https://treasuretroove.teckzy.co.in/"; ?>
                                            <style>
                                                .ss {
                                                    display: flex;
                                                }

                                                #ddd {
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
                                            <p><b style="color:#1657cb"><u>Share Link At:</u></b></p>
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
                                            </div>
                                        </ul>
                                    </li>

                                    <?php if (isset($_SESSION['user_details'])) { ?>
                                        <a class="dropdown-item" style="border-top: 1px solid black;" href="log_out.php">Logout</a>
                                    <?php    } else if (isset($_SESSION['vendor_details'])) { ?>
                                        <a class="dropdown-item" style="border-top: 1px solid black;" href="log_out.php">Logout</a>
                                    <?php  } else if (isset($_SESSION['s_provider'])) { ?>
                                        <a class="dropdown-item" style="border-top: 1px solid black;" href="log_out.php">Logout</a>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- add to cart start here -->
                    <div style="position: relative;left:60px" class="col-lg-1">
                        <div class="header__cart">
                            <ul>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span class="fetch_cart_count" style="background-color:#01acfe;position: absolute; top: -5px; ">0</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--  add to cart end here -->

                    <!-- whishlist start here -->
                    <div style="position: relative;left:20px;top:-25px" class="col-lg-1">
                        <div class="header__cart">
                            <ul>
                                <li><a href="wishlist.php"><i class="fa fa-solid fa-heart"></i> <span class="fetch_wishlist_count" style="background-color:#01acfe; position: absolute; left: 25px; ">0</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--  whishlist end here -->

                    <!-- notification start -->
                    <?php

                    $to_show = false;
                    $id;
                    $user_type;

                    if (isset($_SESSION['user_details'])) {
                        $id = $_SESSION['user_details']['user_id'];
                        $user_type = 'user_id';
                        $to_show = true;
                    } else if (isset($_SESSION['vendor_details'])) {
                        $id = $_SESSION['vendor_details']['vendor_id'];
                        $user_type = 'vendor_id';
                        $to_show = true;
                    } else if (isset($_SESSION['s_provider'])) {
                        $id = $_SESSION['s_provider']['user_id'];
                        $user_type = 'service_user_id';
                        $to_show = true;
                    }


                    if ($to_show) {
                        $sqlc = "SELECT  count(*) is_read  FROM war_title WHERE  $user_type='$id' AND  is_read='0' AND status='0' ";
                        $resultc = $db->query($sqlc);
                        if ($resultc->num_rows > 0) {
                            $rowc = $resultc->fetch_assoc();
                            $totalCount = $rowc["is_read"];
                        } else {
                            $totalCount = 0;
                        }
                    }
                    // echo "Total records in the table: " .$totalCount;
                    ?>
                    <div class="notification-icon" data-Id="<?php echo $messageId ?>" onclick="toggleNotifi()">
                        <!-- <i class="fa fa-bell"></i> -->
                        <span class="material-icons" style="font-size:25px;margin-top:5px;">notifications</span>
                        <span class="icon-button__badge" style="font-size:13px;margin-top:5px;"><?php echo ($to_show) ? $totalCount : 0 ?></span>
                    </div>
                    <?php
                    if ($to_show) {
                    ?>
                        <div style="z-index: 1;" class="notifi-box" id="box">
                            <h2>Notifications <span class="notifi_count"><?php echo $totalCount ?></span></h2>
                            <div class="" id="sideScrollbar">
                                <div class="" id="sideBarInside">
                                    <?php
                                    // $sql = "SELECT * FROM `war_title` ORDER BY `notification_id` DESC";
                                    $sql = " SELECT  *  FROM war_title  WHERE  $user_type='$id' AND status='0' ORDER BY created_at DESC ";
                                    $result = $db->query($sql);
                                    $rowCount = $result->num_rows;
                                    $displayLimit = 2;
                                    $showReadMore = $rowCount > $displayLimit;
                                    $counter = 0;
                                    if ($rowCount > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $messageId = $row["notification_id"];
                                            $content = $row["description"];
                                            $isRead = $row["is_read"];
                                            $title = $row["title"];
                                            $status = $row["status"];
                                            $badge_text = ($isRead == 0) ? 'New' : 'Old';

                                            $cssStyle = 'font-weight:bold;color:#1657CB;';
                                            // $findNew = '<span class="badge">New</span>';
                                            $findNew = '<span class="badge">' . $badge_text . '</span>';
                                            $display = $counter < $displayLimit ? 'block' : 'none';
                                            echo "<div class='notifi-item' data-message-id='$messageId' style='display:$display;'>";
                                            echo " <div class='text content'>";
                                            echo " <h4 style='$cssStyle'>$title $findNew</h4> ";
                                            echo "  <p>$content</p>";
                                            if ($isRead == 0) {
                                                echo "<button class='close-btn ' style='color:green;' onclick=\"readNotification('$messageId')\" >Mark As Read</button> &nbsp;";
                                            }
                                            echo "<button class='close-btn ' style='color:red;' onclick=\"closeNotification('$messageId')\">Close</button>";
                                            echo " </div> ";
                                            echo "</div>";

                                            $counter++;
                                        }
                                    } else {
                                        echo "No messages found.";
                                    }
                                    ?>
                                    <?php if ($showReadMore) : ?>
                                        <!-- <button id="">Read More</button> -->
                                        <div class="notifi-footer" id="read-more-btn" onclick='sideBar()'>
                                            <div class="text">
                                                <h2>Read More</h2>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <!--  notification ends here -->
                </nav>
            </div>
            <script>
                function closeNotification(messageId) {
                    $.ajax({ // C:\xampp\htdocs\_treasuretroove_backup_from_live by jeeva bro\notifi_ajax.php
                        type: "POST",
                        url: "notifi_ajax.php",
                        data: {
                            messageId,
                            action: 'close_notification'
                        },
                        dataType: "json",
                        success: function(response) {
                            // console.log(response);
                            $('.icon-button__badge').html(response[0]);
                            $('.notifi_count').html(response[0]);
                            $('#sideBarInside').html(response[1]);
                            var sideScrollBar = document.getElementById("sideScrollbar");
                            var sideBarInside = document.getElementById("sideBarInside");
                            sideScrollBar.classList.remove("scrolling-area");
                            sideBarInside.classList.remove("scrolling-element-inside");
                        }
                    });
                }

                function readNotification(messageId) {
                    // alert(messageId);
                    $.ajax({ // C:\xampp\htdocs\_treasuretroove_backup_from_live by jeeva bro\notifi_ajax.php
                        type: "POST",
                        url: "notifi_ajax.php",
                        data: {
                            messageId,
                            action: 'mark_as_read'
                        },
                        dataType: "json",
                        success: function(response) {
                            // console.log(response);
                            $('.icon-button__badge').html(response[0]);
                            $('.notifi_count').html(response[0]);
                            $('#sideBarInside').html(response[1]);
                            var sideScrollBar = document.getElementById("sideScrollbar");
                            var sideBarInside = document.getElementById("sideBarInside");
                            sideScrollBar.classList.remove("scrolling-area");
                            sideBarInside.classList.remove("scrolling-element-inside");
                        }
                    });
                }
                var box = document.getElementById('box');
                var down = false;

                function toggleNotifi() {
                    if (down) {
                        box.style.height = '0px';
                        box.style.opacity = 0;
                        down = false;
                        $.ajax({ // C:\xampp\htdocs\_treasuretroove_backup_from_live by jeeva bro\notifi_ajax.php
                            type: "POST",
                            url: "notifi_ajax.php",
                            data: {
                                action: 'getNotificationDetails'
                            },
                            dataType: "json",
                            success: function(response) {
                                // console.log(response);
                                $('.icon-button__badge').html(response[0]);
                                $('.notifi_count').html(response[0]);
                                $('#sideBarInside').html(response[1]);
                                var sideScrollBar = document.getElementById("sideScrollbar");
                                var sideBarInside = document.getElementById("sideBarInside");
                                sideScrollBar.classList.remove("scrolling-area");
                                sideBarInside.classList.remove("scrolling-element-inside");
                            }
                        });
                    } else {
                        box.style.height = 'auto';
                        box.style.display = 'block';
                        box.style.opacity = 1;
                        down = true;
                    }
                }

                function sideBar() {
                    var sideScrollBar = document.getElementById("sideScrollbar");
                    var sideBarInside = document.getElementById("sideBarInside");
                    sideScrollBar.classList.add("scrolling-area");
                    sideBarInside.classList.add("scrolling-element-inside");
                    $('.notifi-footer').hide();
                }



                // read more 
                const readMoreBtn = document.getElementById("read-more-btn");
                const notifiItems = document.querySelectorAll(".notifi-item");

                if (readMoreBtn) {
                    readMoreBtn.addEventListener("click", function() {
                        notifiItems.forEach(item => {
                            item.style.display = "block";
                        });
                        readMoreBtn.style.display = "none";
                    });
                }
            </script>

            <!-- entire notification part gets over here -->
            <style>
                /* notification st  */

                #cart_style {
                    background-color: #01acfe;
                    margin-top: -11px;
                    margin-right: -9px;
                    font-size: 12px;
                    width: 20px;
                    display: grid;
                    place-items: center;
                    height: 20px;
                }

                .close-btn {
                    background-color: #ccc;
                    border: none;
                    color: #fff;
                    padding: 8px 16px;
                    font-size: 14px;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .close-btn:hover {
                    background-color: #aaa;
                }

                .badge {
                    background-color: #00aefe;
                    color: white;
                    padding: 4px 8px;
                    text-align: center;
                    border-radius: 5px;
                }

                .notification-icon {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                }

                .scrolling-area {
                    max-width: 250px;
                    max-height: 250px;
                    overflow: auto;
                    padding: 10px;
                    background: white;
                    direction: rtl;

                }

                .scrolling-element-inside {
                    direction: ltr;
                }

                .notifi-box {
                    width: 250px;
                    height: auto;
                    opacity: 0;
                    position: absolute;
                    top: 63px;
                    right: 20px;
                    transition: 1s opacity, 250ms height;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    background-color: white;
                    display: none;
                }

                .notifi-box h2 {
                    font-size: 16px;
                    padding: 10px;
                    border-bottom: 1px solid #eee;
                    color: #999;
                }

                .notifi-box h2 span {
                    color: #f00;
                }

                .notifi-header {

                    border-bottom: 1px solid #eee;
                    cursor: pointer;
                    background-color: #1657CB;
                    color: white;
                    display: flex;
                    padding: 4px 42px;
                }

                .notifi-item {
                    display: flex;
                    border-bottom: 1px solid #eee;
                    padding: 0px 10px;
                    margin-bottom: 0px;
                    cursor: pointer;
                }

                .notifi-footer {
                    border-bottom: 1px solid #eee;
                    cursor: pointer;
                    /* background-color:#1657CB; */
                    /* color:white; */
                    text-align: center;
                }

                .notifi-footer h2 {
                    font-size: 16px;
                    padding: 0px;
                    border-bottom: 1px solid #eee;
                    color: #999;
                }

                .notifi-item:hover {
                    background-color: #eee;
                }

                .notifi-item .text h4 {
                    color: #777;
                    font-size: 16px;
                    margin-top: 10px;
                }

                .notifi-item .text p {
                    color: #aaa;
                    font-size: 12px;
                }

                /* notification end  */
                .message {
                    padding: 0px;
                    margin: 5px;
                    /* border: 1px solid #ccc; */
                }

                .read {
                    background-color: #f0f0f0;
                    /* Background color for read messages */
                }

                .unread {
                    background-color: #e6f7ff;
                    /* Background color for unread messages */
                    font-weight: bold;
                    /* You can make the unread messages bold for emphasis */
                }
            </style>
        </div>

    </div>
    <!-- End Navbar Area -->
    <script>
        $(document).ready(function() {
            $('.cur').click(function() {
                // var currencyId = <?php echo json_encode($currency); ?>;
                var currencyId = $(this).attr('data-proId');
                var userid = <?php echo ($user_id); ?>;
                //   alert(currencyId);
                //  exit();
                $.ajax({
                    url: 'update_currency.php',
                    method: 'POST',
                    data: {
                        currency_id: currencyId,
                        user_id: userid
                    },
                    success: function(response) {
                        // alert('updated Your Currency Successfullly!');
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('error');
                    }
                });
            });
        });
    </script>
    <!-- add color for nav buttons -->
    <script>
        $(document).ready(function() {

            $('.searchInputBox #clear_search_text').click(function() {
                // alert("trigeed clear");
                document.getElementById('search').value = "";
                // alert("clear");
            });

            $("#search_results").empty();
            $("#search").keyup(function() {
                var search = $(this).val();
                if (search === '') {
                    // alert(search);
                    $("#search_results").empty();
                }
            })

            // if ($("#search").val() === '')
            //     $("#search_results").empty();

        });
        $(document).ready(function() {
            $('.nav-link').click(function() {
                // Remove active class from all nav links
                $('.nav-link').removeClass('active');

                // Add active class to the clicked nav link
                $(this).addClass('active');
            });
        });

        $(document).ready(function() {

            $('.notification-icon').click(function() {

                $('.message-popup').toggle();
            });

        });
    </script>

    <!-- for loading count of chart and wislist -->
    <script>
        $(document).ready(function() {
            function getCartCount() {
                // alert("getcartcount");
                // alert(user_id); 
                $.ajax({
                    type: "post",
                    url: "add_to_cart.php",
                    data: {
                        user_id,
                        action: "getCartCount"
                    },
                    dataType: "json",
                    success: function(response) {
                        // alert(response['count'] + "   from method call");
                        $(".fetch_cart_count").html(response.count);
                    }
                });
            }
            getCartCount();

            function getWishListCount() {
                $.ajax({
                    type: "post",
                    url: "add_to_cart.php",
                    data: {
                        user_id,
                        action: "getWishlistCount"
                    },
                    dataType: "json",
                    success: function(response) {
                        // alert(response['count'] + "   from method call");
                        $(".fetch_wishlist_count").html(response.count);
                    }
                });
            }
            getWishListCount();
        })
    </script>
    <!--  end of the get the details of th products -->
    <script>
        $(document).ready(function() {
            $('.add_to_cart').click(function() {
                var productId = $(this).data('product-id');
                // alert(productId);
                // alert(user_id);
                // alert('add to cart');

                $.ajax({
                    url: 'add_to_cart.php',
                    method: 'POST',
                    data: {
                        product_id: productId
                    },
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire({
                            icon: "success",
                            title: "Product Added to Your Cart",
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $(".fetch_cart_count").html(response.count);
                        getCartCount();
                        getWishListCount();
                    },
                    error: function(xhr, status, error) {
                        alert(
                            'An error occurred while adding the product to cart. Please try again.'
                        );
                    }
                });
            });
        })

        function getCartCount() {
            // alert("getcartcount");
            // alert(user_id); 
            $.ajax({
                type: "post",
                url: "add_to_cart.php",
                data: {
                    user_id,
                    action: "getCartCount"
                },
                dataType: "json",
                success: function(response) {
                    // alert(response['count'] + "   from method call");
                    $(".fetch_cart_count").html(response.count);
                }
            });
        }
        getCartCount();

        function getWishListCount() {
            $.ajax({
                type: "post",
                url: "add_to_cart.php",
                data: {
                    user_id,
                    action: "getWishlistCount"
                },
                dataType: "json",
                success: function(response) {
                    // alert(response['count'] + "   from method call");
                    $(".fetch_wishlist_count").html(response.count);
                }
            });
        }
        getWishListCount();
    </script>

    <!-- <?php print_r($_SESSION); ?> -->