<?php include("include/head.php"); ?>
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
    border-radius: 15px 15px 0 0;
}
.card-body p{
    margin: 2px;
    text-transform:uppercase;
    font-size:15px;
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
        height: 350px;
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
    padding: 10px 24px;
    font-size: 14px;
    font-weight: 300;
    background: #1657cb;
    color: #fff;
    text-transform:uppercase;
}

#myImg {
    height: 210px;
  border-radius: 0px;
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


/* popup form */
#btnOpenForm {
    display: flex;
    margin: 0 auto;
    margin-bottom: 0px;
    border: 0;
    border-radius: 15px;
    padding: 10px 24px;
    font-size: 14px;
    font-weight: 300;
    background: #1657cb;
    color: #fff;
    height:32px;
    align-items:center;
    margin-top:7px;
    text-transform:uppercase;
}
.form-popup-bg {
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}
.form-popup-bg {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
  overflow-y: auto;
  z-index: 10000;
}
.form-popup-bg.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}
.form-container {
    background-color: #2d3638;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    position:relative;
  padding: 40px;
  color: #fff;
}
.close-button {
  background:none;
  color: #fff;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 0;
  right: 0;
  border: solid 1px #fff;
}

.form-popup-bg:before{
    content:'';
    background-color: #fff;
  opacity: .25;
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

   </style>



<style>.bid{justify-content:center;align-items:center;}</style>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom bid">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="container" style="justify-content:stretch;" >
    <input type="search" style="border-radius:15px;width:234px;" placeholder="Search ..."><i class="fa fa-search search" style="cursor:pointer;" aria-hidden="true"></i>
    <div class="div"> <h5 onclick="show()" style="margin-top:1px;"> <img src="assets/images/products/filter.png" alt="Filter" style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;">  </h5></div>
        </div>
     </div>
     
     <h1 style="margin-right: 600px;font-size:px;">Invest</h1>
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

             <div class="accordion-item" >
                <h2 class="accordion-header"
                    id="accordion_a000">
                   <button class="accordion-button"
                           type="button"
                           data-bs-toggle="collapse"
                           data-bs-target="#accordion_b000"
                           aria-expanded="true"
                           aria-controls="accordion_b000">Modules</button>
                </h2>

                <div id="accordion_b000"
                     class="accordion-collapse collapse show"
                     aria-labelledby="accordion_a000"
                     data-bs-parent="#accordion_a000">
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
             <div class="accordion-item" >
                <h2 class="accordion-header"
                    id="accordion_a001">
                   <button class="accordion-button"
                           type="button"
                           data-bs-toggle="collapse"
                           data-bs-target="#accordion_b001"
                           aria-expanded="true"
                           aria-controls="accordion_b001">Hot Deals</button>
                </h2>

                <div id="accordion_b001"
                     class="accordion-collapse collapse show"
                     aria-labelledby="accordion_a001"
                     data-bs-parent="#accordion_a001">
                   <div class="accordion-body pt-1">
                      <ul class="list-unstyled mb-0">
                          <!-- <li><a href="#">Jobs</a></li> -->
                          <!-- <li><a href="#">Team Up</a></li> -->
                          <!-- <li><a href="savelife.php">Save a Life</a></li> -->
                          <li><a href="#">Most Popular</a></li>
                          <li><a href="#">New Arrivals</a></li>
                          <li><a href="#">Offers</a></li>
                          <li><a href="#">Must Buy</a></li>
                          <!-- <li><a href="#">Shop</a></li> -->
                          <!-- <li><a href="#">Cart Now</a></li> -->
                          <li><a href="wearhouse.php">Vendor</a></li>
                          <li><a href="#">Daily Deal</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="accordion-item mt-0">
                <h2 class="accordion-header"
                    id="accordion_a001">
                   <button class="accordion-button"
                           type="button"
                           data-bs-toggle="collapse"
                           data-bs-target="#accordion_b001"
                           aria-expanded="true"
                           aria-controls="accordion_b001">Price</button>
                </h2>
                <div id="accordion_b001"
                     class="accordion-collapse collapse show"
                     aria-labelledby="accordion_a001"
                     data-bs-parent="#accordion_a001">
                   <div class="accordion-body pt-1">

                      <input type="range"
                             class="form-range" />

                      <div class="row row-cols-md-2 g-2 mb-3">
                         <div class="col">
                            <label>Min</label>
                            <input class="form-control px-1"
                                   placeholder="0"
                                   type="number" />
                         </div>
                         <div class="col text-end">
                            <label>Max</label>
                            <input
                                   class="form-control px-1"
                                   placeholder="10000"
                                   type="number" />
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
  </nav>




<section id="products">
<div class="container">
    <div class="row">
    <?php

    $sql = "SELECT * FROM `invest_details`";
    //    echo $sql;
    $result = $db->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
      // print_r($result);
      $invest_image = $row['product_image1'];
      $invest_id = $row['invest_id'];
      $invest_name = $row['product_name'];
      $timer = $row['days'];
      ?>
          <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
              <div class="card">
              <script>  echo $product=<?php echo $product_id; ?></script>
              <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i>
                      <script>
                      function myFunction(x) {
                          x.classList.toggle("active");

                      }
                      </script>
                  <img class="card-img-top" src="./upload/product/<?php echo $invest_image; ?>" alt="Card image cap">

                  <!-- The Modal -->

                  <div class="card-body">
                    <p class="card-text"><?php echo $invest_name; ?></p>


                   <div  style="color:black;" id="timer<?php echo $invest_id; ?>"style="text-align:center;margin-bottom:4px;"></div>

  <script>
    // Set the duration of the timer in days
  const durationInDays<?php echo $invest_id; ?> = <?php echo $timer; ?>;

  // Calculate the total number of seconds based on the duration in days
  const totalSeconds<?php echo $invest_id; ?> = durationInDays<?php echo $invest_id; ?> * 24 * 60 * 60;

  // Get the HTML element where the timer will be displayed
  const timerElement<?php echo $invest_id; ?> = document.getElementById("timer<?php echo $invest_id; ?>");

  // Start the timer
  let secondsRemaining<?php echo $invest_id; ?> = totalSeconds<?php echo $invest_id; ?>;
  let timerId<?php echo $invest_id; ?> = setInterval(() => {
    // Calculate the number of days, hours, minutes, and seconds remaining
    const daysRemaining<?php echo $invest_id; ?> = Math.floor(secondsRemaining<?php echo $invest_id; ?> / (24 * 60 * 60));
    const hoursRemaining<?php echo $invest_id; ?> = Math.floor((secondsRemaining<?php echo $invest_id; ?> % (24 * 60 * 60)) / (60 * 60));
    const minutesRemaining<?php echo $invest_id; ?> = Math.floor((secondsRemaining<?php echo $invest_id; ?> % (60 * 60)) / 60);
    const secondsInMinuteRemaining<?php echo $invest_id; ?> = secondsRemaining<?php echo $invest_id; ?> % 60;

    // Update the timer display
    timerElement<?php echo $invest_id; ?>.innerText = `${daysRemaining<?php echo $invest_id; ?>}D: ${hoursRemaining<?php echo $invest_id; ?>}H: ${minutesRemaining<?php echo $invest_id; ?>}M: ${secondsInMinuteRemaining<?php echo $invest_id; ?> < 10 ? '0' : ''}${secondsInMinuteRemaining<?php echo $invest_id; ?>}S`;

    // Decrement the number of seconds remaining
    secondsRemaining<?php echo $invest_id; ?>--;

    // If the timer has reached zero, stop the interval
    if (secondsRemaining<?php echo $invest_id; ?> < 0) {
      clearInterval(timerId<?php echo $invest_id; ?>);
      timerElement<?php echo $invest_id; ?>.innerText = "CLOSED";
    }
  }, 1000);

  </script>
   <button id="btnOpenForm" style="">Invest</button>

  <div class="form-popup-bg">
    <div class="form-container">
      <button id="btnCloseForm" class="close-button">X</button>
      <h1>Contact Us</h1>
      <p>For more information. Please complete this form.</p>
      <form action="">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" />
        </div>
        <div class="form-group">
          <label for="">Company Name</label>
          <input class="form-control" type="text" />
        </div>
        <div class="form-group">
          <label for="">E-Mail Address</label>
          <input class="form-control" type="text" />
        </div>
        <div class="form-group">
          <label for="">Phone Number</label>
          <input class="form-control" type="text" />
        </div>
        <button>Submit</button>
      </form>
    </div>
  </div>
                        
                  </div>
                </div>
          </div><?php } ?>

    </div>
    
