
     <?php include("include/head.php");
ini_set('error-reporting',0);
ini_set('display-errors',0);
// print_r($_SESSION['s_provider']);
if (isset($_SESSION['user_details'])) {
    $user_id = $_SESSION['user_details']['user_id'];
    $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";}
    
    else if(isset($_SESSION['vendor_details'])){
    $user_id = $_SESSION['vendor_details']['vendor_id'];
    $sql = "SELECT * FROM `vendor_details` WHERE `vendor_id` ='$user_id'";}
    
    date_default_timezone_set('Asia/Kolkata');
    
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
.bid {
    justify-content: center;
    align-items: center;
}
</style>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom bid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor"
        aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
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
            <h5 onclick="show()" style="margin-top:1px;"> <img  title="Filter" src="assets/images/products/filter.png" alt="Filter" style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;"> </h5>
        </div>
    </div>
    </div>
    <?php
    
    $sc_id=$_GET['cat_id'];
    $sql="SELECT * FROM `category` WHERE `category_id`='$sc_id'";
                    //    echo $sql;
                    $result = $db->query($sql);
                       
                    if($row=mysqli_fetch_assoc($result)){
                        // print_r($result);
                        $category_name = $row['category_name'];  
                ?>
     <h1 style="margin-right: 600px;font-size:px;"><?php echo $category_name;?></h1><?php } ?>
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
        <section class=containers id="showw" style="display: none;height:450px; overflow-y: scroll; width:70%;"
            onclick="expand()">
            <div class="rows">
                <aside class="col-lg-11">
                    <div class="accordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a000">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b000" aria-expanded="true"
                                    aria-controls="accordion_b000">Modules</button>
                            </h2>
                            </h2>

                            <div id="accordion_b000" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a000" data-bs-parent="#accordion_a000">
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b001" aria-expanded="true"
                                    aria-controls="accordion_b001">Hot Deals</button>
                            </h2>
                            <div id="accordion_b001" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#accordion_b001" aria-expanded="true"
                                        aria-controls="accordion_b001">Price</button>
                                </h2>
                                <div id="accordion_b001" class="accordion-collapse collapse show"
                                    aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
                                    <div class="accordion-body pt-1">

                                        <div class="row row-cols-md-2 g-2 mb-3">
                                            <div class="col">
                                                <label>Min</label>
                                                <input class="form-control px-1" name="min_price" id="min_price"
                                                    placeholder="0" type="number" />
                                            </div>
                                            <div class="col text-end">
                                                <label>Max</label>
                                                <input class="form-control px-1" name="max_price" id="max_price"
                                                    placeholder="10000" type="number" />
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100" type="submit"
                                            value="Filter">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </aside>
        </section>
    </nav>
    </nav>

    <style>
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

    * {
        box-sizing: border-box;
    }

    body {
        color: grey;
    }

    #sidebar {
        width: 20%;
        padding: 10px;
        margin: 0;
        float: left;
    }

    #products {
        /* width: 80%; */
        padding: 10px;
        margin: 0;
        float: right;
    }

    ul {
        list-style: none;
        padding: 5px;
    }

    li a {
        color: darkgray;
        text-decoration: none;
    }

    li a:hover {
        text-decoration: none;
        color: darksalmon;
    }

    .fa-circle {
        font-size: 20px;
    }

    #red {
        color: #e94545d7;
    }

    #teal {
        color: rgb(69, 129, 129);
    }

    #blue {
        color: #0000ff;
    }

    .card {
        width: 250px;
        display: inline-block;
        height: 324px;
        height: 415px;
        margin-bottom: 200px;
    }

    .card-img-top {
        width: 250px;
        height: 210px;
        border-radius: 15px 15px 0 0;
    }

    .card-body p {
        margin: 2px;
        text-transform: uppercase;
        font-size: 15px;
    }

    .card-body {
        padding: 0;
        padding-left: 2px;
    }

    .filter {
        display: none;
        padding: 0;
        margin: 0;
    }

    @media(min-width:991px) {
        .navbar-nav {
            margin-left: 35%;
        }

        .nav-item {
            padding-left: 20px;
        }

        .card {
            width: 190px;
            display: inline-block;
            /* height: 351px; */
            height: 415px;
        }

        .card-img-top {
            width: 188px;
            height: 210px;
            border-radius: 15px 15px 0 0;
            margin-bottom: 11px;
        }

        #mobile-filter {
            display: none;
        }
    }

    @media(min-width:768px) and (max-width:991px) {
        .navbar-nav {
            margin-left: 20%;
        }

        .nav-item {
            padding-left: 10px;
        }

        .card {
            width: 230px;
            display: inline-block;
            height: 300px;

        }

        .card-img-top {
            width: 230px;
            height: 210px;
            border-radius: 15px 15px 0 0;

        }

        .card-img-top {
            width: 188px;
            height: 190px;
            border-radius: 15px 15px 0 0;

        }

        #mobile-filter {
            display: none;
        }
    }

    @media(min-width:568px) and (max-width:767px) {
        .navbar-nav {
            margin-left: 20%;
        }

        .nav-item {
            padding-left: 10px;
        }

        .card {
            width: 205px;
            display: inline-block;
            height: 300px;

        }

        .card-img-top {
            width: 203px;
            height: 210px;
            border-radius: 15px 15px 0 0;
        }

        .fa-circle {
            font-size: 15px;
        }

        #mobile-filter {
            display: none;
        }
    }

    @media(max-width:567px) {
        .navbar-nav {
            margin-left: 0%;
        }

        .nav-item {
            padding-left: 10px;
        }

        #sidebar {
            width: 100%;
            padding: 10px;
            margin: 0;
            float: left;
        }

        #products {
            width: 100%;
            padding: 5px;
            margin: 0;
            float: right;
        }

        .card {
            width: 230px;
            display: inline-block;
            height: 448px;
            margin-bottom: 10px;

        }

        .card-img-top {
            width: 230px;
            height: 210px;
        }

        .list-group-item {
            padding: 3px;
        }

        .offset-1 {
            margin-left: 8%;
        }

        .filter {
            display: block;
            margin-left: 70%;
            margin-top: 2%;
        }

        #sidebar {
            display: none;
        }

        #mobile-filter {
            padding: 10px;
        }
    }

    .btn_grad_blgr {
        margin-top: 50px;
        display: flex;
        margin: 0 auto;
        margin-bottom: 0px;
        border: 0;
        border-radius: 0.5em;
        padding: 10px 31px;
        font-size: 14px;
        font-weight: 300;
        background: #1657cb;
        color: #fff;
    }

    .btn_grad_blgr:hover {
        background: #043fa9;
        color: white;
    }

    .btn_grad_blgr {
        height: 32px;
        align-items: center;
        text-transform: uppercase;
    }
    </style>
   
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
            $current_time= date('Y-m-d H:i:s'); 
            $sc_id=$_GET['cat_id'];
    $sql="SELECT * FROM `deal_product_details`
    LEFT JOIN `service_provider` ON `service_provider`.`user_id` = `deal_product_details`.`deal_vendor_id`
    WHERE `deal_product_details`.`expiry_time` > '$current_time'  AND `category_name`='$sc_id'
   ORDER BY `deal_product_details`.`deal_close` ASC";
    //    echo $sql;
    $result = $db->query($sql);
       // print_r($result);
    while($row=mysqli_fetch_assoc($result)){
        // print_r($result);
        $deal_image = $row['product_image1'];
        $deal_id = $row['deal_id'];
        $deal_name = $row['product_name'];     
       $upload_pro_id = $row['vendor_id'];    
       $min = $row['min'];
       $provider = $row['s_name'];
       $provider_img = $row['user_img'];
       $deal_price=$row['product_new_price'];
       $deal_closess = $row['deal_close'];       
       $current_time= date('Y-m-d H:i:s');    

    
       $end_time = date('Y-m-d H:i:s', strtotime($min .' + '. $deal_closess .'minutes'));
       $to_time = strtotime($current_time);
       $from_time = strtotime($end_time);
        $deal_closes = (abs($to_time - $from_time) / 60);

       $deal_close =number_format("$deal_closes",1);
    //    print_r($current_time);
       // $deal_close = round($deal_close_new);      
// 
// $sqld = "DELETE FROM `bid_product_details` WHERE min + INTERVAL bid_close MINUTE <= NOW()";
// $db->query($sqld);


?>

            <div id="card<?php echo $deal_id?>" class="card">
                <script>
                echo $product = <?php echo $product_id;?>
                </script>
                <!-- <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i>
                    <script>
                    function myFunction(x) {
                        x.classList.toggle("active");

                    }
                    </script> -->
                <img class="card-img-top" data-proId="<?php echo $deal_id ?>" style="object-fit:cover;"
                    src="./upload/deal/<?php echo $deal_image; ?>" alt="Card image cap">
                <div class="card-body">
                <!-- <div style="color:black;" id="timer<?php echo $deal_id;?>" style="text-align:center;margin-bottom:4px;">
                </div> -->
                    <B>
                        <p class="card-text"><?php echo $deal_name; ?></p>
                    </B>
                    <?php
                        if($current_time < $min){
                            echo 'Deals Starts in';
                        } else if($current_time >= $min && $current_time <= $end_time){
                            ?>
                <div style="color:black;" id="timer<?php echo $deal_id;?>" style="text-align:center;margin-bottom:4px;">
                </div>
                <?php
                        }
                        else{
                            echo 'CLOSED';
                        }
                    ?>

                    

                     <script>
                    // Set the duration of the timer in minutes
                    const durationInMinutes<?php echo $deal_id;?> = <?php echo $deal_close;?>;

                    // Calculate the total number of seconds based on the duration in minutes
                    const totalSeconds<?php echo $deal_id;?> = durationInMinutes<?php echo $deal_id;?> * 60;

                    // Get the HTML element where the timer will be displayed
                    const timerElement<?php echo $deal_id;?> = document.getElementById("timer<?php echo $deal_id;?>");

                    // Start the timer
                    let secondsRemaining<?php echo $deal_id;?> = totalSeconds<?php echo $deal_id;?>;
                    let timerId<?php echo $deal_id;?> = setInterval(() => {
                        // Calculate the number of minutes and seconds remaining
                        const minutesRemaining<?php echo $deal_id;?> = Math.floor(
                            secondsRemaining<?php echo $deal_id;?> / 60);
                        const secondsInMinuteRemaining<?php echo $deal_id;?> =
                            secondsRemaining<?php echo $deal_id;?> % 60;

                        // Update the timer display
                        timerElement<?php echo $deal_id;?>.innerText =
                            `${minutesRemaining<?php echo $deal_id;?>}:${secondsInMinuteRemaining<?php echo $deal_id;?> < 10 ? '0' : ''}${secondsInMinuteRemaining<?php echo $deal_id;?>}`;

                        // Decrement the number of seconds remaining
                        secondsRemaining<?php echo $deal_id;?>--;

                        // If the timer has reached zero, stop the interval
                        if (secondsRemaining<?php echo $deal_id;?> < 0) {
                        clearInterval(timerId<?php echo $deal_id;?>);
                        timerElement<?php echo $deal_id;?>.innerText = "CLOSED";
                        $("#dealbtn<?php echo $deal_id;?>").prop('disabled', true);
                        setTimeout(function() {

                            // alert('Sudip');
                               $("#card<?php echo $deal_id?>").slideToggle();
                               $("#card<?php echo $deal_id?>").fadeOut('slow');

                            // $.ajax({
                            //     url: 'winning_bid.php?bid_id=<?php echo $deal_id;?>',
                            //     type: "POST",
                            //     success: function(response) {
                            //                 //  alert(response);
                            //         if (response == 1) {
                            //             setTimeout(function() {
                            //                 $("#pro<?php echo $deal_id;?>").fadeOut(
                            //                     'slow');
                            //             }, 300);
                            //         }
                            //     },
                            // });
                        }, 5000);
                    }
                    }, 1000);
                    </script>
                             <form action="mk_deal.php" method="POST">
                       
                            <input type="hidden" name="dealer_for_id" value="<?php echo $upload_pro_id;?>">
                           
                            <input type="hidden" name="deal_for_id" value="<?php echo $deal_id;?>">
                            <?php if (isset($_SESSION['user_details'])) { ?>
                            
                            <?php } ?>
                            <?php if (isset($_SESSION['vendor_details'])) { ?>
                            <!-- <input type="hidden" name="provider_id" value="<?php $_SESSION['s_provider']['user_id'] ?>"> -->
                            <?php } ?>
                            <input type="text" name="amount" placeholder="Enter Amount"
                            style="width:100px;margin-bottom: 10px;height:28px;border: 1px solid #185474;"><br>
                            <!-- <p>Final Offer</p>
                            <h6>$5</h6> -->
                            <?php if(isset($_SESSION['s_provider'])) { ?>
    <button type="submit" id="dealbtn" name="mk_deal"
            class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto"
            style="border-radius: 15px; padding: 6px 31px;">Deal</button>
<?php } else { ?>
    <button type="button" style="text-align: center;padding-left: 32px;" 
            class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto"
            onclick="showAlertss()">Deal</button>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlertss() {
            Swal.fire({
                title: "Sign up as a  Service provider",
                icon: "info",
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK",
                // timer: 8000 
            });
        }
    </script>
<?php } ?>

                           <!-- <span class="sc-ciZhAO bpCaOA d-inline-block"
                            style="margin-bottom:3px;display:grid;place-items:center;">Last Deal:<b><?php echo $deal_price?></b><img
                                src="upload/profile/<?php echo $provider_img?>"
                                class="sc-himrzO kCyZje rounded-circle"><span
                                class="sc-jdAMXn bbLgnY"><?php echo $provider?><svg xmlns="http://www.w3.org/2000/svg"
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
                                </svg></span></span> -->


                        </form>
                        <a href="#" class="dealers" data-proId="<?php echo $deal_id ?>" id="openPopupButton<?php echo $deal_id; ?>"><button class="btn btn-info"    style=" margin-top: 17px;border-radius:50px;font-size:12px;color:whitesmoke;background-color:#32919d"
>View Deals</button></a>
                      
<style>
.deal_table {
    width: 100%;
    border-collapse: collapse;
}

.deal_table th, .deal_table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.deal_table th {
    background-color: #f2f2f2;
}
</style>   

<div id="popupContainer<?php echo $deal_id; ?>" class="popup">
    <div class="popup-content">
        <!-- Popup content goes here -->
        
        <div class="view_deals" >
        </div>
        <button class=" btn btn-primary" style="margin-top: 19px;" id="closePopupButton<?php echo $deal_id; ?>">Close</button>

       
    </div>
</div>

<style>
    .view_deals{
        margin-top:10px;
    }
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    document.getElementById("openPopupButton<?php echo $deal_id; ?>").addEventListener("click", function() {
        document.getElementById("popupContainer<?php echo $deal_id; ?>").style.display = "block";
    });

    document.getElementById("closePopupButton<?php echo $deal_id; ?>").addEventListener("click", function() {
        document.getElementById("popupContainer<?php echo $deal_id; ?>").style.display = "none";
    });
</script>
                </div>
            </div>

            <?php } ?>





        </div>
