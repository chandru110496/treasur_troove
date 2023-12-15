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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Eeza - Job Board & Hiring + Dashboard HTML Template</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <style>
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



*{
    box-sizing: border-box;
}
body{
    color: grey;
}
#sidebar{
    width: 20%;
    padding: 10px;
    margin: 0;
    float: left;
}
#products{
    width: 80%;
    padding: 10px;
    margin: 0;
    float: right;
}
ul{
    list-style: none;
    padding: 5px;
}
li a{
    color: darkgray;
    text-decoration: none;
}
li a:hover{
    text-decoration: none;
    color: darksalmon;
}
.fa-circle{
    font-size: 20px;
}
#red{
    color: #e94545d7;
}
#teal{
    color: rgb(69, 129, 129);
}
#blue{
    color: #0000ff;
}
.card{
    width: 250px;
    display: inline-block;
    height: 300px;
}
.card-img-top{
    width: 250px;
    height: 210px;
}
.card-body p{
    margin: 2px;
}
.card-body{
    padding: 0;
    padding-left: 2px;
}
.filter{
    display: none;
    padding: 0;
    margin: 0;
}

@media(min-width:991px){
    .navbar-nav{
        margin-left: 35%;
    }
    .nav-item{
        padding-left: 20px;
    }
    .card{
        width: 190px;
        display: inline-block;
        height: 300px;
    }
    .card-img-top{
        width: 188px;
        height: 210px;
    }
    #mobile-filter{
        display: none;
    }
}
@media(min-width:768px) and (max-width:991px){
    .navbar-nav{
        margin-left: 20%;
    }
    .nav-item{
        padding-left: 10px;
    }
    .card{
        width: 230px;
        display: inline-block;
        height: 300px;
        margin-bottom: 10px;
    }
    .card-img-top{
        width: 230px;
        height: 210px;
    }
    #mobile-filter{
        display: none;
    }
}
@media(min-width:568px) and (max-width:767px){
    .navbar-nav{
        margin-left: 20%;
    }
    .nav-item{
        padding-left: 10px;
    }
    .card{
        width: 205px;
        display: inline-block;
        height: 300px;
        margin-bottom: 10px;
    }
    .card-img-top{
        width: 203px;
        height: 210px;
    }
    .fa-circle{
        font-size: 15px;
    }
    #mobile-filter{
        display: none;
    }
}
@media(max-width:567px){
    .navbar-nav{
        margin-left: 0%;
    }
    .nav-item{
        padding-left: 10px;
    }
    #sidebar{
        width: 100%;
        padding: 10px;
        margin: 0;
        float: left;
    }
    #products{
        width: 100%;
        padding: 5px;
        margin: 0;
        float: right;
    }
    .card{
        width: 230px;
        display: inline-block;
        height: 300px;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .card-img-top{
        width: 230px;
        height: 210px;
    }
    .list-group-item{
        padding: 3px;
    }
    .offset-1{
        margin-left: 8%;
    }
    .filter{
        display: block;
        margin-left: 70%;
        margin-top: 2%;
    }
    #sidebar{
        display: none;
    }
    #mobile-filter{
        padding: 10px;
    }
}

.btn_grad_blgr {
    display: flex;
    margin: 0 auto;
    margin-bottom: 0px;
    border: 0;
    border-radius: 1em;
    padding: 10px 30px;
    font-size: 14px;
    font-weight: 300;
    background: #1657cb;
    color: #fff;
}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
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
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
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
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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


<div class="navbar-area">
<div class="main-responsive-nav">
    <div class="container">
        <div class="main-responsive-menu">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/images/logo.png" class="black-logo" alt="image">
                    <!-- <img src="assets/images/logo-2.png" class="white-logo" alt="image"> -->
                    
                </a>
            </div>
        </div>
        
    </div>
</div>

