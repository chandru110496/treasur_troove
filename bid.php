<?php
include("include/header.php");
date_default_timezone_set('Asia/Kolkata');
if (isset($_SESSION['user_details'])) {
    $user_id = $_SESSION['user_details']['user_id'];
} elseif (isset($_SESSION['vendor_details'])) {
    $user_id = $_SESSION['vendor_details']['vendor_id'];
} elseif (isset($_SESSION['s_provider'])) {
    $user_id = $_SESSION['s_provider']['user_id'];
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!-- search your Products -->
<div class="container" style="justify-content:stretch;">
    <!-- niy search -->
    <div class="searchInputBox pull-right">
        <!-- <input type="search" id="search" placeholder=" search..." class="search-input" autocomplete="off" /> -->
        <input type="search" id="search" placeholder="search..." style="padding-left: 25px;" class="search-input" autocomplete="off" />
        <span type="btn" id="clear_search_text" style="cursor:pointer; z-index: index;">&times;</span>
        <button class="btn-nobg search-btn" type="submit">
            <i class="fa fa-search" style="cursor:pointer;" aria-hidden="true"> </i>
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
<h1 style="margin-right: 600px;font-size:px;">BID</h1>
<!-- <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">                          
            <li class="nav-item "><a class="nav-link" style="font-size: 50px; padding-left: 9.5rem; color: black;">Bid</a> </li>          
        </ul>        
    </div> -->
</div>
</nav>


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
<div id="scrollButtonContainer">
    <button onclick="goBack()" class="back">
        <i class="ri-arrow-left-line button"></i>
    </button>
</div>
<style>
    #scrollButtonContainer {
        position: fixed;
        bottom: 5px;
        /* Adjust the distance from the bottom as needed */
        right: 20px;
        /* Adjust the distance from the right as needed */
        z-index: 9999;
        /* Ensures it appears on top of other elements */
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
        <!-- display the filter container section  -->
        <section class="containers" id="showw" style="display: none;height:450px; overflow-y: scroll;width:70%;" onclick="expand()">
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
                                        <li><a href="bid.php">Bid</a></li>
                                        <li><a href="buy.php">Buy</a></li>
                                        <li><a href="make-deal.php">Deal</a></li>
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
                                        <li><a href="#">Most Popular</a></li>
                                        <li><a href="#">New Arrivals</a></li>
                                        <li><a href="#">Offers</a></li>
                                        <li><a href="#">Must Buy</a></li>
                                        <li><a href="wearhouse.php">Vendor</a></li>
                                        <li><a href="make-deal.php">Daily Deal</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a001">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_b001" aria-expanded="true" aria-controls="accordion_b001">Price</button>
                            </h2>
                            <div id="accordion_b001" class="accordion-collapse collapse show" aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
                                <div class="accordion-body pt-1">
                                    <input type="range" class="form-range" />
                                    <div class="row row-cols-md-2 g-2 mb-3">
                                        <div class="col">
                                            <label>Min</label>
                                            <input class="form-control px-1" placeholder="0" type="number" />
                                        </div>
                                        <div class="col text-end">
                                            <label>Max</label>
                                            <input class="form-control px-1" placeholder="10000" type="number" />
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </nav>

    <?php

    if (isset($_SESSION['user_details'])) {
        $user_id = $_SESSION['user_details']['user_id'];
        $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";

        $stmt = $db->query($sql);
        if ($row = mysqli_fetch_assoc($stmt)) {
            // print_r($row);
            // print_r($result);
            $currency = $row['cur_type'];
        }
    } else if (isset($_SESSION['vendor_details'])) {
        $user_id = $_SESSION['vendor_details']['vendor_id'];
        $sql = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
        $stmt = $db->query($sql);
        if ($row = mysqli_fetch_assoc($stmt)) {
            // print_r($row);
            // print_r($result);
            $currency = $row['cur_type'];
        }
    } else if (isset($_SESSION['s_provider'])) {
        $user_id = $_SESSION['s_provider']['user_id'];
        $sql = "SELECT * FROM `service_provider` WHERE `user_id` ='$user_id'";
        $stmt = $db->query($sql);
        if ($row = mysqli_fetch_assoc($stmt)) {
            // print_r($row);
            // print_r($result);
            $currency = $row['cur_type'];
        }
    }
    //   print_r($currency);
    $api_key = 'e1cbe9d7cd31b9bb8ff06a9e';
    // $base_currency = 'USD';
    // $target_currency = 'EUR';
    // $url = "https://api.exchangerate-api.com/v4/latest/{$base_currency}";
    $url = "https://v6.exchangerate-api.com/v6/e1cbe9d7cd31b9bb8ff06a9e/latest/KWD";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    ?>


    <link rel="stylesheet" href="assets/css/modal.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        .btn_grad_blgr {
            height: 32px;
            align-items: center;
            margin-bottom: 7px;
        }

        /* .container input {
    border: 1px solid grey;
    position: relative;
    width: 100px;
margin-left:10px;
text-align:center;
background: #0d6efd;} */
        .btn_grad_blgr:hover {
            background: #043fa9;
            color: white;
        }

        .card {
            width: 190px;
            height: 488px;
            display: inline-block;
            margin-bottom: 30px;
            border-radius: 15px;
            margin-left: 10px;
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
    <?php
    // print_r($_SESSION['currency_type']);               
    if ($currency != "" || $currency == NULL || $currency == "INR") {
        $currency = 1;
    } else {
        // $currency=$_SESSION['currency_type']; 
    }
    ?>
    <!-- Start Shop Area -->

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
            // $sc_id=$_GET['sub_cat_id'];
            // <!-- COMMON TO THE BID PAGE UP TO THIS FOR BID AND EMPTY BIT DISPLAY -->

            $current_time = date('Y-m-d H:i:s');
            $sql = "SELECT *" .
                "FROM `vendor_details`" .
                "JOIN `bid_product_details` ON `vendor_details`.`vendor_id` = `bid_product_details`.`vendor_id`" .
                "JOIN `user_details` ON `user_details`.`user_id` = `bid_product_details`.`user_id`" .
                "WHERE `bid_product_details`.`expiry_time` > '$current_time' " .
                "ORDER BY `bid_product_details`.`bid_close` ASC;";
            $result = $db->query($sql);
            // print_r($result);
            $contains = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $contains = false;
                // print_r($row);
                $bid_id = $row['bid_id'];
                $bid_name = $row['product_name'];
                $bid_description = $row['product_description'];
                $bid_image = $row['product_image1'];
                $bid_image2 = $row['product_image2'];
                $bid_image3 = $row['product_image3'];
                $bid_image4 = $row['product_image4'];
                $bid_image5 = $row['product_image5'];
                $bid_price = $row['product_new_price'];
                $retail = $row['retail'];
                $bid_inc_price = $row['product_old_price'];
                $vendor_name = $row['name'];
                $vendor = $row['vendor_id'];
                $user = $row['user_id'];
                $user_name = $row['user_name'];
                $user_image = $row['user_img'];
                $min = $row['min'];
                $bid_closess = $row['expiry_time'];


                $current_time = date('Y-m-d H:i:s');

                // $end_time = date('Y-m-d H:i:s', strtotime($min . ' + ' . $bid_closess . 'minutes'));
                $end_time = date('Y-m-d H:i:s', strtotime($bid_closess));

                $start_time = date('Y-m-d H:i:s', strtotime($min));
                $to_time = strtotime($current_time);
                $from_time = strtotime($end_time);
                $bit_st_time = strtotime($start_time);
                $bid_closes = (abs($to_time - $from_time) / 60);
                $bid_starts = (abs($bit_st_time - $to_time) / 60);
                $bid_close = number_format("$bid_closes", 1);
                $bid_start = number_format("$bid_starts", 1);
                //  print_r("<script>console.log(`bid_start .$bid_start`)</script>");

                print_r($bid_id);



                // $bid_close = round($bid_close_new);      
                // 
                // $sqld = "DELETE FROM `bid_product_details` WHERE min + INTERVAL bid_close MINUTE <= NOW()";
                // $db->query($sqld);

                // ------<<<<<<      this is all for currency  type conversion     >>>>>>>>>>>>--------------
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
                    // print_r($response);
                    // print_r($data['conversion_rates']['INR']);

                    // ------------------>>>>>>>>>>>>>>>>>>>
                    // $usd = $data['conversion_rates'][$currency];  
                    // ------------------>>>>>>>>>>>>>>>>>>>



                    //    $usd=$data['conversion_rates']['BIF'];
                    // print_r($usd);
                    // ------------------>>>>>>>>>>>>>>>>>>>
                    // $convert_price = (int)$bid_price * (int)$usd;
                    // ------------------>>>>>>>>>>>>>>>>>>>
                    // print_r($convert_price);
                    // print_r($result);
                } else if (isset($_SESSION['vendor_details'])) {
                    $user_id = $_SESSION['vendor_details']['vendor_id'];
                    $sqls = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency = $ro['cur_type'];
                    }
                    // print_r($currency);
                    $data = json_decode($response, true);
                    // print_r($response);
                    // print_r($data['conversion_rates']['INR']);
                    $usd = $data['conversion_rates'][$currency];
                    //    $usd=$data['conversion_rates']['BIF'];
                    // print_r($usd);
                    $convert_price = (int)$bid_price * (int)$usd;
                    // print_r($convert_price);
                    // print_r($result);
                } else if (isset($_SESSION['s_provider'])) {
                    $user_id = $_SESSION['s_provider']['user_id'];
                    $sqls = "SELECT * FROM `service_provider` WHERE `user_id` ='$user_id'";
                    $stmt = $db->query($sqls);
                    if ($ro = mysqli_fetch_assoc($stmt)) {
                        // print_r($result);
                        $currency = $ro['cur_type'];
                    }
                    // print_r($currency);
                    $data = json_decode($response, true);
                    // print_r($response);
                    // print_r($data['conversion_rates']['INR']);
                    $usd = $data['conversion_rates'][$currency];
                    //    $usd=$data['conversion_rates']['BIF'];
                    // print_r($usd);
                    $convert_price = (int)$bid_price * (int)$usd;
                    // print_r($convert_price);
                    // print_r($result);
                }
                // print_r($sqls);



                if (isset($_SESSION['user_details'])) {
                    $cur_type = $_SESSION['user_details']['cur_type'];
                    $user_id = $_SESSION['user_details']['user_id'];
                    $get_qry = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
                    // print_r($get_qry);
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
                } else if (isset($_SESSION['vendor_details'])) {
                    $cur_type = $_SESSION['vendor_details']['cur_type'];
                    $user_id = $_SESSION['vendor_details']['vendor_id'];
                    $get_qry = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
                    // print_r($get_qry);
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
                } else if (isset($_SESSION['s_provider'])) {
                    $cur_type = $_SESSION['s_provider']['cur_type'];
                    $user_id = $_SESSION['s_provider']['user_id'];
                    $get_qry = "SELECT * FROM `service_provider` WHERE `user_id` ='$user_id'";
                    // print_r($get_qry);
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
                }

            ?>

                <!-- // ------<<<<<<      this is all for currency  type conversion     >>>>>>>>>>>>-------------- -->

                <div class="card" id="pro<?php echo $bid_id; ?>">

                    <img class="card-img-top" style="object-fit: cover;" data-bidId="<?php echo $bid_id ?>" src="./upload/cards/<?php echo $bid_image; ?>" alt="Card image cap">
                    <!-- The Modal -->
                    <div class="card-body">
                        <p class="card-text"><?php echo $bid_name; ?></p>
                        <?php
                        if ($current_time < $min) {
                            // echo 'Bids Starts in ' . date('H:i:s', strtotime($min));
                        ?>
                            <div style="color:black;" id="timerToStart<?php echo $bid_id; ?>" style="text-align:center;margin-bottom:4px;">Bid Starts IN
                            </div>
                        <?php
                        } else if ($current_time >= $min && $current_time <= $end_time) {
                        ?>
                            <div style="color:black;" id="timer<?php echo $bid_id; ?>" style="text-align:center;margin-bottom:4px;">Bid Ends IN
                            </div>
                        <?php
                        } else {
                            echo 'CLOSED';
                        }
                        ?>


                        <?php
                        if (isset($_SESSION['user_details'])) { ?>
                            <button id="bidbtn<?php echo $bid_id; ?>" class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase" data-min_amo='<?php echo $bid_price; ?>' user='<?php echo $_SESSION['user_details']['user_id']; ?>' data-bid_amo='<?php echo $bid_inc_price; ?>' data-bidId='<?php echo $bid_id ?>'>
                            <?php } else if (isset($_SESSION['vendor_details'])) { ?>
                                <button id="bidbtn<?php echo $bid_id; ?>" class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase" data-min_amo='<?php echo $bid_price; ?>' user='<?php echo $_SESSION['vendor_details']['vendor_id']; ?>' data-bid_amo='<?php echo $bid_inc_price; ?>' data-bidId='<?php echo $bid_id ?>'>
                                <?php  } else if (isset($_SESSION['s_provider'])) { ?>
                                    <button id="bidbtn<?php echo $bid_id; ?>" class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase" data-min_amo='<?php echo $bid_price; ?>' user='<?php echo $_SESSION['s_provider']['user_id']; ?>' data-bid_amo='<?php echo $bid_inc_price; ?>' data-bidId='<?php echo $bid_id ?>'>
                                    <?php  } else { ?>
                                        <button id="bidbtn" class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto not " style="justify-content: center;">
                                        <?php }

                                        ?>
                                        <?php echo $currency_symbol; ?> <?php echo $bid_price; ?> </button>

                                        <div class="retail" style="margin-bottom:3px;color:#323030;font-size:14px;">
                                            <b>Retail:<?php echo  $currency_symbol . " ";
                                                        echo ($retail > 0) ? $retail : "Not Availe" ?></b>
                                        </div>
                                        <div><span class="sc-bBXxYQ cIskxF"><b style="color:#323030;font-size:13px;">Sold
                                                    By:</b></span><a style="padding-left:1px;" data-cy="sold-by-vendor-link" href="vendor_products_page.php?vendor_id=<?php echo $vendor ?>"><?php echo $vendor_name ?></a>
                                        </div>
                    </div>
                </div>

                <!-- script for bit to end  -->
                <script>
                    function loadBet() {

                        // Set the duration of the timer in minutes
                        const durationInMinutes<?php echo $bid_id; ?> = <?php echo $bid_close; ?>;
                        // Calculate the total number of seconds based on the duration in minutes
                        const totalSeconds<?php echo $bid_id; ?> = durationInMinutes<?php echo $bid_id; ?> * 60;
                        // Get the HTML element where the timer will be displayed
                        const timerElement<?php echo $bid_id; ?> = document.getElementById("timer<?= $bid_id ?>");
                        // Start the timer
                        let secondsRemaining<?php echo $bid_id; ?> = totalSeconds<?php echo $bid_id; ?>;
                        let timerId<?php echo $bid_id; ?> = setInterval(() => {
                            // Calculate the number of hours, minutes, and seconds remaining
                            const hoursRemaining<?php echo $bid_id; ?> = Math.floor(secondsRemaining<?php echo $bid_id; ?> / 3600);
                            const minutesRemaining<?php echo $bid_id; ?> = Math.floor((secondsRemaining<?php echo $bid_id; ?> % 3600) / 60);
                            const secondsInMinuteRemaining<?php echo $bid_id; ?> = Math.floor(secondsRemaining<?php echo $bid_id; ?> % 60);

                            // Update the timer display
                            timerElement<?php echo $bid_id; ?>.innerText = "" + `${hoursRemaining<?php echo $bid_id; ?>}` + ":" + `${minutesRemaining<?php echo $bid_id; ?>}` + ":" + `${secondsInMinuteRemaining<?php echo $bid_id; ?>}`; //${secondsInMinuteRemaining<?php echo $bid_id; ?> < 10 ? '0' : ''}

                            // Decrement the number of seconds remaining
                            secondsRemaining<?php echo $bid_id; ?>--;

                            // If the timer has reached zero, stop the interval
                            if (secondsRemaining<?php echo $bid_id; ?> < 0) {
                                clearInterval(timerId<?php echo $bid_id; ?>);
                                timerElement<?php echo $bid_id; ?>.innerText = "CLOSED";
                                $("#bidbtn<?php echo $bid_id; ?>").prop('disabled', true);
                                setTimeout(() => {
                                    location.reload();
                                }, 10000);

                                setTimeout(function() {
                                    $.ajax({
                                        url: 'winner_aja.php?bid_id=<?php echo $bid_id; ?>',
                                        type: "POST",
                                        success: function(response) {
                                            if (response == 1) {
                                                setTimeout(function() {
                                                    $("#pro<?php echo $bid_id; ?>").fadeOut('slow');
                                                }, 300);
                                            }
                                        },
                                    });
                                }, 5000);
                            }

                        }, 1000);

                    }
                    loadBet();
                    setInterval(() => {
                        $.ajax({
                            type: "POST",
                            url: `update_bid_amount.php?bid_id=<?php echo $bid_id; ?>`, //C:\xampp\htdocs\_treasuretroove_backup_from_live by jeeva bro\update_bid_amount.php                             
                            success: function(response) {
                                // console.log(response);
                                $("#bidbtn<?php echo $bid_id; ?>").html(response);
                                $("#bidbtn<?php echo $bid_id; ?>").attr("data-min_amo", response);
                            }
                        });

                    }, 15000)
                </script>

                <!-- script for bid start -->
                <script>
                    // Set the duration of the timer in minutes
                    const durationInMinutesToStart<?php echo $bid_id; ?> = <?php echo $bid_start; ?>;
                    // Calculate the total number of seconds based on the duration in minutes
                    const totalSecondsToStart<?php echo $bid_id; ?> = durationInMinutesToStart<?php echo $bid_id; ?> * 60;
                    // Get the HTML element where the timer will be displayed
                    const timerElementToStart<?php echo $bid_id; ?> = document.getElementById("timerToStart<?php echo $bid_id; ?>");
                    // Start the timer
                    let secondsRemainingToStart<?php echo $bid_id; ?> = totalSecondsToStart<?php echo $bid_id; ?>;
                    let timerIdToStart<?php echo $bid_id; ?> = setInterval(() => {
                        // Calculate the number of hours, minutes, and seconds remaining
                        const hoursRemainingToStart<?php echo $bid_id; ?> = Math.floor(secondsRemainingToStart<?php echo $bid_id; ?> / 3600);
                        const minutesRemainingToStart<?php echo $bid_id; ?> = Math.floor((secondsRemainingToStart<?php echo $bid_id; ?> % 3600) / 60);
                        const secondsInMinuteRemainingToStart<?php echo $bid_id; ?> = Math.floor(secondsRemainingToStart<?php echo $bid_id; ?> % 60);

                        // Update the timer display
                        timerElementToStart<?php echo $bid_id; ?>.innerText =
                            `Bids Starts in ${hoursRemainingToStart<?php echo $bid_id; ?>}:${minutesRemainingToStart<?php echo $bid_id; ?>}:${secondsInMinuteRemainingToStart<?php echo $bid_id; ?> < 10 ? '0' : ''}${secondsInMinuteRemainingToStart<?php echo $bid_id; ?>}`;

                        // Decrement the number of seconds remaining
                        secondsRemainingToStart<?php echo $bid_id; ?>--;

                        // If the timer has reached zero, stop the interval
                        if (secondsRemainingToStart<?php echo $bid_id; ?> < 0) {
                            clearInterval(timerIdToStart<?php echo $bid_id; ?>);
                            timerElementToStart<?php echo $bid_id; ?>.innerText = "";

                            // loadBet();
                            $("#bidbtn<?php echo $bid_id; ?>").prop('disabled', false);
                            // loadBet();
                            location.reload();

                        } else {
                            $("#bidbtn<?php echo $bid_id; ?>").prop('disabled', true);
                        }
                    }, 1000);
                </script>


            <?php }
            if ($contains) { ?>
                <!-- <div style="height: 450px;justify-content:center;"> -->
                <img style="height:450px;width:65%;object-fit: contain;justify-content:center;" src="./upload/deal/come_soon.jpg" alt="">
                <!-- </div> -->
            <?php } ?>
        </div>
