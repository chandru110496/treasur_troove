<!doctype html>
<html lang="zxx">

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
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/slide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Treasure Trove</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <style>
      .elect-modal{
        padding:50px;
      }

      /* search */
      .search-box {
    position:absolute;
    transform:translate(10%, 20%);
    background:#2f3640;
    border-radius:40px;
    height:44px;
    padding:7px;
    margin-left: 100px;
    margin-top: -70px;
    box-shadow:0px 0px 10px 0px rbg(0,0,0,0.2);
}

.search-btn {
    border:none;
    background:crimson;
    border-radius:50%;
    float:right;
    display:flex;
    width:30px;
    height:30px;
    justify-content:center;
    align-items:center;
    outline:none;
    transition:0.6s;
    font-weight:bold;
    color:#FFFFFF;
    box-shadow:0px 0px 10px 0px crimson;
}

.search-txt {
    background:none;
    border:none;
    outline:none;
    float:left;
    padding:0px;
    font-size:16px;
    transition:0.6s;
    color:crimson;
    font-weight:bold;
    line-height:30px;
    width:0px;
}

.search-box:hover > .search-txt {
    width:240px;
    padding:0 6px;
}

.search-box:hover > .search-btn {
    background:crimson;
    color:#FFFFFF;
    box-shadow:0px 5px 20px 0px crimson;
}

/* sidenav */
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

/* card */
.overlay_bg {
   display: block;
   position: absolute;
   top: 0;
   width: 100%;
   height: 100%;
  
   background-size: cover;
   filter: blur(0px);
   z-index: -1;
}
.title {
   padding: 0px 0px;
}
.card {
   padding-bottom: 20px;
}
.card-title {
   font-family: "Yellowtail", cursive;
   color: #000;
}
.card-text {
   color: #777;
   font-size: 0.9rem;
}
.btn_grad_blgr {
   margin: 0 auto;
   margin-bottom: 0px;
   border: 0;
   border-radius: 1em;
   padding: 15px 15px;
   font-size: 14px;
   font-weight: 300;
   background: #1657cb;
   color: #fff;
}

.btn_grad_blgr:focus,
.btn_grad_blgr:active {
   box-shadow: none !important;
   border-color: none;
}
.shine_fx {
  width: 405px;
  height: 605px;
  position: absolute;
  top: -256px;
  left: 250px;
  transition: .5s;
  transform: rotate(40deg);
  background: linear-gradient(90deg, rgba(255,255,255, 0)50%, rgba(255,255,255,0.7)100%);
   
}
.shiny {
   position: relative;   
   overflow: hidden;
   transition: ease .3s;
}
.card:hover .shine_fx {  
  transform: rotate(0);
  left: -560px;
  top: -445px;
}

