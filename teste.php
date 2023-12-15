<section id="products" class="pro-con">
        <div class="list-pro">
            <?php
            // print_r($_SESSION['currency_type']);

            if ($currency != "" || $currency == NULL || $currency == "INR") {
                $currency = 1;
            } else {
                // $currency=$_SESSION['currency_type']; 
            }
            ?>

            <?php
            $vendor_id=$_GET['vendor_id'];
            $sql = "SELECT * FROM `product_details` WHERE status = 'approved' AND `vendor_id`='$vendor_id' AND `balanced_stock`!=0";
            $result = $db->query($sql);




            while ($row = mysqli_fetch_assoc($result)) {

                // print_r($result);
                $product_image1 = $row['product_image1'];
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_new_price = $row['product_new_price'];
                $original_price = $row['original_price'];
                $product_old_price = $row['product_old_price'];
                if (isset($_SESSION['user_details'])) {
                    $user_id = $_SESSION['user_details']['user_id'];
                    $sqls = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency = $ro['cur_type'];
                    }
                    // print_r($currency);
                    $data = json_decode($response, true);
                    $usd = $data['conversion_rates'][$currency];
                    $convert_price = (int) $original_price * (int)$usd;
                    $ssql = "UPDATE `product_details` SET `product_new_price` = '$convert_price' WHERE `product_id` = '$product_id'";
                    $convert = mysqli_query($db, $ssql);
                    // print_r($convert);
                } else if (isset($_SESSION['vendor_details'])) {
                    $vendor_id = $_SESSION['vendor_details']['vendor_id'];
                    $sqls = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$vendor_id'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency = $ro['cur_type'];
                    }
                    // print_r($currency);
                    $data = json_decode($response, true);
                    // print_r($data['conversion_rates']['INR']);
                    $usd = $data['conversion_rates'][$currency];
                    //    $usd=$data['conversion_rates']['BIF'];
                    // print_r($usd);
                    $convert_price = (int)$product_new_price * (int)$usd;
                    // print_r($convert_price);
                    // print_r($result);
                    $ssql = "UPDATE `product_details` SET `product_new_price` = '$convert_price' WHERE `status` = 'approved'";
                    $convert = mysqli_query($db, $ssql);
                } else if (isset($_SESSION['s_provider'])) {
                    $s_provider = $_SESSION['s_provider']['user_id'];
                    $sqls = "SELECT * FROM `service_provider` WHERE `user_id` ='$s_provider'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency = $ro['cur_type'];
                    }
                    // print_r($currency);
                    $data = json_decode($response, true);
                    // print_r($data['conversion_rates']['INR']);
                    $usd = $data['conversion_rates'][$currency];
                    // $usd=$data['conversion_rates']['BIF'];
                    // print_r($usd);
                    $convert_price = (int)$product_new_price * (int)$usd;



                    $ssql = "UPDATE `product_details` SET `product_new_price` = '$convert_price' WHERE `status` = 'approved'";
                    $convert = mysqli_query($db, $ssql);
                }



                // $cur_type=$_SESSION['user_details']['cur_type'];
                if (isset($_SESSION['user_details'])) {
                    $user_id = $_SESSION['user_details']['user_id'];
                    $get_qry = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
                    $get_exc = mysqli_query($db, $get_qry);
                    $user_details = mysqli_fetch_assoc($get_exc);
                    $user_currency_type = $user_details['cur_type'];
                    // print_r();
                    // print_r($cur_type);
                    $sqls = "SELECT * FROM `currency` WHERE `currency`.`name` ='$user_currency_type'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency_symbol = $ro['symbol'];
                    }
                    // print_r($currency_symbol);
                } else if (isset($_SESSION['vendor_details'])) {
                    $user_id = $_SESSION['vendor_details']['vendor_id'];
                    $get_qry = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
                    $get_exc = mysqli_query($db, $get_qry);
                    $user_details = mysqli_fetch_assoc($get_exc);
                    $user_currency_type = $user_details['cur_type'];
                    // print_r();
                    // print_r($cur_type);
                    $sqls = "SELECT * FROM `currency` WHERE `currency`.`name` ='$user_currency_type'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency_symbol = $ro['symbol'];
                    }
                    // print_r($currency_symbol);
                } else if (isset($_SESSION['s_provider'])) {
                    $user_id = $_SESSION['s_provider']['user_id'];
                    $get_qry = "SELECT * FROM `service_provider` WHERE `user_id` ='$user_id'";
                    $get_exc = mysqli_query($db, $get_qry);
                    $user_details = mysqli_fetch_assoc($get_exc);
                    $user_currency_type = $user_details['cur_type'];
                    // print_r();
                    // print_r($cur_type);
                    $sqls = "SELECT * FROM `currency` WHERE `currency`.`name` ='$user_currency_type'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency_symbol = $ro['symbol'];
                    }
                    // print_r($currency_symbol);
                }

            ?>
                <style>
                    .abs {
                        position: absolute;
                    }
                </style>

                <div class="card"  style="position: relative;height:324px;">
                    <script>
                        var product = <?php echo $product_id; ?>
                    </script>
                    <!-- <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i> -->
                    <i>
                        <div class="abs"><a href="add_wishlist.php?product_id=<?php echo $product_id ?>&user_id=<?php echo $user_id ?>"><i class="fa fa-heart" title="add to your Wishlist" style="top:10px;left:13px;width:;position:absolute"></i></a>
                    </i>
                </div>
                <script>
                    function myFunction(x) {
                        x.classList.toggle("active");
                    }
                </script>

                <div class="card-img-top_buy" data-proId="<?php echo $product_id ?>"> <img style="width:188px;height:190px;object-fit:cover; border-radius: 15px 15px 0 0;" class="card-img-top-b" src="./upload/product/<?php echo $product_image1; ?>" alt="Card image cap"></div>



                <!-- The Modal -->
                <div class="card-body">
                    <p class="card-text"><?php echo $product_name; ?></p>

                    <?php
                    if (isset($_SESSION['user_details'])) { ?>

                        <p class="card-text"><b style="text-decoration: line-through;opacity:0.9;font-size:13px;"><?php echo $currency_symbol ?><?php echo $product_old_price; ?></b><b><?php echo  $currency_symbol ?><?php echo $convert_price ?></b>
                        </p>

                    <?php } else if (isset($_SESSION['vendor_details'])) { ?>

                        <p class="card-text"><b style="text-decoration: line-through;opacity:0.9;font-size:13px;"><?php echo $currency_symbol ?><?php echo $product_old_price; ?></b><b><?php echo  $currency_symbol ?><?php echo $convert_price ?></b>
                        </p>

                    <?php } else { ?>

                        <p class="card-text"><b style="text-decoration: line-through;opacity:0.9;font-size:13px;">$<?php echo $product_old_price; ?></b><b>$<?php echo $product_new_price ?></b>
                        </p>
                    <?php } ?>

                    <!-- <button class="add-to-cart-btn" data-product-id=<?php echo $product_id; ?>> Buy
                                Now</button> -->
                    <button class="btn  btn-lg btn_grad_blgr  text-truncate mt-auto"> <a href="#" id="<?php echo $product_id; ?>" name="add" style="cursor:pointer" class="add_to_cart add<?php echo $product_id; ?> primary-btn button">ADD TO CART</a></button>
                </div>
        </div>
    <?php } ?>