</div>
<!-- COMMON TO THE BID PAGE UP TO THIS FOR BID AND EMPTY BIT DISPLAY -->
</section>
<style>
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

    .searchResult {
        position: absolute;
        background: ghostwhite;
        width: 10%;
        margin-left: 100px;
        z-index: 2;
        margin-top: 13px;
    }
</style>
<!--  display the focused view of the individual product -->
<div class="w3-container">
    <div id="id01" class="w3-modal fullpopupimgsss">
        <div class="w3-modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="border:none;">&times;</span>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

                .detail {
                    display: flex;
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

                .increase {
                    display: grid;
                    place-items: center;
                }

                /* 
for search results */

                .detail img {
                    width: 48px;
                    height: 33px;
                    margin-top: -6px;
                    margin-right: 5px;
                }

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
                                    <img style="width:300px;height:396px;object-fit:cover" src="" class="masterImg" alt="product image">
                                    <img style="width:300px;height:396px;object-fit:cover" src="" class="childOne" alt="product image">
                                    <img style="width:300px;height:396px;object-fit:cover" src="" class="childTwo" alt="product image">
                                    <img style="width:300px;height:396px;object-fit:cover" src="" class="childThree" alt="product image">

                                    <video width="500px" height="396px" style="display:grid;place-items:center;" class="childFour videoClass" controls>
                                        <source src="" alt="product video">
                                        <source src="" alt="product video">
                                    </video>
                                </div>
                            </div>
                            <div class="img-select">
                                <div class="img-item img-select-1">
                                    <a href="#" data-id="1">
                                        <img style="width:100px;height:100px" class="masterImg" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item img-select-2">
                                    <a href="#" data-id="2">
                                        <img style="width:100px;height:100px" class="childOne" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item img-select-3">
                                    <a href="#" data-id="3">
                                        <img style="width:100px;height:100px" class="childTwo" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item img-select-4">
                                    <a href="#" data-id="4">
                                        <img style="width:100px;height:100px" class="childThree" src="" alt="image">
                                    </a>
                                </div>
                                <div class="img-item img-select-5">
                                    <a href="#" data-id="5">
                                        <!-- <img style="width:100px;height:100px"  src="" alt="image"> -->
                                        <video width="100" height="100" class="childFour videoClass" poster>
                                            <source src="" alt="product video">
                                            <source src="" alt="product video">
                                        </video>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- card right -->
                        <div class="product-content">
                            <h2 class="product-title">NIke Shoes</h2>
                            <!-- <a href="#" class="product-link">visit nike store</a>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.7(21)</span>
                            </div><br> -->
                            <div class="detail">
                                <img src="assets/images/delivery-truck (1).png" style="width:39px;" alt="">
                                <div class="p"> <b> Free Shipping, Free Returns</b>
                                    Delivery time varies by size, select your size for shipping estimates.</div><br>
                            </div>
                            <div class="product-price">
                                <p class="last-price">Old Price: <span class="oldprice"></span></p>
                                <p class="new-price">New Price: <span class="newPrice"></span></p>
                            </div>
                            <div class="product-detail">
                                <h2>about this item: </h2>
                                <p class="proDisc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet
                                    veniam
                                    tempora
                                    fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur
                                    quidem at sequi ipsa!</p>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
                                <ul>
                                    <!-- <li>Available: <span><b class="stock"></b></li>
                                <li>Category: <span><b class="category"></b></span></li>
                                <li>Shipping Area: <span><b class="free"></b></span><li>                     -->
                                    <li class="jewel">Cut:<span><b class="cut"></b></span></li>
                                    <li class="jewel">Color:<span><b class="color"></b></span></li>
                                    <li class="jewel">Clarity:<span><b class="clarity"></b></span></li>
                                    <li class="jewel">Carat:<span><b class="carat"></b></span></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="social-links">
                        <p>Share At: </p>
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
<style>
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
</style>

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

<?php include("include/footer.php"); ?>

<!-- sctipt from header part start -->

<!-- script for currency start -->
<script>
    $(document).ready(function() {
        $('.cur').click(function() {
            // var currencyId = <?php echo json_encode($currency); ?>;
            var currencyId = $(this).attr('data-proId');

            var userid = <?php echo ($user_id); ?>;

            //   alert(currencyId);
            //  exit();
            $.ajax({
                url: 'update_currency.php',
                method: 'POST',
                data: {
                    currency_id: currencyId,
                    user_id: userid
                },
                success: function(response) {
                    // alert('updated Your Currency Successfullly!');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    alert('error');
                }
            });
        });
    });
</script>
<!-- currency script end -->

<!-- search your Product  items on key press -->
<script>
    $(document).ready(function() {
        $("#search_results").empty();
        $("#search").keyup(function() {
            var search = $(this).val();
            if (search === '') {
                // alert(search);
                $("#search_results").empty();
            } else {
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
                                "</p></a><br/>"
                            );
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    },
                });
            }

        });



    });
