<?php include("include/header.php");
include('include/conn.php');
$user_id=$_SESSION['user_details']['user_id'];
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
                                        <th style="width: 78px;">s.no</th>
                                        <th style="width: 78px;"> Deal Vendor Name</th>
                                        <th style="width: 78px;"> Deal Vendor Mobile no</th>
                                        <th style="width: 78px;">product name</th>
                                        <th style="width: 78px;">product image</th>
                                        <th style="width: 78px;">price</th>
                                        <th style="width: 78px;">Accept Date</th>
                                        <th style="width: 78px;">Dealer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                              
    
        //  echo   $sql = "SELECT * FROM `deal_product_details`LEFT JOIN `user_dealing` ON `user_dealing`.`dealing_id`=`deal_product_details`.`is_win` LEFT JOIN `service_provider` ON `user_dealing`.`provider_id`=`service_provider`.`user_id` WHERE `user_dealing`.`is_win` != 0 AND  `deal_product_details`.`vendor_id`='$user_id'";

        $sql= "SELECT *  FROM `user_dealing`LEFT JOIN `deal_product_details` ON `deal_product_details`.`deal_id`=`user_dealing`.`deal_for_id` LEFT JOIN `service_provider` ON `user_dealing`.`provider_id`=`service_provider`.`user_id`  WHERE `user_dealing`.`win_status` = 1 AND  `deal_product_details`.`vendor_id`='$user_id'";
            
                                     $res = mysqli_query($conn, $sql);
                                    // $res = $conn->query($sql);
                                     
                                    $i=1;
                                    while ( $row=mysqli_fetch_assoc($res)) { 
                                    //  print_r($row);       
                                    $deal_id=$row['deal_id'];                             
                                        ?>
                                    <tr>
                                        <td>
                                            <?= $i++?>
                                        </td>
                                        <td>
                                            <?= $row['s_name'] ?>
                                        </td>
                                        <td>
                                            <?= $row['s_number'] ?>
                                        </td>
                                        <td>
                                            <?= $row['product_name'] ?>
                                        </td>
                                        <td><img src="../upload/deal/<?= $row['product_image1'] ?>" alt=""
                                                style="width:110px;height:77px"></td>
                                        <td>
                                            <?=$row['dealing_price']?>
                                        </td>
                                        <td><?= $row['deal_dt']?></td>
                                        <td>
                                             <button name='user_view' data-toggle='modal'
                                                data-target='#exampleModal<?=$deal_id?>'
                                                class='btn btn-primary user_view_button'
                                                style='background:#16a085;color:white'>View</button>
                                         </td>
                                    </tr>
<!-- /////////////model start -->

                     <div class="modal fade bd-example-modal-lg"  id="exampleModal<?=$deal_id?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Vendor Details
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="view" class="modal-body">
                                                    <div class="row">
                                                                <div class="img_con col-md-4">
                                                                <img  style="margin:auto;width:120px;height:120px;object-fit:cover; "src="../upload/s_provider/<?= $row['user_img'] ?>"
                                                                 alt="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <h3>Name : </h3> <span><?= $row['s_name'] ?></span>
                                                                    <h3>Email : </h3> <span><?= $row['s_email'] ?></span>
                                                                    <h3>contact : </h3> <span><?= $row['s_number'] ?></span>
                                                                    <!-- <h3>Name : </h3> <span><?= $row['s_name'] ?></span>
                                                                    <h3>Name : </h3> <span><?= $row['s_name'] ?></span> -->
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="img" style="margin:auto;width:80px;height:80px;object-fit:cover;">
                                                                        <img src="../upload/deal/<?= $row['product_name'] ?>" class="img-responsive" alt="product images">
                                                                    </div>
                                                                    <h3>Product Name : </h3> <span><?= $row['product_name'] ?></span>
                                                                    <h3>Specification : </h3> <span><?= $row['specification'] ?></span>
                                                                    <h3>description : </h3> <span><?= $row['product_description'] ?></span>
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!-- /////////////model end -->

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