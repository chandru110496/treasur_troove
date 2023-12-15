<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">

        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Brand</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Brand</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->

        <!-- begin MAIN PAGE ROW -->
        <button class="btn btn-green btn-sm">total earning <span style="background-color: whitesmoke; color: black;">1234</span></button>

        <div class="row" id="service_list">

            <div class="col-lg-12">

                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Brand List <a href="add_brand.php" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add Brand</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="brand_view">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>Brand name</th>
                                        <th>Images</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="load-brand"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-body" id="edit_brand_form" style="display: none;">
                        <form id="edit_brands">
                            <input type="hidden" id="brand_id" name="brand_id">
                            <div class="form-group">
                                <label for="">Brand name</label>
                                <input type="text" id="brand_name" name="brand_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Brand Image</label>
                                <input type="hidden" id="brand_img" name="old_image">
                                <p id="brand_image"></p>
                                <input type="file" name="image" id="brand_img" class="form-control" >
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary center-block" id="cat_btn" type="submit" name="submit" value="submit">Update</button>
                            </div>
                        </form>
                        <a href="brand.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                                <span>Go Back brand page</span> </button></a>
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