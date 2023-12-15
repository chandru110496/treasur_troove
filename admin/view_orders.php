<?php include("include/header.php");
$order_unique_id = $_GET['id'];
$user_id = $_GET['user_id'];
$DelvSts = $_GET['DelvSts'];

$sql = "SELECT * FROM `my_cart` WHERE `order_id`='$order_unique_id'";
$result = mysqli_query($conn, $sql);

$order_sql = "SELECT * FROM `order` WHERE `order_unique_id`='$order_unique_id'";
$order_result = mysqli_query($conn, $order_sql);
$order_row = $order_result->fetch_assoc();
$order_status = $order_row['Delivery_Status'];
$cancel_status = $order_row['cancel_status'];
$return_order = $order_row['return_order'];

?>
<?php
$user_sql = "SELECT * FROM `user_details` u 
JOIN `billing_address` b ON u.user_id = b.user_id 
WHERE u.user_id = '$user_id'";
$user_result = mysqli_query($conn, $user_sql);
?>
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>User Report</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">Service</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <a href="orders.php"><button class="btn btn-blue"><i class="fa fa-backward" aria-hidden="true"></i>
                        <span>Go Back order page</span> </button></a>
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4 style="text-align: center;">User Details</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">customer Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Delivery Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $user_result->fetch_assoc()) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['user_name']; ?></th>
                                        <td><?php echo $row['mobile_number']; ?></td>
                                        <td><?php echo $row['email_address']; ?></td>
                                        <td><?php echo $row['street_address']; ?>,
                                            <?php echo $row['town_city']; ?>,
                                            <?php echo $row['states']; ?>,
                                            <?php echo $row['pin_code']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4 style="text-align: center;">Buying Details</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quentity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $grand_total = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $total = $row['price'] * $row['quantity'];
                                    if (!is_numeric($total)) {
                                        "Error: Total is not a number";
                                        break;
                                    }
                                    $grand_total += $total;
                                ?>

                                    <tr>
                                        <th scope="row"><?php echo $row['order_id']; ?></th>
                                        <td><?php echo $row['product_name']; ?></td>
                                        <td><?php echo '₹' . $row['price']; ?></td>
                                        <td><?php echo $row['quantity']; ?></td>
                                        <td><?php echo '₹' . $total; ?></td>
                                    </tr>
                                <?php } ?>
                                <?php "Grand Total: " . $grand_total; ?>
                                <tr>
                                    <th colspan="4" style="text-align: end;">Grand Toatal</th>
                                    <td><?php echo '₹' . $grand_total; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        
                            <div style='display: flex;justify-content: space-between;'>
                                 <?php
                        if ($order_status == 'processing') {
                            echo "<div class='deliverystatus' style:''><div><h4>Delivery status: <span style='color: #E49B0F;'>$order_status <i class='fa fa-spinner' aria-hidden='true'></i></span></h4>
                              <a class='btn btn-primary ShipingStatus' id='$order_unique_id'>Shipping</a></div>
                              ";
                        } elseif ($order_status == 'Shipping') {
                            echo "<div><h4>Delivery status: <span style='color: #E49B0F;'>$order_status <i class='fa fa-truck' aria-hidden='true'></i></span></h4>
                        <a class='btn btn-green DeliveryStatus' id='$order_unique_id'>Go To Delivery</a></div>
                        ";
                        } elseif ($order_status == 'Delivered') {
                            echo "
                        ";
                        }
                        ?></div>
                                <div> <?php
                        if ($order_status == 'processing') {
                            echo "<h4>If Cancel this Deal: <span style='color: #E49B0F;'></h4>
                              <a style='margin-left: ' class='btn btn-primary CancelStatus' id='$order_unique_id'>Cancel</a>
                              ";
                        } elseif ($order_status == 'Shipping') {
                            echo "<div style='margin-left: 85%;'><h4>If Cancel this Deal: <span style='color: #E49B0F;'></h4><a style='margin-left: ' class='btn btn-primary CancelStatus' id='$order_unique_id'>Cancel</a></div></div>";
                        } elseif ($order_status == 'Delivered') {
                            echo "<h4>Delivery status: <span style='color: #E49B0F;'>$order_status <i class='fa fa-thumbs-up' aria-hidden='true'></i></span></h4>
                            ";
                        }
                        ?></div>
                            
                        
                        <?php /*
                        if ($order_status == 'processing') {
                            echo "<div class='deliverystatus' style:''><div><h4>Delivery status: <span style='color: #E49B0F;'>$order_status <i class='fa fa-spinner' aria-hidden='true'></i></span></h4>
                              <a class='btn btn-primary ShipingStatus' id='$order_unique_id'>Shipping</a></div>
                              <div style='margin-left: 85%;'><h4>If Cancel this Deal: <span style='color: #E49B0F;'></h4>
                              <a style='margin-left: ' class='btn btn-primary CancelStatus' id='$order_unique_id'>Cancel</a></div>
                              </div>";
                        } elseif ($order_status == 'Shipping') {
                            echo "<h4>Delivery status: <span style='color: #E49B0F;'>$order_status <i class='fa fa-truck' aria-hidden='true'></i></span></h4>
                        <a class='btn btn-green DeliveryStatus' id='$order_unique_id'>Go To Delivery</a>
                        <div style='margin-left: 85%;'><h4>If Cancel this Deal: <span style='color: #E49B0F;'></h4><a style='margin-left: ' class='btn btn-primary CancelStatus' id='$order_unique_id'>Cancel</a></div></div>";
                        } elseif ($order_status == 'Delivered') {
                            echo "<h4>Delivery status: <span style='color: #E49B0F;'>$order_status <i class='fa fa-thumbs-up' aria-hidden='true'></i></span></h4>
                            <a href='orders.php'><button class='btn  btn-blue'><i class='fa fa-backward' aria-hidden='true'></i>
                        <span>Go Back order page</span> </button></a>";
                        }*/
                        ?>
                        
                    </div> <br>
                    <a href='orders.php'><button class='btn  btn-blue'><i class='fa fa-backward' aria-hidden='true'></i>
                        <span>Go Back order page</span> </button></a>
                </div>
            </div>
        </div>
    </div>
    <?php include("include/footer.php"); ?>
    <?php include '../includes/script.php'; ?>