<div class="main-navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo.png" class="black-logo" alt="image">
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
      <h1>Menu</h1>
    </div>
  
    <!-- navigation open -->
        <div class="navigation" id="navigation-demo">
              <nav>
          <div class="navigation-button">
                      <button class="button-nav">Close</button>
          </div>

          <h3 class="navigation-heading">Categories</h3>
                <ul class="navigation-list">
                      <li><a href="bid.html">Bid</a></li>
                      <li><a href="make-deal.html">Make A Deal</a></li>
                      <li><a href="wearhouse.html">warehouse</a></li>
                      <li><a href="make-a-team.html">Team Up</a></li>
                      <li><a href="invest.html">Invest</a></li>
                      
                      <li><a href="#">Freelancer</a></li>
                    
                      <li><a href="savelife.html">Save A Life</a></li>
                      <li><a href="new-arrivals.html">New Arrivals</a></li>
                      <li><a href="daily-deal.html">Daily-deal</a></li>
                      <li><a href="buy.html">Buy</a></li>
                      
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="my-account.html">My Account</a></li>
                      <li><a href="vehicel.html">Vehicles</a></li>
                      <li><a href="electronics -new.html">Electronic</a></li>
                      <li><a href="clothing.html">Clothing</a></li>
                      <li><a href="appliance.html">Home Appliances</a></li>
                      <li><a href="beauty.html">Health & Beauty</a></li>
                      <li><a href="jewelry.html">Jewelry</a></li>
                      <li><a href="computer-technology.html">computer & Technology</a></li>
                      <li><a href="realestate.html">Realestate</a></li>
                      <li><a href="babdies-mom.html">Babies & Moms</a></li>
                      
                      <li><a href="sports.html">Sports</a></li>
                      <li><a href="phone-accessories.html">Phone & Accessories</a></li>
                      <li><a href="wacthes.html">Watches</a></li>
                      <li><a href="cars-motocycle.html">Cars & Motocycle</a></li>
              
                </ul>
              
              </nav>
        </div>
    <!-- navigation close -->
  
      