</script>
<!--  End of the search your Product  items -->

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

    #clear_search_text {
        position: relative;
        right: 25px;

    }
</style>

<!-- search bid script start on key press -->
<script>
    //search result
    $(document).ready(function() {
        $("#search").keyup(function() {
            var search = $(this).val();
            if (search === '') {
                // alert("empty");
                $("#search_results").empty();
            } else {
                // alert(search);
                $.ajax({
                    type: "POST",
                    url: "search_bid_product.php",
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
                                '<a href="searchbid.php?id=' +
                                product.product_id +
                                '"><p>' +
                                product.product_name +
                                "</p></a><br/>"
                            );
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    },
                });
            }
        });

    });
</script>
<!-- search bid script end -->

<!-- scritp for nav_link highlight and notifiction popup start -->
<script>
    $(document).ready(function() {
        $('.nav-link').click(function() {
            // Remove active class from all nav links
            $('.nav-link').removeClass('active');

            // Add active class to the clicked nav link
            $(this).addClass('active');
        });
    });

    $(document).ready(function() {

        $('.notification-icon').click(function() {

            $('.message-popup').toggle();
        });
    });

    $(document).ready(function() {

        $('#clear_search_text').click(function() {
            document.getElementById('search').value = "";
            $("#search_results").empty();
            // alert("clear");
        });
    });
