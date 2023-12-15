<?php include("include/database.php");
session_start();
// $cur_type=$_SESSION['user_details']['cur_type'];
$user_id=$_SESSION['user_details']['user_id']; 

// $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
//  $stmt = $db->query($sql);
//  if($row=mysqli_fetch_assoc($stmt)){
//     // print_r($result);
//     $currency = $row['cur_type'];   
//  }
?>

<?php 
// print_r($_SESSION['user_details']);
?>
<!doctype html>



<php lang="zxx">



    <!-- Mirrored from templates.envytheme.com/eeza/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:04:54 GMT -->

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
        <link rel="stylesheet" href="assets/css/w3.css">
        <link rel="stylesheet" href="assets/css/filter.css">
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <title>Treasure Troove</title>

        <link rel="icon" type="image/png" href="assets/images/logo.png">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


        <style>
        .fa-heart {
            position: absolute;
            right: 9px;
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
            z-index: 1000;
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

            width: 80%;
            padding: 10px;
            margin: 0;
            float: right;
            z-index: -1;
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
            height: 210px;
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
                height: 328px;
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
                z-index: -1;
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
            background: #d8246e;
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
        </style>


    </head>

    <body>


    <?php 
   

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

        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
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
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo.png" class="black-logo" alt="image" style="height:65px;">
                            <!-- <img src="assets/images/logo-2.png" class="white-logo" alt="image"> -->

                        </a>
                        <!-- Start Navbar Area -->
                        <div class="main">

                            <!-- <div class="header-top">
      <button class="button-nav">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>
     
    </div> -->

                            <!-- navigation open -->
                            <div class="navigation" id="navigation-demo">
                                <nav>

                                </nav>
                            </div>
                        </div>
                        <!-- navigation close -->

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"
                            style="margin-right:0px;">
                            <ul class="navbar-nav m-auto" style="margin-right: 20px;">
                                <li class="nav-item">
                                    <a href="home.php" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="bid.php" class="nav-link">
                                        Bid
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <!-- <li class="nav-item">
                                    <a href="shop-details.php" class="nav-link">Sell Product</a>
                                </li>  -->

                                        <li class="nav-item">
                                            <a href="mens.php" class="nav-link">Mens Wear</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="" class="nav-link">Clothing</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Footwear</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Sunglass & Frames</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="womenswear.php" class="nav-link">Womens Wear</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="" class="nav-link">Clothing</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Footwear</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Sunglass & Frames</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                            </ul>
                                        </li>
                                </li>

                                <li class="nav-item">
                                    <a href="kids.php" class="nav-link">kids</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">Boys</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Girls</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Toys</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">School Essential</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Footwear</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="appliance.php" class="nav-link">Home Appliances</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">Home Furnishing</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Furniture Studio</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Living Room Furniture</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Kitchen & Dining</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Bedroom Furniture</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Home Decor</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="beauty.php" class="nav-link">Beauty & Health</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">Personal & Hygiene</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Eye Makeup</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Face Makeup</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Hair Care</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Women's Personal Hygiene</a>
                                        </li>
                                        <li class="nav-item"><a href="" class="nav-link">Body & Skin Care</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="babdies-mom.php" class="nav-link">Babies & Moms</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">Baby Bath & Grooming</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Baby Medical & Health Care</a>
                                        </li>
                                        <li class="nav-item"><a href="" class="nav-link">Nurtshing & Breast Feeding</a>
                                        </li>
                                        <li class="nav-item"><a href="" class="nav-link">Feeding Bottles, Utensils &
                                                Accessories</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Baby Diapers</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Baby Food</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="phone-accessories.php" class="nav-link">Phones & Accessories</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">Mobiles</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Case</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Screen Gaurd</a></li>
                                        <li class="nav-item"><a href="" class="nav-link"> Charger </a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Camera Lens Protector</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="jewelry.php" class="nav-link">Jewelry</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">Gemstones, Coins & Bars </a>
                                        </li>
                                        <li class="nav-item"><a href="" class="nav-link">Precious Articles</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Artificial Jwellery</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Precious Jwellery</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Silver Jwellery</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="computer-technology.php" class="nav-link">Computer & Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a href="electronics -new.php" class="nav-link">Electronics</a>
                                </li>
                                <li class="nav-item">
                                    <a href="realestate.php" class="nav-link">Realestate</a>
                                </li>
                                <li class="nav-item">
                                    <a href="vehicel.php" class="nav-link">Vehicles</a>
                                </li>
                            </ul>
                            </li>

                            <li class="nav-item">

                                <a href="buy.php" class="nav-link">
                                    Buy
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php

                $sql="SELECT * FROM `category`";
                $result = $db->query($sql);
                
                while($row=mysqli_fetch_assoc($result)){
                    $category_name = $row['category_name'];
                    $category_id = $row['category_id'];
            ?>
                                    <li class="nav-item">
                                        <a href="mens.php?cat_id=<?php  echo $category_id?>"
                                            class="nav-link"><?php echo $category_name;?></a>
                                    </li> <?php } ?>
                                </ul>

                            <li class="nav-item">
                                <a href="make-deal.php" class="nav-link">
                                    Deal
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">

                                    <!-- <li class="nav-item">
                                    <a href="shop-details.php" class="nav-link">Sell Product</a>
                                </li>  -->

                                    <li class="nav-item">
                                        <a href="mens.php" class="nav-link">Mens Wear</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="" class="nav-link">Clothing</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Footwear</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Sunglass & Frames</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="womenswear.php" class="nav-link">Womens Wear</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="" class="nav-link">Clothing</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Footwear</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Sunglass & Frames</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                        </ul>
                                    </li>
                            </li>
                            <li class="nav-item">
                                <a href="kids.php" class="nav-link">kids</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Boys</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Girls</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Toys</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">School Essential</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Watches</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Footwear</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="appliance.php" class="nav-link">Home Appliances</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Home Furnishing</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Furniture Studio</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Living Room Furniture</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Kitchen & Dining</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Bedroom Furniture</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Home Decor</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="beauty.php" class="nav-link">Beauty & Health</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Personal & Hygiene</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Eye Makeup</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Face Makeup</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Hair Care</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Women's Personal Hygiene</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Body & Skin Care</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="babdies-mom.php" class="nav-link">Babies & Moms</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Baby Bath & Grooming</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Baby Medical & Health Care</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Nurtshing & Breast Feeding</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Feeding Bottles, Utensils &
                                            Accessories</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Baby Diapers</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Baby Food</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="phone-accessories.php" class="nav-link">Phones & Accessories</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Mobiles</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Case</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Screen Gaurd</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"> Charger </a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Camera Lens Protector</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Tablet Accessories</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="jewelry.php" class="nav-link">Jewelry</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="" class="nav-link">Gemstones, Coins & Bars </a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Precious Articles</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Artificial Jwellery</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Precious Jwellery</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Silver Jwellery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="computer-technology.php" class="nav-link">Computer & Technology</a>
                            </li>
                            <li class="nav-item">
                                <a href="electronics -new.php" class="nav-link">Electronics</a>
                            </li>
                            <li class="nav-item">
                                <a href="realestate.php" class="nav-link">Realestate</a>
                            </li>
                            <li class="nav-item">
                                <a href="vehicel.php" class="nav-link">Vehicles</a>
                            </li>
                            </ul>
                            </li>

                            <li class="nav-item">
                                <a href="catalog.php" class="nav-link">
                                    Advertising<i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
<li class="nav-item">
    <a href="employers.php" class="nav-link">Jobs</a></li>
<li class="nav-item">
    <a href="catalog.php" class="nav-link">Catalog</a></li>
<li class="nav-item">
    <a href="Matrimony.php" class="nav-link">Matrimony</a></li>
  </li></ul>
                            <li class="nav-item">
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
                            </li>

                            <li class="nav-item">
                                <a href="profile-authentication.php"><i class="flaticon-user"></i> Register</a>
                                <i class="ri-arrow-down-s-line"></i>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="profile-authentication.php" class="nav-link">User Register
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="vendor_register.php" class="nav-link">Vendor Register
                                        </a>

                                    </li>
                                </ul>
                            </li>                          
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
                            </style>
                            <script
                                src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                            </script>
                           
                            <div id = "google_translate_element" > </div>
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
                               <ul class="dropdown-menu">
                               <?php 
                             $sql="SELECT * FROM `currency`";
                             //    echo $sql;
                             $result = $db->query($sql);
                             $currency_details = $result->fetch_assoc();
                            //  $_SESSION['currency'] = $currency_details;
                            //  $_SESSION['currency_name'] = $currency_details['name'];
                             while($row=mysqli_fetch_assoc($result)){
                            //      // print_r($result);
                                 $currency = $row['name'];
                                 $currency_symbol = $row['symbol'];
                                 $currency_id = $row['id'];
                                 $image = $row['image'];
                              ?>
                            		<li class="nav-item" style="display:flex;">
                            			<img src="./upload/currency/<?php echo $image;?>" style="width:25px;height:25px;margin-top:8px;" alt="flag">
                            			<a href="#"  class="nav-link cur" data-proId=<?php echo $currency ?>><?php echo $currency?></a>
                            		</li>
                            		<?php } ?>
                              </ul> 
                             </li>
                             <!-- end of the currency -->
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link" style="margin-left:-28px;display:flex;">
                                    <?php if (isset($_SESSION['user_details'])) {?>
                                    <img src="upload/profile/<?php echo $_SESSION['user_details']['user_img']?>"
                                        class="sc-himrzO kCyZje rounded-circle" style="width: 30px;height: 30px;border:none;">
                                            <?php	} else if (isset($_SESSION['vendor_details'])){?>
                                            <img src="upload/vendors/<?php echo $_SESSION['vendor_details']['vendor_image']?>"
                                                class="sc-himrzO kCyZje rounded-circle" style="width: 25px;height: 25px;">
                                    <?php  }else{echo 'image';
                            } ?> My Profile </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="profile_edit.php">
                                        Edit Profile
                                    </a>
                                    <!-- <a class="dropdown-item" href="notifications.php">
                            Notification
                        </a> -->
                                    <a class="dropdown-item" href="paymenthistory.php">
                                        Payment History
                                    </a>
                                    <!-- <a class="dropdown-item" href="#">
                            Setting
                        </a> -->
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
      data: {currency_id:currencyId,
        user_id:userid
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




<style>
.bid {
    justify-content: center;
    align-items: center;
}
</style>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom bid">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor"
        aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container" style="justify-content:stretch;">
        <input type="search" style="border-radius:15px;width:234px;" placeholder="Search...">
        <!-- <i
            class="fa fa-search search" style="cursor:pointer;" aria-hidden="true"></i> -->
        <div class="div">
            <h5 onclick="show()" style="margin-top:1px;"> <img src="assets/images/products/filter.png" alt="Filter"
                    style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;"> </h5>
        </div>
    </div>
    </div>

    <h1 style="margin-right: 100px;width:100%;">Buy</h1>
    <!-- <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">                          
            <li class="nav-item "><a class="nav-link" style="font-size: 50px; padding-left: 9.5rem; color: black;">Bid</a> </li>          
        </ul>        
    </div> -->
    </div>
</nav>

<div class="parent">
    <nav id="menuu">
        <section class=containers id="showw" style="width:80%;display: none;" onclick="expand()">
            <div class="rows">
                <aside class="col-lg-11">
                    <div class="accordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a000">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b000" aria-expanded="true"
                                    aria-controls="accordion_b000">Modules</button>
                            </h2>

                            <div id="accordion_b000" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a000" data-bs-parent="#accordion_a000">
                                <div class="accordion-body pt-1">

                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">All/Any</a></li>
                                        <li><a href="#">Bid</a></li>
                                        <li><a href="#">Buy</a></li>
                                        <li><a href="#">Deal</a></li>
                                        <li><a href="#">Catalog</a></li>
                                        <li><a href="#">Invest</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a001">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b001" aria-expanded="true"
                                    aria-controls="accordion_b001">Hot Deals</button>
                            </h2>

                            <div id="accordion_b001" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
                                <div class="accordion-body pt-1">

                                    <ul class="list-unstyled mb-0">

                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Team Up</a></li>
                                        <li><a href="savelife.php">Save a Life</a></li>
                                        <li><a href="#">New Arrivals</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Cart Now</a></li>
                                        <li><a href="wearhouse.php">Vendor</a></li>
                                        <li><a href="#">Daily Deal</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-0">
                            <h2 class="accordion-header" id="accordion_a001">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b001" aria-expanded="true"
                                    aria-controls="accordion_b001">Price</button>
                            </h2>
                            <div id="accordion_b001" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
                                <div class="accordion-body pt-1">

                                    <input type="range" class="form-range" />

                                    <div class="row row-cols-md-2 g-2 mb-3">
                                        <div class="col">
                                            <label>Min</label>
                                            <input class="form-control px-1" placeholder="0" type="number" />
                                        </div>
                                        <div class="col text-end">
                                            <label>Max</label>
                                            <input class="form-control px-1" placeholder="10000" type="number" />
                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
        </section>
    </nav>






<!-- header section finished -->
<link rel="stylesheet" href="assets/css/modal.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.btn_grad_blgr {
    height: 32px;
    align-items: center;
    margin-bottom: 7px;
}

/* .container input {
    border: 1px solid grey;
    position: relative;
    width: 100px;
margin-left:10px;
text-align:center;
background: #0d6efd;} */

.btn_grad_blgr:hover {
    background: #043fa9;
    color: white;
}
.card {
    width: 190px;
    height:488px;
    display: inline-block;
    margin-bottom: 30px;
    border-radius: 15px;
}
</style>

<!-- Start Shop Area -->

<section id="products">
    <div class="container">
        <div class="row">
            <?php
    
    $sql="SELECT * FROM `bid_product_details`";
    //    echo $sql;
    $result = $db->query($sql);
       
    while($row=mysqli_fetch_assoc($result)){
        // print_r($result);
        $bid_id = $row['bid_id'];
        $bid_name = $row['product_name'];     
        $bid_description = $row['product_description'];     
        $bid_image=$row['product_image1'];
        $bid_image2=$row['product_image2'];
        $bid_image3=$row['product_image3'];
        $bid_image4=$row['product_image4'];
        $bid_image5=$row['product_image5'];
        $bid_price=$row['product_new_price'];
        
        $bid_inc_price = $row['product_old_price']; 
       $min = $row['min'];     
?>
 
 
 
 
 <div class="col-lg-3 col-sm-4 col-10 offset-sm-0 offset-1">
                <div class="card">
                    <script>
                    echo $product = <?php echo $product_id;?>
                    </script>
                    <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i>
                    <script>
                    function myFunction(x) {
                        x.classList.toggle("active");
                    }
                    </script>
                    <img class="card-img-top"  data-bidId="<?php echo $bid_id ?>"   src="./upload/product/<?php echo $bid_image; ?>" alt="Card image cap">
                    <!-- The Modal -->

                    <div class="card-body">
                        <p class="card-text"><?php echo $bid_name; ?></p>
                        <div style="color:black;" id="timer<?php echo $bid_id;?>"
                            style="text-align:center;margin-bottom:4px;"></div>

                        <script>
                        // Set the duration of the timer in minutes
                        const durationInMinutes<?php echo $bid_id;  ?> = <?php echo $min;?>;

                        // Calculate the total number of seconds based on the duration in minutes
                        const totalSeconds<?php echo $bid_id;?> = durationInMinutes<?php echo $bid_id;?> * 60;

                        // Get the HTML element where the timer will be displayed
                        const timerElement<?php echo $bid_id;?> = document.getElementById("timer<?php echo $bid_id;?>");

                        // Start the timer
                        let secondsRemaining<?php echo $bid_id;?> = totalSeconds<?php echo $bid_id;?>;
                        let timerId<?php echo $bid_id;?> = setInterval(() => {
                            // Calculate the number of minutes and seconds remaining
                            const minutesRemaining<?php echo $bid_id;?> = Math.floor(
                                secondsRemaining<?php echo $bid_id;?> / 60);
                            const secondsInMinuteRemaining<?php echo $bid_id;?> =
                                secondsRemaining<?php echo $bid_id;?> % 60;

                            // Update the timer display
                            timerElement<?php echo $bid_id;?>.innerText =
                                `${minutesRemaining<?php echo $bid_id;?>}:${secondsInMinuteRemaining<?php echo $bid_id;?> < 10 ? '0' : ''}${secondsInMinuteRemaining<?php echo $bid_id;?>}`;
                            // Decrement the number of seconds remaining
                            secondsRemaining<?php echo $bid_id;?>--;
                            // If the timer has reached zero, stop the interval
                            if (secondsRemaining<?php echo $bid_id;?> < 0) {
                                clearInterval(timerId<?php echo $bid_id;?>);
                                timerElement<?php echo $bid_id;?>.innerText = "CLOSED";
                            }
                        }, 1000);
                        </script>



                         <button class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase"  data-min_amo='<?php echo $bid_price; ?>,<?php echo $bid_inc_price; ?>'>$<?php echo $bid_price; ?> </button>

                        <span class="sc-ciZhAO bpCaOA d-inline-block" style="margin-bottom:3px;">winning<img
                                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8d29tYW4lMjBwcm9maWxlfGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                                class="sc-himrzO kCyZje rounded-circle"><span class="sc-jdAMXn bbLgnY">John<svg
                                    xmlns="http://www.w3.org/2000/svg" height="13" viewBox="0 0 512 341.337">
                                    <g transform="translate(0 -85.331)">
                                        <rect width="512" height="341.337" transform="translate(0 85.331)"
                                            fill="#f0f0f0"></rect>
                                        <g>
                                            <rect width="512" height="42.663" transform="translate(0 127.994)"
                                                fill="#d80027"></rect>
                                            <rect width="512" height="42.663" transform="translate(0 213.331)"
                                                fill="#d80027"></rect>
                                            <rect width="512" height="42.663" transform="translate(0 298.657)"
                                                fill="#d80027"></rect>
                                            <rect width="512" height="42.663" transform="translate(0 383.994)"
                                                fill="#d80027"></rect>
                                        </g>
                                        <rect width="256" height="183.797" transform="translate(0 85.331)"
                                            fill="#2e52b2"></rect>
                                        <g>
                                            <path
                                                d="M99.822,160.624,95.7,173.308H82.363l10.791,7.835-4.123,12.683,10.791-7.835,10.784,7.835-4.122-12.683,10.791-7.835H103.938Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M103.938,219.08,99.822,206.4,95.7,219.08H82.363l10.791,7.836L89.031,239.6l10.791-7.836,10.784,7.836-4.122-12.683,10.791-7.836Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M47.577,219.08,43.46,206.4,39.337,219.08H26l10.791,7.836L32.669,239.6l10.791-7.836L54.245,239.6l-4.122-12.683,10.789-7.836Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M43.46,160.624l-4.123,12.684H26l10.791,7.835-4.123,12.683,10.791-7.835,10.785,7.835-4.122-12.683,10.789-7.835H47.577Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M99.822,114.85,95.7,127.535H82.363l10.791,7.836-4.123,12.683,10.791-7.836,10.784,7.836-4.122-12.683,10.791-7.836H103.938Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M43.46,114.85l-4.123,12.685H26l10.791,7.836-4.123,12.683,10.791-7.836,10.785,7.836-4.122-12.683,10.789-7.836H47.577Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M156.183,160.624l-4.122,12.684H138.725l10.79,7.835-4.121,12.683,10.789-7.835,10.786,7.835-4.123-12.683,10.791-7.835H160.3Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M160.3,219.08,156.183,206.4l-4.122,12.683H138.725l10.79,7.836L145.394,239.6l10.789-7.836,10.786,7.836-4.123-12.683,10.791-7.836Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M216.663,219.08,212.546,206.4l-4.123,12.683H195.088l10.789,7.836L201.755,239.6l10.791-7.836,10.785,7.836-4.123-12.683L230,219.08Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M212.546,160.624l-4.123,12.684H195.088l10.789,7.835-4.122,12.683,10.791-7.835,10.785,7.835-4.123-12.683L230,173.308H216.663Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M156.183,114.85l-4.122,12.685H138.725l10.79,7.836-4.121,12.683,10.789-7.836,10.786,7.836-4.123-12.683,10.791-7.836H160.3Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M212.546,114.85l-4.123,12.685H195.088l10.789,7.836-4.122,12.683,10.791-7.836,10.785,7.836-4.123-12.683L230,127.535H216.663Z"
                                                fill="#f0f0f0"></path>
                                        </g>
                                    </g>
                                </svg></span></span>
                            <div class="retail" style="margin-bottom:3px;color:#323030;font-size:14px;"><b>Retail:$454</b></div>
                            <div><span class="sc-bBXxYQ cIskxF"><b style="color:#323030;font-size:13px;">Sold by</b></span><a style="padding-left:1px;" data-cy="sold-by-vendor-link"
                                    href="/">E-Trade</a></div>
                        </div>
                </div>
            </div><?php } ?>
        </div>
    </div>
</section>
<style>
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
</style>

<div class="w3-container">
        <div id="id01" class="w3-modal fullpopupimgsss">
            <div class="w3-modal-content">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-display-topright" style="border:none;">&times;</span>
                <style>
                @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

                .detail {
                    display: flex;
                }

                .detail img {
                    width: 48px;
                    height: 33px;
                    margin-top: -6px;
                    margin-right: 5px;
                }

                img {
                    width: 100%;
                    display: block;
                }

                .img-display {
                    overflow: hidden;
                }

                .img-showcase {
                    display: flex;
                    width: 100%;
                    transition: all 0.5s ease;
                }

                .img-showcase img {
                    min-width: 100%;
                }

                .img-select {
                    display: flex;
                }

                .img-item {
                    margin: 0.3rem;
                }
                .img-item:nth-child(1),
                .img-item:nth-child(2),
                .img-item:nth-child(3) {
                    margin-right: 0;
                }
                .img-item:hover {
                    opacity: 0.8;
                }
                .product-content {
                    padding: 2rem 1rem;
                }
                .product-title {
                    font-size: 3rem;
                    text-transform: capitalize;
                    font-weight: 700;
                    position: relative;
                    color: #12263a;
                    margin: 1rem 0;
                }
                .product-title::after {
                    content: "";
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    height: 4px;
                    width: 80px;
                    background: #12263a;
                }
                .product-link {
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 400;
                    font-size: 0.9rem;
                    display: inline-block;
                    margin-bottom: 0.5rem;

                    color: #fff;
                    padding: 0 0.3rem;
                    transition: all 0.5s ease;
                }
                .product-link:hover {
                    opacity: 0.9;
                }
                .product-rating {
                    color: #ffc107;
                }
                .product-rating span {
                    font-weight: 600;
                    color: #252525;
                }
                .product-price {
                    margin: 1rem 0;
                    font-size: 1rem;
                    font-weight: 700;
                }
                .product-price span {
                    font-weight: 400;
                }

                .last-price span {
                    color: #f64749;
                    text-decoration: line-through;
                }

                .new-price span {
                    color: #256eff;
                }

                .product-detail h2 {
                    text-transform: capitalize;
                    color: #12263a;
                    padding-bottom: 0.6rem;
                }

                .product-detail p {
                    font-size: 0.9rem;
                    padding: 0.3rem;
                    opacity: 0.8;
                }

                .product-detail ul {
                    margin: 1rem 0;
                    font-size: 0.9rem;
                }

                .product-detail ul li {
                    margin: 0;
                    list-style: none;
                    background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
                    background-size: 18px;
                    padding-left: 1.7rem;
                    margin: 0.4rem 0;
                    font-weight: 600;
                    opacity: 0.9;
                }

                .product-detail ul li span {
                    font-weight: 400;
                }
                .purchase-info {
                    margin: 1.5rem 0;
                }

                .purchase-info input,
                .purchase-info .btn {
                    border: 1.5px solid #ddd;
                    border-radius: 25px;
                    text-align: center;
                    padding: 0.45rem 0.8rem;
                    outline: 0;
                    margin-right: 0.2rem;
                    margin-bottom: 1rem;
                }

                .purchase-info input {
                    width: 60px;
                }

                .purchase-info .btn {
                    cursor: pointer;
                    color: #fff;
                }

                .purchase-info .btn:first-of-type {
                    background: #256eff;
                }

                .purchase-info .btn:last-of-type {
                    background: #f64749;
                }

                .purchase-info .btn:hover {
                    opacity: 0.9;
                }

                .social-links {
                    display: flex;
                    align-items: center;
                    margin-left: 5px;
                }

                .social-links a {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 32px;
                    height: 32px;
                    color: #000;

                    margin: 0 0.2rem;
                    margin-top: -26px;
                    border-radius: 50%;
                    text-decoration: none;
                    font-size: 0.8rem;
                    transition: all 0.5s ease;
                }

                .social-links a:hover {
                    background: white;
                    border-color: transparent;
                    color: #fff;
                }

                .product-imgs {
                    width: 120%;
                    height: 50%;
                }

                .one {
                    display: flex;
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


                .w3-button {
                    background: #1657cb;
                    color: white;
                    border-radius: 1px;
                }

                .w3-button:hover {
                    background: #043fa9;
                    color: white;
                }

                .btn_grad_blgr {

                    border-radius: 15px;
                    padding: 9px 19px;
                    align-items: center;
                    font-size: 11px;
                    font-weight: 500;
                    background: #1657cb;
                    color: #fff;
                    text-transform: uppercase;
                }


                /* @media screen and (min-width: 992px){
            .card{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }
            .card-wrapper{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .product-imgs{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .product-content{
                padding-top: 0;
            }
        } */
                </style>
                <div class="card-wrapper">
                    <div class="card" style="min-width:95%;border:none;">
                        <!-- card left -->
                        <div class="one">
                            <div class="product-imgs">
                                <div class="img-display">
                                    <div class="img-showcase">
                                        <img class="masterImg" src="" alt="shoe image">
                                        
                                        <img src="" alt="product image">
                                        <img  src="" alt="product image">
                                        <img  src="" alt="product image">
                                    </div>
                                </div>
                                <div class="img-select">
                                    <div class="img-item">
                                        <a href="#" data-id="1">
                                            <img class="childOne" src="" alt="shoe image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="2">
                                            <img class="childTwo" src="" alt="shoe image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="3">
                                            <img class="childThree" src="" alt="shoe image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="4">
                                            <img class="childFour" src="" alt="shoe image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- card right -->
                            <div class="product-content">
                                <h2 class="product-title">NIke Shoes</h2>
                                <a href="#" class="product-link">visit nike store</a>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>4.7(21)</span>
                                </div><br>
                                <div class="detail">
                                    <img src="assets/images/delivery-truck (1).png" style="width:39px;" alt="">
                                    <div class="p"> <b> Free Shipping, Free Returns</b>
                                        Delivery time varies by size, select your size for shipping estimates.</div><br>
                                </div>
                                <div class="product-price">
                                    <p class="last-price">Old Price: <span class="oldprice"></span></p>
                                    <p class="new-price">New Price: <span class="newPrice"></span></p>
                                </div>
                                <div class="product-detail">
                                    <h2>about this item: </h2>
                                    <p class="proDisc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam
                                        tempora
                                        fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur
                                        quidem at sequi ipsa!</p>
                                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
                                    <ul>
                                        <li>Color: <span>Black</span></li>
                                        <li>Available: <span>in stock</span></li>
                                        <li>Category: <span>Shoes</span></li>
                                        <li>Shipping Area: <span>All over the world</span></li>
                                        <li>Shipping Fee: <span>Free</span></li>
                                    </ul>
                                </div>
                                <div class="purchase-info">
                                    <h3>Size</h3>
                                    <button type="button" class="btn">
                                        7 <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button type="button" class="btn"
                                        style="background-color: white; color: #000;">8</button>
                                    <button type="button" class="btn"
                                        style="background-color: white; color: #000;">9</button>
                                    <button type="button" class="btn"
                                        style="background-color: white; color: #000;">10</button>
                                </div>
                                <div class="purchase-info">
                                    <label for="">Quantity</label>
                                    <input type="number" min="0" value="1">
                                    <button type="button" class="btn">
                                        <a href="cart.php" style="color:white;"> Add to Cart </a> <i
                                            class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button type="button" class="btn">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="social-links">
                            <p>Share At: </p>
                            <a href="#">
                                <img src="assets/images/facebook.png" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/images/instagram.png" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/images/twitter.png" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/images/whatsapp.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <script src="assets/js/modal.js"></script>
            </div>
        </div>
    </div>
</div>
        


                       
  



</div>
</div>
</div>
<style>
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
</style>






<script>
function show() {
    var x = document.getElementById("showw");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function expand() {
    var y = document.getElementById("show-list");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
</script>
<?php include("include/footer.php"); ?>
<style>
.btn_grad_blgr {

    height: 32px;
    align-items: center;
    margin-bottom: 7px;
    text-transform: uppercase;

}

.btn_grad_blgr:hover {
    background: #043fa9;
    color: white;
}

.card {
    width: 190px;
    display: inline-block;
    height: 430px;
    margin-bottom: 30px;
    border-radius: 15px;
}
.kCyZje {
    border: 1px solid black;
    width: 18px;
    height: 18px;
    padding-top: 0px;

}
.bpCaOA {
    min-height: 15px;
    display: block;
    font-size: 0.8rem;
    font-weight: 300;
    letter-spacing: 2px;
    text-align: center;
    text-transform: uppercase;
}
</style>

<script>
function increaseQuantity() {
  var quantity = parseInt(document.getElementById("quantity").value); // Get the current quantity value
  quantity += 5; // Increase the quantity by 5
  document.getElementById("quantity").value = quantity; // Update the quantity value in the input field
}
</script>
<script>
$(document).ready(function() {
    $(".card-img-top").click(function() {
        var bidId = $(this).attr('data-bidId');
        // alert(proId);
        $.ajax({
            url: "get_bid_details.php",
            type: "post",
            data: {
                bidId: bidId,
                model:'bid',
            },
            success: function(data){
                var rec=JSON.parse(data);
                console.log(data);
                //  alert(data);
                // console.log(rec.product_name);
                $(".product-title").text(rec.product_name);
                $(".oldprice").text(rec.product_old_price);
                $(".newPrice").text(rec.bid_new_price);
                $(".proDisc").text(rec.product_description);
                $(".masterImg").attr("src",'./upload/product/'+rec.product_image1);
                $(".childOne").attr("src",'./upload/product/'+rec.product_image2);
                $(".childTwo").attr("src",'./upload/product/'+rec.product_image3);
                $(".childThree").attr("src",'./upload/product/'+rec.product_image4);
                $(".childFour").attr("src",'./upload/product/'+rec.product_image5);
                $(".fullpopupimgsss").show();
            }
        });
    });
});
</script>

<script>
$(document).ready(function(){
    $(".increase").click(function(){
        var data=$(this).attr('data-min_amo');
        
 alert(data);
      
       
          

            
    });
});

</script>



<script>
    //search result
$(document).ready(function () {
  $("#search").keyup(function () {
    var search = $(this).val();
    $.ajax({
      type: "POST",
      url: "search_product.php",
      data: { search: search },
      success: function (data) {
        console.log(data);
        // Clear previous search results
        $("#search_results").empty();

        // Append new search results
        data.forEach(function (product) {
          $("#search_results").append(
            '<a href="home.php?id=' +
              product.bid_id +
              '"><p>' +
              product.product_name +
              "</p>"
          );
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        // console.log(textStatus, errorThrown);
      },
    });
  });
});
</script>