</div>

</section>
<div class="w3-container">
    <div id="id01" class="w3-modal fullpopupimgsss">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <!-- modal start -->

         <div class="elect-modal row">
          <div class="col-md-6">
            
            <h3>Project Plan</h3><br>
            
          </div>
          <div class="products-details-desc">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="blog">
                                <h3>Blog</h3>
                                <video width="700px" height="455px" style="border-radius:20px;" controls="">
                                    <source src="assets/video/drone-1.mp4" type="video/mp4">
                                  </video>
                                </div>
                           
                             <div class="job-details-content">
                                <h3>About Project:</h3>
    
                                <ol class="list">
                                    <li>Lorem decore nullam te eum id evertitur reformidans sea id possit principes.</li>
                                    <li>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                    <li>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Lorem decore nullam te eum id evertitur reformidans sea id possit.</li>
                                </ol>
                                
                            </div>
                            <div class="products-meta">
                                <h3>Job Responsibilities:</h3>
                                <ol class="list">
                                    <li>Lorem decore nullam te eum id evertitur reformidans sea id possit principes.</li>
                                    <li>Dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</li>
                                    <li>Consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</li>
                                    <li>Lorem decore nullam te eum id evertitur reformidans sea id possit.</li>
                                </ol>
                             </div>

                            <div class="products-add-to-cart">
                               
                                <!-- <div class="input-counter">
                                    <span class="minus-btn"><i class="ri-subtract-line"></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class="ri-add-line"></i></span>
                                </div> -->
                                <a href="applyjob.php" class="default-btn">Apply</a>
                                <!-- <button type="submit" class="default-btn">Add to Cart</button> -->
                            </div>
                            <div class="products-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li><a href="#" class="facebook" target="_blank"><i class="ri-facebook-line"></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class="ri-linkedin-line"></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div>
        </div>       
        </div>       
        </div>       
         </div>
        </div>
      </div>
    </div>
  </div>
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
      $(document).on("click", ".card-img-top", function () {
    // $("#service_list").hide();
    // $("#edit_service_form").hide();
    $(".fullpopupimgsss").show();

  });  

  $(document).on("click", ".closemymodalbox", function () {
    // alert('sudip');
    // $("#service_list").hide();
    // $("#edit_service_form").hide();
    $(".fullpopupimgsss").hide();

  }); 

  
</script>
<script>
    function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });
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
</body>
</php>