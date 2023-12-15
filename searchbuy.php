

 <?php include("include/head.php");
//  print_r ($_SESSION["cart"] );
ini_set('display_errors', 0);

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
}


//    print_r($_SESSION['vendor_details']);

$api_key = 'e1cbe9d7cd31b9bb8ff06a9e';
// $base_currency = 'USD';
// $target_currency = 'EUR';
// $url = "https://api.exchangerate-api.com/v4/latest/{$base_currency}";
$url = "https://v6.exchangerate-api.com/v6/e1cbe9d7cd31b9bb8ff06a9e/latest/USD";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
?>
<style>
    .bid {
        justify-content: center;
        align-items: center;
        /* z-index: -1; */
    }
</style>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom bid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- search your Products -->
    <div class="container" style="justify-content:stretch;">
        <!-- niy search -->
        <div class="searchInputBox pull-right">
            <input type="search" id="search" placeholder=" search..." class="search-input" autocomplete="off" />
            <button class="btn-nobg search-btn" type="submit">
                <i class="fa fa-search" style="cursor:pointer;" aria-hidden="true"> </i>
                <!-- <i class="fa fa-search search" style="cursor:pointer;" aria-hidden="true"></i>   -->
            </button>
            <div id="search_results" class="searchResult"></div>
        </div>
        <!-- niy search -->
        <!-- <input type="search"  id="live_search" style="border-radius:15px;width:234px;" placeholder="Search..."> -->

        <!-- search your Products End -->
        <div class="div">
            <h5 onclick="show()" style="margin-top:1px;"> <img title="Filter" src="assets/images/products/filter.png" alt="Filter" style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;"> </h5>
        </div>
    </div>
    </div>

    <h1 style="margin-right: 100px;width:100%;">Buy</h1>
    <style>
        /* <style>
        .container h1::before {
          
        } */
    </style>


    </style>
    <!-- <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">                          
            <li class="nav-item "><a class="nav-link" style="font-size: 50px; padding-left: 9.5rem; color: black;">Bid</a> </li>          
        </ul>        
    </div> -->
    </div>
