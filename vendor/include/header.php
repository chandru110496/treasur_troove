<?php include("include/conn.php"); ?>
<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("Location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Treasure Troove Admin Dashboard</title>
    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <!-- <link href="css/plugins/pace/pace.css" rel="stylesheet"> -->
    <!-- <script src="js/plugins/pace/pace.js"></script> -->
    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic'
        rel="stylesheet" type="text/css">
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/website/css/uicons-outline-rounded.css" rel="stylesheet">
    <!-- PAGE LEVEL PLUGIN STYLES -->
    <!-- <link href="css/plugins/messenger/messenger.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/morris/morris.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"> -->
    <link href="css/plugins/datatables/datatables.css" rel="stylesheet">
    <!-- <------------fav icon------>
    <link rel="icon" type="image/png" href="../assets/images/icons/admin1.png">
    <!-- THEME STYLES - Include these on every page. -->
    <link href="css/flex-admin.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="css/demo.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <link href="css/w3.css" rel="stylesheet">
    <style>
        .daterangepicker td.active,
        .daterangepicker td.active:hover {
            background-color: #16a085;
            border-color: #16a085;
            color: #fff;
        }

        .daterangepicker .ranges li.active,
        .daterangepicker .ranges li:hover {
            background: #16a085;
            border: 1px solid #16a085;
            color: #fff;
        }

        .daterangepicker .ranges li {
            color: #16a085;
        }
    </style>
    <!-- at the modal page of the buy page product details -->



</head>

<body>

    <div id="wrapper">
        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">
            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse"
                    data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <a href="index.php">
                        <b style="color:white;">Treasure Trooove</b>
                    </a>
                </div>
            </div>
            <!-- end BRAND HEADING -->
            <div class="nav-top">
                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right"
                            title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- You may add more widgets here using <li> -->
                </ul>
                <!-- end LEFT SIDE WIDGETS -->
                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">
                    <!-- begin USER ACTIONS DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a class="logout_open" href="#logout">
                                    <i class="fa fa-sign-out"></i> Logout
                                    <strong>Vendor </strong>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->
        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" src="img/profile-pic.png" alt="">
                        <p class="welcome">
                            <i class="fa fa-key"></i> Logged in as
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            <?php echo $_SESSION['admin_name'] ?>  <span class="last-name"></span> <a
                                style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip"
                                data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <a class="active" href="index.php">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle"
                            data-target="#cs">
                            <i class="fa fa-shopping-cart"></i>Vendor Upload<i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="cs">
                            <li>
                            <a  href="javascript:;" data-parent="#sid" data-toggle="collapse" class="accordion-toggle"
                            data-target="#bd">
                                     Upload Bid Products<i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="collapse nav" id="bd">
                                <li>
                                <a href="bid_hot.php?type=hot">
                                    <i class="fa fa-angle-double-right"></i>Hot Bid
                                </a>
                            </li>
                                <li>
                                <a href="bid_upcoming.php?type=upc">
                                    <i class="fa fa-angle-double-right"></i>Upcoming Bid Products
                                </a>
                            </li>
                            </ul>
                            </li>
                            <li>
                            <a  href="javascript:;" data-parent="#sid" data-toggle="collapse" class="accordion-toggle"
                            data-target="#buy">
                                     Upload Buy Products<i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="collapse nav" id="buy">
                                <li>
                                <a href="hot_buy.php?type=hot">
                                    <i class="fa fa-angle-double-right"></i>Hot Buy
                                </a>
                            </li>
                                <li>
                                <a href="buy_upcoming.php?type=upc">
                                    <i class="fa fa-angle-double-right"></i>Upcoming buy Products
                                </a>
                            </li>
                            </ul>
                            </li>
                            <li>
                        
                           
                            <!-- <li>
                                <a href="javascript:;" data-parent="#csss" data-toggle="collapse" class="accordion-toggle"
                            data-target="#csssd">Upload deal Products<i class="fa fa-caret-down"></i>       
                                </a>


                                <ul class="collapse nav" id="csssd">
                                <li>
                                <a href="deal.php?type=hot">
                                    <i class="fa fa-angle-double-right"></i>Hot Deal
                                </a>
                            </li>
                                <li>
                                <a href="deal_upcoming.php?type=upc">
                                    <i class="fa fa-angle-double-right"></i>Upcoming Deal Products
                                </a>
                            </li>
                            </ul>
                            </li> -->
                        </ul>
                    </li>
                    <!-- <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle"
                            data-target="#csss">
                            <i class="fa fa-users"></i>Users Upload <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csss">
                            <li>
                                <a href="javascript:;" data-parent="#csss" data-toggle="collapse" class="accordion-toggle"
                            data-target="#csssd">Upload deal Products<i class="fa fa-caret-down"></i>       
                                </a>


                                <ul class="collapse nav" id="csssd">
                                <li>
                                <a href="deal.php?type=hot">
                                    <i class="fa fa-angle-double-right"></i>Hot Deal
                                </a>
                            </li>
                                <li>
                                <a href="deal_upcoming.php?type=upc">
                                    <i class="fa fa-angle-double-right"></i>Upcoming Deal Products
                                </a>
                            </li>
                            </ul>




                            </li>
                            
                            
                        </ul>
                    </li> -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle"
                            data-target="#css">
                            <i class='fa fa-list-alt'></i> Category <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="css">
                            <li>
                                <a href="category.php">
                                    <i class="fa fa-angle-double-right"></i>Category
                                </a>
                            </li>
                            <li>
                                <a href="sub_category.php">
                                    <i class="fa fa-angle-double-right"></i>sub Category
                                </a>
                            </li>
                            <!-- <li>
                                <a href="Inner_category.php">
                                    <i class="fa fa-angle-double-right"></i> Sub Category
                                </a>
                            </li> -->
                        </ul>
                    </li>
                     <li>
                                <a href="largecards.php">
                                <i class='fa fa-list-alt'></i> Catalogue 
                                </a>
                            </li>
                    <!-- <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle"
                            data-target="#csss">
                            <i class="fa fa-users"></i> Attributes <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csss">
                            <li>
                                <a href="brand.php">
                                    <i class="fa fa-angle-double-right"></i> Brands
                                </a>
                            </li>
                            <li>
                                <a href="attributes.php">
                                    <i class="fa fa-angle-double-right"></i> attributes
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <?php if($_SESSION['type']=='admin'){ ?>
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#csad">
                        <i class='fa fa-archive'></i> Advertising <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csad">
                        <li>
                        <a class="" href="Advertise.php">
                            <i class="fa fa-angle-double-right"></i>Add Ads Category
                        </a>
                        <a class="" href="total_ads.php">
                            <i class="fa fa-angle-double-right"></i>All Ads
                        </a>
                    </li>                                                
                    </ul>
                    </li>
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#csa">
                        <i class='fa fa-refresh'></i> Save A life <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csa">
                            <li>
                                <a href="save_slider.php">
                                    <i class="fa fa-angle-double-right"></i> Slider
                                </a>
                            </li>
                            <li>
                                <a href="save_cards.php">
                                    <i class="fa fa-angle-double-right"></i> Cards
                                </a>
                            </li>
                           <li>
                                <a href="save_voluntres.php">
                                    <i class="fa fa-angle-double-right"></i> Our Volutres
                                </a>
                            </li>
                           <li>
                                <a href="save_activities.php">
                                    <i class="fa fa-angle-double-right"></i>Activites
                                </a>
                            </li>
                        </ul>
                    </li><?php } ?>

                    <!-- <?php if($_SESSION['type']=='vendor'){ ?>
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#csw">
                            <i class="fa fa-home"></i> Warehouse <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csw">
                            <li>
                                <a href="war_title.php">
                                    <i class="fa fa-angle-double-right"></i> Title
                                </a>
                            </li>
                           <li>
                                <a href="war_banner.php">
                                    <i class="fa fa-angle-double-right"></i> Banner
                                </a>
                            </li>
                           <li>
                                <a href="wearhouse_products.php"><i class="fa fa-angle-double-right"></i>
                                    Products                                
                                </a>
                            </li>                          
                        </ul>
                    </li><?php } ?> -->
                <!-- <li>
                                <a href="notifications.php"><i class="fa fa-angle-double-right"></i>
                                   Notification
                                    
                                </a>
                            </li> -->
                            <?php if($_SESSION['type']=='admin'){ ?>
                    <!-- <li>
                        <a class="" href="Payments.php">
                            <i class="fa fa-money"></i>Payments
                        </a>
                    </li> -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#csrep">
                        <i class='fa fa-list-alt'></i> Reports <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csrep">
                     
                    <!-- <li>
                        <a class="" href="Job_report.php">
                            <i class="fa fa-user"></i>Job Reports
                        </a>
                    </li> -->
                    
                    
                    <li>
                        <a class="" href="orders.php">
                            <i class="fa fa-list-alt"></i>Orders Reports
                        </a>
                    </li>
                    <!-- <li>
                        <a class="" href="Payments.php">
                            <i class="fa fa-money"></i>Payments Reports
                        </a>
                    </li> -->
                        </ul>
                    </li><?php } ?>


<!-- <?php print_r($_SESSION); ?> -->
                    <li class="panel">
                        <a class="" href="javascript:;"  data-parent="#side" data-toggle="collapse" class="accordion-toggle"
                            data-target="#cssss">
                            <i class='fa fa-list-alt'></i>Product Reports<i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="cssss">
                            <li>
                                <a href="bid_report.php">
                                    <i class="fa fa-angle-double-right"></i>  Bid Products Reports
                                </a>
                            </li>
                            <li>
                                <a href="product.php">
                                    <i class="fa fa-angle-double-right"></i> Buy  Reports
                                </a>
                            </li>
                            <!-- <li>
                                <a href="slider.php">
                                    <i class="fa fa-angle-double-right"></i> Invest items Reports
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="deal_report.php">
                                    <i class="fa fa-angle-double-right"></i> Deal Reports
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="catalog.php">
                                    <i class="fa fa-angle-double-right"></i> Catalogue Products Reports
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <?php if($_SESSION['type']=='admin'){ ?>
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#csset">
                        <i class='fa fa-cogs'></i>Settings <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="csset" >
                        <li>
                         <?php
                        $sql = "SELECT * FROM `privacy_policy`";
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);                             
                                     if ($row = mysqli_fetch_assoc($result)) {
                                         $Id=$row['id'];
                                         $con=$row['content'];
                                       };  ?>
                                <a href="edit_privacy.php?edit='<?=$row['id']?>'">
                                    <i class="fa fa-angle-double-right"></i>Privacy Policy</a>
                            </li>                         
                        <li>
                         <?php
                        $sql = "SELECT * FROM `terms`";
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);                             
                                     if ($row = mysqli_fetch_assoc($result)) {
                                         $Id=$row['term'];
                                         $con=$row['content'];
                                       };  ?>
                                <a href="edit_terms.php?edit='<?=$row['term']?>'">
                                    <i class="fa fa-angle-double-right"></i>Terms And Conditions</a>
                            </li>                         
                        <li>
                         <?php
                        // $sql = "SELECT * FROM `faq`";
                        //          $result = mysqli_query($conn, $sql);
                        //          print_r($result);                             
                        //              if ($row = mysqli_fetch_assoc($result)) {
                        //                  $ques=$row['ques'];
                        //                  $ans=$row['ans'];
                        //                };  ?>
                                <!-- <a href="faq.php">
                                    <i class="fa fa-angle-double-right"></i>FAQ</a>
                            </li>                         
                                                
                        <li>
                                <a href="slider.php">
                                    <i class="fa fa-angle-double-right"></i>  About Us 
                                </a>
                                </a>
                            </li>                          -->
                        </ul>
                    </li><?php } ?>
                    <!-- <li>
                        <a href="#.php" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-key"></i>Change password
                        </a>
                    </li> -->
                    <li>
                        <a class="" href="logout.php">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>

