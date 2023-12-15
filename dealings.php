<?php include("include/header.php");
include('include/conn.php');
?>
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Reports</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Deal Report List</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table"
                                class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th style="width: 78px;"> Post Product User Name</th>
                                        <th style="width: 78px;"> Deal Vendor Name</th>
                                        <th style="width: 78px;">product name</th>
                                        <th style="width: 78px;">product image</th>
                                        <th style="width: 78px;">price</th>
                                        <th style="width: 78px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
        //                             $sql = "SELECT * FROM `deal_product_details`
        // JOIN `user_dealing` ON `deal_product_details`.`vendor_id` = `user_dealing`.`dealer_for_id`
        // JOIN `user_dealing` ON `vendor_details`.`vendor_id` = `user_dealing`.`provider_id`
        // JOIN `user_dealing` ON `user_details`.`user_id` = `user_dealing`.`dealer_for_id`
        // WHERE `deal_product_details`.`deal_product` = 1
        // ORDER BY `deal_product_details`.`product_name`";
        
        // $sql = "SELECT *
        // FROM `deal_product_details`
        // JOIN `user_dealing` ON `deal_product_details`.`vendor_id` = `user_dealing`.`dealer_for_id`
        // JOIN `service_provider` ON `service_provider`.`user_id` = `user_dealing`.`provider_id`
        // JOIN `user_details` ON `user_details`.`user_id` = `user_dealing`.`dealer_for_id`
        // WHERE `deal_product_details`.`deal_product` = 1
        // ORDER BY `deal_product_details`.`product_name`";
        
        $sql = "SELECT * FROM `deal_product_details` ";
        

                                    
                                    
                                     $res = mysqli_query($conn, $sql);
                                    // $res = $conn->query($sql);
                                    print_r($_SESSION['id']);  
                                                                    
                                    while ( $row=mysqli_fetch_assoc($res)) { 
                                                                           
                                        ?>
                                    <tr>
                                        <td>
                                            <?= $row['user_name'] ?>
                                        </td>
                                        <td>
                                            <?= $row['s_name'] ?>
                                        </td>
                                        <td>
                                            <?= $row['product_name'] ?>
                                        </td>
                                        <td><img src="../upload/deal/<?= $row['product_image1'] ?>" alt=""
                                                style="width:110px;height:77px"></td>
                                        <td>
                                            <?=$row['dealing_price']?>
                                        </td>
                                        <td>
                                            <?php    if($row['deal_status']==1){ ?>
                                            <button class='btn btn-success deal_status'
                                                data-dealingid='<?php echo $row['dealing_id'] ?>' data-status='0'>Accept
                                                Deal</button>

                                            <?php }
                                            else if($row['deal_status']==0) {?>
                                            <button class='btn btn-danger deal_status'
                                                data-dealingid='<?php echo $row['dealing_id']?>' data-status='1'>Cancel
                                                Deal</button><?php }?>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- user modal -->




    <?php include("include/footer.php"); ?>


    <script src="./js/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".deal_status").click(function() {
            var dealingId = $(this).attr('data-dealingid');
            var status = $(this).attr('data-status');

            var ok = confirm("Do you like Accept the deal?");
            
            if (ok == true) {

                $.ajax({
                    //this 
                    url: "deal_accept.php",
                    type: 'post',
                    data: {
                        dealing_id:dealingId,
                        status: status
                    },
                    success: function(data) {
                        // 
                        if (data == 1) {
                            location.reload();
                        }
                    }

                });
            }

        });
    });
    </script>