</nav>
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
<div class="product-con">
    <nav id="menuu">
        <section class=containers id="showw" style="display: none;height:450px;overflow-y:scroll;width:70%;" onclick="expand()">
            <div class="rows">
                <aside class="col-lg-11">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a000">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_b000" aria-expanded="true" aria-controls="accordion_b000">Modules</button>
                            </h2>
                            <div id="accordion_b000" class="accordion-collapse collapse show" aria-labelledby="accordion_a000" data-bs-parent="#accordion_a000">
                                <div class="accordion-body pt-1">

                                    <ul class="list-unstyled mb-0">
                                        <!-- <li><a href="#">All/Any</a></li> -->
                                        <li><a href="bid.php">Bid</a></li>
                                        <li><a href="buy.php">Buy</a></li>
                                        <li><a href="make-deal.php">Deal</a></li>
                                        <!-- <li><a href="#">Catalog</a></li> -->
                                        <!-- <li><a href="#">Invest</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a001">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_b001" aria-expanded="true" aria-controls="accordion_b001">Hot Deals</button>
                            </h2>
                            <div id="accordion_b001" class="accordion-collapse collapse show" aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
                                <div class="accordion-body pt-1">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="">Frequently Bought</a></li>
                                        <li><a href="buy.php">Shop</a></li>
                                        <li><a href="make-deal.php">Daily Deal</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="filter_results.php" method="GET">
                            <div class="accordion-item mt-0">
                                <h2 class="accordion-header" id="accordion_a001">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_b001" aria-expanded="true" aria-controls="accordion_b001">Price</button>
                                </h2>
                                <div id="accordion_b001" class="accordion-collapse collapse show" aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
                                    <div class="accordion-body pt-1">



                                        <div class="row row-cols-md-2 g-2 mb-3">
                                            <div class="col">
                                                <label>Min</label>
                                                <input class="form-control px-1" name="min_price" id="min_price" placeholder="0" type="number" />
                                            </div>
                                            <div class="col text-end">
                                                <label>Max</label>
                                                <input class="form-control px-1" name="max_price" id="max_price" placeholder="10000" type="number" />
                                            </div>
                                        </div>

                                        <button class="btn btn-primary w-100" type="submit" value="Filter">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </aside>
        </section>
    </nav>
    <style>
        .btn_grad_blgr {

            height: 32px;
            align-items: center;
            margin-bottom: 7px;
        }

        .btn_grad_blgr:hover {
            background: #043fa9;
            color: white;
        }

        .card {
            width: 190px;
            display: inline-block;
            margin-bottom: 30px;
            border-radius: 15px;
            margin-left:10px;
        }
    </style>
    <style>
        .product-con {
            display: flex;
            width: 100%;
        }

        .pro-con {
            margin: 10px;
            padding: 10px;
            width: 100%;
        }

        .list-pro {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 0 20px;
        }
    </style>





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
            // Escaping the variables to prevent SQL injection.
            $pro_id=$_GET['id'];
            // print_r($pro_id);
            $sql = "SELECT * FROM `product_details` WHERE status = 'approved' AND `balanced_stock`!=0 AND  `product_id`='$pro_id'";
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

                <div class="card" style="position: relative;">
                    <script>
                        var product = <?php echo $product_id; ?>
                    </script>
                    <!-- <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i> -->
                    <i>
                        <div class="abs"><a href="add_wishlist.php?product_id=<?php echo $product_id ?>&user_id=<?php echo $user_id ?>"><i class="fa fa-heart" title="add to your Wishlist" style="top:10px;width:;position:absolute"></i></a>
                    </i>
                </div>
                <script>
                    function myFunction(x) {
                        x.classList.toggle("active");
                    }
                </script>

                <div class="card-img-top" data-proId="<?php echo $product_id ?>"> <img style="width:188px;height:190px;object-fit:cover; border-radius: 15px 15px 0 0;" class="card-img-top-b" src="./upload/product/<?php echo $product_image1; ?>" alt="Card image cap"></div>



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

                .product-title {
                    font-size: 3rem;
                    text-transform: capitalize;
                    font-weight: 700;
                    position: relative;
                    color: #12263a;
                    margin: 1rem 0;
                }

                .product-title::after {
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
                                    <img style="width:300px;height:396px;" src="" class="masterImg" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childOne" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childTwo" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childThree" alt="product image">

                                    <video width="500px" height="396px" style="display:grid;place-items:center;" class="childFour" controls>
                                        <source src="" alt="product video">
                                        <source src="" alt="product video">
                                    </video>
                                </div>
                            </div>
                            <div class="img-select">
                                <div class="img-item">
                                    <a href="#" data-id="1">
                                        <img style="width:100px;height:100px" class="masterImg" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="2">
                                        <img style="width:100px;height:100px" class="childOne" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="3">
                                        <img style="width:100px;height:100px" class="childTwo" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="4">
                                        <img style="width:100px;height:100px" class="childThree" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="5">
                                        <!-- <img style="width:100px;height:100px"  src="" alt="image"> -->
                                        <video width="100" height="100" class="childFour" poster>
                                            <source src="">
                                            <source src="">
                                        </video>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- card right -->
                        <div class="product-content">
                            <h2 class="product-title">NIke Shoes</h2>
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
                                <p class="last-price">Old Price: <span class="oldprice"></span></p>
                                <p class="new-price">New Price: <span class="newPrice"></span></p>
                            </div>
                            <p>Shipping:<b class="free"></b></p>
                            <div class="product-detail">
                                <h2>About this item: </h2>
                                <p class="proDisc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam
                                    tempora
                                    fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur
                                    quidem at sequi ipsa!</p>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
                                <ul>                                                         
                                <li>Available: <span><b class="stock"></b></li>
                                <!-- <li>Category: <span><b class="category"></b></span></li>
                                <li>Shipping Area: <span><b class="free"></b></span><li>                     -->
                                <li class="jewel">Cut:<span><b class="cut"></b></span></li>
                                <li class="jewel">Color:<span><b class="color"></b></span></li>
                                <li class="jewel">Clarity:<span><b class="clarity"></b></span></li>
                                <li class="jewel">Carat:<span><b class="carat"></b></span></li>
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
<?php include("include/footer.php"); ?>

<script>
$(document).ready(function() {
    $(".jewel").hide();
$(".card-img-top").click(function() {
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
        $(".product-title").text(rec.product_name);
        $(".oldprice").text(rec.product_old_price);
        $(".newPrice").text(rec.product_new_price);
        $(".proDisc").text(rec.product_description);
        $(".cut").text(rec.cut);
        $(".free").text(rec.tax);
        $(".color").text(rec.color);
        $(".clarity").text(rec.clarity);
        $(".carat").text(rec.carat);
        $(".stock").text(rec.balanced_stock);
        $(".category").text(rec.category_id);
        $(".masterImg").attr("src",'./upload/product/'+rec.product_image1);
        $(".childOne").attr("src",'./upload/product/'+rec.product_image2);
        $(".childTwo").attr("src",'./upload/product/'+rec.product_image3);
        $(".childThree").attr("src",'./upload/product/'+rec.product_image4);
        $(".childFour").attr("src",'./upload/product/'+rec.product_image5);
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

<!-- end of the add to cart products -->

</script>


<!-- search your Product  items -->
<script>
    //search result
    $(document).ready(function() {
        $("#search").keyup(function() {
            var search = $(this).val();
            // alert(search);
            $.ajax({
                type: "POST",
                url: "search_product.php",
                data: {
                    search: search
                },
                dataType: "json", // Added to parse the response as JSON
                success: function(data) {
                    console.log(data);
                    // Clear previous search results
                    $("#search_results").empty();

                    // Append new search results
                    data.forEach(function(product) {
                        $("#search_results").append(
                            '<a href="searchbuy.php?id=' +
                            product.product_id +
                            '"><p>' +
                            product.product_name +
                            "</p></a>"
                        );
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                },
            });
        });
    });
</script>
<style>
    .back {
        border: none;
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

    $(document).ready(function() {
        $('.nav-link').click(function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>