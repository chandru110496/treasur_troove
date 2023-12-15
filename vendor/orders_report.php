<?php include("include/header.php");

date_default_timezone_set("Asia/Kolkata");
$TodayDate = date("Y-m-d");

$report = $_GET['id'];
if ($report == '1') {
    $sql = "SELECT * FROM `order`
JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` where `return_order`='Return';";
}
if ($report == '2') {
    $sql = "SELECT * FROM `order`
JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` where `return_order`='Return' AND `return_order_date`='$TodayDate' ;";
}
if ($report == '3') {
    $sql = "SELECT * FROM `order`
JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` where `cancel_status`='Admin-canceled' & 'User-canceled';";
}
if ($report == '4') {
    $sql = "SELECT * FROM `order`
JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` where `cancel_status`='Admin-canceled' & 'User-canceled' AND `cancel_date`='$TodayDate' ;";
}
// else{
//     $sql = "SELECT * FROM `order`
//     JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` ;";
// }
$result = mysqli_query($conn, $sql);
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>
                    <?php if ($report == '1') {echo 'Total Return Order Report';
                    } elseif($report == '2'){echo 'Today Return Order Report';
                    } elseif($report == '3'){echo 'Total Cancel Order Report';
                    } elseif($report == '4'){echo 'Today Cancel Order Report';}
                    ?></h1>
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
                                        <th style="width: 78px;">customer ID</th>
                                        <th style="width: 193px;">customer Name</th>
                                        <th style="width: 78px;">No.of products</th>
                                        <th style="width: 193px;">Total Value</th>
                                        <th style="width: 293px;">Return Date</th>
                                        <th style="width: 193px;">Payment Mode</th>
                                        <th style="width: 193px;">Payment Status</th>
                                        <th style="width: 193px;">Delivery Status</th>
                                        <th style="width: 193px;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <th><?php echo $row['order_id']; ?></th>
                                            <th><?php echo $row['user_id']; ?></th>
                                            <th><?php echo $row['user_name']; ?></th>
                                            <th><?php echo $row['total_qty']; ?></th>
                                            <th><?php echo $row['total_amount']; ?></th>
                                            <th><?php if($report == '3' || $report == '4') {
                                             echo $row['cancel_date']; 
                                             } elseif($report == '1' || $report == '2'){
                                                echo $row['return_order_date'];
                                             }else{
                                                echo $row['payment_date'];
                                             }?>
                                            
                                            </th>
                                            <th><?php echo $row['payment_mode']; ?></th>
                                            <th><?php echo $row['Payment_Status']; ?></th>
                                            <th><?php if($report == '3' || $report == '4') {
                                             echo $row['cancel_status']; 
                                             } elseif($report == '1' || $report == '2'){
                                                echo $row['return_order'];
                                             }else{
                                                echo $row['Payment_Status'];
                                             }?>
                                            
                                            </th>
                                            <th> <a href="view_orders_report.php?id=<?php echo $row['order_unique_id']; ?>&user_id=<?php echo $row['user_id']; ?>&DelvSts=<?php echo $row['Delivery_Status']; ?>" class='btn btn-primary' style='background:#16a085;color:white' id='<?php echo $row['order_unique_id']; ?>'>View</a> </th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <a href='index.php'><button class='btn  btn-blue'><i class='fa fa-backward' aria-hidden='true'></i>
                        <span>Go Back Dashbord page</span> </button></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-content -->
<?php include("include/footer.php"); ?>