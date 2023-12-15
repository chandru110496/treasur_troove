<!doctype html>
<?php ini_set('display_errors', 0);
?>
<html class="no-js" lang="zxx">
<?php include("include/head.php");

$api_key = 'e1cbe9d7cd31b9bb8ff06a9e';
// $base_currency = 'USD';
// $target_currency = 'EUR';
// $url = "https://api.exchangerate-api.com/v4/latest/{$base_currency}";
$url = "https://v6.exchangerate-api.com/v6/e1cbe9d7cd31b9bb8ff06a9e/latest/USD";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
// print_r($response);
curl_close($curl); ?>

<head>
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <!-- <?php print_r($user_id); ?> -->
    <!-- slider_area_start -->
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
    <?php
                $sql = "SELECT * FROM `save_slider`";
                $result = mysqli_query($db, $sql);
                // print_r($result);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $img = $row['background_image'];                
                       $title = $row['title'];
                        ?>
<style>.first_banner {
  background-image: url('upload/save_life/<?php echo $img;?>');
}</style>

    <div class="slider_area">
        
       
        <div class="single_slider  d-flex align-items-center first_banner overlay2">
    
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3></h3>
                            <p><?php echo $title;?></p>
                            <!-- <a href="About.php" class="boxed-btn3">Learn More
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                }
            }
            ?>
    <!-- slider_area_end -->

    <!-- reson_area_start  -->
    
    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        
                        <h3><span>Save A Life</span></h3>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <?php
                $sql = "SELECT * FROM `save_cards`";
                $result = mysqli_query($db, $sql);
                // print_r($result);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $img = $row['background_image'];                
                       $title = $row['title'];
                       $heading=$row['heading'];
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="upload/save_cards/<?php echo $img;?>" alt="" style="height:400px;object-fit: cover">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4><?php echo $heading;?></h4>
                            <p><?php echo $title;?></p>
                            <!-- <a href="cause_details.php" class="read_more">Read More</a> -->
                        </div>
                    </div>
                </div>
                <?php
                }
            }
            ?>               
            </div>
        </div>
    </div>
    <!-- reson_area_end  -->
    <!-- latest_activites_area_start  -->


    <?php
                $sql_act = "SELECT * FROM `save_activities`";
                $result_act = mysqli_query($db, $sql_act);
                //  print_r($result_act);
                if ($result_act) {
                    while ($row_act= mysqli_fetch_assoc($result_act)) {
                        $activity_img = $row_act['background_image'];                
                       $activity_content = $row_act['title'];
                       $video_link=$row_act['heading'];
                       
                        ?>
                         <?php
                }
            }
            ?> 
    <div class="latest_activites_area">
   
                       
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="popup-video" href="<?php echo $video_link;?>">
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                <div class="section_title">
                            <h3> <span>Watch Our Latest  </span><br>
                                Activities</h3>
                        </div>
                        <p class="para_1"><?php echo $activity_content;?></p class="para_1">
                        <p class="para_2"></p>
                        
                        <a href="#" data-scroll-nav='1' class="boxed-btn4">Donate Now</a>


                    <div class="activites_info">
                     
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <style>
    .video_bg_1 {
  background-image: url('upload/save_activities/<?php echo $activity_img;?>');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  height: 600px;
  margin-left: 15px;
}

element.style {
}
.latest_activites_area .video_activite {
    position: absolute;
    top: 0;
    left: 0;
    width: 40%;
    bottom: 0;
    /* height: 600px; */
}
.latest_activites_area {
    background: rgba(60, 199, 143, 0.06);
    position: relative;
    height:650px;
}
</style>
    
    

    <div class="our_volunteer_area section_padding">
    <div class="section_title text-center mb-55">
                        <h3><span>Our Volunteer</span></h3>
                    </div>
    <div class="container">
<div class="row justify-content-center">
<?php

                $sql = "SELECT * FROM `save_voluntres`";
                $result = mysqli_query($db, $sql);
                // print_r($result);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $img = $row['background_image'];                
                       $name = $row['name'];
                       $role=$row['role'];                       
                        ?>

    <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img  style="object-fit: cover;width:280px;height:298px;" src="upload/save_voluntres/<?php echo $img;?>" alt="">
                        </div>
                        <div class="voolenteer_info d-flex align-items-end">
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4><?php echo $name;?></h4>
                                <p><?php echo $role;?></p>
                            </div>
                        </div>
                    </div>
                </div>     
                <?php
                             }
                         }
                         ?>
    </div>
    </div>
    </div>


    <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Donate</span></h3>
                    </div>
                </div>
            </div>
            <!-- currency coverting -->
            <?php
            

            if ($currency != "" || $currency == NULL || $currency == "INR") {
                $currency = 1;
            } else {
                // $currency=$_SESSION['currency_type']; 
            }
            ?>

            <?php
                $result = $db->query($sql);
                $sqls = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
                $stmt = $db->query($sqls);
                if ($ro = mysqli_fetch_assoc($stmt)) {
                   
                    $currency = $ro['cur_type'];
                }
                $data = json_decode($response, true);
               
                $usd = $data['conversion_rates'][$currency];
                $user_id=$_SESSION['user_details']['user_id'];
                $get_qry="SELECT * FROM `user_details` WHERE `user_id`=$user_id";
                $get_exc=mysqli_query($db,$get_qry);
                $user_details=mysqli_fetch_assoc($get_exc);
                $user_currency_type=$user_details['cur_type'];
                $sqls = "SELECT * FROM `currency` WHERE `currency`.`name` ='$user_currency_type'";
                $stmt = $db->query($sqls);
                if ($ro= mysqli_fetch_assoc($stmt)) {
                    $currency_symbol= $ro['symbol'];
                }
            ?>
  <div class="row justify-content-center" style="margin-left: 252px;">
    <div class="col-lg-6">
        <form action="#" class="donation_form">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="single_amount">
                        <div class="input_field">
                            <div class="input-group" style="width: 164px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><?php echo $currency_symbol; ?></span>
                                </div>
                                <input type="text" name="donate" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="donate_now_btn text-center">
                        <button type="button" class="boxed-btn4" id="razorpay-donate">Donate</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<form id="razorpay-form" action="save_place_donation.php" method="POST">
    <input type="hidden" name="razorpay_amount" id="razorpay-amount">
    <input type="hidden" name="user_id" id="" value="<?php echo $user_id ?>">
    <input type="hidden" name="hidden">
</form>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    document.getElementById("razorpay-donate").addEventListener("click", function() {
        var donationAmount = document.getElementsByName("donate")[0].value;
        var options = {
            key: "rzp_test_QApmgDSbYnvqLS", // Replace with your Razorpay API key
            amount: donationAmount * 100, // Amount in smallest currency unit
            name: "BID TREASURE TROOVE",
            description: "BID TREASURE TROOVE",
            image: "assets/images/logo.png",
            theme: {
                color: "#009efd"
            },
            prefill: {
                name: "<?php echo $first_name; ?>",
                email: "",
                contact: ""
            },
            handler: function(response) {
                document.getElementById("razorpay-amount").value = donationAmount;
                document.getElementById("razorpay-form").submit();
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
    });
</script>
            </div>
        </div>
    </div>
<style>

.slider_area .single_slider {
    height: 484px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.section_padding {
    padding-top: 69px;
    padding-bottom: 120px;
}
</style>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>

<?php include("include/footer.php"); ?>
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
.dropdown-item{
                                         margin-left: 20px;
                                         width: 215px;   

                                }
</style>
<script>
    function goBack() {
            // This will take you back to the previous page in the browser's history.
            history.back();
        }
</script>
