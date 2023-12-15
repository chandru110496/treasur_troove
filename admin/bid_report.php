

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
                            <h4>Bid Report List</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table"
                                class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th style="width: 78px;"> Post Product Vendor Name</th>
                                        <th style="width: 78px;"> Bid winner Name</th>
                                        <th style="width: 78px;">product name</th>
                                        <th style="width: 78px;">product image</th>
                                        <th style="width: 78px;">price</th>
                                        <!-- <th style="width: 78px;">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `bid_product_details`
                                    JOIN `vendor_details` ON `bid_product_details`.`vendor_id`=`vendor_details`.`vendor_id`JOIN `user_details` ON `bid_product_details`.`user_id`=`user_details`.`user_id` ORDER BY `bid_product_details`.`user_id`";
                                    
                                     $res = mysqli_query($conn, $sql);
                                    // $res = $conn->query($sql);
                                    // print_r($_SESSION['id']);  
                                                                    
                                    while ( $row=mysqli_fetch_assoc($res)) { 
                                                                           
                                        ?>
                                        <tr>                                            
                                            <td>
                                            <?= $row['name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['user_name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['product_name'] ?>
                                            </td>
                                            <td><img src="../upload/cards/<?= $row['product_image1'] ?>" alt="" style="width:110px;height:77px"></td>
                                            <td>
                                               <?=$row['product_new_price']?>
                                            </td>                                                                               
                                            <!-- <td>                                              
                                            <?php    if($row['status']==1){ ?>
                                            <button class='btn btn-success user_status' data-userId='<?php echo $row['deal_id'] ?>' data-status='0'>Accept Deal</button>

                                            <?php }else if($row['status']==0) {?>
                                            <button class='btn btn-danger user_status' data-userId='<?php echo $row['deal_id']?>'  data-status='1'>Cancel Deal</button><?php }?>
                                            </td> -->
                                          
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
        //  alert(status);

        if(status==0){
            var alert=confirm("Do you like cancel the bid?");
        }
        else{
            var alert=confirm("Do you  like accept the bid?");
        }
       

        if(alert==true){

            $.ajax({
            //this 
            url: "deal_accept.php",
            type: 'post',
            data:{user_id:userId,status:status},
            success: function(data) {
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