/* search */
.sidebar {
            background-color: white;
            min-height: 600px;
            border: 0px solid black;
            padding: 0px 8px 0px 8px;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar p {
            font-family: 'Poppins', sans-serif;
        }


        .sidebar-title-area {
            background-color: #dee2e6;
            height: 50px;
            padding: 0px 8px;
        }

        .sidebar-title-area a {
            padding: 12px 0px;
            line-height: 50px;
        }

        .sidebar-title {
            text-decoration: none;
            text-transform: uppercase;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .sidebar-block {
            margin-bottom: 42px;
            border: 1px solid gainsboro;

        }


        .sidebar-featured-product p {
            font-size: .9rem;
            font-family: 'Poppins', sans-serif;
        }

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


        input[type=text], select, textarea {
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
  .col-25, .col-75, input[type=submit] {
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
.avatar-upload .avatar-edit input + label {
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
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
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
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}


input[type="radio"]
{
  appearance: none;
}

input[type="radio"] + label
{
  cursor: pointer;
  position: relative;
  padding-left: 30px;
  line-height: 20px;
}

input[type="radio"] + label::before
{
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

input[type="radio"] + label::after
{
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

input[type="radio"]:checked + label::after
{
  opacity: 1;
}

/* change password */
.mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #f9f9f9;
    font-family: 'Open Sans', sans-serif;
  }
 .cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
  }
#signupLogo {
  max-height: 100px;
  margin: auto;
  display: flex;
  flex-direction: column;
}
.formTitle{
  font-weight: 600;
  margin-top: 20px;
  color: #2F2D3B;
  text-align: center;
}
.inputLabel {
  font-size: 12px;
  color: #555;
  margin-bottom: 6px;
  margin-top: 24px;
}
  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }
input {
  height: 40px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
input:disabled {
  cursor: not-allowed;
  border: solid 1px #eee;
}
.buttonWrapper {
  margin-top: 40px;
}
  .submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
.submitButton:disabled,
button[disabled] {
  border: 1px solid #cccccc;
  background-color: #cccccc;
  color: #666666;
}

#loader {
  position: absolute;
  z-index: 1;
  margin: -2px 0 0 10px;
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 4px solid #666666;
  width: 14px;
  height: 14px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
/* change password */

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
                <a href="index.php">
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
            <a class="navbar-brand" href="index.php">
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
                      <li><a href="auction.php">Auction</a></li>
                      <li><a href="make-deal.php">Make A Deal</a></li>
                      <li><a href="warehouse.php">warehouse</a></li>
                      <li><a href="make-a-team.php">Team Up</a></li>
                      
                      <li><a href="#">Freelancer</a></li>
                    
                      <li><a href="savelife.php">Save A Life</a></li>
                      <li><a href="new-arrivals.php">New Arrivals</a></li>
                      <li><a href="daily-deal.php">Daily-deal</a></li>
                      <li><a href="shop.php">Shop Now</a></li>
                      <li><a href="shop-details.php">Shop Details</a></li>
                      <li><a href="cart.php">Cart</a></li>
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
                      <li><a href="cars-motocycle.php">Cars & Motocycle</a></li>
              
                </ul>
              
              </nav>
        </div>
    <!-- navigation close -->
  
      
</div>
            

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="margin-right: 10px;">
                <ul class="navbar-nav m-auto" style="margin-right: 40px;">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">
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
                            

                            <li class="nav-item">
                                <a href="catalog.php" class="nav-link">
                                        Catalog
                                        
                                    </a>

                                    <li class="nav-item">
                                        <a href="make-deal.php" class="nav-link">
                                                Deal                                   
                                            </a>
                                    </li> 

                     
                </ul>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-right: 135px;">
                <ul class="topbar-action">
                    <li>
                        <a href="profile-authentication.php"><i class="flaticon-padlock"></i> Log In</a>
                    </li>

                    <li>
                        <a href="profile-authentication.php"><i class="flaticon-user"></i> Register</a>
                    </li>

                    <li class="dropdown language-option">
                        <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-worldwide"></i>
                                <span class="lang-name"></span>
                            </button>
                        <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
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
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/man.png" alt="flag">Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/enter.png" alt="flag">Login/Register
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/lock.png" alt="flag"> Change Password
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/notification-bell.png" alt="flag">Notification
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/refresh.png" alt="flag">Payment History
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/setting.png" alt="flag">Setting
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/shopping-cart.png" alt="flag">Shoping cart
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/ribbon.png" alt="flag"> Winning Bid
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/love.png" alt="flag">Wish List
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/account/power-off.png" alt="flag">Wish ListLogout
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
   <!-- MAIN -->
		<main>
			<div class="mainDiv">
                <div class="cardStyle">
                  <form action="" method="post" name="signupForm" id="signupForm">
                    
                    <img src="" id="signupLogo"/>
                    
                    <h2 class="formTitle">
                      Login to your account
                    </h2>
                    
                  <div class="inputDiv">
                    <label class="inputLabel" for="password">New Password</label>
                    <input type="password" id="password" name="password" required>
                  </div>
                    
                  <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                  </div>
                  
                  <div class="buttonWrapper">
                    <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                      <span>Continue</span>
                      <span id="loader"></span>
                    </button>
                  </div>
                    
                </form>
                </div>
              </div>

			
		</main>
		<!-- MAIN -->

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
        <script>
            if ($("#bid_counter17").length) {
      // If you need specific date then comment out 1 and comment in 2
      // let endDate = "2020/03/20"; //This is 1
      let endDate = (new Date().getFullYear()) + '/' + (new Date().getMonth() + 1) + '/' + (new Date().getDate() + 1); //This is 2
      let counterElement = document.querySelector("#bid_counter17");
      let myCountDown = new ysCountDown(endDate, function (remaining, finished) {
          let message = "";
          if (finished) {
          message = "Expired";
          } else {
              var re_days = remaining.totalDays;
              var re_hours = remaining.hours;
              message += re_days +"d  : ";
              message += re_hours +"h  : ";
              message += remaining.minutes +"m  : ";
              message += remaining.seconds + "s";
          }
          counterElement.textContent = message;
      });
    }
        </script>
</body>

<!-- Mirrored from templates.envytheme.com/eeza/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:05:36 GMT -->

</html>