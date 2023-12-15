<?php include("include/head.php"); ?>
</div>
</div>
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
        <!-- Start Privacy Policy Area -->
        <div class="privacy-policy-area ptb-100">
            <div class="container">
                <div class="privacy-policy-content">
                    <p><i>This Privacy Policy was last updated on September 1, 2021.</i></p>
                    <h3><span>1.</span> What Data We Get</h3>
                    <blockquote class="blockquote">
                        <p>We collect certain data from you directly like information you enter yourself data about your participation in courses and data from third-party platforms you connect with Eeza. We also collect some data automatically information about your device and what parts of our Services you interact with or spend time using.</p>
                    </blockquote>
                    <h3><span>2.</span> Data You Provide to Us</h3>
                    <p>We may collect different data from or about you depending on how you use the Services. Below are some examples to help you better understand the data we collect.</p>
                    <h3><span>3.</span> How We Get Data About You</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h3><span>4.</span> What We Use Your Data For</h3>
                    <ol>
                        <li>Responding to your questions and concerns;</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    </ol>
                    <h3><span>5.</span> Your Choices About the Use of Your Data</h3>
                    <p>You can choose not to provide certain data to us, but you may not be able to use certain features of the Services.</p>
                    <ul>
                        <li>To stop receiving promotional communications from us, you can opt out by using the unsubscribe mechanism in the promotional communication you receive or by changing the email preferences in your account. Note that regardless of your email preference settings, we will send you transactional and relationship messages regarding the Services, including administrative confirmations, order confirmations, important updates about the Services, and notices about our policies.</li>
                        <li>The browser or device you use may allow you to control cookies and other types of local data storage. Your wireless device may also allow you to control whether location or other data is collected and shared. You can manage Adobe’s LSOs through their Website Storage Settings panel.</li>
                        <li>To get information and control cookies used for tailored advertising from participating companies, see the consumer opt-out pages for the Network Advertising Initiative and Digital Advertising Alliance, or if you’re located in the European Union, visit the Your Online Choices site. To opt out of Google’s display advertising or customize Google Display Network ads, visit the Google Ads Settings page. To opt out of Taboola’s targeted ads, see the Opt-out Link in their Cookie Policy.</li>
                        <li>To update data you provide directly, log into your account and update your account at any time.</li>
                    </ul>
                    <h3><span>6.</span> Our Policy Concerning Children</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <!-- End Privacy Policy Area -->

        <?php include("include/footer.php"); ?>
        <!-- go to back page button -->



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

<!-- go to back page end -->