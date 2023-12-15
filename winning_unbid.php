<?php include("include/head.php");
ini_set('display_errors', 0);
?>


<style>
            /* search */
      .search-box {
    position:absolute;
    transform:translate(10%, 20%);
    background:#2f3640;
    border-radius:40px;
    height:44px;
    padding:7px;
    margin-left: 100px;
    margin-top: -70px;
    box-shadow:0px 0px 10px 0px rbg(0,0,0,0.2);
}

.search-btn {
    border:none;
    background:crimson;
    border-radius:50%;
    float:right;
    display:flex;
    width:30px;
    height:30px;
    justify-content:center;
    align-items:center;
    outline:none;
    transition:0.6s;
    font-weight:bold;
    color:#FFFFFF;
    box-shadow:0px 0px 10px 0px crimson;
}

.search-txt {
    background:none;
    border:none;
    outline:none;
    float:left;
    padding:0px;
    font-size:16px;
    transition:0.6s;
    color:crimson;
    font-weight:bold;
    line-height:30px;
    width:0px;
}

.search-box:hover > .search-txt {
    width:240px;
    padding:0 6px;
}

.search-box:hover > .search-btn {
    background:crimson;
    color:#FFFFFF;
    box-shadow:0px 5px 20px 0px crimson;
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
    </head>
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
    <h1 class="text-center" >Winning Bid list</h1><br>
    <div class="cart-area ptb-100" style="padding-top: 15px;">
            <div class="container">
<div class="parent">
          <div class="tab-pane mb-3" id="account-orders">
                <div class="icon-box icon-box-side icon-box-light">
                  <span class="icon-box-icon icon-orders">
                    <i class="w-icon-orders"></i>
                  </span>
                  <div class="icon-box-content">
                    
                  </div>
                </div>

                <table class="table  table-hover shop-table account-orders-table mb-6">
                  <thead>
                    <tr>
                      <th style="padding-right: 164px;">Product Name</th>
                      <th style="padding-right: 164px;">Product Image</th>
                      <th style="padding-right: 164px;">Price</th>
                      <!-- <th style="padding-right: 164px;">Status</th> -->
                      <!-- <th style="padding-right: 164px;"> Date</th> -->
                      <!-- <th style="padding-right: 164px;">Action</th>
                      <th style="padding-right: 164px;">Cart</th> -->
                      <!-- <th>Stock status</th> -->
                    </tr>
                  </thead>
                  <tbody class="table-hover fetch_orderdatas" style="text-align: center;">
                             <?php  
                              $bid_id = $_GET['bid_id'];
                              $sqlf="UPDATE `bid_product_details` SET `bid_winner`=1 WHERE `bid_id`='$bid_id'";
                              $resultf=$db->query($sqlf);
                             //    echo $sql;
                                 $resultf = $db->query($sqlf);

                             $user_id=$_SESSION['user_details']['user_id'];
                                // echo $user_id;
                                $sql="SELECT * FROM `bid_product_details` WHERE `user_id`='$user_id' AND `bid_winner`=1 AND `is_paid`=0";
                                $result=$db->query($sql);
                               //    echo $sql;
                                   $result = $db->query($sql);
                                    json_encode($result);
                                   while($row=mysqli_fetch_assoc($result)){
                                      //  print_r($row);
                                    
                                       $product_name= $row['product_name'];
                                       $bid_user= $row['user_id'];
                                       $product_img	= $row['product_image1'];
                                       $price=$row['product_new_price'];
                                      //  $date=$row['date'];
                                      //  $status=$row['status'];
                                       ?>
                                       <tr>
                                        <td style="padding-right: 164px;"><?php echo $product_name; ?></td>
                                        <td style="padding-right: 164px;"><img style="width:100px; height:86px;object-fit: cover" src="./upload/cards/<?php echo $product_img; ?>" alt="product_images"></td>
                                        <td style="padding-right: 164px;"><?php echo $price; ?></td>


                                        <!-- <td style="padding-right: 164px;"><?php echo 'unpaid'; ?></td>
                                        <td style="padding-right: 164px;"><?php echo 'paid'; ?></td> -->


                                        <!-- <td style="padding-right: 164px;"><?php echo $date; ?></td> -->
                                         <!-- <td style="padding-right: 164px;"><a href="delete_wishlist.php?deleteid='<?=$wishlist_id ?>'"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                         
                                        </td> -->
                                        <!-- <td style="padding-right: 108px;">  <a href="#" id="<?php echo $product_id;?>" name="add"  style="cursor:pointer" class="add_to_cart add<?php echo $product_id;?> primary-btn button">Add To Cart</a></td> -->
                                       </tr>
                                       <?php } ?>
                                       
                  </tbody>
                </table>
                <div class="pe" style="display: flex;justify-content:space-between">
                <a href="bid.php" class="btn btn-dark btn-rounded btn-icon-right">Go to Bid<i class="w-icon-long-arrow-right"></i></a>
                <form action="place_bid_order.php" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_QApmgDSbYnvqLS" data-amount="<?php echo $price;?>00" data-name="BID TREASURE TROOVE" data-description="BID TREASURE TROOVE" data-image="assets/images/logo.png" data-profile.name="<?php echo $first_name ?>" data-profile.email="" data-profile.phone="" data-theme.color="#009efd"></script>
    <input type="hidden" value="" name="hidden">
</form>
</div>
              </div>
          </div>
          </div>
         
           </div>

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
<?php include("include/footer.php"); ?>