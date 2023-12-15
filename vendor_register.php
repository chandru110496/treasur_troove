<?php include("include/database.php");
session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
    <style>@media(min-width:991px){
   
    .nav-item{
        padding-left: 20px;
    }
    }
   

   
.about{


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
.about input:focus{}

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
<!-- Mirrored from templates.envytheme.com/eeza/default/profile-authentication.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:05:44 GMT -->
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
                       
              while($row=mysqli_fetch_assoc($result)){
                   // print_r($result);
                   $ads_id = $row['ads_id'];
                   $ads_name = $row['ads_name'];
              ?>
                    <li><a href="matrimony.php?ads=<?php echo $ads_id?>"><?php echo $ads_name?></a></li>
              
                   
            <?php } ?>
              </ul>
            
            </nav>
      </div>
  <!-- navigation close -->

    
</div>
   <!-- navigation close -->

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
                                                    $sub_category_id= $rows['sub_category_id'];
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
                                                    $sub_category_id= $rows['sub_category_id'];
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
                            <?php    if (isset($_SESSION['user_details'])==FALSE) {?>
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
   .goog-te-combo{

border:none;
color: var(--paragraph-color);
   font-size: 15px;
   font-family: var(--heading-font-family);
   font-weight: 600;
   width:94px;
}
   .goog-te-combo:active{

border:none;

   }
   .goog-te-gadget img {
 
   visibility: hidden;}

   .VIpgJd-ZVi9od-l4eHX-hSRGPd, .VIpgJd-ZVi9od-l4eHX-hSRGPd:link, .VIpgJd-ZVi9od-l4eHX-hSRGPd:visited, .VIpgJd-ZVi9od-l4eHX-hSRGPd:hover, .VIpgJd-ZVi9od-l4eHX-hSRGPd:active {
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

.goog-te-combo:active{border:none}
.dropdown-item{
                                    width: 215px;
                                    margin-left: 20px;
                                }

</style>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                <div id="google_translate_element"></div>
                                <script>
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
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
                                            $('.goog-te-menu-value span:first-child').css('text-transform', 'capitalize');
                                        }, 1000);
                                    }

                                    // Change the label from "Select language" to "Language"
                                    setTimeout(function() {
                                        $('.goog-te-combo').find('option:first').text('Language');
                                    }, 1000);
                                </script>
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
                                    <?php if (isset($_SESSION['user_details'])) {?>
                                    <img src="upload/profile/<?php echo $_SESSION['user_details']['user_img']?>"
                                        class="sc-himrzO kCyZje rounded-circle" style="width: 30px;
    height: 30px;border:none;
">
                                    <?php	} else if (isset($_SESSION['vendor_details'])){?>
                                    <img src="upload/vendors/<?php echo $_SESSION['vendor_details']['vendor_image']?>"
                                        class="sc-himrzO kCyZje rounded-circle" style="width: 25px;
   height: 25px;
">
                                    <?php	} else if (isset($_SESSION['s_provider'])){?>
                                    <img src="upload/vendors/<?php echo $_SESSION['s_provider']['vendor_image']?>"
                                        class="sc-himrzO kCyZje rounded-circle" style="width: 25px;
   height: 25px;
">
                                    <?php  }else{echo '';
                            } ?> My Account </a>
   
   <ul class="dropdown-menu">
                      
   <a class="dropdown-item" href="savelife.php">
                                            Save a Life
                                        </a>
                                        <a class="dropdown-item" href="paymenthistory.php">
                                            Payment History
                                        </a>                                       
                                        <a class="dropdown-item" href="winning_bid.php">
                                            Winning Bid
                                        </a>
                                        <a class="dropdown-item" href="winning_unbid.php">
                                             Bid unpaid list
                                        </a> 
                                        <?php if (isset($_SESSION['user_details'])) { ?>
                                        <a class="dropdown-item" href="user/deal.php?type=hot">
                                             Upload Deal Products
                                        </a>
                                        <?php }?>
                                        <a class="dropdown-item" href="wishlist.php">
                                            Wish List
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Setting
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
    .nav-items{display: inline-block;
    margin: 5px;
    position: relative;
    margin-left: 15px;
    margin-right: 15px;
}
.profile-authentication-tabs{width:600px;}
</style>
<div id="scrollButtonContainer">
    <button onclick="goBack()" class="back">
        <i class="ri-arrow-left-line button"></i>
    </button>
