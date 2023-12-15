<?php include("include/head.php"); 
ini_set('display_errors', 0);?>


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
   
    .date-form {
        margin-bottom: 20px;
    }

    .date-form input[type='text'] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .date-form input[type='submit'] {
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

</style>

<link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>

<!-- Script -->
<script src='jquery-3.3.1.js' type='text/javascript'></script>
<script src='jquery-ui.min.js' type='text/javascript'></script>
<script type='text/javascript'>
    $(document).ready(function() {
        $('.dateFilter').datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>


</head>

<h1 class="text-center">Payment History</h1><br>
<!-- Search filter -->



<div class="cart-area ptb-100" style="padding-top: 15px;">

    <div class="container">
    <form method='post' action=''>
    Start Date <input type='text' class='dateFilter' name='fromDate' value='<?php if (isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>

    End Date <input type='text' class='dateFilter' name='endDate' value='<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

    <input type='submit' name='but_search' value='Search'>
</form><br><br>
        <div class="parent">
            <div class="tab-pane mb-3" id="account-orders">
                <div class="icon-box icon-box-side icon-box-light">
                    <span class="icon-box-icon icon-orders">
                        <i class="w-icon-orders"></i>
                    </span>
                    <div class="icon-box-content">

                    </div>
                </div>

                <table class="table table-hover shop-table account-orders-table mb-6">
                    <thead>
                        <tr>
                            <th style="padding-right: 84px;">Item Name</th>
                            <th style="padding-right: 84px;object-fit: cover">Product Image</th>
                            <th style="padding-right: 84px;">Product Price</th>
                            <th style="padding-right: 84px;">Qty</th>
                            <!-- <th style="padding-right: 84px;">Total</th> -->
                            <th style="padding-right: 84px;">Date</th>
                            <th style="padding-right: 84px;">Paid via</th>
                            <th style="padding-right: 84px;">PDF</th>
                            <th style="padding-right: 84px;">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover fetch_orderdatas" style="text-align: center;">
                        <?php
                        $user_id = $_SESSION['user_details']['user_id'];
                        // echo $user_id;
                        // $sql = "SELECT * FROM `order` WHERE `user_id`='$user_id'";
                        // JOIN `product_details` ON `order`.`user_id`=`product_details`.`product_id`;";
                        //  echo $sql; 

                        $sql = "SELECT * FROM `order`
                            JOIN `my_cart` ON `order`.`order_id`=`my_cart`.`order_id` 
                            JOIN `product_details` ON `product_details`.`product_id` = `my_cart`.`product_id` 
                            JOIN `invoice` ON `invoice`.`order_for_id` = `order`.`order_id` 
                            WHERE `order`.`user_id`='$user_id'";

                        // Date filter
                        if (isset($_POST['but_search'])) {
                            $fromDate = $_POST['fromDate'];
                            $endDate = $_POST['endDate'];

                            if (!empty($fromDate) && !empty($endDate)) {
                                $sql .= " and date between '" . $fromDate . "' and '" . $endDate . "' ";
                            }
                        }
                        // Sort
                        $sql.= "ORDER BY date DESC";



                        $result = $db->query($sql);
                        if (!$result) {
                            echo "Error executing query: " . $db->error;
                        } else {


                           
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                                $product_name = $row['product_name'];
                                $product_price = $row['product_new_price'];
                                $product_id = $row['product_id'];
                                $product_img = $row['product_image1'];
                                $date = $row['payment_date'];
                                $status = $row['status'];
                                $payment_mode = $row['payment_mode'];
                                $total_qty = $row['total_qty'];
                                // $total_amount = $row['total_amount']; ?>


                                <tr>
                                    <td style="padding-right: 84px;"><?php echo $product_name; ?></td>
                                    <td style="padding-right: 84px;"><img style="width:100px; height:66px;object-fit: cover" src="./upload/product/<?php echo $product_img; ?>" alt="product_images"></td>
                                    <td style="padding-right: 84px;"><?php echo $product_price; ?></td>
                                    <td style="padding-right: 84px;"><?php echo $total_qty; ?></td>
                                    <!-- <td style="padding-right: 84px;"><?php echo $total_amount; ?></td> -->
                                    <td style="padding-right: 84px;"><?php echo $date; ?></td>
                                    <td style="padding-right: 84px;"><?php echo  $payment_mode; ?></td>
                                    <!-- <td><button class="btn btn-success" style="margin-right: 70px;"><a href="invoice.php">Invoice</a></button></td> -->
                                    <td><button class="btn btn-success" style="margin-right: 70px;"><a href="printpdf.php?id=<?php echo $row['order_for_id']?>">PDF</a></button></td>
                                    <td><a  style="padding-right: 84px;" href="delete.php?del_inv=<?php echo $row['order_id'];?> "><i class="fas fa-trash fip deleteic" style="color:grey;"></i></a></td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
                <a href="buy.php" class="btn btn-dark btn-rounded btn-icon-right">Go Shop<i class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
