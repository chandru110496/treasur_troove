<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/eeza/default/job-details-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:05:51 GMT -->

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
    <style>
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
            

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
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
            <div class="col-lg-4 col-md-6">
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
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>
<!-- End Navbar Area -->
    <!-- Start Job Details Area -->
    <div class="job-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="job-details-desc">
                        <h2>Graduate Programme – IT Software Test Analyst Engineer</h2>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua at vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
                            no sea taki mata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet consetetur.</p>

                        <div class="job-details-content">
                            <h3>Job Responsibilities:</h3>

                            <ul class="list">
                                <li>Lorem decore nullam te eum id evertitur reformidans sea id possit principes.</li>
                                <li>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                <li>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                <li>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                <li>Lorem decore nullam te eum id evertitur reformidans sea id possit.</li>
                            </ul>
                        </div>

                        <div class="job-details-content">
                            <h3>Education:</h3>

                            <ul class="list">
                                <li>Lorem decore nullam te eum id evertitur reformidans sea id possit principes.</li>
                                <li>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                <li>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                <li>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                <li>Lorem decore nullam te eum id evertitur reformidans sea id possit.</li>
                            </ul>
                        </div>

                        <div class="job-details-content">
                            <h3>Experience:</h3>

                            <ul class="list">
                                <li>Lorem decore nullam te eum id evertitur reformidans sea id possit principes.</li>
                                <li>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                <li>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                <li>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                <li>Lorem decore nullam te eum id evertitur reformidans sea id possit.</li>
                            </ul>
                        </div>

                        <div class="job-details-content">
                            <h3>About Company</h3>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua at vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                                gubergren no sea taki mata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet consetetur.</p>
                        </div>

                        <div class="row job-article-footer">
                            <div class="col-lg-6 col-md-6">
                                <div class="article-tags">
                                    <span>Required Skill:</span>
                                    <a href="index.php">IT</a>
                                    <a href="index.php">Engineer</a>
                                    <a href="index.php">Software</a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="article-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>

                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class="flaticon-facebook"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class="flaticon-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class="flaticon-instagram"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class="flaticon-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="related-jobs-box">
                        <h3>Related Jobs</h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-job-list-box">
                                    <div class="job-information">
                                        <div class="company-logo">
                                            <a href="job-details-1.php"><img src="assets/images/job/job-1.png" alt="image"></a>
                                        </div>
                                        <h3>
                                            <a href="job-details-1.php">Assistant Editor</a>
                                        </h3>
                                        <span>Solit IT Solution</span>

                                        <div class="bookmark-btn">
                                            <i class="ri-bookmark-line"></i>
                                        </div>

                                        <div class="hover-bookmark-btn">
                                            <i class="ri-bookmark-fill"></i>
                                        </div>
                                    </div>

                                    <ul class="job-tag-list">
                                        <li>Featured</li>
                                        <li class="urgent">Urgent</li>
                                        <li class="private">Private</li>
                                        <li>Part Time</li>
                                    </ul>

                                    <ul class="location-information">
                                        <li><i class="ri-time-line"></i> 3 Days Left</li>
                                        <li><i class="ri-map-pin-line"></i> 32, Walsh Street, USA</li>
                                        <li><i class="ri-time-line"></i> Part Time</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-job-list-box">
                                    <div class="job-information">
                                        <div class="company-logo">
                                            <a href="job-details-1.php"><img src="assets/images/job/job-2.png" alt="image"></a>
                                        </div>
                                        <h3>
                                            <a href="job-details-1.php">Marketing Director</a>
                                        </h3>
                                        <span>Constik Corporation</span>

                                        <div class="bookmark-btn">
                                            <i class="ri-bookmark-line"></i>
                                        </div>

                                        <div class="hover-bookmark-btn">
                                            <i class="ri-bookmark-fill"></i>
                                        </div>
                                    </div>

                                    <ul class="job-tag-list">
                                        <li>Featured</li>
                                        <li class="urgent">Urgent</li>
                                        <li class="private">Private</li>
                                    </ul>

                                    <ul class="location-information">
                                        <li><i class="ri-time-line"></i> 7 Days Left</li>
                                        <li><i class="ri-map-pin-line"></i> West Africa, Jordan</li>
                                        <li><i class="ri-time-line"></i> Full Time</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="job-details-sticky">
                        <div class="job-details-information">
                            <div class="information-box">
                                <div class="company-logo">
                                    <img src="assets/images/job/job-1.png" alt="image">
                                </div>

                                <h3>Solit IT Solution</h3>
                                <span>Graduate Programme – IT Software Test Analyst Engineer</span>
                            </div>

                            <ul class="information-list-box">
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-calendar"></i> Date Posted</span> 28th June
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-reload"></i> Expiration Date</span> 30th September
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-location"></i> Location</span> Remote
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-volume"></i> Career Level</span> Director
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-layers"></i> Experience</span> 5+ Years
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-briefcase"></i> Qualification</span> Master Degree
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-money"></i> Rate</span> $40 - $60 / Hr
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="flaticon-resume"></i> Job Applicants</span> 30 Applicants
                                    </div>
                                </li>
                            </ul>

                            <div class="job-details-btn-box">
                                <a href="applyjob.php" class="default-btn">Apply For Job <i class="flaticon-list-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Job Details Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="widget-logo">
                            <a href="index.php"><img src="assets/images/logo.png" alt="image"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consetet ur sadipscing elitr sed diam nonumy eirmod tempor invidunt labore.</p>

                        <ul class="widget-social-links">
                            <li><span>Follow:</span></li>

                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="flaticon-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="flaticon-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="flaticon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget ps-5">
                        <h3>Company</h3>

                        <ul class="quick-links">
                            <li><a href="about-us.php">About Eeza</a></li>
                            <li><a href="job-listing-2.php">Browse Jobs</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="candidates-dashboard.php">Candidate Dashboard</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Resources</h3>

                        <ul class="quick-links">
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="dashboard-post-job.php">Post A Job</a></li>
                            <li><a href="candidates-1.php">Candidates</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Quick Contact</h3>

                        <ul class="widget-info">
                            <li>
                                <i class="flaticon-a"></i> 32, Wales Street, New York, USA
                            </li>

                            <li>
                                <i class="flaticon-p"></i>
                                <a href="tel:00901361246725">(009)01361246725</a>
                            </li>

                            <li>
                                <i class="flaticon-e"></i>
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c0a8a5acacaf80a5a5baa1eea3afad"><span class="__cf_email__" data-cfemail="4b232e2727240b2e2e312a65282426">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

       
    </footer>
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
</body>

<!-- Mirrored from templates.envytheme.com/eeza/default/job-details-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:05:51 GMT -->

</html>