</div>
<style>
  #scrollButtonContainer {
    position: fixed;
    bottom: 5px; /* Adjust the distance from the bottom as needed */
    right: 20px; /* Adjust the distance from the right as needed */
    z-index: 9999; /* Ensures it appears on top of other elements */
}

</style>
<script>
    function goBack() {
        // Scroll down by a specific amount when the button is clicked
        window.scrollBy(10, 100); // Adjust the 100 to the desired scroll amount
    }
</script>
    <body>
    <h3 class="text-center" >Vendor Login/Register</h3>
   <!-- Start Profile Authentication Area -->
        <div class="profile-authentication-area ptb-100">
            <div class="container" style="margin-top:29px;">
                <div class="profile-authentication-tabs">
                    <div class="authentication-tabs-list">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#user_log" role="tab" aria-controls="register">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="login">Register</a>
                            </li>                           
                                                        
                        </ul>
                    </div>
<!-- regisetration page for vendors  -->



<div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="register" role="tabpanel">
                            <div class="eeza-authentication-form">
                            <form method="POST" action="reg_ven.php" id="form" enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group">
                                        <label for="vendor_image">Image</label>
                                        <input type="file"name="vendor_image" class="form-control"  id="vendor_image">
                                        <p id="vendor_image_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="fname" class="form-control" placeholder=" Name" id="username">
                                        <p id="name_error" style="color:red;"></p>
                                    </div>
                                     <!-- for country codes in country -->

                                     <div class="form-group" style="display:flex;">

