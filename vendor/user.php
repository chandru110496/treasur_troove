<?php include("include/header.php");
include('include/conn.php');
?>
<?php
// date_default_timezone_set("Asia/Kolkata");
// $TodayDate = date("Y-m-d");
//$id = $_GET['id'];

// if ($id == '1') {
//     $sql = "SELECT * FROM `user_details` u JOIN `billing_address` b ON u.user_id = b.user_id where `join_date`='$TodayDate'";
// } else {
//     $sql = "SELECT * FROM `user_details` u JOIN `billing_address` b ON u.user_id = b.user_id";
// }
//$result = mysqli_query($conn, $sql);
?>

<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>
                        <?php
                        // if ($id == '1') {
                        //     echo 'TODAY USERS';
                        // } else {
                        //     echo 'TOTAL USERS';
                        // }
                        // ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Users List</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table"
                                class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th style="width: 78px;">User Name</th>
                                        <th style="width: 78px;">Mobile</th>
                                        <th style="width: 78px;">Email</th>
                                        <th style="width: 78px;">Join Date</th>
                                        <th style="width: 78px;">Address</th>
                                        <th style="width: 78px;">Action</th>
                                        <th style="width: 78px;">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `user_details`";
                                    $res = mysqli_query($conn, $sql);
                                    // print_r($res);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $id = $row['user_id'];
                                        ?>

                                        <tr>
                                            <td>
                                                <?= $row['user_name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['mobile_number'] ?>
                                            </td>
                                            <td>
                                                <?= $row['email_address'] ?>
                                            </td>
                                            <td><?= $row['join_date'] ?></td>
                                            <td><?= $row['country']. "," .$row['state'] .",".$row['city'] ?></td>
                                              
                                            <!-- <td style="display:flex;justify-content:space-between;">
                                                <a href="edit_user.php?edit='<?= $id ?>'"><i
                                                        class="fa fa-edit btn btn-primary"></i></a>
                                                <a href="delete_user.php?deleteid='<?= $id ?>'"><i
                                                        class="fa fa-trash-o btn btn-danger"></i></a>
                                            </td> -->
                                            <td>
                                               
                                            <?php    if($row['status']==1){ ?>
                                            <button class='btn btn-success user_status' data-userId='<?php echo $id ?>' data-status='0'>Activate</button>

                                            <?php       }else if($row['status']==0) {?>
                                            <button class='btn btn-danger user_status' data-userId='<?php echo $id ?>'  data-status='1'>Deactivate</button><?php }?>
                                            </td>
                                            <td>
                                                <button name='user_view' data-toggle='modal'
                                                    data-target='#exampleModal1' class='btn btn-primary user_view_button'
                                                    style='background:#16a085;color:white' id="<?=$row['user_id']?>">View</button></td>;
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

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <label for="">User Name</label>
                            <input type="text" id="vendor_name" style="border:none;width:300px;color:blue;">
                        </div>
                        <div class="form-group">
                            <label for="">Phone No</label>
                            <input type="text" id="vendor_phone" style="border:none;width:300px;color:blue;">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" id="vendor_email" style="border:none;width:300px;color:blue;">
                        </div>
                      
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script>
//user view button click
$(document).on("click", ".user_view_button", function (e) {
  e.preventDefault();
  var vendor_id = $(this).attr("id");
  // alert(product_id);
  $.ajax({
    url: "../ajax/user_view_details.php",
    method: "GET",
    data: { vendor_id: vendor_id },
    dataType: "json",
    success: function (data) {
      console.log(data);
      //var data=JSON.parse(response);
    //   $("#vendor_image").html(
    //     '<img src="../upload/vendors/' +
    //       data.image +
    //       '" style="width:100px;height:auto;">'
    //   );
      $("#vendor_name").val(data.user_name);
      $("#vendor_phone").val(data.mobile_number);
      $("#vendor_email").val(data.email_address);
    //   $("#vendor_city").val(data.city);
    //   $("#vendor_state").val(data.state);
    //   $("#vendor_pincode").val(data.pincode);
    //   $("#vendor_address").val(data.address);
    //   $("#pan_no").val(data.pan_no);
    //   $("#pan_card_img").html(
    //     '<img src="../upload/vendors/' +
    //       data.pan_card_img +
    //       '"style="width:100px;height:auto;">'
    //   );
    //   $("#aadhar_no").val(data.aadhar_no);
    //   $("#aadhar_front_img").html(
    //     '<img src="../upload/vendors/' +
    //       data.aadhar_front_img +
    //       '"style="width:100px;height:auto;">'
    //   );
    //   $("#aadhar_back_img").html(
    //     '<img src="../upload/vendors/' +
    //       data.aadhar_back_img +
    //       '"style="width:100px;height:auto;">'
    //   );
    //   $("#gst_no").val(data.gst_no);
    //   $("#gst_certificate_img").html(
    //     '<img src="../upload/vendors/' +
    //       data.gst_certificate_img +
    //       '"style="width:100px;height:auto;">'
    //   );
    //   console.log(product_image1);
    },
  });
});
    </script>
    <?php include("include/footer.php"); ?>



    <script>

$(document).ready(function(){
    $(".user_status").click(function(){
        var userId=$(this).attr('data-userId');
        var status=$(this).attr('data-status');
        // alert(status);

        if(status==0){
            var alert=confirm("Do you want to Deactivate This User?");
        }
        else{
            var alert=confirm("Do you want to Activate This User?");
        }
       

        if(alert==true){

            $.ajax({
            //this 
            url: "user_activate.php",
            type: 'post',
            data:{user_id:userId,status:status},
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




