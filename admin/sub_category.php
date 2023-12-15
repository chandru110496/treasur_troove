<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Sub category</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Sub Category</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- begin MAIN PAGE ROW -->
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Sub Category List <a href="add_subcategory.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add subcategory</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="subcat_viewpage">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>s.no</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php
                                 $count =0;
                                 $sql = "SELECT * FROM `sub_category`
                                 JOIN `category` ON `category`.`category_id` = `sub_category`.`category_id`
                                 ";
                                 $result = mysqli_query($conn, $sql);
                                //   print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $subcategory_id=$row['sub_category_id'];
                                       $subcategory_name=$row['sub_category_name'];
                                       $category_name=$row['category_name'];
                                       $count++;
                                          ?>
                                        <tr>
                                        <td><?=$count?></td>
                                        <td><?=$category_name?></td>
                                        <td><?= $subcategory_name?></td>
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_sub_category.php?edit='<?= $subcategory_id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="delete_sub_category.php?deleteid='<?=$subcategory_id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
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
                    <!-- edit subcategory form -->
                    <div class="panel-body" id="add_subcats" style="display: none;" >`
                        <form id="add_subcategorys">
                            <div class="select-box">
                                <input type="hidden" id="sub_category_id" name="sub_category_id">
                                <label>category name</label>
                                <input type="text" id="category_name" class="form-control" required>
                                <!-- <select class="form-control" id="category_name" name="category_id" required></select> -->
                            </div>
                            <div class="form-group">
                                <label for="">sub category name</label>
                                <input type="text" id="sub_category_name" name="subcategory_name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">image</label>
                                <p id="subcategoty_image"></p>
                                <input type="text" name="old_image" id="subcategoty_img">
                                <input type="file" name="image" id="uploadfile" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" id="cat_btn" type="submit" name="submit" value="submit">Update</button>
                            </div>
                        </form>
                        <a href="sub_category.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                                <span>Go Back sub category page</span> </button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end MAIN PAGE ROW -->
    </div>
    <?php include("include/footer.php"); ?>