</div>
            

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="margin-right: 30px;">
                <ul class="navbar-nav m-auto" style="margin-right: 40px;">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active">
                                Home                                    
                            </a>
                    </li>

                    <li class="nav-item">
                        <a href="bid.html" class="nav-link">
                            Bid
                            <i class="ri-arrow-down-s-line"></i>                                   
                        </a>
                        <ul class="dropdown-menu">

                            <li class="nav-item">
                                <a href="shop-details.html" class="nav-link">Sell Product</a>
                            </li> 

                            <li class="nav-item">
                                <a href="mens.html" class="nav-link">Mens Wear</a>
                            </li>

                            <li class="nav-item">
                                <a href="womenswear.html" class="nav-link">Womens Wear</a>
                            </li>

                            <li class="nav-item">
                                <a href="kids.html" class="nav-link">kids</a>
                            </li>
                            <li class="nav-item">
                                <a href="appliance.html" class="nav-link">Home Appliances</a>
                            </li>
                            <li class="nav-item">
                                <a href="beauty.html" class="nav-link">Beauty & Health</a>
                            </li>
                            <li class="nav-item">
                                <a href="babdies-mom.html" class="nav-link">Babies & Moms</a>
                            </li>
                            <li class="nav-item">
                                <a href="phone-accessories.html" class="nav-link">Phones & Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a href="jewelry.html" class="nav-link">Jewelry</a>
                            </li>
                            <li class="nav-item">
                                <a href="computer-technology.html" class="nav-link">Computer & Technology</a>
                            </li>
                            <li class="nav-item">
                                <a href="electronics -new.html" class="nav-link">Electronics</a>
                            </li>
                            <li class="nav-item">
                                <a href="realestate.html" class="nav-link">Realestate</a>
                            </li>
                            <li class="nav-item">
                                <a href="vehicel.html" class="nav-link">Vehicles</a>
                            </li>
                       </ul>  
                    </li>

                    <li class="nav-item">
                        <a href="buy.html" class="nav-link">
                                Buy
                                <i class="ri-arrow-down-s-line"></i>                                   
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item">
                                    <a href="shop-details.html" class="nav-link">Sell Product</a>
                                </li> 

                                <li class="nav-item">
                                    <a href="mens.html" class="nav-link">Mens Wear</a>
                                </li>

                                <li class="nav-item">
                                    <a href="womenswear.html" class="nav-link">Womens Wear</a>
                                </li>

                                <li class="nav-item">
                                    <a href="kids.html" class="nav-link">kids</a>
                                </li>
                                <li class="nav-item">
                                    <a href="appliance.html" class="nav-link">Home Appliances</a>
                                </li>
                                <li class="nav-item">
                                    <a href="beauty.html" class="nav-link">Beauty & Health</a>
                                </li>
                                <li class="nav-item">
                                    <a href="babdies-mom.html" class="nav-link">Babies & Moms</a>
                                </li>
                                <li class="nav-item">
                                    <a href="mobiles.html" class="nav-link">Phones & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="jewelry.html" class="nav-link">Jewelry</a>
                                </li>
                                <li class="nav-item">
                                    <a href="computer-technology.html" class="nav-link">Computer & Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a href="electronics -new.html" class="nav-link">Electronics</a>
                                </li>
                                <li class="nav-item">
                                    <a href="realestate.html" class="nav-link">Realestate</a>
                                </li>
                                <li class="nav-item">
                                    <a href="vehicel.html" class="nav-link">Vehicles</a>
                                </li>
                           </ul> 
                            

                            <li class="nav-item">
                                <a href="catalog.html" class="nav-link">
                                    Catalog
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="visitingcard.html" class="nav-link">Visiting Card</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="resume.html" class="nav-link">Resume</a>
                                    </li>
                                </ul>

                                    <li class="nav-item">
                                        <a href="make-deal.html" class="nav-link">
                                                Deal                                   
                                            </a>
                                    </li> 

                     
                </ul>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-right: 135px;">
                <ul class="topbar-action">
                    <li>
                        <a href="profile-authentication.html"><i class="flaticon-padlock"></i> Log In</a>
                    </li>

                    <li>
                        <a href="profile-authentication.html"><i class="flaticon-user"></i> Register</a>
                    </li>

                    <li class="dropdown language-option">
                        <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-worldwide"></i>
                                <span class="lang-name"></span>
                            </button>
                        <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/uk.png" alt="flag"> Languages
                            </a>

                            <a class="dropdown-item" href="#">
                                <img src="assets/images/uk.png" alt="flag"> English
                            </a>
                            
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/china.png" alt="flag"> 简体中文
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/spain.png" alt="flag"> español
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/united-arab-emirates.png" alt="flag"> عربي
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/france.png" alt="flag"> Français
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/iran.png" alt="flag"> فارسی
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/german.png" alt="flag"> German
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/russia.png" alt="flag"> Русский
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/malaysia.png" alt="flag"> Melayu
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/portugal.png" alt="flag"> Português
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/italy.png" alt="flag"> Italiano
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/flag/Lahnda.png" alt="flag"> Lahnda
                            </a>
                        </div>
                    </li>
                    <li class="dropdown language-option">
                        <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-worldwide"></i>
                                <span class="lang-name"></span>
                            </button>
                        <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                            <a class="dropdown-item" href="#">
                                 Currency
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/dollar-symbol.png" alt="flag">USD
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/euro.png" alt="flag">EUR
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/Japanese.png" alt="flag">JPY
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/Pound.png" alt="flag"> GBP
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/australian-dollar.png" alt="flag">AUD
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/canadian-dollar.png" alt="flag">CAD
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/swiss-franc.png" alt="flag">CHF
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/yuan.png" alt="flag">CNH
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/hong-kong-dollar.png" alt="flag"> HKD
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/currency/new-zealand-dollar.png" alt="flag"> NZD
                            </a>
                            
                        </div>
                    </li>
                    <li class="dropdown language-option">
                        <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-worldwide"></i>
                                <span class="lang-name"></span>
                            </button>
                        <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                            <a class="dropdown-item" href="#">
                                My Account
                           </a>
                            <a class="dropdown-item" href="profile.html">
                                Profile
                            </a>
                            <a class="dropdown-item" href="profile-authentication.html">
                                Login/Register
                            </a>
                            <a class="dropdown-item" href="password.html">
                                 Change Password
                            </a>
                            <a class="dropdown-item" href="notifications.html">
                                Notification
                            </a>
                            <a class="dropdown-item" href="#">
                                Payment History
                            </a>
                            <a class="dropdown-item" href="#">
                                Setting
                            </a>
                            <a class="dropdown-item" href="cart.html">
                                Shoping cart
                            </a>
                            <a class="dropdown-item" href="#">
                                Winning Bid
                            </a>
                            <a class="dropdown-item" href="wishlist.html">
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
<!-- End Navbar Area -->
    


