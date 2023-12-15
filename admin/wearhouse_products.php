<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Wearhouse Products</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">deal </li>
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
                            <h4>Service List <a href="wearhouse_products_add.php" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New wearhouse Products</a></h4>
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
                                        <th>price</th>
                                        <th>description</th>
                                        <th>specification</th>
                                        <th>Status</th>
                                        <th>Action</th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                //  $hot=$_GET['type'];
                                //  $sql = "SELECT * FROM `wearhouse_products` WHERE `type`='$hot'";
                          
                                 $sql = "SELECT * FROM `wearhouse_products`";
                              
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $id=$row['product_id'];
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
                                          $specification=$row['specification']; ?>
                                        <tr>
                                            <td><img src="../upload/wearhouse/<?= $product_img ?>" alt="" style="width:150px;height:150px"></td>
                                            <td><?= $product_name?></td>
                                            <!-- <td><?= $category?></td> -->
                                            <td><?= $product_new_price?></td>
                                            <td><?=$description?></td>
                                            <td><?= $specification?></td>
                                            <td></td>
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="wearhouse_products_edit.php?edit='<?= $id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="wearhouse_products_delete.php?deleteid='<?=$id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
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
                    <div class="portlet-body" id="card_hide" style="display: none;">
                        <div class="table-responsive">
                            <div class="panel-body" id="">
                                <form id="upt_cards">
                                <input type="hidden" id="card_id" name="card_id" class="form-control" >
                                <input type="hidden" name="product_id" class="form-control" id="p_id" required>
                            <input type="hidden" name="category_id" class="form-control" id="cat_id" required>
                            <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control" id="p_name" required>
                            </div>
                            <div class="form-img" style="display:flex;justify-content:space-between;">
                                <div class="form-group">
                                    <label for="">image</label>
                                    <input type="hidden" name="image_name1" id="p_img1">
                                    <p id="p_image1"></p>
                                    <p>if change the picture</p>
                                    <input type="file" name="image" id="" value="p_image1" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">image2</label>
                                    <input type="hidden" name="image_name2" id="p_img2">
                                    <p style="width:20px;height:auto;" id="p_image2"></p>
                                    <p>if change the picture</p>
                                    <input type="file" name="image2" id="" value="p_image2" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">image3</label>
                                    <input style="width:20px;height:auto;" type="hidden" name="image_name3" id="p_img3">
                                    <p id="p_image3"></p>
                                    <p>if change the picture</p>
                                    <input type="file" name="image3" id="" value="p_image3" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">image4</label>
                                    <input type="hidden" name="image_name4" id="p_img4">
                                    <p id="p_image4"></p>
                                    <p>if change the picture</p>
                                    <input type="file" name="image4" id="" value="p_image4" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">image5</label>
                                    <input type="hidden" name="image_name5" id="p_img5">
                                    <p id="p_image5"></p>
                                    <p>if change the picture</p>
                                    <input type="file" name="image5" id="" value="p_image5" class="form-control" >
                                </div>
                            </div>
                            <div class="select-box">
                                <label>category name</label>
                                <select class="form-control" id="getcategory" name="category_name" value="hi" ></select>
                            </div>
                            <div class="select-box">
                                <label>sub_category name</label>
                                <select class="form-control" id="getsubcategory" name="subcategory_name" >
                                    <option style="color:black;" value="">Select SubCategory</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">sku no</label>
                                <input type="text" id="s_no" name="sku_no" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">New price</label>
                                <input type="text" id="p_new_price" name="price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">old price</label>
                                <input type="text" id="p_old_price" name="old_price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" id="b_name" name="brand_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <input type="text" id="p_description" name="description" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">specification</label>
                                <input type="text" id="spec" name="specification" class="form-control" required>
                            </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" id="btn_cards" type="submit" name="submit" value="submit">Update</button>
                                    </div>
                                </form>
                                <a href="cards.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                                        <span>Go Back Top Banner page</span> </button></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>