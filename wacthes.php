<?php include ("include/database.php");
session_start();?>
<!DOCTYPE html>
<html lang="zxx">
    <style>@media(min-width:991px){
   
    .nav-item{
        padding-left: 20px;
    }
   
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
        <link rel="stylesheet" href="./assets/css/jquery-ui.css">

		
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
         <!-- <div class="navigation-button">
                     <button class="button-nav">Close</button>
         </div> -->

         <!-- <h3 class="navigation-heading">Categories</h3>
               <ul class="navigation-list">
                     <li><a href="bid.php">Bid</a></li>
                     <li><a href="make-deal.php">Service</a></li>
                     <li><a href="wearhouse.php">Vendor</a></li>
                     <li><a href="make-a-team.php">Team Up</a></li>
                     
                     <li><a href="#">Jobs</a></li>
                   
                     <li><a href="savelife.php">Save A Life</a></li>
                     <li><a href="new-arrivals.php">New Arrivals</a></li>
                     <li><a href="daily-deal.php">Daily-deal</a></li>
                     <li><a href="shop.php">Shop Now</a></li>
                     <!-- <li><a href="shop-details.php">Shop Details</a></li> -->
                     <!-- <li><a href="cart.php">Cart</a></li>
                     <li><a href="checkout.php">Checkout</a></li>
                     <li><a href="my-account.php">My Account</a></li>
                     <li><a href="vehicel.php">Vehicles</a></li>
                     <li><a href="electronics -new.php">Electronic</a></li>
                     <li><a href="clothing.php">Clothing</a></li>
                     <li><a href="appliance.php">Home Appliances</a></li>
                     <li><a href="beauty.php">Health & Beauty</a></li>
                     <li><a href="jewelry.php">Jewelry</a></li>
                     <li><a href="computer-technology.php">computer & Technology</a></li>
                     <li><a href="realestate.php">Realestate</a></li>
                     <li><a href="babdies-mom.php">Babies & Moms</a></li>
                     
                     <li><a href="sports.php">Sports</a></li>
                     <li><a href="phone-accessories.php">Phone & Accessories</a></li>
                     <li><a href="wacthes.php">Watches</a></li>
                     <li><a href="cars-motocycle.php">Cars & Motocycle</a></li> -->
             
               <!-- </ul>  -->
             
             </nav>
       </div>
       </div>
   <!-- navigation close -->

   <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="margin-right:0px;">
               <ul class="navbar-nav m-auto" style="margin-right: 20px;">
                   <li class="nav-item">
                       <a href="bid.php" class="nav-link active">
                               Home                                    
                           </a>
                   </li>
                   <li class="nav-item">
                       <a href="bid.php" class="nav-link">
                           Bid
                           <i class="ri-arrow-down-s-line"></i>                                   
                       </a>
                       <ul class="dropdown-menu">

                           <li class="nav-item">
                               <a href="cart.php" class="nav-link">Mens Wear</a>
                           </li>

                           <li class="nav-item">
                               <a href="checkout.php" class="nav-link">Womens Wear</a>
                           </li>

                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">kids</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Home Appliances</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Beauty & Health</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Babies & Moms</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Phones & Accessories</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Jewelry</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Computer & Technology</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Electronics</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Realestate</a>
                           </li>
                           <li class="nav-item">
                               <a href="my-account.php" class="nav-link">Vehicles</a>
                           </li>
                      </ul> 
                   </li>

                   <li class="nav-item">
                       <a href="buy.php" class="nav-link">
                               Buy
                               <i class="ri-arrow-down-s-line"></i>                                   
                           </a>
                           <ul class="dropdown-menu">

                               <li class="nav-item">
                                   <a href="shop-details.php" class="nav-link">Sell Product</a>
                               </li> 

                               <li class="nav-item">
                                   <a href="mens.php" class="nav-link">Mens Wear</a>
                               </li>

                               <li class="nav-item">
                                   <a href="womenswear.php" class="nav-link">Womens Wear</a>
                               </li>

                               <li class="nav-item">
                                   <a href="kids.php" class="nav-link">kids</a>
                               </li>
                               <li class="nav-item">
                                   <a href="appliance.php" class="nav-link">Home Appliances</a>
                               </li>
                               <li class="nav-item">
                                   <a href="beauty.php" class="nav-link">Beauty & Health</a>
                               </li>
                               <li class="nav-item">
                                   <a href="babdies-mom.php" class="nav-link">Babies & Moms</a>
                               </li>
                               <li class="nav-item">
                                   <a href="phone-accessories.php" class="nav-link">Phones & Accessories</a>
                               </li>
                               <li class="nav-item">
                                   <a href="jewelry.php" class="nav-link">Jewelry</a>
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
                           

                           <li class="nav-item">
                               <a href="catalog.php" class="nav-link">
                                       Catalog
                                       
                                   </a>

                                   <li class="nav-item">
                                       <a href="make-deal.php" class="nav-link">
                                             Deal                               
                                           </a>
                                   </li> 
                                   <li class="nav-item">
                                       <a href="invest.php" class="nav-link">
                                               Invest                                   
                                           </a>
                                   </li> 
                                   <li class="nav-item">
                                        <a href="employers.php" class="nav-link">
                                                Jobs            
                                                                      
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="visitingcard.php" class="nav-link">Visiting Card
                                                    </a>

                                                </li>
                                            </ul>
                                    </li> 
                   <li class="nav-item">
                       <a href="profile-authentication.php"><i class="flaticon-padlock"></i> Log In</a>
                   </li>
                   <li class="nav-item">
                       <a href="#"><i class="flaticon-user"></i> Register</a>
                       
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



                   <!-- <li class="nav-item" style=";font-family: Verdana,sans-serif;">                       
                   <a href="" class="nav-link">
                               Languages
                               <i class="ri-arrow-down-s-line"></i>                                   
                           </a>
                   <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                   
                   
                           <a class="nav-item" href="#">
                               <img src="assets/images/uk.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> English
                           </a>
                           
                           <a class="nav-item" href="#">
                               <img src="assets/images/china.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> 简体中文
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/spain.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> español
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/united-arab-emirates.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> عربي
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/france.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> Français
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/iran.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> فارسی
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/german.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> German
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/russia.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> Русский
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/malaysia.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> Melayu
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/portugal.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> Português
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/italy.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> Italiano
                           </a>
                           <a class="nav-item" href="#">
                               <img src="assets/images/flag/Lahnda.png" style="width:25px;height:25px;margin-top:8px;" alt="flag"> Lahnda
                           </a>
                       </div>
                   </li> -->
                   
<style>
   .goog-te-combo{

border:none;
color: var(--paragraph-color);
   font-size: 15px;
   font-family: var(--heading-font-family);
   font-weight: 600;
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
   width: 136px;
}

.goog-te-combo:active{border:none}

</style>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
<div id="google_translate_element"></div>
function googleTranslateElementInit(){
   new google.translate.TranslateElement(
       {pagelanguage:'en'},
       'google_translate_element'
   );
}
</script>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript">
       function googleTranslateElementInit() {
         new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ta,ar,bn,es,fr,hi,id,ja,ko,ms,pt,ru,zh-CN'}, 'google_translate_element');
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
</head>
<body>
   <div id="google_translate_element"></div>
</body>
</html>

<li class="nav-item">
   <a href="bid.php" class="nav-link">
       Currency
       <i class="ri-arrow-down-s-line"></i>                                   
   </a>
   <ul class="dropdown-menu">

       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/dollar-symbol.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">USD</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/euro.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">EUR</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/Japanese.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">JPY</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/Pound.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">GBP</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/australian-dollar.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">AUD</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/canadian-dollar.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">CAD</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/swiss-franc.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">CHF</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/yuan.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">CNH</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/hong-kong-dollar.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">JPY</a>
       </li>
       <li class="nav-item" style="display:flex;">
           <img src="assets/images/currency/new-zealand-dollar.png" style="width:25px;height:25px;margin-top:8px;" alt="flag">
           <a href="checkout.php" class="nav-link">NZD</a>
       </li>
  </ul> 
</li>


<li class="nav-item">
   <a href="bid.php" class="nav-link" style="margin-left:-28px;">
        My Profile
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8d29tYW4lMjBwcm9maWxlfGVufDB8fDB8fA%3D%3D&amp;w=1000&amp;q=80" class="sc-himrzO kCyZje rounded-circle" style="width: 25px;
   height: 25px;
">                                  
   </a>
   
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

    <body>
   <!-- Start Profile Authentication Area -->
        <div class="profile-authentication-area ptb-100">
            <div class="container" style="margin-top:55px;">
                <div class="profile-authentication-tabs">
                    <div class="authentication-tabs-list">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register">Login</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login"> Register</a>
                            </li>                           
                            <li class="nav-item">
                                <a class="nav-link" id="reset-password-tab" data-bs-toggle="tab" href="#reset-password" role="tab" aria-controls="reset-password">Reset Password</a>
                            </li>
                        </ul>
                    </div>
<!-- login page -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="register" role="tabpanel">
                            <div class="eeza-authentication-form">
                            <form method="POST" id="form" enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group">
                                        <label for="vendor_image">Image</label>
                                        <input type="file"name="vendor_image" class="form-control"  id="vendor_image">
                                        <p id="vendor_image_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="fname" class="form-control" placeholder=" Name" id="username">
                                        <p id="name_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="mobile" class="form-control" placeholder=" Mobile Number" id="mobile">
                                        <p id="mobile_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="email" class="form-control" placeholder=" email" id="email">
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
                                        <input type="text"  name=" " class="form-control" placeholder=" country" id="">
                                        <p id="country_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="" class="form-control" placeholder=" state" id="">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="" class="form-control" placeholder="city" id="">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  name="zipcode" class="form-control" placeholder="zip/postalcode" id="">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="text"name="city" class="form-control" placeholder=" city" id="city">
                                        <p id="city_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="state" class="form-control" placeholder=" State" id="state">
                                        <p id="state_error" style="color:red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="pincode" class="form-control" placeholder=" Pincode" id="pincode">
                                        <p id="pincode_error" style="color:red;"></p>
                                    </div> -->
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
                                    <div class="remember-me-wrap">
                                        <p>
                                            <input type="checkbox" id="test2">
                                            <label for="test2">I Accept All <a href="terms-of-service.php">Terms & Conditions</a></label>
                                            <p id="test_error" style="color:red;"></p>
                                        </p>
                                    </div>
                                    <button type="submit"  name="register" class="default-btn">Register <i class="flaticon-send"></i></button>
                                </form>

                                <span class="sub-title"><span>Or</span></span>
                                <div class="login-with-account">
                                    <ul>
                                        <li><a href="#" class="facebook">Log In with Facebook <i class="ri-facebook-line"></i></a></li>
                                        <li><a href="#" class="google">Log In with Google <i class="ri-google-line"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
<script src="./assets/js/jquery-ui.js"></script>
<script>
                    $(document).ready(function() {
                        
                    $("form").submit(function(event) {
                        var fname = $("#username").val();
                        var email = $("#email").val();
                        var password = $("#password").val();
                        var cpassword = $("#cpassword").val();
                        var mobile = $("#mobile").val();
                        var isChecked = $("#test2").is(":checked");
                        
                        // vendor image validation

                        var vendorImage = $("#vendor_image").val();
                            if (vendorImage == "") {
                                $("#vendor_image_error").html("Please select an image.");
                                event.preventDefault();
                            } else {
                                var allowedExtensions = ["jpg", "jpeg", "png"];
                                var fileExtension = vendorImage.split('.').pop().toLowerCase();
                                if ($.inArray(fileExtension, allowedExtensions) == -1) {
                                    $("#vendor_image_error").html("Invalid image format. Please upload a JPG, JPEG, or PNG file.");
                                    event.preventDefault();
                                } else {
                                    $("#vendor_image_error").html("");
                                }
                            }
                        if (fname == "") {
                        // alert("Please  name.");
                        document.getElementById('name_error').innerHTML="Please  Name";
                        event.preventDefault();
                        }else if (fname.length <= 3) {
                        document.getElementById('name_error').innerHTML="Username must have more than 3 letters.";
                        event.preventDefault();
                        }
                        else{
                        document.getElementById('name_error').innerHTML="";

                        }


                        // email validation

                        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (email == "" || !emailPattern.test(email)) {
                        // alert("Please enter a valid email address.");
                        document.getElementById('email_error').innerHTML="Please enter a valid email address.";
                        event.preventDefault();
                        }else{
                            document.getElementById('email_error').innerHTML="";

                        }
                        
                        // password and confirm validation 
                        if (password == "") {
                        // alert("Please  password.");
                        document.getElementById('pass_error').innerHTML="Please  Password";
                        event.preventDefault();
                        }else{
                        document.getElementById('pass_error').innerHTML="";
                        }
                        if (cpassword == "") {
                        // alert("Please confirm your password.");
                        document.getElementById('cpass_error').innerHTML="Please  Confirm Password";
                        event.preventDefault();
                        }else if(password != cpassword) {
                        // alert("Passwords do not match.");
                        document.getElementById('cpass_error').innerHTML="Password do not match";
                        event.preventDefault();
                        }
                        else{
                        document.getElementById('cpass_error').innerHTML="";
                        }

                        // Mobile Number Validation

                        var mobilePattern = /^[6-9]\d{9}$/;
                            if (mobile == "" || !mobilePattern.test(mobile)) {
                                $('#mobile_error').html("Please enter a valid 10-digit mobile number starting with 6-9");
                                event.preventDefault();
                            } else {
                                $('#mobile_error').html("");
                            }
                    
                            // city and state error checking

                            var city = $("#city").val();
                            if (city == "") {
                                $("#city_error").html("Please  city.");
                                event.preventDefault();
                            } else {
                                $("#city_error").html("");
                            }

                         // Validate state

                            var state = $("#state").val();
                            if (state == "") {
                                $("#state_error").html("Please  state.");
                                event.preventDefault();
                            } else {
                                $("#state_error").html("");
                            }

                            // pincode validation

                            var pincode = $("#pincode").val();
                            if (pincode == "") {
                                $("#pincode_error").html("Please  pincode.");
                                event.preventDefault();
                            } else {
                                var pincodePattern = /^\d{6}$/;
                                if (!pincodePattern.test(pincode)) {
                                    $("#pincode_error").html("Please enter a valid 6-digit pincode.");
                                    event.preventDefault();
                                } else {
                                    $("#pincode_error").html("");
                                }
                            }
                            // address validation  
                            var address = $("#address").val();
                            if (address == "") {
                                $("#address_error").html("Please  address.");
                                event.preventDefault();
                            } else {
                                $("#address_error").html("");
                            }
                            // pan card number validation

                            var panNumber = $("#pan_no").val();
                            if (panNumber == "") {
                                $("#pan_no_error").html("Please  PAN card number.");
                                event.preventDefault();
                            } else {
                                var panPattern = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
                                if (!panPattern.test(panNumber)) {
                                    $("#pan_no_error").html("Please enter a valid PAN card number.");
                                    event.preventDefault();
                                } else {
                                    $("#pan_no_error").html("");
                                }
                            }

                            // aadhar number validation

                            var aadhaarNumber = $("#aadhar_no").val();
                            if (aadhaarNumber == "") {
                                $("#aadhar_no_error").html("Please  Aadhaar number.");
                                event.preventDefault();
                            } else {
                                var aadhaarPattern = /^\d{12}$/;
                                if (!aadhaarPattern.test(aadhaarNumber)) {
                                    $("#aadhar_no_error").html("Please enter a valid 12-digit Aadhaar number.");
                                    event.preventDefault();
                                } else {
                                    $("#aadhar_no_error").html("");
                                }
                            }

                            // pan card image validation
                            
                            var panCardImage = $("#pan_card_image").val();
                            if (panCardImage == "") {
                                $("#pan_card_image_error").html("Please upload your Pan Card image.");
                                event.preventDefault();
                            } else {
                                var allowedExtensions = ["jpg", "jpeg", "png"];
                                var fileExtension = vendorImage.split('.').pop().toLowerCase();
                                if ($.inArray(fileExtension, allowedExtensions) == -1) {
                                    $("#pan_card_image_error").html("Invalid image format. Please upload a JPG, JPEG, or PNG file.");
                                    event.preventDefault();
                                } else {
                                    $("#pan_card_image_error").html("");
                                }
                            }

                            // Validate Aadhaar Front image
                            var aadharFrontImage = $("#aadhar_front_image").val();
                            if (aadharFrontImage == "") {
                                $("#aadhar_front_image_error").html("Please upload your Aadhaar Front image.");
                                event.preventDefault();
                            } else {
                                var allowedExtensions = ["jpg", "jpeg", "png"];
                                var fileExtension = vendorImage.split('.').pop().toLowerCase();
                                if ($.inArray(fileExtension, allowedExtensions) == -1) {
                                    $("#aadhar_front_image_error").html("Invalid image format. Please upload a JPG, JPEG, or PNG file.");
                                    event.preventDefault();
                                } else {
                                    $("#aadhar_front_image_error").html("");
                                }
                            }
                            // Validate Aadhaar Back image
                            var aadharBackImage = $("#aadhar_back_image").val();
                            if (aadharBackImage == "") {
                                $("#aadhar_back_image_error").html("Please upload your Aadhaar Back image.");
                                event.preventDefault();
                            } else {
                                var allowedExtensions = ["jpg", "jpeg", "png"];
                                var fileExtension = vendorImage.split('.').pop().toLowerCase();
                                if ($.inArray(fileExtension, allowedExtensions) == -1) {
                                    $("#aadhar_back_image_error").html("Invalid image format. Please upload a JPG, JPEG, or PNG file.");
                                    event.preventDefault();
                                } else {
                                    $("#aadhar_back_image_error").html("");
                                }
                            }
                            // Validate GST Certificate image
                            var gstCertificate = $("#gst_certificate").val();
                            if (gstCertificate == "") {
                                $("#gst_certificate_error").html("Please upload your GST Certificate image.");
                                event.preventDefault();
                            } else {
                                var allowedExtensions = ["jpg", "jpeg", "png"];
                                var fileExtension = vendorImage.split('.').pop().toLowerCase();
                                if ($.inArray(fileExtension, allowedExtensions) == -1) {
                                    $("#gst_certificate_error").html("Invalid image format. Please upload a JPG, JPEG, or PNG file.");
                                    event.preventDefault();
                                } else {
                                    $("#gst_certificate_error").html("");
                                }
                            }

                            // GST Number Validation

                            var gstNumber = $("#gst_no").val();
                            if (gstNumber == "") {
                                $("#gst_no_error").html("Please  GST number.");
                                event.preventDefault();
                            } else {
                                var gstPattern = /^[A-Z]{2}[A-Z0-9]{13}$/;
                                if (!gstPattern.test(gstNumber)) {
                                    $("#gst_no_error").html("Please enter a valid GST number (e.g., AB1234567890123).");
                                    event.preventDefault();
                                } else {
                                    $("#gst_no_error").html("");
                                }
                            }

                            // join date validate
                            var joinDate = $("#join_date").val();
                        if (joinDate == "") {
                            $("#join_date_error").html("Please  join date.");
                            event.preventDefault();
                        } else {
                            // Assuming you want to validate the date format (YYYY-MM-DD)
                            var datePattern = /^\d{4}-\d{2}-\d{2}$/;
                            if (!datePattern.test(joinDate)) {
                                $("#join_date_error").html("Please enter a valid date (YYYY-MM-DD).");
                                event.preventDefault();
                            } else {
                                $("#join_date_error").html("");
                            }
                        }
                        // terms & condition
                        if (!isChecked) {
                        // alert("Please accept the terms and conditions.");
                        document.getElementById('test_error').innerHTML="Please accept the terms and conditions.";
                        event.preventDefault();
                        }else{
                        document.getElementById('test_error').innerHTML="";
                        }
                    });
                    });


</script>
                           
<?php
    if(isset($_POST['register'])){
        // Retrieve form data
        $image = $_FILES['vendor_image']['name'];
        $name = $_POST['fname'];
        $phone = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['cpassword'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
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
        if (
            !in_array($imageExtension, $allowedExtensions) ||
            !in_array($panCardExtension, $allowedExtensions) ||
            !in_array($aadharFrontExtension, $allowedExtensions) ||
            !in_array($aadharBackExtension, $allowedExtensions) ||
            !in_array($gstCertificateExtension, $allowedExtensions)
        ) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            exit;
        }

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

        // Perform database insertion for vendor_details table
        $sql = "INSERT INTO vendor_details (`image`, `name`, `phone`, `email`,`address`, `pan_no`, `pan_card_img`, `aadhar_no`, `aadhar_front_img`, `aadhar_back_img`, `gst_no`, `gst_certificate_img`, `join_date`, `password`, `confirm_password`,`country`,`state`,`city`,`pincode`,)
                VALUES ('$image', '$name', '$phone', '$email', '$address', '$pan_no', '$pan_card_img', '$aadhar_no', '$aadhar_front_img', '$aadhar_back_img', '$gst_no', '$gst_certificate_img', '$join_date', '$password', '$confirm_password','$country','$state','$city','$zipcode')";
        $result = $db->query($sql);

        // Check if the insertion into vendor_details was successful
        if ($result) {
            // Perform database insertion for admin table
            $adminSql = "INSERT INTO `admin`(`admin_name`, `email`, `password`) VALUES ('$name','$email','$password')";
            $adminResult = $db->query($adminSql);

            // Check if the insertion into admin was successful
            if ($adminResult) {
                echo "<script>alert('Data inserted successfully!');</script>";
            } else {
                echo "<script>alert('Data insertion error in admin table!');</script>";
                echo "Error: " . $db->error;
            }
        } else {
            echo "<script>alert('Data insertion error in vendor_details table!');</script>";
            echo "Error: " . $db->error;
        }
    }
?>


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
                                <span class="sub-title"><span>Or</span></span>

                                <div class="login-with-account">
                                    <ul>
                                        <li><a href="#" class="facebook">Log In with Facebook <i class="ri-facebook-line"></i></a></li>
                                        <li><a href="#" class="google">Log In with Google <i class="ri-google-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Profile Authentication Area -->
      <?php
      include("include/footer.php");?>