<select name="country_code" class="form-control" style="width: 30%;">
    <?php
    $countryCodes = [


        '1' => 'USA (+1)',
        '213' => 'Algeria (+213)',
        '376' => 'Andorra (+376)',
        '244' => 'Angola (+244)',
        '1264' => 'Anguilla (+1264)',
        '1268' => 'Antigua & Barbuda (+1268)',
        '54' => 'Argentina (+54)',
        '374' => 'Armenia (+374)',
        '297' => 'Aruba (+297)',
        '61' => 'Australia (+61)',
        '43' => 'Austria (+43)',
        '994' => 'Azerbaijan (+994)',
        '1242' => 'Bahamas (+1242)',
        '973' => 'Bahrain (+973)',
        '880' => 'Bangladesh (+880)',
        '1246' => 'Barbados (+1246)',
        '375' => 'Belarus (+375)',
        '32' => 'Belgium (+32)',
        '501' => 'Belize (+501)',
        '229' => 'Benin (+229)',
        '1441' => 'Bermuda (+1441)',
        '975' => 'Bhutan (+975)',
        '591' => 'Bolivia (+591)',
        '387' => 'Bosnia Herzegovina (+387)',
        '267' => 'Botswana (+267)',
        '55' => 'Brazil (+55)',
        '673' => 'Brunei (+673)',
        '359' => 'Bulgaria (+359)',
        '226' => 'Burkina Faso (+226)',
        '257' => 'Burundi (+257)',
        '855' => 'Cambodia (+855)',
        '237' => 'Cameroon (+237)',
        '238' => 'Cape Verde Islands (+238)',
        '1345' => 'Cayman Islands (+1345)',
        '236' => 'Central African Republic (+236)',
        '56' => 'Chile (+56)',
        '86' => 'China (+86)',
        '57' => 'Colombia (+57)',
        '269' => 'Comoros (+269)',
        '242' => 'Congo (+242)',
        '682' => 'Cook Islands (+682)',
        '506' => 'Costa Rica (+506)',
        '385' => 'Croatia (+385)',
        '53' => 'Cuba (+53)',
        '90392' => 'Cyprus North (+90392)',
        '357' => 'Cyprus South (+357)',
        '42' => 'Czech Republic (+42)',
        '45' => 'Denmark (+45)',
        '253' => 'Djibouti (+253)',
        '1809' => 'Dominica (+1809)',
        '1809' => 'Dominican Republic (+1809)',
        '593' => 'Ecuador (+593)',
        '20' => 'Egypt (+20)',
        '503' => 'El Salvador (+503)',
        '240' => 'Equatorial Guinea (+240)',
        '291' => 'Eritrea (+291)',
        '372' => 'Estonia (+372)',
        '251' => 'Ethiopia (+251)',
        '500' => 'Falkland Islands (+500)',
        '298' => 'Faroe Islands (+298)',
        '679' => 'Fiji (+679)',
        '358' => 'Finland (+358)',
        '33' => 'France (+33)',
        '594' => 'French Guiana (+594)',
        '689' => 'French Polynesia (+689)',
        '241' => 'Gabon (+241)',
        '220' => 'Gambia (+220)',
        '7880' => 'Georgia (+7880)',
        '49' => 'Germany (+49)',
        '233' => 'Ghana (+233)',
        '350' => 'Gibraltar (+350)',
        '30' => 'Greece (+30)',
        '299' => 'Greenland (+299)',
        '1473' => 'Grenada (+1473)',
        '590' => 'Guadeloupe (+590)',
        '671' => 'Guam (+671)',
        '502' => 'Guatemala (+502)',
        '224' => 'Guinea (+224)',
        '245' => 'Guinea - Bissau (+245)',
        '592' => 'Guyana (+592)',
        '509' => 'Haiti (+509)',
        '504' => 'Honduras (+504)',
        '852' => 'Hong Kong (+852)',
        '36' => 'Hungary (+36)',
        '354' => 'Iceland (+354)',
        '91' => 'India (+91)',
        '62' => 'Indonesia (+62)',
        '98' => 'Iran (+98)',
        '964' => 'Iraq (+964)',
        '353' => 'Ireland (+353)',
        '972' => 'Israel (+972)',
        '39' => 'Italy (+39)',
        '1876' => 'Jamaica (+1876)',
        '81' => 'Japan (+81)',
        '962' => 'Jordan (+962)',
        '7' => 'Kazakhstan (+7)',
        '254' => 'Kenya (+254)',
        '686' => 'Kiribati (+686)',
        '850' => 'Korea North (+850)',
        '82' => 'Korea South (+82)',
        '965' => 'Kuwait (+965)',
        '996' => 'Kyrgyzstan (+996)',
        '856' => 'Laos (+856)',
        '371' => 'Latvia (+371)',
        '961' => 'Lebanon (+961)',
        '266' => 'Lesotho (+266)',
        '231' => 'Liberia (+231)',
        '218' => 'Libya (+218)',
        '417' => 'Liechtenstein (+417)',
        '370' => 'Lithuania (+370)',
        '352' => 'Luxembourg (+352)',
        '853' => 'Macao (+853)',
        '389' => 'Macedonia (+389)',
        '261' => 'Madagascar (+261)',
        '265' => 'Malawi (+265)',
        '60' => 'Malaysia (+60)',
        '960' => 'Maldives (+960)',
        '223' => 'Mali (+223)',
        '356' => 'Malta (+356)',
        '692' => 'Marshall Islands (+692)',
        '596' => 'Martinique (+596)',
        '222' => 'Mauritania (+222)',
        '269' => 'Mayotte (+269)',
        '52' => 'Mexico (+52)',
        '691' => 'Micronesia (+691)',
        '373' => 'Moldova (+373)',
        '377' => 'Monaco (+377)',
        '976' => 'Mongolia (+976)',
        '1664' => 'Montserrat (+1664)',
        '212' => 'Morocco (+212)',
        '258' => 'Mozambique (+258)',
        '95' => 'Myanmar (+95)',
        '264' => 'Namibia (+264)',
        '674' => 'Nauru (+674)',
        '977' => 'Nepal (+977)',
        '31' => 'Netherlands (+31)',
        '687' => 'New Caledonia (+687)',
        '64' => 'New Zealand (+64)',
        '505' => 'Nicaragua (+505)',
        '227' => 'Niger (+227)',
        '234' => 'Nigeria (+234)',
        '683' => 'Niue (+683)',
        '672' => 'Norfolk Islands (+672)',
        '670' => 'Northern Marianas (+670)',
        '47' => 'Norway (+47)',
        '968' => 'Oman (+968)',
        '680' => 'Palau (+680)',
        '507' => 'Panama (+507)',
        '675' => 'Papua New Guinea (+675)',
        '595' => 'Paraguay (+595)',
        '51' => 'Peru (+51)',
        '63' => 'Philippines (+63)',
        '48' => 'Poland (+48)',
        '351' => 'Portugal (+351)',
        '1787' => 'Puerto Rico (+1787)',
        '974' => 'Qatar (+974)',
        '262' => 'Reunion (+262)',
        '40' => 'Romania (+40)',
        '7' => 'Russia (+7)',
        '250' => 'Rwanda (+250)',
        '378' => 'San Marino (+378)',
        '239' => 'Sao Tome & Principe (+239)',
        '966' => 'Saudi Arabia (+966)',
        '221' => 'Senegal (+221)',
        '381' => 'Serbia (+381)',
        '248' => 'Seychelles (+248)',
        '232' => 'Sierra Leone (+232)',
        '65' => 'Singapore (+65)',
        '421' => 'Slovak Republic (+421)',
        '386' => 'Slovenia (+386)',
        '677' => 'Solomon Islands (+677)',
        '252' => 'Somalia (+252)',
        '27' => 'South Africa (+27)',
        '34' => 'Spain (+34)',
        '94' => 'Sri Lanka (+94)',
        '290' => 'St. Helena (+290)',
        '1869' => 'St. Kitts (+1869)',
        '1758' => 'St. Lucia (+1758)',
        '249' => 'Sudan (+249)',
        '597' => 'Suriname (+597)',
        '268' => 'Swaziland (+268)',
        '46' => 'Sweden (+46)',
        '41' => 'Switzerland (+41)',
        '963' => 'Syria (+963)',
        '886' => 'Taiwan (+886)',
        '7' => 'Tajikstan (+7)',
        '66' => 'Thailand (+66)',
        '228' => 'Togo (+228)',
        '676' => 'Tonga (+676)',
        '1868' => 'Trinidad & Tobago (+1868)',
        '216' => 'Tunisia (+216)',
        '90' => 'Turkey (+90)',
        '7' => 'Turkmenistan (+7)',
        '993' => 'Turkmenistan (+993)',
        '1649' => 'Turks & Caicos Islands (+1649)',
        '688' => 'Tuvalu (+688)',
        '256' => 'Uganda (+256)',
        '380' => 'Ukraine (+380)',
        '971' => 'United Arab Emirates (+971)',
        '598' => 'Uruguay (+598)',
        '7' => 'Uzbekistan (+7)',
        '678' => 'Vanuatu (+678)',
        '379' => 'Vatican City (+379)',
        '58' => 'Venezuela (+58)',
        '84' => 'Vietnam (+84)',
        '84' => 'Virgin Islands - British (+1284)',
        '84' => 'Virgin Islands - US (+1340)',
        '681' => 'Wallis & Futuna (+681)',
        '969' => 'Yemen (North)(+969)',
        '967' => 'Yemen (South)(+967)',
        '260' => 'Zambia (+260)',
        '263' => 'Zimbabwe (+263)',

    ];

    foreach ($countryCodes as $code => $label) {
        echo '<option value="' . $code . '">' . $label . '</option>';
    }
    ?>
