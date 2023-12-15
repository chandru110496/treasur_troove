<?php include("include/head.php"); ?>
</div>
</div>

<style>
 .privacy-policy-content h3 {
    margin-top: 25px;
    margin-bottom: 15px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
}
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
<h2 style="text-align:center;text-transform:uppercase;">Payment Information</h2><br>
        <!-- Start Privacy Policy Area -->
        <div class="privacy-policy-area ptb-100">
            <div class="container">
                <div class="privacy-policy-content">
                    
                    <p style="text-transform:uppercase;">E-Tradespace.com accepts the following payment methods:</p>
                    <li>Credit cards, including American Express, Discover, Master Card, and Visa</li>
                    <li>PayPal Express</li>
                    <li>ATM/ Debit/ Check Cards</li>
                    <li>Bitcoin, Bitcoin Cash, Litecoin, Dogecoin, JWL Coin</li><br>


                    <p style="text-transform:uppercase;">E-Tradespace.com does not accept the following payment methods at this time:</p>
                    <li>Layaway</li>
                    <li>COD</li>
                    <li>Checks</li>
                    <li>Money Orders</li><br>
   
                </div>
            </div>
        </div>
        <!-- End Privacy Policy Area -->

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
</style>

<!--  End of the search your Product  items -->
<!-- go back button -->
<script>
    function goBack() {
            // This will take you back to the previous page in the browser's history.
            history.back();
        }
</script>