<!-- Start Shop Area -->

<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
                            
            <li class="nav-item "><a class="nav-link" style="font-size: 50px; padding-left: 9.5rem; color: black;">Visiting Card</a> </li>
            
        </ul>        
    </div>
    </div>    
</nav>
<div class="filter">
    <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
    <div>
        <h6 class="p-1 border-bottom">Module</h6>
        <ul>
            <li><a href="#">All/Any</a></li>
            <li><a href="#">Bid</a></li>
            <li><a href="#">Buy</a></li>
            <li><a href="#">Deal</a></li>
            <li><a href="#">Catalog</a></li>
            <li><a href="#">Invest</a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom">Filter By</h6>
        <p class="mb-2">Colorr</p>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                <span class="fa fa-circle pr-1" id="red"></span>Red
            </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                <span class="fa fa-circle pr-1" id="teal"></span>Teal
            </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                <span class="fa fa-circle pr-1" id="blue"></span>Blue
            </a></li>
        </ul>
    </div>
    <div>
        <h6>Type</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="radio" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label>
            </div>
        </form>
    </div>
</div>
<section id="sidebar">
    <div>
        <h6 class="p-1 border-bottom">Module</h6>
        <ul>
            <li><a href="#">All/Any</a></li>
            <li><a href="#">Bid</a></li>
            <li><a href="#">Buy</a></li>
            <li><a href="#">Deal</a></li>
            <li><a href="#">Catalog</a></li>
            <li><a href="#">Invest</a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom">Filter By</h6>
        
    </div>
    <div>
        <h6>Items</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">All/Any</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Product</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="checkbox" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Service</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="checkbox" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Project</label>
            </div>
        </form>
    </div>
    <div>
        <h6>Submitted</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">All/Any</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Oldest To Newest</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="checkbox" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Newest To Oldest</label>
            </div>
        </form>
    </div>
    <div>
        <h6>Price/Current Bid</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">All/Any</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Highest to Lowest</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="checkbox" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Lowest to Highest</label>
            </div>
        </form>
    </div>
    <div>
        <h6>Time Remaining</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">All/Any</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="checkbox" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ending Soonest</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="checkbox" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Ending Longest</label>
            </div>
        </form>
    </div>
</section>
<section id="products">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img id="myImg" src="assets/images/resume.jpg" alt="Snow" style="width:100%;max-width:300px">
                <!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>
                <div class="card-body">
                  <p class="card-text">Wooden chair with legs</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>
                         
                </div>
              </div>
        </div>
        <div class="col-lg-3 offset-lg-0 col-sm-4 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img id="myImg" src="assets/images/visiting2.jpg" alt="Snow" style="width:100%;max-width:300px">
                <!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>
                <div class="card-body">
                  <p class="card-text">Ugly chair and table set</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>
                  
                  
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Leather Lounger</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>
                          
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Tree Trunk table set</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>
                        
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Red Leather Bar Stool</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>
                        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Modern Dining Table</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Boring Dining Table</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">An Ugly Office</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>       
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Red Leather Bar Stool</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Modern Dining Table</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Boring Dining Table</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="assets/images/visiting3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">An Ugly Office</p>
                  <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto" >Print</a>       
                </div>
            </div>
        </div>
    </div>
    
