

<?php include("include/job_menu.php"); ?>
     

            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Company Profile</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard.php">Home</a></li>
                    <li class="item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="item">Company Profile</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->
            
            <!-- Start Company Profile Area -->
            <div class="my-profile-box">
                <h3>Profile Details</h3>
    
                <form>
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group profile-box">
                                <img src="assets/images/my-profile.jpg" alt="image">
                                <div class="file-upload">
                                    <input type="file" name="file" id="file" class="inputfile" />
                                    <label for="file"><i class="ri-upload-2-line"></i> Upload Photo</label>
                                </div>

                                <div class="text">
                                    <p>Max file size is 1MB, Minimum dimension: 450x450 And Suitable files are .jpg & .png</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Company name (optional)</label>
                                <input type="text" class="form-control" placeholder="Company name (optional)">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="+88 (123) 123456">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Est. Since</label>
                                <input type="text" class="form-control" placeholder="12.08.2021">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Team Size</label>

                                <select class="selectize-filter">
                                    <option value="1">50 - 100</option>
                                    <option value="2">100 - 150</option>
                                    <option value="3">200 - 250</option>
                                    <option value="4">300 - 350</option>
                                    <option value="5">500 - 1000</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Multiple Select Boxes</label>

                                <select class="selectize-filter">
                                    <option value="1">Categories</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Allow In Search & Listing</label>

                                <select class="selectize-filter">
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>About Company</label>
                                <textarea cols="30" rows="6" placeholder="Short description about company..." class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Country</label>

                                <select class="selectize-filter">
                                    <option value="1">Australia</option>
                                    <option value="2">Chaina</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">Germany</option>
                                    <option value="5">United Arab Emirates</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>City</label>

                                <select class="selectize-filter">
                                    <option value="1">Melbourne</option>
                                    <option value="2">Chaina</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">Germany</option>
                                    <option value="5">United Arab Emirates</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Complete Address</label>
                                <input type="text" class="form-control" placeholder="Complete Address">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Find On Map</label>
                                <input type="text" class="form-control" placeholder="Find on map">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" placeholder="Melbourne">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" placeholder="Melbourne">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Facebook URL</label>
                                <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Twitter URL</label>
                                <input type="text" class="form-control" placeholder="https://twitter.com/">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Linkedin URL</label>
                                <input type="text" class="form-control" placeholder="https://www.linkedin.com/">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Instagram URL</label>
                                <input type="text" class="form-control" placeholder="https://instagram.com/">
                            </div>
                        </div>
    
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Submit Now <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Company Profile Area -->

            <!-- Start Copyright Area -->
            <!-- <div class="copyrights-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <p><i class="ri-copyright-line"></i> <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> <a href="#">Eeza</a>. All rights reserved</p>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 text-end">
                        <p>Designed by ❤️ <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                    </div>
                </div>
            </div> -->
            <!-- End Copyright Area -->

        </div>
        <!-- End Main Dashboard Content Wrapper Area -->
        
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





    
<!-- Mirrored from templates.envytheme.com/eeza/default/dashboard-company-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Sep 2022 09:06:10 GMT -->
</html>