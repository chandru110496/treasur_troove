<?php include("include/header.php");

date_default_timezone_set("Asia/Kolkata");
$TodayDate = date("Y-m-d");
$report = $_GET['id'];

if (isset($_POST['Fromdate'])) {
    $from_date = $_POST['Fromdate'];
    $to_date = $_POST['Todate'];
    $sql = "SELECT * FROM `order`
JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` WHERE payment_date BETWEEN '$from_date' AND '$to_date';";
    $result = mysqli_query($conn, $sql);
} elseif ($report == '1') {
    $sql = "SELECT * FROM `order`
        JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id` where `payment_date`='$TodayDate';";
} else {
    $sql = "SELECT * FROM `order`
    JOIN `user_details` ON `order`.`user_id`=`user_details`.`user_id`;";
}
$result = mysqli_query($conn, $sql);

?>

<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1><?php
                        if ($report == '1') {
                            echo 'TODAY EARNINGS';
                        } else {
                            echo 'TOTAL EARNINGS';
                        }
                        ?></h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Service</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- <table border="0" cellspacing="5" cellpadding="5">
            <tbody>
                <tr>
                    <td style="font-size:20px;font-weight:20px;font-weight: bold;">Minimum date:</td><br>
                    <td><input class="form-control" type="text" id="min" name="min"></td>
                    <td style="font-size:20px; font-weight:20px;font-weight: bold;">Maximum date:</td><br>
                    <td><input class="form-control" type="text" id="max" name="max"></td>
                    <td>
                        <button class="btn btn-success" onclick="filterDate()">Submit</button>
                    </td>
                </tr>
            </tbody>
        </table> -->
        <div class="shortlist">
            <form method="POST" action="" id="searchDate">
                <label for="date">From Date:</label>
                <input type="date" id="date1" name="Fromdate" value="">
                <label for="date">To Date:</label>
                <input type="date" id="date2" name="Todate" value="">
                <button type="submit" class="green dateFilter">
                    <span style="border-radius: 50px;font-weight: bolder;border-radius: 50px;" class="btn">go <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                </button>
            </form>
            <!-- <button type="submit" id="searchDates" class="btn " style="border-radius: 50px;font-weight: bolder;border-radius: 50px;">View All Date</button> -->
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
                            <table id="exampl5" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th style="width: 78px;">order number</th>
                                        <th style="width: 78px;">customer ID</th>
                                        <th style="width: 193px;">customer Name</th>
                                        <th style="width: 78px;">No.of products</th>
                                        <th style="width: 193px;">Total Value</th>
                                        <th style="width: 193px;">Date</th>
                                        <th style="width: 193px;">Payment Mode</th>
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
                                            <th><?php echo $row['payment_date']; ?></th>
                                            <th><?php echo $row['payment_mode']; ?></th>
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

    <?php include("include/footer.php"); ?>