</div>

</section>


 


    <!-- Start Review Area -->

    
    <!-- End Review Area -->

    <!-- Start Footer Area -->
 
    <!-- End Footer Area -->

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
    <script src="assets/js/main.js"></script>
    <script>
        const slide = {
                    main : null,
                    elementImg : null,
                    imgSelected : 0,
                    nextSlide: function (){
                        if (this.imgSelected != null)
                        {
                            if (this.imgSelected < (this.elementImg.length - 1))
                            {
                                this.imgSelected++;
                                this.normalizeSlide();
                            }
                        }
                    },
                    prevSlide: function (){
                        if (this.imgSelected != null)
                        {
                            if (this.imgSelected > 0)
                            {
                                this.imgSelected--;
                                this.normalizeSlide();
                            }
                        }
                    },
                    normalizeSlide: function (){

                        for (num = 0; num < this.elementImg.length; num++)
                        {
                            this.elementImg[num].classList.remove("hideLeft","prevLeftSecond","prev","selected","next","nextRightSecond","hideRight");
                        }

                        this.elementImg[this.imgSelected].classList.add("selected");

                        if (this.imgSelected > 2)
                        {
                            this.elementImg[this.imgSelected-2].classList.add("hideLeft");
                            this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
                            this.elementImg[this.imgSelected-1].classList.add("prev");
                        }
                        else if (this.imgSelected > 1)
                        {
                            this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
                            this.elementImg[this.imgSelected-1].classList.add("prev");
                        }
                        else if (this.imgSelected > 0)
                        {
                            this.elementImg[this.imgSelected-1].classList.add("prev");
                        }

                        if ((this.imgSelected + 3) < this.elementImg.length)
                        {
                            this.elementImg[this.imgSelected+3].classList.add("hideRight");
                            this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
                            this.elementImg[this.imgSelected+1].classList.add("next");
                        }
                        else if ((this.imgSelected + 2) < this.elementImg.length)
                        {
                            this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
                            this.elementImg[this.imgSelected+1].classList.add("next");
                        }
                        else if((this.imgSelected + 1) < this.elementImg.length)
                        {
                            this.elementImg[this.imgSelected+1].classList.add("next");
                        }
                    }
                }

                window.onload = () => {

                    slide.main = document.getElementById("carousel");
                    slide.elementImg = slide.main.getElementsByClassName("slideImg");

                    for (num = 0; num < slide.elementImg.length; num++)
                    {
                        slide.elementImg[num].setAttribute("img-number", num);
                        
                        slide.elementImg[num].addEventListener("click", (event) => {
                            slide.imgSelected = parseInt(event.target.parentElement.getAttribute("img-number"));
                            slide.normalizeSlide();
                        });

                        if (slide.elementImg[num].classList.contains("selected"))
                        {
                            slide.imgSelected = num;
                        }
                    }

                    document.getElementById("prev").addEventListener("click", () => {slide.prevSlide()});
                    document.getElementById("next").addEventListener("click", () => {slide.nextSlide()});

                }
    </script>
    <script>
                const allDropdowns = document.querySelectorAll('.dropdown__')
        if (allDropdowns) {
            allDropdowns.forEach(dropdown => {
                let dropdownList = dropdown.querySelector('.dropdown__list__')
                let dropdownListHeight = dropdownList.getBoundingClientRect().height
                let compStl = window.getComputedStyle(dropdownList)
                let currentpadding = compStl.getPropertyValue('padding')
                let dropdownListPadding = currentpadding
                dropdownList.style.height = '0px';
                dropdownList.style.overflow = 'hidden';
                dropdownList.style.padding = '0px'
                dropdownList.style.display = 'none';

                dropdown.addEventListener('click', () => {
                    allDropdowns.forEach(dropdown2 => {
                        if (dropdown2.classList.contains('active') && dropdown !== dropdown2) {
                            dropdown2.classList.remove('active')
                            let dropdownList2 = dropdown2.querySelector('.dropdown__list__')
                            dropdownList2.style.height = `0px`;
                            dropdownList2.style.padding = '0px'
                            let compStyle = window.getComputedStyle(dropdownList2)
                            let currentTransition = compStyle.getPropertyValue(
                                'transition-duration')
                            setTimeout(() => {
                                dropdownList2.style.display = 'none'
                            }, currentTransition.slice(0, -1) * 1000)
                        }
                    })
                    if (dropdown.classList.contains('active')) {
                        dropdown.classList.remove('active')
                        dropdownList.style.height = `0px`;
                        dropdownList.style.padding = '0px'

                        let compStyle = window.getComputedStyle(dropdownList)
                        let currentTransition = compStyle.getPropertyValue('transition-duration')
                        setTimeout(() => {
                            dropdownList.style.display = 'none'
                        }, currentTransition.slice(0, -1) * 1000)
                    } else if (!dropdown.classList.contains('active')) {
                        dropdown.classList.add('active')
                        dropdownList.style.display = 'flex';

                        setTimeout(() => {
                            dropdownList.style.height = `${dropdownListHeight}px`;
                            dropdownList.style.padding = `${dropdownListPadding}`;

                        }, 50)
                    }
                })
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.dropdown__')) {
                        allDropdowns.forEach(dropdown2 => {
                            dropdown2.classList.remove('active')
                            let dropdownList2 = dropdown2.querySelector('.dropdown__list__')
                            dropdownList2.style.height = `0px`;
                            dropdownList2.style.padding = '0px'
                            let compStyle = window.getComputedStyle(dropdownList2)
                            let currentTransition = compStyle.getPropertyValue(
                                'transition-duration')
                            setTimeout(() => {
                                dropdownList2.style.display = 'none'
                            }, currentTransition.slice(0, -1) * 1000)
                        })
                    }
                })

            })
        }
    </script>

    <script>
        //jQuery code
