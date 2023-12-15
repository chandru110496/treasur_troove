<?php include("include/header.php"); 
date_default_timezone_set('Asia/Kolkata');
 
 if (isset($_SESSION['user_details'])) {
    $user_id = $_SESSION['user_details']['user_id'];
    $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";

    $stmt = $db->query($sql);
    if($row=mysqli_fetch_assoc($stmt)){
      // print_r($row);
       // print_r($result);
       $currency = $row['cur_type'];   
    }
}
    
    else if(isset($_SESSION['vendor_details'])){
    $user_id = $_SESSION['vendor_details']['vendor_id'];
    $sql= "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
    $stmt = $db->query($sql);
    if($row=mysqli_fetch_assoc($stmt)){
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
 $url ="https://v6.exchangerate-api.com/v6/e1cbe9d7cd31b9bb8ff06a9e/latest/KWD";
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 $response = curl_exec($curl);
 curl_close($curl);
 ?>


<link rel="stylesheet" href="assets/css/modal.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
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
<?php
                // print_r($_SESSION['currency_type']);               
                if($currency!="" || $currency==NULL ||$currency=="INR"){
                    $currency=1;
                }else{
                    // $currency=$_SESSION['currency_type']; 
                } 
                    ?>
<!-- Start Shop Area -->

<section id="products" class="pro-con">
    <div class="list-pro">
        <?php
                // print_r($_SESSION['currency_type']);
                
                if($currency!="" || $currency==NULL ||$currency=="INR"){
                    $currency=1;
                }else{
                    // $currency=$_SESSION['currency_type']; 
                } 
                    ?>

        <?php
   
    // $sql = "SELECT * FROM `vendor_details`
    // JOIN `bid_product_details` ON `vendor_details`.`vendor_id`=`bid_product_details`.`vendor_id`JOIN `bid_product_details` ON `user_details`.`user_id`=`bid_product_details`.`user_id`  ORDER BY `vendor_details`.`vendor_id`";
    $current_time= date('Y-m-d H:i:s');
   $sql = "SELECT *
FROM `vendor_details`
JOIN `bid_product_details` ON `vendor_details`.`vendor_id` = `bid_product_details`.`vendor_id`
JOIN `user_details` ON `user_details`.`user_id` = `bid_product_details`.`user_id` WHERE bid_product_details.expiry_time > '$current_time'
ORDER BY `bid_product_details`.`bid_close`  ASC"; 
    $result = $db->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        // print_r($result);
        $bid_id = $row['bid_id'];
        $bid_name = $row['product_name'];     
        $bid_description = $row['product_description'];     
        $bid_image=$row['product_image1'];
        $bid_image2=$row['product_image2'];
        $bid_image3=$row['product_image3'];
        $bid_image4=$row['product_image4'];
        $bid_image5=$row['product_image5'];       
        $bid_price=$row['product_new_price'];
        $retail=$row['retail'];
        $bid_inc_price = $row['product_old_price']; 
        $vendor_name=$row['name'];
        $vendor=$row['vendor_id'];
        $user=$row['user_id'];
        $user_name=$row['user_name'];
        $user_image=$row['user_img'];
        $min = $row['min'];   
        $bid_closess = $row['bid_close'];

        
        $current_time= date('Y-m-d H:i:s');
     
        $end_time = date('Y-m-d H:i:s', strtotime($min .' + '. $bid_closess .'minutes'));
        $to_time = strtotime($current_time);
        $from_time = strtotime($end_time);
         $bid_closes = (abs($to_time - $from_time) / 60);

        $bid_close = number_format("$bid_closes",1);
        
        // $bid_close = round($bid_close_new);      
// 
// $sqld = "DELETE FROM `bid_product_details` WHERE min + INTERVAL bid_close MINUTE <= NOW()";
// $db->query($sqld);


       if (isset($_SESSION['user_details'])) {
        
        $user_id = $_SESSION['user_details']['user_id'];
        $sqls = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
        $stmt = $db->query($sqls);
        if($ro=mysqli_fetch_assoc($stmt)){
        // print_r($result);
        $currency = $ro['cur_type'];   
        }
        // print_r($currency);
 $data = json_decode($response, true);
 // print_r($response);
 // print_r($data['conversion_rates']['INR']);
 $usd=$data['conversion_rates'][$currency];
 //    $usd=$data['conversion_rates']['BIF'];
 // print_r($usd);
 $convert_price=(int)$bid_price*(int)$usd;
 // print_r($convert_price);
 // print_r($result);
}       
        else if(isset($_SESSION['vendor_details'])){
        $vendor_id = $_SESSION['vendor_details']['vendor_id'];
        $sqls = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
        $stmt = $db->query($sqls);
        if($ro=mysqli_fetch_assoc($stmt)){
           // print_r($result);
           $currency = $ro['cur_type'];   
        }
        // print_r($currency);
 $data = json_decode($response, true);
 // print_r($response);
 // print_r($data['conversion_rates']['INR']);
 $usd=$data['conversion_rates'][$currency];
 //    $usd=$data['conversion_rates']['BIF'];
 // print_r($usd);
 $convert_price=(int)$bid_price*(int)$usd;
 // print_r($convert_price);
 // print_r($result);
}
        // print_r($sqls);
      
      

if (isset($_SESSION['user_details'])) {
    $cur_type=$_SESSION['user_details']['cur_type'];
    $user_id = $_SESSION['user_details']['user_id'];
    $get_qry = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
// print_r($get_qry);
$get_exc=mysqli_query($db,$get_qry);
$user_details=mysqli_fetch_assoc($get_exc);
$user_currency_type=$user_details['cur_type'];
// print_r();
// print_r($cur_type);
            $sqls = "SELECT * FROM `currency` WHERE `currency`.`name` ='$user_currency_type'";
                $stmt = $db->query($sqls);
                if ($ro= mysqli_fetch_assoc($stmt)) {
                    // print_r($result);
                    $currency_symbol= $ro['symbol'];              
                }}   
    else if(isset($_SESSION['vendor_details'])){
    $cur_type=$_SESSION['vendor_details']['cur_type'];
    $user_id = $_SESSION['vendor_details']['vendor_id'];
    $get_qry = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";
// print_r($get_qry);
$get_exc=mysqli_query($db,$get_qry);
$user_details=mysqli_fetch_assoc($get_exc);
$user_currency_type=$user_details['cur_type'];
// print_r();
// print_r($cur_type);
            $sqls = "SELECT * FROM `currency` WHERE `currency`.`name` ='$user_currency_type'";
                $stmt = $db->query($sqls);
                if ($ro= mysqli_fetch_assoc($stmt)) {
                    // print_r($result);
                    $currency_symbol= $ro['symbol'];
                }}
//  print_r($currency_symbol);
//  $sql = "SELECT *
//  FROM `bid_product_details`
//  JOIN `vendor_details` ON `bid_product_details`.`vendor_id` = `vendor_details`.`vendor_id`
//  WHERE `vendor_details`.`vendor_id` = '$vendor'
//  ORDER BY `bid_product_details`.`vendor_id`;
//  ";
            ?>
        <div class="card" id="pro<?php echo $bid_id;?>">
            <script>
            echo $product = <?php echo $product_id;?>
            </script>
            <!-- <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i>
                    <script>
                    function myFunction(x) {
                        x.classList.toggle("active");
                    }
                    </script> -->
            <img class="card-img-top" data-bidId="<?php echo $bid_id ?>" src="./upload/cards/<?php echo $bid_image; ?>"
                alt="Card image cap">
            <!-- The Modal -->
            <div class="card-body">
                <p class="card-text"><?php echo $bid_name; ?></p>
                <?php
                        if($current_time < $min){
                            echo 'Bids Starts in ';
                        } else if($current_time >= $min && $current_time <= $end_time){
                            ?>
                <div style="color:black;" id="timer<?php echo $bid_id;?>" style="text-align:center;margin-bottom:4px;">
                </div>
                <?php
                        }
                        else{
                            echo 'CLOSED';
                        }
                    ?>
                <script>
                // Set the duration of the timer in minutes





                const durationInMinutes<?php echo $bid_id;  ?> = <?php echo $bid_close;?>;
                // Calculate the total number of seconds based on the duration in minutes
                const totalSeconds<?php echo $bid_id;?> = durationInMinutes<?php echo $bid_id;?> * 60;
                // Get the HTML element where the timer will be displayed
                const timerElement<?php echo $bid_id;?> = document.getElementById("timer<?php echo $bid_id;?>");
                // Start the timer
                let secondsRemaining<?php echo $bid_id;?> = totalSeconds<?php echo $bid_id;?>;
                let timerId<?php echo $bid_id;?> = setInterval(() => {
                    // Calculate the number of minutes and seconds remaining
                    const minutesRemaining<?php echo $bid_id;?> = Math.floor(
                        secondsRemaining<?php echo $bid_id;?> / 60);
                    const secondsInMinuteRemaining<?php echo $bid_id;?> =
                        secondsRemaining<?php echo $bid_id;?> % 60;
                    // Update the timer display
                    timerElement<?php echo $bid_id;?>.innerText =
                        `${minutesRemaining<?php echo $bid_id;?>}:${secondsInMinuteRemaining<?php echo $bid_id;?> < 10 ? '0' : ''}${secondsInMinuteRemaining<?php echo $bid_id;?>}`;
                    // Decrement the number of seconds remaining
                    secondsRemaining<?php echo $bid_id;?>--;
                    // If the timer has reached zero, stop the interval
                    if (secondsRemaining<?php echo $bid_id;?> < 0) {
                        clearInterval(timerId<?php echo $bid_id;?>);
                        timerElement<?php echo $bid_id;?>.innerText = "CLOSED";
                        $("#bidbtn<?php echo $bid_id;?>").prop('disabled', true);
                        setTimeout(function() {
                               $("#pro<?php echo $bid_id;?>").slideToggle();
                            //    $("#pro<?php echo $bid_id;?>").fadeOut('slow');

                            $.ajax({
                                url: 'update_bid.php?bid_id=<?php echo $bid_id;?>',
                                type: "POST",
                                success: function(response) {
                                            //  alert(response);
                                    if (response == 1) {
                                        setTimeout(function() {
                                            $("#pro<?php echo $bid_id;?>").fadeOut(
                                                'slow');
                                        }, 300);
                                    }
                                },
                            });
                        }, 5000);
                    }
                }, 1000);
                </script>


                <?php 
if (isset($_SESSION['user_details'])) {?>
                <button id="bidbtn<?php echo $bid_id;?>"
                    class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase"
                    data-min_amo='<?php echo $bid_price;?>' user='<?php echo $_SESSION['user_details']['user_id'];?>'
                    data-bid_amo='<?php echo $bid_inc_price;?>' data-bidId='<?php echo $bid_id ?>'>
                    <?php }   
    else if(isset($_SESSION['vendor_details'])){?>
                    <button id="bidbtn<?php echo $bid_id;?>"
                        class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase"
                        data-min_amo='<?php echo $bid_price;?>'
                        user='<?php echo $_SESSION['vendor_details']['vendor_id'];?>'
                        data-bid_amo='<?php echo $bid_inc_price;?>' data-bidId='<?php echo $bid_id ?>'>
                        <?php  }
   else{?>
                        <button id="bidbtn<?php echo $bid_id;?>"
                            class="btn  btn-lg btn_grad_blgr w-50 text-truncate mt-auto increase"
                            data-min_amo='<?php echo $bid_price;?>'
                            user='<?php echo $_SESSION['user_details']['user_id'];?>'
                            data-bid_amo='<?php echo $bid_inc_price;?>' data-bidId='<?php echo $bid_id ?>'>
                            <?php }?>
                            <?php echo $currency_symbol;?> <?php echo $bid_price; ?> </button>
                        <span class="sc-ciZhAO bpCaOA d-inline-block"
                            style="margin-bottom:3px;display:grid;place-items:center;">winning<img
                                src="upload/profile/<?php echo $user_image?>"
                                class="sc-himrzO kCyZje rounded-circle"><span
                                class="sc-jdAMXn bbLgnY"><?php echo $user_name?><svg xmlns="http://www.w3.org/2000/svg"
                                    height="13" viewBox="0 0 512 341.337">
                                    <g transform="translate(0 -85.331)">
                                        <rect width="512" height="341.337" transform="translate(0 85.331)"
                                            fill="#f0f0f0"></rect>
                                        <g>
                                            <rect width="512" height="42.663" transform="translate(0 127.994)"
                                                fill="#d80027"></rect>
                                            <rect width="512" height="42.663" transform="translate(0 213.331)"
                                                fill="#d80027"></rect>
                                            <rect width="512" height="42.663" transform="translate(0 298.657)"
                                                fill="#d80027"></rect>
                                            <rect width="512" height="42.663" transform="translate(0 383.994)"
                                                fill="#d80027"></rect>
                                        </g>
                                        <rect width="256" height="183.797" transform="translate(0 85.331)"
                                            fill="#2e52b2"></rect>
                                        <g>
                                            <path
                                                d="M99.822,160.624,95.7,173.308H82.363l10.791,7.835-4.123,12.683,10.791-7.835,10.784,7.835-4.122-12.683,10.791-7.835H103.938Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M103.938,219.08,99.822,206.4,95.7,219.08H82.363l10.791,7.836L89.031,239.6l10.791-7.836,10.784,7.836-4.122-12.683,10.791-7.836Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M47.577,219.08,43.46,206.4,39.337,219.08H26l10.791,7.836L32.669,239.6l10.791-7.836L54.245,239.6l-4.122-12.683,10.789-7.836Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M43.46,160.624l-4.123,12.684H26l10.791,7.835-4.123,12.683,10.791-7.835,10.785,7.835-4.122-12.683,10.789-7.835H47.577Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M99.822,114.85,95.7,127.535H82.363l10.791,7.836-4.123,12.683,10.791-7.836,10.784,7.836-4.122-12.683,10.791-7.836H103.938Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M43.46,114.85l-4.123,12.685H26l10.791,7.836-4.123,12.683,10.791-7.836,10.785,7.836-4.122-12.683,10.789-7.836H47.577Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M156.183,160.624l-4.122,12.684H138.725l10.79,7.835-4.121,12.683,10.789-7.835,10.786,7.835-4.123-12.683,10.791-7.835H160.3Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M160.3,219.08,156.183,206.4l-4.122,12.683H138.725l10.79,7.836L145.394,239.6l10.789-7.836,10.786,7.836-4.123-12.683,10.791-7.836Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M216.663,219.08,212.546,206.4l-4.123,12.683H195.088l10.789,7.836L201.755,239.6l10.791-7.836,10.785,7.836-4.123-12.683L230,219.08Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M212.546,160.624l-4.123,12.684H195.088l10.789,7.835-4.122,12.683,10.791-7.835,10.785,7.835-4.123-12.683L230,173.308H216.663Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M156.183,114.85l-4.122,12.685H138.725l10.79,7.836-4.121,12.683,10.789-7.836,10.786,7.836-4.123-12.683,10.791-7.836H160.3Z"
                                                fill="#f0f0f0"></path>
                                            <path
                                                d="M212.546,114.85l-4.123,12.685H195.088l10.789,7.836-4.122,12.683,10.791-7.836,10.785,7.836-4.123-12.683L230,127.535H216.663Z"
                                                fill="#f0f0f0"></path>
                                        </g>
                                    </g>
                                </svg></span></span>
                        <div class="retail" style="margin-bottom:3px;color:#323030;font-size:14px;">
                            <b>Retail:<?php echo  $currency_symbol?><?php echo $retail?></b>
                        </div>
                        <div><span class="sc-bBXxYQ cIskxF"><b style="color:#323030;font-size:13px;">Sold
                                    By:</b></span><a style="padding-left:1px;" data-cy="sold-by-vendor-link"
                                href="vendor_products_page.php?vendor_id=<?php echo$vendor?>"><?php echo $vendor_name?></a>
                        </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
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

<div class="w3-container">
    <div id="id01" class="w3-modal fullpopupimgsss">
        <div class="w3-modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright"
                style="border:none;">&times;</span>
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
                                    <img style="width:300px;height:396px;" src="" class="masterImg" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childOne" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childTwo" alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childThree"
                                        alt="product image">
                                    <img style="width:300px;height:396px;" src="" class="childFour" alt="product image">
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
                                        <img style="width:100px;height:100px" class="childFour" src="" alt="image">
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
                                    <li>Color: <span>Black</span></li>
                                    <li>Available: <span>in stock</span></li>
                                    <li>Category: <span>Shoes</span></li>
                                    <li>Shipping Area: <span>All over the world</span></li>
                                    <li>Shipping Fee: <span>Free</span></li>
                                </ul>
                            </div>
                            <div class="purchase-info">
                                <h3>Size</h3>
                                <button type="button" class="btn">
                                    7 <i class="fas fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn"
                                    style="background-color: white; color: #000;">8</button>
                                <button type="button" class="btn"
                                    style="background-color: white; color: #000;">9</button>
                                <button type="button" class="btn"
                                    style="background-color: white; color: #000;">10</button>
                            </div>
                            <div class="purchase-info">
                                <label for="">Quantity</label>
                                <input type="number" min="0" value="1">
                                <button type="button" class="btn">
                                    <a href="cart.php" style="color:white;"> Add to Cart </a> <i
                                        class="fas fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn">Buy Now</button>
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
                console.log(rec.product_name);
                $(".product-title").text(rec.product_name);
                $(".oldprice").text(rec.product_old_price);
                $(".newPrice").text(rec.bid_new_price);
                $(".proDisc").text(rec.product_description);
                $(".masterImg").attr("src", './upload/cards/' + rec.product_image1);
                $(".childOne").attr("src", './upload/cards/' + rec.product_image2);
                $(".childTwo").attr("src", './upload/cards/' + rec.product_image3);
                $(".childThree").attr("src", './upload/cards/' + rec.product_image4);
                $(".childFour").attr("src", './upload/cards/' + rec.product_image5);
                $(".fullpopupimgsss").show();
            }
        });
    });
});
</script>



