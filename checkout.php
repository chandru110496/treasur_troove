<?php
include("include/head.php"); ?>
<style>
    /* search */
    .search-box {
        position: absolute;
        transform: translate(10%, 20%);
        background: #2f3640;
        border-radius: 40px;
        height: 44px;
        padding: 7px;
        margin-left: 100px;
        margin-top: -70px;
        box-shadow: 0px 0px 10px 0px rbg(0, 0, 0, 0.2);
    }

    .search-btn {
        border: none;
        background: crimson;
        border-radius: 50%;
        float: right;
        display: flex;
        width: 30px;
        height: 30px;
        justify-content: center;
        align-items: center;
        outline: none;
        transition: 0.6s;
        font-weight: bold;
        color: #FFFFFF;
        box-shadow: 0px 0px 10px 0px crimson;
    }

    .search-txt {
        background: none;
        border: none;
        outline: none;
        float: left;
        padding: 0px;
        font-size: 16px;
        transition: 0.6s;
        color: crimson;
        font-weight: bold;
        line-height: 30px;
        width: 0px;
    }

    .search-box:hover>.search-txt {
        width: 240px;
        padding: 0 6px;
    }

    .search-box:hover>.search-btn {
        background: crimson;
        color: #FFFFFF;
        box-shadow: 0px 5px 20px 0px crimson;
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


    /* default btn */
    .razorpay-payment-button {
        padding: 15px 70px 16px 25px;
        text-align: center;
        color: var(--white-color) !important;
        font-size: var(--font-size);
        font-weight: 600;
        -webkit-transition: var(--transition);
        transition: var(--transition);
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        position: relative;
        border-radius: 8px;
        z-index: 0;
        background: #1657cb;
        overflow: hidden;
        white-space: nowrap;
        font-family: var(--heading-font-family);
    }

    .razorpay-payment-button i {
        position: absolute;
        right: 10px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        text-align: center;
        display: inline-block;
        height: 38px;
        width: 38px;
        line-height: 40px;
        color: var(--white-color);
        border-radius: 8px;
        background: -webkit-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);
        -webkit-transition: var(--transition);
        transition: var(--transition);
    }

    .razorpay-payment-button:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 550px;
        height: 550px;
        margin: auto;
        background: var(--gradient-color);
        border-radius: 8px;
        z-index: -1;
        -webkit-transform-origin: top center;
        transform-origin: top center;
        -webkit-transform: translateX(-50%) translateY(-5%) scale(0.4);
        transform: translateX(-50%) translateY(-5%) scale(0.4);
        -webkit-transition: -webkit-transform .9s;
        transition: -webkit-transform .9s;
        transition: transform .9s;
        transition: transform .9s, -webkit-transform .9s;
    }

    .razorpay-payment-button:hover {
        color: var(--white-color) !important;
    }

    .razorpay-payment-button:hover:before {
        -webkit-transition: -webkit-transform 1s;
        transition: -webkit-transform 1s;
        transition: transform 1s;
        transition: transform 1s, -webkit-transform 1s;
        -webkit-transform: translateX(-45%) translateY(0) scale(1);
        transform: translateX(-45%) translateY(0) scale(1);
        -webkit-transform-origin: bottom center;
        transform-origin: bottom center;
    }

    .payment-box {
        margin-top: 0;
    }
</style>
</head>