</select>
<input type="text" name="mobile" class="form-control" placeholder="Mobile Number" id="mobile">
<p id="mobile_error" style="color:red;"></p>
</div>
                                    <div class="form-group">
                                        <input type="text"name="email" class="form-control" placeholder="email" id="email">
                                        <p id="email_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name=password class="form-control" placeholder="Password" id="password">
                                        <p id="pass_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="cpassword" class="form-control" placeholder="Confirm Password" id="cpassword">
                                        <p id="cpass_error" style="color:red;"></p>
                                    </div>

                                    <div class="form-group">
                                        <input type="text"  name="country" class="form-control" placeholder=" country" id="">
                                        <p id="country_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="state" class="form-control" placeholder=" state" id="">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="city" class="form-control" placeholder="city" id="">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="zipcode" class="form-control" placeholder="zip/postalcode" id="">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text"name="address" class="form-control" placeholder=" Address" id="address">
                                        <p id="address_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="pan_no" class="form-control" placeholder="business id" id="pan_no">
                                        <p id="pan_no_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="pan_img">Pan Card Proof*</label>
                                        <input type="file"name="pan_card_image" class="form-control" id="pan_card_proof">
                                        <p id="pan_card_image_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="aadhar_no" class="form-control" placeholder="GOverment id" id="aadhar_no">
                                        <p id="aadhar_no_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="aadhar_img1">Aadhar Front Image*</label>
                                        <input type="file"name="aadhar_front_image" class="form-control"  id="aadhar_front_image">
                                        <p id="aadhar_front_image_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                            <label for="aadhar_img2">Aadhar Back Image*</label>
                                        <input type="file"name="aadhar_back_image" class="form-control"  id="aadhar_back_image">
                                        <p id="aadhar_back_image_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                    <label for="aadhar_img2">Tax-id NUmber*</label>
                                        <input type="text"name="gst_no" class="form-control" placeholder="Tax-id Number" id="gst_no">
                                        <p id="gst_no_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="gst_csertificate">GST Certificate Image</label>
                                        <input type="file"name="gst_certificate" class="form-control" id="gst_certificate">
                                        <p id="gst_certificate_error" style="color:red;"></p>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="join_date">Join Date</label>
                                        <input type="date"name="join_date" class="form-control" id="join_date">
                                        <p id="join_date_error" style="color:red;"></p>
                                    </div> -->
                                    <div class="remember-me-wrap" style="display: flex;">
                                        <p>
                                            <input type="checkbox" id="test2">
                                            <label for="test2">I Accept All <a href="terms-of-service.php">Terms & Conditions</a></label>
                                            <p id="test_error" style="color:red;"></p>
                                        </p>
                                        <a class="nav-link" href="forgot_vendor_pasword.php" style="margin-top:-6px;margin-left:100px; font-size: 14px;">Forgot Password?</a>

                                    </div>
                                    <button type="submit"  name="register" class="default-btn">Register <i class="flaticon-send"></i></button>
                                </form>

                                <!-- <span class="sub-title"><span>Or</span></span>
                                <div class="login-with-account">
                                    <ul>
                                        <li><a href="#" class="facebook">Log In with Facebook <i class="ri-facebook-line"></i></a></li>
                                        <li><a href="#" class="google">Log In with Google <i class="ri-google-line"></i></a></li>
                                    </ul></div> -->