$( document ).on( "click", ".button-nav, .navigation-backdrop", function () {
  
  var $nav = $( "#navigation-demo" );
  var $hasClass = $nav.hasClass( "open" );

  if ( !$hasClass ) {
      $nav.addClass( "open" );
      $( "body" ).append( "<div class='navigation-backdrop'></div>" );
  } else {
      $nav.removeClass( "open" );
      $( ".navigation-backdrop" ).remove();
  }

});
    </script>
    <script>
        var timeInSecs;
var ticker;

function startTimer(secs) {
timeInSecs = parseInt(secs);
ticker = setInterval("tick()", 1000); 
}

function tick( ) {
var secs = timeInSecs;
if (secs > 0) {
timeInSecs--; 
}
else {
clearInterval(ticker);
startTimer(5*60); // 4 minutes in seconds
}

var mins = Math.floor(secs/60);
secs %= 60;
var pretty = ( (mins < 10) ? "0" : "" ) + mins + ":" + ( (secs < 10) ? "0" : "" ) + secs;

document.getElementById("countdown").innerHTML = pretty;
}

startTimer(5*60); // 4 minutes in seconds

//Credits to Gulzaib from Pakistan
    </script>

    <script>
        window.addEventListener("load",function(event){
  x=document.querySelector('.c1'); 
  y=document.querySelector('.time');
  total=20;
  t=total;
  s=setInterval(timer,1000);
});

function timer(){
  if(t===0)
    clearInterval(s);
  sec=(t%60).toString();
  min=Math.round(t/60).toString();
  console.log(min.length);
  if(min.length===1)
    min='0'+min;
  if(sec.length===1)
    sec='0'+sec;
  y.innerHTML=min+':'+sec;
  ratio=(t/total);
  rad=parseInt(x.getAttribute('r'));
  progress=Math.ceil(rad*(22/7)*2*(1-ratio));
  t-=1;
  x.style.strokeDashoffset=progress.toString();
  console.log(progress.toString());
}
    </script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
    
</body>


</html>