</div>
</section>
<div class="w3-container">
    <div id="id01" class="w3-modal fullpopupimgsss">
        <div class="w3-modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="border:none;">&times;</span>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

                .detail {
                    display: flex;
                }

                .detail img {
                    width: 48px;
                    height: 33px;
                    margin-top: -6px;
                    margin-right: 5px;
                }

                /* 
for search results */
                .searchResult {
                    position: absolute;
                    background: ghostwhite;
                    width: 10%;
                    margin-left: 100px;
                    z-index: 2;
                    margin-top: 13px;
                }

                /* 
for search results */




                img {
                    width: 100%;
                    display: block;
                }

                .img-display {
                    overflow: hidden;
                }


                .img-showcase {
                    display: flex;
                    width: 100%;
                    transition: all 0.5s ease;
                }

                .img-showcase img {
                    min-width: 100%;
                }

                .img-select {
                    display: flex;
                }

                .img-item {
                    margin: 0.3rem;
                }

                .img-item:nth-child(1),
                .img-item:nth-child(2),
                .img-item:nth-child(3) {
                    margin-right: 0;
                }

                .img-item:hover {
                    opacity: 0.8;
                }

                .product-content {
                    padding: 2rem 1rem;
                }

                .product-titlebuy {
                    font-size: 3rem;
                    text-transform: capitalize;
                    font-weight: 700;
                    position: relative;
                    color: #12263a;
                    margin: 1rem 0;
                }

                .product-titlebuy::after {
                    content: "";
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    height: 4px;
                    width: 80px;
                    background: #12263a;
                }

                .product-link {
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 400;
                    font-size: 0.9rem;
                    display: inline-block;
                    margin-bottom: 0.5rem;

                    color: #fff;
                    padding: 0 0.3rem;
                    transition: all 0.5s ease;
                }

                .product-link:hover {
                    opacity: 0.9;
                }

                .product-rating {
                    color: #ffc107;
                }

                .product-rating span {
                    font-weight: 600;
                    color: #252525;
                }

                .product-price {
                    margin: 1rem 0;
                    font-size: 1rem;
                    font-weight: 700;
                }

                .product-price span {
                    font-weight: 400;
                }

                .last-price span {
                    color: #f64749;
                    text-decoration: line-through;
                }

                .new-price span {
                    color: #256eff;
                }

                .product-detail h2 {
                    text-transform: capitalize;
                    color: #12263a;
                    padding-bottom: 0.6rem;
                }

                .product-detail p {
                    font-size: 0.9rem;
                    padding: 0.3rem;
                    opacity: 0.8;
                }

                .product-detail ul {
                    margin: 1rem 0;
                    font-size: 0.9rem;
                }

                .product-detail ul li {
                    margin: 0;
                    list-style: none;
                    background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
                    background-size: 18px;
                    padding-left: 1.7rem;
                    margin: 0.4rem 0;
                    font-weight: 600;
                    opacity: 0.9;
                }

                .product-detail ul li span {
                    font-weight: 400;
                }

                .purchase-info {
                    margin: 1.5rem 0;
                }

                .purchase-info input,
                .purchase-info .btn {
                    border: 1.5px solid #ddd;
                    border-radius: 25px;
                    text-align: center;
                    padding: 0.45rem 0.8rem;
                    outline: 0;
                    margin-right: 0.2rem;
                    margin-bottom: 1rem;
                }

                .purchase-info input {
                    width: 60px;
                }

                .purchase-info .btn {
                    cursor: pointer;
                    color: #fff;
                }

                .purchase-info .btn:first-of-type {
                    background: #256eff;
                }

                .purchase-info .btn:last-of-type {
                    background: #f64749;
                }

                .purchase-info .btn:hover {
                    opacity: 0.9;
                }

                .social-links {
                    display: flex;
                    align-items: center;
                    margin-left: 5px;
                }

                .social-links a {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 32px;
                    height: 32px;
                    color: #000;

                    margin: 0 0.2rem;
                    margin-top: -26px;
                    border-radius: 50%;
                    text-decoration: none;
                    font-size: 0.8rem;
                    transition: all 0.5s ease;
                }

                .social-links a:hover {
                    background: white;
                    border-color: transparent;
                    color: #fff;
                }

                .product-imgs {
                    width: 120%;
                    height: 50%;
                }

                .one {
                    display: flex;
                }

                .parent {
                    display: flex;
                }

                .container input {
                    border: 1px solid grey;
                    position: relative;

                }

                .container input:hover {
                    border: 1px solid #0000fe;
                }

                .container input:focus {
                    outline: none;
                }

                .search {
                    position: absolute;
                    top: 27px;
                    left: 223px;
                    color: #0000fe;
                }

                .fas.fa-heart {
                    color: grey;
                    cursor: pointer;
                }

                .fas.fa-heart.active {
                    color: #1657cb;
                }


                .w3-button {
                    background: #1657cb;
                    color: white;
                    border-radius: 1px;
                }

                .w3-button:hover {
                    background: #043fa9;
                    color: white;
                }

                .btn_grad_blgr {
                    border-radius: 15px;
                    padding: 9px 19px;
                    align-items: center;
                    font-size: 11px;
                    font-weight: 500;
                    background: #1657cb;
                    color: #fff;
                    text-transform: uppercase;
                }

                /* @media screen and (min-width: 992px){
            .card{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }
            .card-wrapper{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .product-imgs{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .product-content{
                padding-top: 0;
            }
                } */
            </style>
            <div class="card-wrapper">
                <div class="card" style="min-width:95%;border:none;">
                    <!-- card left -->
                    <div class="one">
                        <div class="product-imgs">
                            <div class="img-display">
                                <div class="img-showcase">
                                    <img style="width:300px;height:396px;" src="" class="masterImgbuy" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childOnebuy" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childTwo"buy alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childThreebuy" alt="product image">

                                    <video width="500px" height="396px" style="display:grid;place-items:center;" class="childFour" controls>
                                        <source src="" alt="product video">
                                        <source src="" alt="product video">
                                    </video>
                                </div>
                            </div>
                            <div class="img-select">
                                <div class="img-item">
                                    <a href="#" data-id="1">
                                        <img style="width:100px;height:100px" class="masterImgbuy" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="2">
                                        <img style="width:100px;height:100px" class="childOnebuy" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="3">
                                        <img style="width:100px;height:100px" class="childTwobuy" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="4">
                                        <img style="width:100px;height:100px" class="childThreebuy" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="5">
                                        <!-- <img style="width:100px;height:100px"  src="" alt="image"> -->
                                        <video width="100" height="100" class="childFourbuy" poster>
                                            <source src="">
                                            <source src="">
                                        </video>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- card right -->
                        <div class="product-content">
                            <h2 class="product-titlebuy">NIke Shoes</h2>
                            <a href="#" class="product-link">visit nike store</a>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.7(21)</span>
                            </div><br>
                            <div class="detail">
                                <img src="assets/images/delivery-truck (1).png" style="width:39px;" alt="">
                                <div class="p">
                                    Delivery time varies by size, select your size for shipping estimates.
                                </div><br>
                            </div>
                            <div class="product-price">
                                <p class="last-price">Old Price: <span class="oldpricebuy"></span></p>
                                <p class="new-price">New Price: <span class="newPricebuy"></span></p>
                            </div>
                            <p>Shipping:<b class="shipping"></b></p>
                            <div class="product-detail">
                                <h2>About this item: </h2>
                                <p class="proDiscbuy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam
                                    tempora
                                    fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur
                                    quidem at sequi ipsa!</p>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
                                <ul>                                                         
                                <li>Available: <span><b class="stockbuy"></b></li>
                                <!-- <li>Category: <span><b class="category"></b></span></li>
                                <li>Shipping Area: <span><b class="buy"></b></span><li>                     -->
                                <li class="jewel">Cut:<span><b class="cutbuy"></b></span></li>
                                <li class="jewel">Color:<span><b class="colorbuy"></b></span></li>
                                <li class="jewel">Clarity:<span><b class="claritybuy"></b></span></li>
                                <li class="jewel">Carat:<span><b class="caratbuy"></b></span></li>
                            </ul>
                            </div>
                            <!-- <div class="purchase-info">
                                <h3>Size</h3>
                                <button type="button" class="btn">
                                    7 <i class="fas fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn" style="background-color: white; color: #000;">8</button>
                                <button type="button" class="btn" style="background-color: white; color: #000;">9</button>
                                <button type="button" class="btn" style="background-color: white; color: #000;">10</button>
                            </div> -->
                            <div class="purchase-info">
                                <!-- <label for="">Quantity</label>
                                <input type="number" min="0" value="1" name="quantity" id="quantity">
                                <input type="hidden" name="variant_id" id="variant_id<?php echo $product_id; ?>" value="<?php echo $product_id; ?>"> -->
                                <!-- <input type="hidden" name="quantity" id="quantity<?php echo $product_id; ?>" class="form-control" value="1"> -->
                                <button class="btn    text-truncate mt-auto"> <a href="#" id="<?php echo $product_id; ?>" name="add" style="cursor:pointer" class="add_to_cart add<?php echo $product_id; ?> primary-btn button">ADD TO CART</a></button>
                                <!-- <button type="button" class="btn">Buy Now</button> -->

                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <p>Share At:</p>
                        <a href="#">
                            <img src="assets/images/facebook.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/images/instagram.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/images/twitter.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets/images/whatsapp.png" alt="">
                        </a>

                    </div>
                </div>
            </div>

            <script src="assets/js/modal.js"></script>
        </div>
    </div>
