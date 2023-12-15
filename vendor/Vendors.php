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
                            <h4>Service List <a href="add_vendor.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add Vendors</a></h4>
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
                                    $sql = "SELECT * FROM `vendor_details` WHERE `type`='vendor' AND  `status`= 'pending'";
                                    $res = mysqli_query($conn, $sql);
                                    // print_r($res);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $id = $row['vendor_id'];
                                        ?>

                                        <tr>
                                            <td>
                                               <!-- <img src="upload/vendors" alt="">  -->
                                               <img style="height:100px;width:100px;" src="../upload/vendors/<?php  echo $row['vendor_image'] ?>" alt=""> 
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
                                       
                                              
                                            <td style="display:flex;justify-content:space-between;">
                                               <button class='btn btn-primary'> <a href="approve_vendor.php?id='<?= $id ?>'">Approve</a></button>
                                               <button class="btn btn-danger"> <a href="reject_vendor.php?id='<?= $id ?>'">Reject</a></button>
                                            </td>
                                             <!-- <td>
                                               
                                            <?php    if($row['status']==1){ ?>
                                            <button class='btn btn-success user_status' data-userId='<?php echo $id ?>' data-status='0'>Activate</button>

                                            <?php       }else if($row['status']==0) {?>
                                            <button class='btn btn-danger user_status' data-userId='<?php echo $id ?>'  data-status='1'>Deactivate</button><?php }?>
                                            </td>  -->
                                         
                                            <td>
                                                <button name='user_view' data-toggle='modal'
                                                    data-target='#exampleModal1' class='btn btn-primary user_view_button'
                                                    style='background:#16a085;color:white' id="<?=$row['vendor_id']?>">View</button></td>;
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>           
                            </table>
                        </div>
                    </div>
               
                    <!-- model popup-->


                    
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <p class="vendor_image" alt="img">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Vendor Name</label>
                                            <input type="text" class="vendor_name" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone No</label>
                                            <input type="text" class="vendor_phone" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="vendor_email" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <input type="text" class="vendor_city" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">State</label>
                                            <input type="text" class="vendor_state" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pin Code</label>
                                            <input type="text" id="vendor_pincode" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" class="vendor_address" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">PAN Number</label>
                                            <input type="text" class="pan_no" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">PAN Card Photo</label>
                                            <p class="pan_card_img" alt="img">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Aadhar No</label>
                                            <input type="text" class="aadhar_no" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Aadhar Front image</label>
                                            <p class="aadhar_front_img" alt="img">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Aadhar Back image</label>
                                            <p class="aadhar_back_img" alt="img">
                                        </div>
                                        <div class="form-group">
                                            <label for="">GST No</label>
                                            <input type="text" class="gst_no" style="border:none;width:300px;color:blue;">
                                        </div>
                                        <div class="form-group">
                                            <label for="">GST Certificate</label>
                                            <p class="gst_certificate_img" alt="img">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("include/footer.php"); ?>

<script>
    //user view button click
$(document).on("click", ".user_view_button", function (e) {
  e.preventDefault();
  var vendor_id = $(this).attr("id");
//    alert(vendor_id);
//   exit();
  $.ajax({
    url: "vendor_view_details.php",
    method: "POST",
    data: { vendor_id: vendor_id },
    dataType: "json",
    success: function (data) {
      console.log(data);
      var data=JSON.parse(data);
      $(".vendor_image").html(
        '<img src="../upload/vendors/' +
          data.image +
          '" style="width:100px;height:auto;">'
      );
      $(".vendor_name").text(data.name);
      $(".vendor_phone").text(data.phone);
      $(".vendor_email").text(data.email);
      $(".vendor_city").text(data.city);
      $(".vendor_state").text(data.state);
      $(".vendor_pincode").text(data.pincode);
      $(".vendor_address").text(data.address);
      $(".pan_no").text(data.pan_no);
      $(".pan_card_img").html(
        '<img src="../upload/vendors/' +
          data.pan_card_img +
          '"style="width:100px;height:auto;">'
      );
      $(".aadhar_no").val(data.aadhar_no);
      $(".aadhar_front_img").html(
        '<img src="../upload/vendors/' +
          data.aadhar_front_img +
          '"style="width:100px;height:auto;">'
      );
      $(".aadhar_back_img").html(
        '<img src="../upload/vendors/' +
          data.aadhar_back_img +
          '"style="width:100px;height:auto;">'
      );
      $(".gst_no").val(data.gst_no);
      $(".gst_certificate_img").html(
        '<img src="../upload/vendors/' +
          data.gst_certificate_img +
          '"style="width:100px;height:auto;">'
      );
      console.log(product_image1);
    },
  });
});
</script>









    
    <script>
$(document).ready(function(){
    $(".ven_status").click(function(){
        var venId=$(this).attr('data-venId');
        var status=$(this).attr('data-status');


        if(status==0){
            var alert=confirm("Do you want to Deactivate This Vendor?");
        }
        else{
            var alert=confirm("Do you want to Activate This Vendor?");
        }
       
// alert("haridas");
            // $.ajax({
            //     url:'validate.php';
            //     type:'post',
            //         data:{ven_id:venId,
            //         status:status},
            //     success:function(resp){

            //     }
            // });
            if(alert==true){
                $.ajax({
            //this 
            url: "vendor_activate.php",
            type: 'post',
            data:{ven_id:venId,status:status},
            success: function (data) {
                // 
                if(data==1){
                    location.reload();
                }
               
            
            }

        });


            }

            
    });
});

</script>