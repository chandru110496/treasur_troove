<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>deal Products</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Deal</li>
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
                            <h4>Service List <a href="add_deal.php" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New deal Products</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="card_show">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                    <th>Product image</th>
                                        <th>Product name</th>
                                        <!-- <th>Category</th> -->                                       
                                        <th> Deal price</th>
                                        <th>description</th>
                                        <th>specification</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  $admin_id=$_SESSION['id']?>
                                <?php


                                  if($_SESSION['type']=='admin'){ 
                                    $hot=$_GET['type'];
                                 $sql = "SELECT * FROM `deal_product_details` WHERE `type`='$hot'";
                                  }
                                  if($_SESSION['type']=='vendor'){ 
                                    $hot=$_GET['type'];
                                 $sql = "SELECT * FROM `deal_product_details` WHERE `type`='$hot' AND `vendor_id`='$admin_id'";
                                  }

                              
                                 $result = mysqli_query($conn, $sql);
                                //   print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $id=$row['deal_id'];
                                       $product_img=$row['product_image1'];
                                       $product_name=$row['product_name'];
                                    //    $category=$row['category_name'];
                                       $product_new_price=$row['product_new_price'];
                                       $product_old_price=$row['product_old_price'];
                                    //    $product_img2=$row['product_image2'];
                                    //    $product_oimage3=$row['product_image3'];
                                    //    $product_image4=$row['product_image4'];
                                    //    $product_image5=$row['product_image5'];
                                          $description=$row['product_description'];
                                          $specification=$row['specification'];
                                          ?>
                                        <tr>
                                            <td><img src="../upload/deal/<?= $product_img ?>" alt="" style="width:150px;height:150px;object-fit:cover;"></td>
                                            <td><?= $product_name?></td>
                                            <!-- <td><?= $category?></td> -->
                                            <td><?= $product_new_price?></td>
                                            <td><?=$description?></td>
                                            <td><?= $specification?></td>
                                            <td></td>
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_deal.php?edit='<?= $id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="delete_deal.php?deleteid='<?=$id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
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