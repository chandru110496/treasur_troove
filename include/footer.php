<!-- Start Footer Area -->

<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-line"></i>
</div>
<!-- End Go Top Area -->
<!-- our own js file  -->
<script src="/js/common.js"></script>

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
<script src="js/main.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.12/push.min.js"></script>
<!-- <script src="js/wearhouse.js"></script> -->
<script>
    //jQuery code
    $(document).on("click", ".button-nav, .navigation-backdrop", function() {

        var $nav = $("#navigation-demo");
        var $hasClass = $nav.hasClass("open");

        if (!$hasClass) {
            $nav.addClass("open");
            $("body").append("<div class='navigation-backdrop'></div>");
        } else {
            $nav.removeClass("open");
            $(".navigation-backdrop").remove();
        }

    });
</script>

<script>
    $(document).on("click", ".card-img-top", function() {
        // $("#service_list").hide();
        // $("#edit_service_form").hide();
        $(".fullpopupimgsss").show();

    });

    $(document).on("click", ".closemymodalbox", function() {
        // alert('sudip');
        // $("#service_list").hide();
        // $("#edit_service_form").hide();
        $(".fullpopupimgsss").hide();

    });
</script>

<footer class="footer-area pt-100">
    <div class="container">
        <div class="row" style="justify-content: space-between;">
            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <a href="index.php"><img src="assets/images/logo.png" alt="image"></a>

                    </div>
                    <p>Lorem ipsum dolor sit amet consetet ur sadipscing elitr sed diam nonumy eirmod tempor invidunt labore.</p>

                    <ul class="widget-social-links">
                        <!-- <li><span>Follow:</span></li> -->

                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://twitter.com/" target="_blank">

                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">

                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-pinterest-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-myspace-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>Company</h3>

                    <ul class="quick-links ">
                        <li><a href="about-us.php">About-us</a>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="placing_bids.php">Placing Bids</a></li>
                        <!-- <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="blog.php">Blog</a></li> -->

                        <!-- <li><a href="candidates-dashboard.php">Candidate Dashboard</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Resources</h3>

                    <ul class="quick-links">
                        <li><a href="privacy-policy.php">Our Policy</a></li>
                        <li><a href="terms_conditons.php">Terms and Conditions</a></li>
                        <li><a href="return_policy.php">Return Policy</a></li>

                        <li><a href="payment_policy.php">Payment Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <p><i class="ri-copyright-line"></i>
                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <a href="index.php" target="_blank"> American Trade, Inc.</a>
            </p>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function() {
        $(document).on("click", "#module", function() {
            $("#module_container_sudip").show();
            $("#module").hide();
            $("#module_up").show();

        });

        $(document).on("click", "#module_up", function() {
            $("#module_container_sudip").hide();
            $("#module").show();
            $("#module_up").hide();
        });



        $(document).on("click", "#module1", function() {
            $("#module_container_sudip1").show();
        });
    });
</script>


</body>

</html>