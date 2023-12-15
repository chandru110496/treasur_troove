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
                            <table id="example-table"
                                class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th style="width: 78px;">User Name</th>
                                        <th style="width: 78px;">Mobile</th>
                                        <th style="width: 78px;">Email</th>
                                        <th style="width: 78px;">Job Name</th>
                                        <th style="width: 78px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `job_reports`
                                    JOIN `user_details` ON `job_reports`.`user_id`=`user_details`.`user_id` JOIN `jobs` ON `jobs`.`job_id` = `job_reports`.`job_id` ORDER BY `job_reports`.`job_id`";
                                    $res = mysqli_query($conn, $sql);
                                    // print_r($res);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $id = $row['id'];
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
                                            <td><?= $row['job_title'] ?></td>
                                            <td>   
                                            <a href="del_jobuser_form.php?delid='<?=$row['id']?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
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
     
      $("#vendor_name").val(data.user_name);
      $("#vendor_phone").val(data.mobile_number);
      $("#vendor_email").val(data.email_address);
  
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




