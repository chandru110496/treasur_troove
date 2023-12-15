<?php include("include/header.php");

date_default_timezone_set("Asia/Kolkata");
$TodayDate = date("Y-m-d");



$sql = "SELECT * FROM `donation`
    JOIN `user_details` ON `donation`.`user_id`=`user_details`.`user_id` 
      
   ";


$result = mysqli_query($conn, $sql);
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Donation Report</h1>
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
                            <h4>Donation List</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>

                                        <th style="width: 193px;">S.NO</th>
                                        <th style="width: 293px;">Donner Name</th>
                                        <th style="width: 193px;">Donner Image</th>
                                        <th style="width: 193px;">Donner Mobile.no</th>
                                        <th style="width: 193px;">Amount</th>
                                        <!-- <th style="width: 193px;">view</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $serial = 1;
                                    while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?= $serial ?></td>
                                            <th><?php echo $row['user_name']; ?></th>
                                            <th><img style="width:164px;height:110px;object-fit:cover;" src="../upload/profile/<?= $row['user_img'] ?>" alt=""></th>
                                            <th><?php echo $row['mobile_number']; ?></th>
                                            <th><?php echo $row['amount']; ?></th>




                                        <?php
                                        $serial++;
                                    } ?>
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