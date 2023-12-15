<?php include("include/head.php"); ?>
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
        <input type="search" style="border-radius:15px;width:234px;" placeholder="Search Your Items...">
        <!-- <i
            class="fa fa-search search" style="cursor:pointer;" aria-hidden="true"></i> -->
        <div class="div">
            <h5 onclick="show()" style="margin-top:1px;"> <img src="assets/images/products/filter.png" alt="Filter"
                    style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;"> Filter </h5>
        </div>
    </div>
    </div>

    <h1 style="margin-right: 100px;width:100%;">Buy</h1>
    <!-- <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">                          
            <li class="nav-item "><a class="nav-link" style="font-size: 50px; padding-left: 9.5rem; color: black;">Bid</a> </li>          
        </ul>        
    </div> -->
    </div>
</nav>


<div class="parent">
    <nav id="menuu">
        <section class=containers id="showw" style="width:80%;display: none;" onclick="expand()">
            <div class="rows">
                <aside class="col-lg-11">
                    <div class="accordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a000">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b000" aria-expanded="true"
                                    aria-controls="accordion_b000">Modules</button>
                            </h2>

                            <div id="accordion_b000" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a000" data-bs-parent="#accordion_a000">
                                <div class="accordion-body pt-1">

                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">All/Any</a></li>
                                        <li><a href="#">Bid</a></li>
                                        <li><a href="#">Buy</a></li>
                                        <li><a href="#">Deal</a></li>
                                        <li><a href="#">Catalog</a></li>
                                        <li><a href="#">Invest</a></li>
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

                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Team Up</a></li>
                                        <li><a href="savelife.php">Save a Life</a></li>
                                        <li><a href="#">New Arrivals</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Cart Now</a></li>
                                        <li><a href="wearhouse.php">Vendor</a></li>
                                        <li><a href="#">Daily Deal</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-0">
                            <h2 class="accordion-header" id="accordion_a001">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b001" aria-expanded="true"
                                    aria-controls="accordion_b001">Price</button>
                            </h2>
                            <div id="accordion_b001" class="accordion-collapse collapse show"
                                aria-labelledby="accordion_a001" data-bs-parent="#accordion_a001">
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
    }
    </style>
    <section id="products">
        <div class="container">
            <div class="row" style="">
                <?php
    
                    $sql="SELECT * FROM `product_details`";
                    //    echo $sql;
                    $result = $db->query($sql);
                       
                    while($row=mysqli_fetch_assoc($result)){
                        // print_r($result);
                        $product_image1 = $row['product_image1'];
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_new_price = $row['product_new_price'];
                        $product_old_price = $row['product_old_price'];
                        
                ?>
                <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                    <div class="card">
                        <script>
                        var product = <?php echo $product_id;?>
                        </script>
                        <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i>
                        <script>
                        function myFunction(x) {
                            x.classList.toggle("active");

                        }
                        </script>


                        <div class="card-img-top" data-proId="<?php echo $product_id ?>"> <img class="card-img-top-b"
                                src="./upload/product/<?php echo $product_image1; ?>" alt="Card image cap"></div>
                        <!-- The Modal -->
                        <div class="card-body">
                            <p class="card-text"><?php echo $product_name; ?></p>
                            <p class="card-text"><b
                                    style="text-decoration: line-through;opacity:0.9;font-size:13px;">$<?php echo $product_old_price; ?></b><b>$<?php echo $product_new_price; ?></b>
                            </p>
                            <a href="#" class="btn btn-warning btn-lg btn_grad_blgr w-50 text-truncate mt-auto">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="w3-container">

        <div id="id01" class="w3-modal fullpopupimgsss">


            <div class="w3-modal-content">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-display-topright" style="border:none;">&times;</span>
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
                                        <img class="masterImg" src="" alt="shoe image">
                                        
                                        <img src="" alt="product image">
                                        <img  src="" alt="product image">
                                        <img  src="" alt="product image">
                                    </div>
                                </div>
                                <div class="img-select">
                                    <div class="img-item">
                                        <a href="#" data-id="1">
                                            <img class="childOne" src="" alt="shoe image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="2">
                                            <img class="childTwo" src="" alt="shoe image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="3">
                                            <img class="childThree" src="" alt="shoe image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="4">
                                            <img class="childFour" src="" alt="shoe image">
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
                                    <p class="proDisc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam
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
<script>
$(document).ready(function() {
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
                console.log(data);
                // alert(data);
                // console.log(rec.product_name);
                $(".product-title").text(rec.product_name);
                $(".oldprice").text(rec.product_old_price);
                $(".newPrice").text(rec.product_new_price);
                $(".proDisc").text(rec.product_description);
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