<script>
$(document).ready(function() {
    $(".increase").click(function() {
        var alert = confirm("Do you want Bid the Product");
        var data = $(this).attr('data-min_amo');
        var bidId = $(this).attr('data-bidId');
        var bid_data = $(this).attr('data-bid_amo');
        var user_id_no = $(this).attr('user');
        var newBid_price = <?php echo $bid_inc_price; ?>;
        var newBid = parseInt(data) + parseInt(bid_data);
        // alert(user_id_no);
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
                    var obj = JSON.parse(data);
                    var newPrice = obj.product_new_price;
                    var new_user = obj.user_id;
                    $("[data-bidId=" + bidId + "]").text(newPrice);
                    // $("[user="+user_id_no +"]").text(new_user);
                    // $(".increase").text(newPrice);
                    location.reload();
                }
            });
            print_r(data);
        } else {
            alert("error");
        }


    });
});
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle increase bid button click
            $('#increaseBid').click(function() {
                var currentBid = parseFloat($('#bidAmount').val());
                var newBid = currentBid + 1;

                // Update the bid input field with the new bid amount
                $('#bidAmount').val(newBid);

                // Send the new bid to the server using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'update_bid.php',
                    data: {
                        user: $('#user').val(),
                        bid_amount: newBid
                    },
                    success: function(response) {
                        alert(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        }); -->
</script>


<!-- go to back page button -->



<style>
.back {


    border: none;
    cursor: pointer;


    color: var(--white-color);
    background: #00b9ff;
    width: 35px;
    text-align: center;
    height: 35px;
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