<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Ads</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">All ads </li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Service List <a href="add_total_ads.php" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New ads</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="card_show">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>                                                                      
                                        <th>Ads category name</th>
                                        <th>ad name</th>
                                        <th>Ad image</th>
                                        <th>Status</th>
                                                                           
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 
                                 $sql = "SELECT * FROM `all_ads` JOIN `advertise` ON  `advertise`.`ads_id`=`all_ads`.`category_name`";
                                 
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $id=$row['ads_id'];
                                        $ad_id=$row['ad_id'];
                                       $ads_img=$row['ads_img'];
                                       $ad_name=$row['ad_name'];
                                       $ads_name=$row['ads_name'];
                                       $category_name=$row['category_name'];
                                          ?>
                                        <tr>
                                                
                                              <td><?=$ads_name?></td>
                                              <td><?=$ad_name?></td>
                                            <td><img src="../upload/ads/<?=$ads_img?>" alt="" style="width:250px;height:150px;object-fit:cover;"></td>
                                            
                                        
                                           
                                            
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_total_ads.php?edit='<?=$ad_id?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="delete_total_ads.php?deleteid='<?=$ad_id?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
                                             </td>
                                        </tr>
                                  <?php
                                     }
                                         ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                   
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>
Fatal error: Uncaught TypeError: mysqli_fetch_assoc(): Argument #1 ($result) must be of type mysqli_result, bool given in C:\xampp\htdocs\BidTreasureTrove\admin\edit_total_ads.php:9 Stack trace: #0 C:\xampp\htdocs\BidTreasureTrove\admin\edit_total_ads.php(9): mysqli_fetch_assoc(false) #1 {main} thrown in C:\xampp\htdocs\BidTreasureTrove\admin\edit_total_ads.php on line 9