</script>
<!-- scritp for nav_link highlight and notifiction popup  end-->

<!-- script from header end  -->

<style>
    .btn_grad_blgr {

        height: 32px;
        align-items: center;
        margin-bottom: 7px;
        text-transform: uppercase;

    }

    .btn_grad_blgr:hover {
        background: #043fa9;
        color: white;
    }

    .card {
        width: 190px;
        display: inline-block;
        height: 430px;
        margin-bottom: 30px;
        border-radius: 15px;
    }

    .kCyZje {
        border: 1px solid black;
        width: 18px;
        height: 18px;
        padding-top: 0px;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .bpCaOA {
        min-height: 15px;
        display: block;
        font-size: 0.8rem;
        font-weight: 300;
        letter-spacing: 2px;
        text-align: center;
        text-transform: uppercase;
    }
</style>
<script>
    function increaseQuantity() {
        var quantity = parseInt(document.getElementById("quantity").value); // Get the current quantity value
        quantity += 5; // Increase the quantity by 5
        document.getElementById("quantity").value = quantity; // Update the quantity value in the input field
    }
</script>
<script>
    $(document).ready(function() {
        $(".jewel").hide();
        $(".card-img-top").click(function() {
            var bidId = $(this).attr('data-bidId');
            // alert(proId);
            $.ajax({
                url: "get_bid_details.php",
                type: "post",
                data: {
                    bidId: bidId,
                    model: 'bid',
                },
                success: function(data) {
                    var rec = JSON.parse(data);
                    // console.log(data);
                    //  alert(data);
                    if (rec.category_name == 103) {
                        $(".jewel").show();
                        // alert(rec.category_name);
                    } else {
                        // alert("failu"); 
                        $(".jewel").hide();
                    }
                    console.log(rec.product_name);
                    $(".product-title").text(rec.product_name);
                    // $(".oldprice").text(rec.product_old_price);
                    // $(".newPrice").text(rec.bid_new_price);
                    $(".proDisc").text(rec.product_description);
                    $(".cut").text(rec.cut);
                    $(".color").text(rec.color);
                    $(".clarity").text(rec.clarity);
                    $(".carat").text(rec.carat);
                    $(".stock").text(rec.balanced_stock);
                    $(".category").text(rec.category_id);
                    $(".free").text(rec.tax);
                    if (rec.product_image1 != "") {
                        $(".masterImg").attr("src", './upload/cards/' + rec.product_image1);

                    } else {
                        $(".img-select-1").hide();
                    }
                    if (rec.product_image2 != "") {
                        $(".childOne").attr("src", './upload/cards/' + rec.product_image2);

                    } else {
                        $(".img-select-2").hide();
                    }
                    if (rec.product_image3 != "") {
                        $(".childTwo").attr("src", './upload/cards/' + rec.product_image3);
                    } else {
                        $(".img-select-3").hide();
                    }
                    if (rec.product_image4 != "") {
                        $(".childThree").attr("src", './upload/cards/' + rec.product_image4);
                    } else {
                        $(".img-select-4").hide();
                    }
                    if (rec.product_image5 != "") {
                        $(".childFour").attr("src", './upload/cards/' + rec.product_image5);
                    } else {
                        $(".img-select-5").hide();
                    }
                    $(".fullpopupimgsss").show();
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        const popover = new bootstrap.Popover('.popover-dismiss', {
            trigger: 'focus'
        })
        $(".increase").click(function() {
            var alert = confirm("Do you want Bid the Product");
            var data = $(this).attr('data-min_amo');
            var bidId = $(this).attr('data-bidId');
            var bid_data = $(this).attr('data-bid_amo');
            var user_id_no = $(this).attr('user');
            var newBid_price = <?php echo $bid_inc_price; ?>;
            var newBid = parseInt(data) + parseInt(bid_data);
            // alert(newBid);
            // exit();

            if (alert == true) {

                $.ajax({
                    url: "update_bid.php",
                    type: "post",
                    data: {
                        bid: bidId,
                        bid_amount: newBid,
                        user_id_no: user_id_no
                    },
                    success: function(data) {
                        // console.log(data);
                        $("#bidbtn" + bidId).html(data);
                        $("#bidbtn" + bidId).attr("data-min_amo", data);
                    }
                });
            } else {
                alert("error");
            }


        });
    });
</script>


<!-- go to back page button -->



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
</script>

<!-- go to back page end -->

<!-- go to back page end -->