<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Advertisement</h1>
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
                            <h4>Service List <a href="add_ads.php" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add Ads</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="card_show">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>s.no</th>
                                        <th>Ad name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 
                                 $sql = "SELECT * FROM `advertise`";
                              
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);
                             $count=1;
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $id=$row['ads_id'];
                                        $ads_name=$row['ads_name'];
                                      
                                          ?>
                                        <tr>
                                        <td><?= $count?></td>
                                              <td><?= $ads_name?></td>
                                            <td>active</td>
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_ads.php?edit='<?=$id?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a href="delete_ads.php?deleteid='<?=$id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
                                             </td>
                                        </tr>
                                  <?php
                                  $count++;
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

Fatal error: Uncaught TypeError: mysqli_fetch_assoc(): Argument #1 ($result) must be of type mysqli_result, bool given in C:\xampp\htdocs\BidTreasureTrove\admin\edit_ads.php:9 Stack trace: #0 C:\xampp\htdocs\BidTreasureTrove\admin\edit_ads.php(9): mysqli_fetch_assoc(false) #1 {main} thrown in C:\xampp\htdocs\BidTreasureTrove\admin\edit_ads.php on line 9