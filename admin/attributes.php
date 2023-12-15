<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Attributes</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">attributes</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <div class="row" id="">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>attributes List <a href="add_attributes.php" id="add-attributes" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add Attributes</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="view_attr_page">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>attributes</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="load-attributes"></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- edit attribute -->
                    <div class="panel-body" id="edit_attr_page" style="display: none;">
            <form id="add_attributess">
                <div class="select-box">
                    <label for="">attributes name</label>
                    <input type="text" id="attributes_name" name="attributes_name" class="form-control" required>
                    <input type="hidden" id="attributes_id" name="attributes_id" class="form-control" required>
                </div>
                <div class="form-group ">
                    <button class="btn btn-primary center-block " id="attr_btn" type="submit" name="submit" value="submit">Update</button>
                </div>
            </form>
            <a href="attributes.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                    <span>Go Back attributes page</span> </button></a>
        </div>

                </div>
            </div>
        </div>
        <!-- end MAIN PAGE ROW -->
        
    </div>
    <!-- /.page-content -->
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
    <!-- -------------------------bootstrap3 model popup------------------ -->
    <?php include("include/footer.php"); ?>