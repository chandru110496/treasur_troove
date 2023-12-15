<?php include("include/header.php");

date_default_timezone_set("Asia/Kolkata");
$TodayDate = date("Y-m-d");
$id = $_GET['id'];

if ($id == '1') {
    $sql = "SELECT * FROM `order`
    JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` 
     JOIN `vendor_details` ON `order`.`vendor_id`=`vendor_details`.`vendor_id` 
    where `payment_date`='$TodayDate';";
}else{
$sql = "SELECT * FROM `order`
JOIN `vendor_details` ON `order`.`vendor_id`=`vendor_details`.`vendor_id` 
JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id`;";
}
$result = mysqli_query($conn, $sql);
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Order Report</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">Service</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Service List</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th style="width: 78px;">order number</th>
                                        <th style="width: 78px;">Post Product Vendor Name</th>
                                        <th style="width: 78px;">customer ID</th>
                                        <th style="width: 193px;">customer Name</th>
                                        <th style="width: 78px;">No.of products</th>
                                        <th style="width: 193px;">Total Value</th>
                                        <th style="width: 293px;">Date</th>
                                        <th style="width: 193px;">Payment Mode</th>
                                        <th style="width: 193px;">Payment Status</th>
                                        <th style="width: 193px;">Delivery Status</th>
                                        <!-- <th style="width: 193px;">view</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <th><?php echo $row['order_id']; ?></th>
                                            <th><?php echo $row['name']; ?></th>
                                            <th><?php echo $row['user_id']; ?></th>
                                            <th><?php echo $row['user_name']; ?></th>
                                            <th><?php echo $row['total_qty']; ?></th>
                                            <th><?php echo $row['total_amount']; ?></th>    
                                            <th><?php echo $row['payment_date']; ?></th>
                                            <th><?php echo $row['payment_mode']; ?></th>
                                            <th><?php echo $row['payment_status']; ?></th>
                                            <th><?php echo 'Completed'; ?></th>
                                            <!-- <th> <a href="view_orders.php?id=<?php echo $row['order_unique_id']; ?>&user_id=<?php echo $row['user_id']; ?>&DelvSts=<?php echo $row['Delivery_Status']; ?>" class='btn btn-primary' style='background:#16a085;color:white' id='<?php echo $row['order_unique_id']; ?>'>View</a> </th> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-content -->
<?php include("include/footer.php"); ?>