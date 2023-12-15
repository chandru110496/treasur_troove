<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Save a life</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">Save a life</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Slider image <a href="add_save_slider.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New Background Image</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="slide_page_show">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>s.no</th>
                                        <th>background_image</th>
                                        <th>Text</th>                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $sql = "SELECT * FROM `save_slider`";
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $id=$row['id'];                                       
                                        $img=$row['background_image'];
                                        $title=$row['title'];
                                          ?>
                                        <tr>
                                              <td><?= $id?></td>
                                            <td><img src="../upload/save_life/<?= $img ?>" alt="" style="width:150px;height:150px"></td>
                                            <td><?= $title?></td>
                                           
                                           
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_save_slider.php?edit='<?= $id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a  onclick="confirm('Are you sure want to delete?')"href="delete_save_slider.php?deleteid='<?=$id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
                                             </td>
                                        </tr>




                                  <?php
                                     }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <div class="row" id="slide_page_hide" style="display: none;">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">Panel Heading</div> -->
                                <div class="panel-body" id="upt_slider_banner">
                                    <form id="upt_slider">
                                        <input type="hidden" name="id" id="slider_id" value=1>
                                        <div class="form-img" style="display:flex;justify-content:space-between;">
                                            <div class="form-group">
                                                <label for="">background_image</label>
                                                <input type="hidden" name="image_name1" id="slider_bgimage">
                                                <p id="slider_background_image"></p>
                                                <p>if change the picture</p>
                                                <input type="file" name="image" id="" value="p_image1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">image</label>
                                                <input type="hidden" name="image_name2" id="slider_img">
                                                <p style="width:20px;height:auto;" id="slider_image"></p>
                                                <p>if change the picture</p>
                                                <input type="file" name="image2" id="" value="p_image2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Heading</label>
                                            <input type="text" id="slider_title" name="slider_title" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Content</label>
                                            <input type="text" id="slider_cont" name="slider_cont" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="cat_btn" type="submit" name="submit" value="submit">Update</button>
                                        </div>
                                    </form>
                                    <a href="slider.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                                            <span>Go Back Vendor page</span> </button></a>
                                </div>
                                <!-- <div class="panel-footer">Panel Footer</div> -->
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end MAIN PAGE ROW -->
    </div>
    <!-- /.page-content -->
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
    <?php include("include/footer.php"); ?>
    <script>
        CKEDITOR.replace('detail');
        CKEDITOR.replace('detail1');
    </script>