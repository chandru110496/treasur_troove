<?php include("include/head.php");
 if (isset($_SESSION['user_details'])) 
$user_id=$_SESSION['user_details']['user_id']; 
//  $cur_type=$_SESSION['user_details']['cur_type'];
 $sql = "SELECT * FROM `user_details` WHERE `user_id` ='$user_id'";
 $stmt = $db->query($sql);
 if($row=mysqli_fetch_assoc($stmt)){
    // print_r($result);
    $currency = $row['cur_type'];   
 }
// print_r($currency);

$api_key = 'd42beed07fffe3e8fd759791';
// $base_currency = 'USD';
// $target_currency = 'EUR';
// $url = "https://api.exchangerate-api.com/v4/latest/{$base_currency}";
$url ="https://v6.exchangerate-api.com/v6/d42beed07fffe3e8fd759791/latest/KWD";
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
}
</style>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom bid">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor"
        aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- search your Products -->


    <div class="container" style="justify-content:stretch;">
<!-- niy search -->
    <div class="searchInputBox pull-right">
        <input type="search"  id="search" placeholder="search..." class="search-input"  autocomplete="off"/>
        <button class="btn-nobg search-btn" type="submit">
          <i class="fa fa-search" style="cursor:pointer;" aria-hidden="true" > </i>
          <!-- <i class="fa fa-search search" style="cursor:pointer;" aria-hidden="true"></i>   -->
        </button>
        <div id="search_results" class="searchResult" ></div>
      </div>
<!-- niy search -->
        <!-- <input type="search"  id="live_search" style="border-radius:15px;width:234px;" placeholder="Search..."> -->
       
             
            
           
            <!-- search your Products End -->
        <div class="div">
            <h5 onclick="show()" style="margin-top:1px;"> <img src="assets/images/products/filter.png" alt="Filter"
                    style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;"> </h5>
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








<style>
    .product-con{
        display:flex;
        width:100%;
    }
    .pro-con{
        margin: 10px;
        padding: 10px;
        width:100%;
    }
    .list-pro{
        display:flex;
        justify-content:space-between;
        flex-wrap:wrap;
        margin: 0 20px;
    }
</style>








<div class="product-con">
    <nav id="menuu">
        <section class=containers id="showw" style="display: none;" onclick="expand()">
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
   
    <section id="products" class="pro-con">
        <div class="list-pro">
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
              
                    <div class="card">
                        <script>
                        var product = <?php echo $product_id;?>
                        </script>
                        <!-- <i onclick="myFunction(this)" class="fas fa-heart" id="wishlist-icon"></i> -->
                        <i> <a
                                href="add_wishlist.php?product_id=<?php echo $product_id?>&user_id=<?php echo $user_id ?>"><i
                                    class="fa fa-heart"></i></a></i>
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
                            <!-- <button class="add-to-cart-btn" data-product-id=<?php echo $product_id;?>> Buy
                                Now</button> -->
                            <button class="btn  btn-lg btn_grad_blgr  text-truncate mt-auto"> <a href="#"
                                    id="<?php echo $product_id;?>" name="add" style="cursor:pointer"
                                    class="add_to_cart add<?php echo $product_id;?> primary-btn button">ADD TO
                                    CART</a></button>

                        </div>
                    </div>              
                <?php } ?>
           
        </div>
    </section>


</div>
<div class="w3-container">

        <div id="id01" class="w3-modal fullpopupimgsss">


            <div class="w3-modal-content">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-display-topright" style="border:none;">&times;</span>
             

                <div class="card-wrapper">
                    <div class="card" style="min-width:95%;border:none;">
                        <!-- card left -->
                        <div class="one">
                            <div class="product-imgs">
                                <div class="img-display">
                                    <div class="img-showcase">
                                        <img class="masterImg" src="" alt="image">

                                        <img src="" alt="product image">
                                        <img src="" alt="product image">
                                        <img src="" alt="product image">
                                    </div>
                                </div>
                                <div class="img-select">
                                    <div class="img-item">
                                        <a href="#" data-id="1">
                                            <img class="childOne" src="" alt="image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="2">
                                            <img class="childTwo" src="" alt="image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="3">
                                            <img class="childThree" src="" alt="image">
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="4">
                                            <img class="childFour" src="" alt="image">
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
                                    <p class="proDisc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
                                        eveniet veniam
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
                                    <input type="number" min="0" value="1" name="quantity" id="quantity">
                                    <input type="hidden" name="variant_id" id="variant_id<?php echo $product_id;?>"
                                        value="<?php echo $product_id;?>">
                                    <!-- <input type="hidden" name="quantity" id="quantity<?php echo $product_id;?>" class="form-control" value="1"> -->
                                    <button class="btn    text-truncate mt-auto"> <a href="#"
                                            id="<?php echo $product_id;?>" name="add" style="cursor:pointer"
                                            class="add_to_cart add<?php echo $product_id;?> primary-btn button">ADD TO
                                            CART</a></button>
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
<!--  end of the get the details of th products -->



<!-- add to cart products -->

<script>


$(document).ready(function() {
  $('.add-to-cart-btn').click(function() {
    var productId = $(this).data('product-id');
    
    $.ajax({
      url: 'add_to_cart.php',
      method: 'POST',
      data: { product_id: productId },
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
$(document).ready(function () {
  $("#search").keyup(function () {
    var search = $(this).val();
    // alert(search);
    $.ajax({
      type: "POST",
      url: "search_product.php",
      data: { search: search },
      dataType: "json", // Added to parse the response as JSON
      success: function (data) {
        console.log(data);
        // Clear previous search results
        $("#search_results").empty();

        // Append new search results
        data.forEach(function (product) {
          $("#search_results").append(
            '<a href="searchbuy.php?id=' +
              product.product_id +
              '"><p>' +
              product.product_name +
              "</p></a>"
          );
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
  });
});
</script>


<!--  End of the search your Product  items -->

