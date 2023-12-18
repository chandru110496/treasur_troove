<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include("include/head.php");


if (isset($_SESSION['user_details'])) {
    $user_id = $_SESSION['user_details']['user_id'];
    $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
    $stmt = $db->query($sql);
    if ($row = mysqli_fetch_assoc($stmt)) {
        // print_r($result);
        $currency = $row['cur_type'];
    }
} else if (isset($_SESSION['vendor_details'])) {
    $user_id = $_SESSION['vendor_details']['vendor_id'];
    $sql = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
    $stmt = $db->query($sql);
    if ($row = mysqli_fetch_assoc($stmt)) {
        // print_r($result);
        $currency = $row['cur_type'];
    }
} else if (isset($_SESSION['s_provider'])) {
    $user_id = $_SESSION['s_provider']['user_id'];
    $sql = "SELECT * FROM `service_provider` WHERE `user_id` ='$user_id'";
    $stmt = $db->query($sql);
    if ($row = mysqli_fetch_assoc($stmt)) {
        // print_r($result);
        $currency = $row['cur_type'];
    }
} else {
    // header('Location :profile-authentication.php');

    print_r("<script>alert('Login or Register First'); location.href='profile-authentication.php'</script>");
}

?>


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
</style>


<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">

                    <h2> Cart</h2>
                    <!-- <?php print_r($_SESSION['cart']); ?> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="table-content table-responsive cart-table-content">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="text-dark text-center fw-500 text-nowrap">Image</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Product Name</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Until Price</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Qty</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Subtotal</th>
                                <th class="text-dark fw-500 text-end text-nowrap">action</th>
                            </tr>
                        </thead>
                        <tbody class="fetch_cart">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header bg-transparent py-3">
                        <h6 class="m-0 mb-1">Order Total</h6>
                    </div>
                    <div class="card-body ">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center mb-2 ">
                                <h6 class="me-2 text-body">Subtotal</h6><span class="text-end fetch_cart_value" data-cart_value="0.00" data-checkId>Rs. 0.00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-2 ">
                                <h6 class="me-2 text-body">S. Charges</h6><span class="text-end fetch_cart_value_tax" data-cart_value_tax="0.00">Rs. 0.00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-2 ">
                                <h6 class="me-2 text-body">Total Tax</h6><span class="text-end product_tax" data-product_tax="0.00">Rs. 0.00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                <h6 class="me-2">Grand Total</h6><span class="text-end text-dark fetch_cart_value_sub" data-total_price="0.00">Rs. 0.00</span>
                            </li>
                        </ul>
                        <form id="checkout_form" action="checkout.php">

                            <li class="d-flex justify-content-between align-items-center">
                                <style>
                                    .nice-select {
                                        width: 100%;
                                    }
                                </style>
                                <?php if (isset($_SESSION['user_details'])) {
                                    echo '<div class="d-grid gap-2 mx-auto" style="color:#ec2474;"><button type="submit"  class="btn btn-primary">
                                     <i class="fa fa-user"></i> Checkout</button></div>';
                                } else {
                                    echo '<div class="d-grid gap-2 mx-auto" style="color:#ec2474;"><a href="profile-authentication.php?page=cart" class="btn btn-primary">
                                     <i class="fa fa-user"></i> Login to checkout</a></div>';
                                }
                                ?>
                            </li>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->


<?php
$reg_status = $_GET['reg_status'];
if ($reg_status != '') {
    if ($reg_status == '1') {
?>

        <script>
            swal("", "Thank you registering with Bid TReasure!", "success");
        </script>

    <?php } else if ($reg_status == '2') {
    ?>

        <script>
            swal("", "Something is wrong please try again!", "warning");
        </script>

    <?php } else {
    ?>
        <script>
            swal("", "Hi <?php echo $_SESSION['user_details']['user_name']; ?> Welcome Back", "success");
        </script>
<?php
    }
} ?>

