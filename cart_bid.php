
<?php include("include/head.php"); ?>
        
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

    <body>


<!-- End Navbar Area -->


        <!-- Start Cart Area -->
        <h1 class="text-center" > Cart</h1><br>
		<div class="cart-area ptb-100" style="padding-top: 15px;">
            <div class="container">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/products/products-img1.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Note Book Mockup</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$250.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='ri-subtract-line'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='ri-add-line'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$250.00</span>

                                        <a href="#" class="remove"><i class='ri-delete-bin-line'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/products/products-img2.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Motivational Book Cover</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$200.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='ri-subtract-line'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='ri-add-line'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$200.00</span>

                                        <a href="#" class="remove"><i class='ri-delete-bin-line'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/products/products-img3.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Book Cover Softcover</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$200.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='ri-subtract-line'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='ri-add-line'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$200.00</span>

                                        <a href="#" class="remove"><i class='ri-delete-bin-line'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/products/products-img4.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Stop and Take a Second</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$150.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='ri-subtract-line'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='ri-add-line'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$150.00</span>
                                        <a href="#" class="remove"><i class='ri-delete-bin-line'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/products/products-img5.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Red Headphone</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$250.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='ri-subtract-line'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='ri-add-line'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$250.00</span>

                                        <a href="#" class="remove"><i class='ri-delete-bin-line'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5">
                                <a href="checkout.php" class="default-btn">Update Cart <i class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="cart-totals">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Subtotal <span>$800.00</span></li>
                            <li>Shipping <span>$30.00</span></li>
                            <li>Total <span>$830.00</span></li>
                        </ul>
                        <a href="checkout.php" class="default-btn">Proceed to Checkout <i class="flaticon-plus"></i></a>
                    </div>
                </form>
            </div>
        </div>
		<!-- End Cart Area -->

       

<?php include("include/footer.php"); ?>