</div>
</div>


</div>
</div>
</div>
<script>
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

<!-- get the details of th products -->


<script>
$(document).ready(function() {
    $(".jewel").hide();
$(".card-img-top_buy").click(function() {
var proId = $(this).attr('data-proId');
// alert(proId);
$.ajax({

    url: "get_pro_details.php",
    type: "post",
    data: {
        proId: proId,
        model:'buy',
    },
    success: function(data){
        var rec=JSON.parse(data);
        // console.log(data);
        // alert(data);
        if(rec.category_name == 103){
            $(".jewel").show();
            // alert(rec.category_name);
        }
        else{
            // alert("failu"); 
            $(".jewel").hide();
        }
        // console.log(rec.product_name);
        $(".product-titlebuy").text(rec.product_name);
        $(".oldpricebuy").text(rec.product_old_price);
        $(".newPricebuy").text(rec.product_new_price);
        $(".proDiscbuy").text(rec.product_description);
        $(".cutbuy").text(rec.cut);
        $(".freebuy").text(rec.tax);
        $(".colorbuy").text(rec.color);
        $(".claritybuy").text(rec.clarity);
        $(".caratbuy").text(rec.carat);
        $(".stockbuy").text(rec.balanced_stock);
        $(".categorybuy").text(rec.category_id);
        $(".masterImgbuy").attr("src",'./upload/product/'+rec.product_image1);
        $(".childOnebuy").attr("src",'./upload/product/'+rec.product_image2);
        $(".childTwobuy").attr("src",'./upload/product/'+rec.product_image3);
        $(".childThreebuy").attr("src",'./upload/product/'+rec.product_image4);
        $(".childFourbuy").attr("src",'./upload/product/'+rec.product_image5);
        $(".fullpopupimgsss").show();

    }
});

});
});

</script>
<!--  end of the get the details of th products -->



<!-- add to cart products -->

<script>
    $(document).ready(function() {
        $('.add-to-cart-btn').click(function() {
            var productId = $(this).data('product-id');

            $.ajax({
                url: 'add_to_cart.php',
                method: 'POST',
                data: {
                    product_id: productId
                },
                success: function(response) {
                    alert('Product added to cart successfully!');
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while adding the product to cart. Please try again.');
                }
            });
        });
    });
</script>
    



<!-- buy products end of this paage -->