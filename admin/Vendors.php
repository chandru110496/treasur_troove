<?php include("include/header.php"); ?>
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Vendors</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Total Vendors</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Service List <a href="add_vendor.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add Vendors</a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="hide_vendor_form">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>join_date</th>
                                        <th>Action</th>
                                        <th>Details</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `vendor_details` WHERE `type`='vendor'";
                                    $res = mysqli_query($conn, $sql);
                                    // print_r($res);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $id = $row['vendor_id'];
                                        $status = $row['v_status'];
                                    ?>

                                        <tr>
                                            <td>
                                                <!-- <img src="upload/vendors" alt="">  -->
                                                <img style="height:100px;width:100px;" src="../upload/vendors/<?php echo $row['vendor_image'] ?>" alt="">
                                            </td>
                                            <td>
                                                <?= $row['name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['phone'] ?>
                                            </td>
                                            <td>
                                                <?= $row['email'] ?>
                                            </td>
                                            <td>
                                                <?= $row['city'] ?>
                                            </td>
                                            <td>
                                                <?= $row['state'] ?>
                                            </td>
                                            <td>
                                                <?= $row['country'] ?>
                                            </td>
                                            <td><?= $row['join_date'] ?></td>

                                            <?php if ($status == 'pending') { ?>
                                                <td style="display:flex;justify-content:space-between;flex-direction:column;gap:35px">
                                                    <button class='btn btn-primary'> <a href="approve_vendor.php?id=<?= $id ?>&email=<?= urlencode($row['email']) ?>">Approve</a></button>
                                                    <button class="btn btn-danger"> <a href="reject_vendor.php?id=<?= $id ?>&email=<?= urlencode($row['email']) ?>">Reject</a></button>
                                                </td>
                                            <?php } else {
                                            ?>
                                                <!-- <td style="display:flex;justify-content:space-between;">
                                                    Approved

                                                </td> -->
                                                <td>
                                                    <?php if ($status == 'approved') { ?>
                                                        <!-- <button id="change_vendor_status" class="btn btn-danger" data-venId="<?= $id ?>" data-status="0">Deactivate</button> -->
                                                        <button class="btn btn-danger"><a href="../admin/vendor_activate.php?vendor_id=<?= $id ?>&status=0" style="color: white;text-decoration-line: none;" >Deactivate</a></button>
                                                    <?php } else if ($status == 'rejected') { ?>
                                                        <!-- <button id="change_vendor_status" class="btn btn-success" data-venId="<?= $id ?>" data-status="1">Activate</button> -->
                                                        <button class="btn btn-success"><a href="../admin/vendor_activate.php?vendor_id=<?= $id ?>&status=1" style="color: white;text-decoration-line: none;" >Activate</a></button>
                                                    <?php } ?>
                                                </td>

                                            <?php
                                            } ?>

                                            <td>
                                                <button name='user_view' data-toggle='modal' data-target='#exampleModal<?= $id ?>' class='btn btn-primary user_view_button' style='background:#16a085;color:white' id="<?= $row['vendor_id'] ?>">View</button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Product Details
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="view" class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="">Vendor image</label>
                                                                <img src="../upload/vendors/<?= $row['vendor_image'] ?>" style="width:100px;height:100px;object-fit:cover;" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Vendor Name</label>
                                                                <input type="text" value="<?= $row['name'] ?>" class="vendor_name" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Phone No</label>
                                                                <input type="text" value=" <?= $row['phone'] ?>" class="vendor_phone" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="text" class="vendor_email" value="<?= $row['email'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">country</label>
                                                                <input type="text" class="vendor_city" value="<?= $row['country'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">State</label>
                                                                <input type="text" class="vendor_city" value="<?= $row['state'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">City</label>
                                                                <input type="text" class="vendor_state" value="<?= $row['city'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Pin Code</label>
                                                                <input type="text" id="vendor_pincode" value="<?= $row['pincode'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Address</label>
                                                                <input type="text" class="vendor_address" value="<?= $row['address'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">PAN Number</label>
                                                                <input type="text" class="pan_no" value="<?= $row['pan_no'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">PAN Card Photo</label>

                                                                <img src="../upload/vendors/<?= $row['pan_card_img'] ?>" style="width:100px;height:100px;" alt="pan_card_img">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Aadhar No</label>
                                                                <input type="text" class="aadhar_no" value="<?= $row['aadhar_no'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Aadhar Front image</label>

                                                                <img src="../upload/vendors/<?= $row['aadhar_front_img'] ?>" style="width:100px;height:100px;" alt="aadhar_front_img'">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Aadhar Back image</label>
                                                                <p class="aadhar_back_img" value="<?= $row['aadhar_back_img'] ?>" alt="img">
                                                                    <img src="../upload/vendors/<?= $row['aadhar_back_img'] ?>" style="width:100px;height:100px;" alt="aadhar_back_img">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">GST No</label>
                                                                <input type="text" class="gst_no" value="<?= $row['gst_no'] ?>" style="border:none;width:300px;color:blue;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">GST Certificate</label>
                                                                <p class="gst_certificate_img" value="<?= $row['gst_certificate_img'] ?>" alt="img">
                                                                    <img src="../upload/vendors/<?= $row['gst_certificate_img'] ?>" style="width:100px;height:100px;" alt="gst_certificate_img">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- model popup-->

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // $("#change_vendor_status").onclick(function() {
            $(document).on('click', '#change_vendor_status', function() {
                alert("chandru........");
                var venId = $(this).attr('data-venId');
                var status = $(this).attr('data-status');

                if (status == 0) {
                    var alert = confirm("Do you want to Deactivate This Vendor?");
                } else {
                    var alert = confirm("Do you want to Activate This Vendor?");
                }
                if (alert == true) {
                    $.ajax({
                        //this 
                        url: "vendor_activate.php",
                        type: 'post',
                        data: {
                            ven_id: venId,
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

    <?php include("include/footer.php"); ?>