<script>
    // load all chart details obtained from the common.js file
    function loadAllCart() {
        $(".fetch_cart").html("");
        let user_ID = <?= $user_id ?>;
        // alert(user_id + " for loading all chart");
        $.ajax({
            url: './ajax/cart_fetch.php?user_id=user_ID',
            type: "GET",
            dataType: "json",
            success: function(data) {
                // console.log(data);
                $(".fetch_cart").html("");
                if (data == 'not availabel') {
                    $(".fetch_cart").append("<tr  ><td class='text-center' style='height:308px' colspan='6' ><h1>" + " Your Cart Is Empty Is Show" + "</h1></td></tr>");
                    $('#checkout_form').css('display', 'none');
                } else {
                    $.each(data, function(key, value) {

                        $(".fetch_cart").append('<tr>' +
                            '<td class="text-center product-thumbnail">' +
                            '<a class="text-reset" href="#"><img src="upload/product/' + value.image + '" class="img-fluid" width="100" alt=""></a>' +
                            '</td>' +
                            '<td class="text-center product-name' + value.id + '"><a class="text-reset" href="#">' + value.product_name + '</a></td>' +
                            '<td class="text-center product-price-cart "><span class="amount' + value.id + '" data-price="' + value.product_price + '"  >Rs.' + value.product_price + '</span></td>' +
                            '<td class="text-center product-quantity">' +
                            '<div class="cart-qty d-inline-flex">' +
                            '<input id="plus' + value.id + '" value="' + value.plus_qty + '" type="hidden">' +
                            '<input id="minus' + value.id + '" value="' + value.minus_qty + '" type="hidden">' +
                            '<div class="pro-qty">' +
                            '<span id="minus' + value.id + '" value="minus" style="cursor:pointer;width:10px;" class="btn btn_minus dec qtybtn">-</span>&nbsp;' +
                            '<input id="old_qty' + value.id + '" value="' + value.pro_qty + '" type="hidden">' + // hidden input to seek the old quantity of the product
                            '<input type="text" name="qtybutton" id="prd_qty' + value.id + '"  value="' + value.pro_qty + '" readonly style="width:50px;text-align:center;">&nbsp;' +
                            '<span id="plus' + value.id + '" value="plus" style="cursor:pointer;width:10px;" class="btn btn_plus inc qtybtn">+</span>' +
                            '</div>' +
                            '</div>' +
                            '</td>' +
                            '<td class="text-center product-subtotal"><span class="product-subtotal' + value.id + '" data-totalPrice="' + value.total + '" >Rs.' + value.total + '</span></td>' +
                            '<td class="product-remove text-end text-nowrap">' +
                            '<a id="delete-cart' + value.id + '" data-id="' + value.id + '" class="delete-cart btn btn-sm btn-outline-danger text-nowrap px-3"><i class="bi bi-x lh-1"></i> <span class="d-none d-md-inline-block">Remove</span></a>' +
                            '</td>' +
                            '</tr>');

                        getOrderTotal($(`.product-subtotal${value.id}`).attr('data-totalPrice'), 'default');

                        // functions to add quantity of the product in the cart
                        function updateQuantityAndTotalPrice(new_qty) {

                            $(`#old_qty${value.id}`).val($(`#prd_qty${value.id}`).val());
                            $(`#prd_qty${value.id}`).val(new_qty);
                            let prd_price = Number($(`.amount${value.id}`).attr('data-price'));
                            // let total_price = Number($(`.product-subtotal${value.id}`).attr('data-totalPrice'));
                            // alert(total_price);
                            let new_total_price = new_qty * prd_price;
                            $(`.product-subtotal${value.id}`).html(`Rs.  ${new_total_price} `);
                            $(`.product-subtotal${value.id}`).attr('data-totalPrice', new_total_price);
                            // alert($(`.product-subtotal${value.id}`).attr('data-totalPrice'));
                            const prd_id=value.id;
                            const qty=new_qty
                            const t_amount=new_total_price;
                            $.ajax({
                                type: "GET",
                                url: `ajax/set_cart_quantity.php?product_id=${prd_id}&quantity=${qty}&amount=${t_amount}`, //C:\xampp\htdocs\_treasuretroove_backup_from_live by jeeva bro\set_cart_quantity.php
                                success: function(response) {

                                }
                            });

                        }

                        $(document).on("click", `#minus${value.id}`, function() {
                            // alert($(`#prd_qty${value.id}`).val());
                            let old_qty = Number($(`#prd_qty${value.id}`).val());
                            if (old_qty > 1) {
                                let new_qty = old_qty - 1;
                                updateQuantityAndTotalPrice(new_qty);
                                getOrderTotal($(`.amount${value.id}`).attr('data-price'), 'minus');
                            }
                        })

                        $(document).on("click", `#plus${value.id}`, function() {
                            // alert($(`#prd_qty${value.id}`).val());
                            let old_qty = Number($(`#prd_qty${value.id}`).val());
                            let new_qty = old_qty + 1;
                            updateQuantityAndTotalPrice(new_qty);
                            getOrderTotal($(`.amount${value.id}`).attr('data-price'), 'plus');
                        })

                        $(document).on('click', `#delete-cart${value.id}`, function() {
                            let product_id = $(this).attr('data-id');
                            // alert(product_id)
                            $.ajax({
                                type: "GET",
                                url: `ajax/cart-remove.php?prd_id=${product_id}`,
                                success: function(response) {
                                    window.location.reload();
                                }
                            });
                        })

                        // document.getElementById(`prd_qty${value.id}`).onkeyup = (e) => { //onkeyup onchange
                        //     let new_qty = Number(e.target.value);
                        //     if (new_qty < 1) {
                        //         return;
                        //     }
                        //     updateQuantityAndTotalPrice(new_qty);
                        //     let amount = Number($(`.amount${value.id}`).attr('data-price'));
                        //     getOrderTotalByInputFiedChange(new_qty, old, amount);
                        // }
                    });
                }
            }
        });
    }
    // function to obtain to total price of the product available in the cart of the user
    // function getOrderTotalByInputFiedChange(new_q, old_q, amount) {
    //     let old_total = parseFloat(parseFloat(($('.fetch_cart_value').attr('data-cart_value'))).toFixed(2));
    //     old_total = old_total - (old_q * amount);
    //     let price = amount * new_q;
    //     let new_amount = old_total + price;
    //     new_amount = parseFloat(new_amount).toFixed(2);
    //     $('.fetch_cart_value').attr('data-cart_value', new_amount)
    //     $('.fetch_cart_value').html(`Rs. ${new_amount}`);
    // }


    function getOrderTotal(product_total, opertion) {

        // geting the total amout of cart alone
        let pd_total = parseFloat(parseFloat(product_total).toFixed(2));
        let old_total = parseFloat(parseFloat(($('.fetch_cart_value').attr('data-cart_value'))).toFixed(2));
        let amount;
        if (opertion == 'default') {
            amount = ((old_total + pd_total)).toFixed(2);
        } else if (opertion == 'minus') {
            amount = ((old_total - pd_total)).toFixed(2);
        } else if (opertion == 'plus') {
            amount = ((old_total + pd_total)).toFixed(2);
        }
        $('.fetch_cart_value').attr('data-cart_value', amount);
        $('.fetch_cart_value').html(`Rs. ${amount}`);
        // service charge of the product
        let ser_charge = parseFloat(parseFloat(($('.fetch_cart_value_tax').attr('data-cart_value_tax'))).toFixed(2));
        // total tax amount for the product
        let tax_amount = parseFloat(parseFloat(($('.product_tax').attr('data-product_tax'))).toFixed(2));
        // grandt total include of all the amount 
        // parseFloat(parseFloat(($('.fetch_cart_value_sub').attr('data-total_price'))).toFixed(2));
        let grand_total = parseFloat(amount) + ser_charge + tax_amount;
        grand_total = grand_total.toFixed(2)
        // alert(grand_total)
        $('.fetch_cart_value_sub').html(`Rs. ${grand_total  }`)

    }
    loadAllCart();
</script>

<?php include("include/footer.php"); ?>

<script>
    $(document).ready(function() {

        $(".fetch_cart_value").click(function() {

            var bidId = $_SESSION['userdetails'];
            alert(bidId);
            $.ajax({
                url: "get_checkout.php",
                type: "post",
                data: {
                    checkId: bidId,
                    model: 'bid',
                },
                success: function(data) {
                    var rec = JSON.parse(data);
                    console.log(data);
                    //  alert(data);
                    // console.log(rec.product_name);
                    $(".product-title").text(rec.product_name);
                    $(".oldprice").text(rec.product_old_price);
                    $(".newPrice").text(rec.bid_new_price);
                    $(".proDisc").text(rec.product_description);

                }
            });
        });

        function getCartCount() {
            // alert("getcartcount");
            // alert(user_id); 
            $.ajax({
                type: "post",
                url: "add_to_cart.php",
                data: {
                    user_id,
                    action: "getCartCount"
                },
                dataType: "json",
                success: function(response) {
                    // alert(response['count'] + "   from method call");
                    $(".fetch_cart_count").html(response.count);
                }
            });
        }
        getCartCount();

    });
</script>