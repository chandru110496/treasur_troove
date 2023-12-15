<?php include("include/header.php");
        include('include/conn.php');
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Cards banner</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Service</li>
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
                            <h4>Service List <a href="add_largecards.php" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New Cards</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th>product Name</th>
                                        <th>About Price</th>
                                        <th>primary Text</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

$upc=$_GET['type'];
$sql = "SELECT * FROM `largecards` WHERE `type`='$upc'";
                                   
                                    $res=mysqli_query($conn,$sql);
                                // print_r($res);
                                        while($row=mysqli_fetch_assoc($res)){
                                            $id=$row['catalog_id'];
                                            $image=$row['image'];
                                            $product=$row['product_name'];
                                            $about_price=$row['about_price'];
                                            $primary=$row['primary_text'];
                                            $type=$row['type'];
                                            ?>
                                            <tr>
                                                <td><img src="../upload/largecards/<?=$image?>" alt="" style="width:150px;height:150px"></td>
                                                <td><?=$product?></td>
                                                <td><?=$about_price?></td>
                                                <td><?=$primary?></td>
                                                <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_catalog.php?edit='<?= $id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="delete_catalog.php?delete='<?= $id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
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
                   
              
          
                   </div>
                <!-- /.portlet -->
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>