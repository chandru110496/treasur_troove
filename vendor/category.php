<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>category</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <div class="row" id="category_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Category List <a href="add_category.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add category</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>s.no</th>
                                        <th>Category Name</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="">
                                <tbody>
                                
                                <?php
                                 $count =0;
                                 $sql = "SELECT * FROM `category`";
                                 $result = mysqli_query($conn, $sql);
                                //   print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $category_id=$row['category_id'];
                                       $category_name=$row['category_name'];
                                       $count++;
                                          ?>
                                        <tr>
                                        <td><?=$count?></td>
                                        <td><?= $category_name?></td>
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_category.php?edit='<?= $category_id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="delete_category.php?deleteid='<?=$category_id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
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
        <!-- end MAIN PAGE ROW -->
     
    </div>

    <?php include("include/footer.php"); ?>