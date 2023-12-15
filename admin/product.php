<?php include("include/header.php"); ?>
<?php include './dash_apis/config/database.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Product List</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">product</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="product_listsss">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>product List <a href="add_product.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add product</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>Product image</th>
                                        <th>Product name</th>
                                        <th>Category</th>
                                        <th>sku no</th>
                                        <th>price</th>
                                        <th>description</th>
                                        <th>specification</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody id="load-product"></tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row" id="edit_product_page" style="display: none;">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" name="product_id" id="add_prdts">
                        <form id="add_products">
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
                                <button class="btn btn-primary" id="" type="submit" name="submit" value="submit">Update</button>
                            </div>
                        </form>
                        <a href="product.php" id="edit_product_page"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                                <span>Go Back product page</span> </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="">product name :</label>
                            <input type="text" style="border:none;width:300px;color:blue;" value="" id="product_name">
                        </div>
                        <div class="form-img" style="display:flex;justify-content:space-between;">
                            <div class="form-group">
                                <label for="">image</label>
                                <p id="product_image1" alt="img">
                            </div>
                            <div class="form-group">
                                <label for="">image2</label>
                                <p id="product_image2" alt="img">
                            </div>
                            <div class="form-group">
                                <label for="">image3</label>
                                <p id="product_image3" alt="img">
                            </div>
                            <div class="form-group">
                                <label for="">image4</label>
                                <p id="product_image4" alt="img">
                            </div>
                            <div class="form-group">
                                <label for="">image5</label>
                                <p id="product_image5" alt="img">
                            </div>
                        </div>
                        <div class="select-box">
                            <label>category name :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="category_name">
                            <!-- <p id="category_name"></p> -->
                            <!-- <textarea name="comment" style="border:none" form="usrform" id="category_name"></textarea> -->
                            <!-- <p id="category_name"></p> -->
                        </div>
                        <div class="select-box">
                            <label>sub_category name :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="sub_category_name">
                        </div>
                        <div class="form-group">
                            <label for="">sku no :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="sku_no">
                        </div>
                        <div class="form-group">
                            <label for="">New price :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="product_new_price">
                        </div>
                        <div class="form-group">
                            <label for="">old price :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="product_old_price">
                        </div>
                        <div class="form-group">
                            <label for="">Brand Name :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="brand_name">
                        </div>
                        <div class="form-group">
                            <label for="">description :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="product_description">
                        </div>
                        <div class="form-group">
                            <label for="">specification :</label>
                            <input type="text" style="border:none;width:300px;color:blue" value="" id="specification">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include("include/footer.php"); ?>
    