<body>
    <?php
    if (isset($_SESSION['user_details']['user_id']) != "") {
        $first_name = "";
        $user_id = "";
        $last_name = "";
        $email = "";
        $phone = "";
        $country = "";
        $town = "";
        $pin_code = "";
        $address = "";
        $ssn = "";
        $date = "";
    }

    $user_id = $_SESSION['user_details']['user_id'];


    $sql = "SELECT * FROM billing_address WHERE `user_id` = $user_id";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $address_id = $row['address_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $address = $row['address'];
            $town = $row['town'];
            $state = $row['state'];
            $pin_code = $row['pin_code'];
            $phone = $row['phone'];
            $email = $row['email'];
            $country = $row['country'];
            $password = $row['password'];
            $ssn = $row['ssn'];
            $date = $row['date'];
            $status = $row['status'];
        }
    }


    $sum = 0;
    $shipping = 0;
    $sql = "with t1 as(SELECT product_id,quantity FROM my_cart WHERE user_id=$user_id AND status!='Completed' ORDER BY product_name ASC)
     SELECT * FROM product_details t2 ,t1 WHERE t1.product_id = t2.product_id ORDER BY t2.product_name ASC; ";
    $query = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($query)) {
        $qty = $row['quantity'];
        $price = $row['product_new_price'];
        $tax = $row['tax'];
        $total = $qty * ($price + $tax);
        $sum = $total + $sum;
    }

    ?>


    <!-- Start Checkout Area -->
    <h1 class="text-center">Checkout</h1><br>
    <div class="checkout-area ptb-100" style="padding-top: 0px;">
        <div class="container">
            <div class="user-actions">
                <i class="ri-login-box-line"></i>
                <span>Returning customer? <a href="profile-authentication.php">Click here to login</a></span>
            </div>

            <form action="ajax/update_billing_address.php" method="POST">

                <div class="row">

                    <div class="col-lg-7 col-md-12">
                        <div class="billing-details">
                            <?php if ($user_id != '') {
                            ?>
                                <h4 class="title">Billing Details</h4>
                            <?php } else {
                            ?>
                                <h4 class="title">Customer Login/Signup</h4>
                            <?php } ?>

                            <div class="row">

                                <?php if ($user_id != '') { ?>
                                    <form>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control">

                                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                                <!-- <input type="hidden" class="address"   name="address_id" value="<?php echo $address_id; ?>"> -->

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Country <span class="required">*</span></label>
                                                <input type="text" name="country" value="<?php echo $country; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>State <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="state" value="<?php echo $town; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>SSN <span class="required">*</span></label>
                                                <input type="text" name="ssn" value="<?php echo $ssn; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>DOB<span class="required">*</span></label>
                                                <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="town" value="<?php echo $country; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="pin_code" value="<?php echo $pin_code; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="notes" id="notes" cols="30" rows="5" name="order_notes" placeholder="Notes about your order, e.g. special notes for delivery." value="" class="form-control"></textarea>
                                            </div><br><br>
                                            <!-- <a href="#"  type="submit" name="submit"  class="razorpay-payment-button">submit<i class="flaticon-list-1"></i></a> -->

                                            <button type="submit" name="submit" class="default-btn">submit<i class="flaticon-list-1"></i></button>

                                        </div>
                            </div>
                        </div>
                    </div>
            </form>

        <?php } else { ?>
            <form>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>First Name <span class="required">*</span></label>
                        <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Last Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Email Address <span class="required">*</span></label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Phone <span class="required">*</span></label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Country <span class="required">*</span></label>
                        <input type="text" name="country" value="<?php echo $country; ?>" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label>State <span class="required">*</span></label>
                        <input type="text" class="form-control" name="state" value="<?php echo $town; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Town / City <span class="required">*</span></label>
                        <input type="text" class="form-control" name="town" value="<?php echo $country; ?>">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Postcode / Zip <span class="required">*</span></label>
                        <input type="text" class="form-control" name="pin_code" value="<?php echo $pin_code; ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>SSN <span class="required">*</span></label>
                        <input type="text" name="ssn" value="<?php echo $ssn; ?>" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>DOB <span class="required">*</span></label>
                        <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label>Address <span class="required">*</span></label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <textarea name="notes" id="notes" cols="30" rows="5" name="order_notes" placeholder="Notes about your order, e.g. special notes for delivery." value="" class="form-control"></textarea>
                    </div><br><br>
                    <!-- <a href="#"  type="submit" name="submit"  class="razorpay-payment-button">submit<i class="flaticon-list-1"></i></a> -->

                    <button type="submit" name="submit" class="default-btn">submit<i class="flaticon-list-1"></i></button>


                </div>
        </div>
    </div>
    </div>
    </form>
<?php } ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        //set initial state.

        $(".checkbox1").click(function() {

            var add_id = $(this).attr('data-addId');
            var add_status = $(this).attr('data-status');
            //  alert(add_id);
            //  exit();

            if (add_id == true) {

                $.ajax({
                    //this 
                    url: "change_activate.php",
                    type: 'post',
                    data: {
                        add_id: add_Id,
                        status: status
                    },
                    success: function(data) {
                        // 
                        if (data == 1) {
                            location.reload();
                        }

                    }

                });
            }



        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   


<div class="col-lg-5 col-md-12">
    <div class="order-details">
        <h3 class="title">Your Order</h3>

        <div class="order-table table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="order-subtotal checkout__order__subtotal">
                            <span>Cart Subtotal</span>
                        </td>

                        <td class="order-subtotal-price">
                            <span class="text-end fetch_cart_value">Rs.
                                <?= number_format(($sum != 0) ? $sum : 0,2) ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="order-shipping">
                            <span>Shipping</span>
                        </td>

                        <td class="shipping-price">
                            <span class="text-end fetch_cart_value_tax"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="total-price  checkout__order__total">
                            <span>Order Total</span>
                        </td>

                        <td class="product-subtotal">
                            <span class="text-end text-dark fetch_cart_value_sub">Rs. <?= number_format($sum + $shipping, 2) ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="payment-box" style="margin-top:-22px;">

            <!-- <a href="#" class="default-btn"><i class="flaticon-list-1"></i></a> -->
            <form action="place_order.php" method="POST">
                <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_QApmgDSbYnvqLS" data-currencyType="USD" data-amount="<?php echo ($sum+$shipping); ?>00" data-name="BID TREASURE TROOVE" data-description="BID TREASURE TROOVE" data-image="assets/images/logo.png" data-profile.name="<?php echo $first_name ?>" data-profile.email="" data-profile.phone="" data-theme.color="#009efd"></script>
                <input type="hidden" value="" name="hidden">
            </form>
        </div>
    </div>
</div>
</div>
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $rcode = $_POST['rcode'];
    // $en_ps = base64_encode($passcode);
    $sql = "INSERT INTO `register`( `user_name`, `last_name`, `email`, `phone`, `password`, `cpassword`, `rcode`) VALUES                                          ('$firstname','$lastname','$email','$phone','$password','$cpassword','$rcode')";
    $result = $db->query($sql);
    if ($result == TRUE) {
        echo "successfully registerd";
    } else {
        echo "ERROR: Could not able to execute $sql. " . $db->error;
    }
}
?>

</form>
</div>
</div>
<!-- End Checkout Area -->
<script>


</script>
<?php include("include/footer.php"); ?>