</div>
</div>
</div>
</section>

<div class="w3-container">
    <?php
   
    $sql="SELECT * FROM `deal_product_details`";
    //    echo $sql;
    $result = $db->query($sql);
       
    while($row=mysqli_fetch_assoc($result)){
        // print_r($result);
        $product_image1 = $row['product_image1'];
        $product_id = $row['deal_id'];
        $product_name = $row['product_name'];
        $product_new_price = $row['product_new_price'];
        $product_old_price = $row['product_old_price'];
        
?>
    <div id="id01" class="w3-modal fullpopupimgsss">


        <div class="w3-modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright"
                style="border:none;">&times;</span>
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

            /* extra added */
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

                                    <video width="500px" height="396px" style="display:grid;place-items:center;"class="childFour" controls>
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
                                <div class="p"> <b> Free Shipping, Free Returns</b>
                                    Delivery time varies by size, select your size for shipping estimates.</div><br>
                            </div>
                            
                            <div class="product-detail">
                                <h2>About this item: </h2>
                                <p class="proDisc"></p>
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
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="go-top">
    <i class="ri-arrow-up-line"></i>
</div>
<?php include("include/footer.php"); ?>




<script>
function show() {
    var x = document.getElementById("showw");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function dealer_show() {
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
<script>
$(document).ready(function() {
    $(".card-img-top").click(function() {
        $(".jewel").hide();
        var proId = $(this).attr('data-proId');
        // alert(proId);
        $.ajax({

            url: "get_deal_details.php",
            type: "post",
            data: {
                proId: proId,
                model: 'buy',
            },
            success: function(data) {
                var rec = JSON.parse(data);
                console.log(data);
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
                $(".color").text(rec.color);
                $(".clarity").text(rec.clarity);
                $(".carat").text(rec.carat);
                $(".stock").text(rec.balanced_stock);
                $(".category").text(rec.category_id);
                $(".masterImg").attr("src", './upload/deal/' + rec.product_image1);
                $(".childOne").attr("src", './upload/deal/' + rec.product_image2);
                $(".childTwo").attr("src", './upload/deal/' + rec.product_image3);
                $(".childThree").attr("src", './upload/deal/' + rec.product_image4);
                $(".childFour").attr("src", './upload/deal/' + rec.product_image5);
                $(".fullpopupimgsss").show();

            }
        });

    });
});
</script>
<script>
$(document).ready(function() {
    $(".dealers").click(function() {
        var proId = $(this).attr('data-proId');
        // alert(proId);
        $.ajax({

            url: "get_dealer_details.php",
            type: "post",
            data: {
                proId: proId,
                model: 'buy',
            },
            success: function(response) {
                
               $(".view_deals").html(response);
                $(".popup").dealer_show();

            }
        });

    });
});
</script>

<script>
// Add an event listener to the button
document.querySelector('.btn_grad_blgr').addEventListener('click', function() {
    // Display the SweetAlert
    Swal.btn_grad_blgr('Hello!', 'This is a SweetAlert!', 'success');
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
.searchResult {
                        position: absolute;
                        background: ghostwhite;
                        width: 10%;
                        margin-left: 100px;
                        z-index: 2;
                        margin-top: 13px;
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


<script>
    //search result
    $(document).ready(function() {
        $("#search").keyup(function() {
            var search = $(this).val();
            // alert(search);
            $.ajax({
                type: "POST",
                url: "search_deal_product.php",
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

<!-- go to back page end -->
 