<!-- separate coutry -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                                
                            </div>
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
                                        var mobilePattern = /^[6-9]\d{5,11}$/;
                                        var mobile = $('#mobile').val(); // Assuming you retrieve the mobile number from an input field

                                        if (mobile == "" || !mobilePattern.test(mobile)) {
                                            $('#mobile_error').html("Please enter a valid mobile number between 6 to 12 digits ");
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

<!-- registeration page -->
                        <div class="tab-pane fade" id="user_log" role="tabpanel">
                            <div class="eeza-authentication-form">
                            <form method="POST" action="profile__vendor_login.php" id="login-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="log_email" name="log_email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="log_password" name="log_password" placeholder="Password">
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                            <p>
                                                <input type="checkbox" id="test1">
                                                <label for="test1">Remember me</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
                                            <a href="#" class="lost-your-password"></a>
                                        </div>
                                    </div>
                                    <button type="submit"  name="login_button" id="login_button"  value="login" class="default-btn">Log In <i class="flaticon-send"></i></button>
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
                        <div class="tab-pane fade" id="reset-password" role="tabpanel">
                            <div class="eeza-authentication-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter username or email">
                                    </div>
                                    <div class="remember-me-wrap">
                                        <p>
                                            <input type="checkbox" id="test3">
                                            <label for="test3">Remember me</label>
                                        </p>
                                    </div>
                                    <button type="submit" class="default-btn">Submit Now <i class="flaticon-send"></i></button>
                                </form>
                                <!-- <span class="sub-title"><span>Or</span></span>

                                <div class="login-with-account">
                                    <ul>
                                        <li><a href="#" class="facebook">Log In with Facebook <i class="ri-facebook-line"></i></a></li>
                                        <li><a href="#" class="google">Log In with Google <i class="ri-google-line"></i></a></li>
                                    </ul>
                                </div> -->
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
    //  alert(password);

    $.ajax({
      url: 'profile_vendor_login.php',
      type: 'post',
      data:{
        log_email:email,
        log_password:password
      },
      success: function(response) {
        if (response === 'success') {
          window.location.href = 'index.php';
        } else {
          $('#login-message').html('Invalid email or password.');
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

<style>


.back{


border:none;
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