<?php include("include/header.php");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <!-- <link href="css/plugins/pace/pace.css" rel="stylesheet"> -->
    <!-- <script src="js/plugins/pace/pace.js"></script> -->

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <!-- <link href="css/plugins/messenger/messenger.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/morris/morris.css" rel="stylesheet"> -->
    <!-- <link href="css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"> -->
    <link href="css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="css/flex-admin.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="css/demo.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

    <style>
        .daterangepicker td.active,
        .daterangepicker td.active:hover {
            background-color: #16a085;
            border-color: #16a085;
            color: #fff;
        }

        .daterangepicker .ranges li.active,
        .daterangepicker .ranges li:hover {
            background: #16a085;
            border: 1px solid #16a085;
            color: #fff;
        }

        .daterangepicker .ranges li {
            color: #16a085;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
         <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Service</h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i> <a href="index">Dashboard</a>
                                </li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row" id="add_service_form" style="display: none;">

                    <div class="col-lg-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Add New Service</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="inputSizing" class="panel-collapse collapse in">
                                <div class="portlet-body">


                                    <div class="row" id="add_service" style="padding-left: 10px; padding-right: 10px;">
                                        <form id="service">
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <input type="text" name="service_name" class="form-control" placeholder="Service Name">
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="service_type" id="getservice">
                                                        <option>Select Service Type</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="brand" id="getbrand"></select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="modal" id="get_related_modal">
                                                        <option>Select Brand First</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="category" id="getcategory"></select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="sub_category" id="get_related_sub_cat">
                                                        <option>Select Category First</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" name="price" class="form-control" placeholder="Price">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" name="offer" class="form-control" placeholder="Offer in %">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <input type="number" name="time_taking" class="form-control" placeholder="Time For Service">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="warranty" class="form-control" placeholder="Warranty of Service">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="recommended" class="form-control" placeholder="Recommended">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="suggestion" class="form-control" placeholder="Suggestion for future">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <input type="file" name="image1" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="file" name="image2" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="file" name="image3" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="file" name="image4" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">

                                                <div class="col-sm-12">
                                                    <textarea style="height:200px;" class="textarea form-control input-mask" id="detail1" name="detail" placeholder="Enter text ..." rows="15" data-height="100"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <button type="submit" name="submit" id="addservice" class="btn btn-success"><i class="fa fa-plus"></i> Add New Service</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <a id="cancel_add_service" style="float:right;" type="button" class="btn btn-danger" value="Cancel"><i class="fa fa-times"></i>Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.portlet -->
                    </div>

                </div>

                <div class="row" id="edit_service_form" style="display: none;">

                    <div class="col-lg-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Edit Service</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="inputSizing" class="panel-collapse collapse in">
                                <div class="portlet-body">


                                    <div class="row" id="edit_my_service" style="padding-left: 10px; padding-right: 10px;">
                                        <form id="eservice">
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label>Service Name</label>
                                                    <input type="text" name="service_name" id="service_name" class="form-control" placeholder="Service Name">
                                                    <input type="hidden" name="service_id" id="serviceid">
                                                    <input type="hidden" name="img_1" id="image_1">
                                                    <input type="hidden" name="img_2" id="image_2">
                                                    <input type="hidden" name="img_3" id="image_3">
                                                    <input type="hidden" name="img_4" id="image_4">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Service Type</label>
                                                    <select class="form-control" name="service_type" id="get_service_s_tss"></select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Brand</label>
                                                    <select class="form-control" name="brand" id="get_ser_brand"></select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Modal</label>
                                                    <select class="form-control" name="modal" id="get_related_s_modal">
                                                        <option>Select Brand First</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label>Category</label>
                                                    <select class="form-control" name="category" id="get_service_cat"></select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Sub Category</label>
                                                    <select class="form-control" name="sub_category" id="get_related_s_sub_cat">

                                                        <option>Select Category First</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Price</label>
                                                    <input type="number" name="price" id="price" class="form-control" placeholder="Price">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Offer</label>
                                                    <input type="number" name="offer" id="offer" class="form-control" placeholder="Offer in %">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label>Time For Service</label>
                                                    <input type="number" name="time_taking" id="time_taking" class="form-control" placeholder="Time For Service">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Warranty of Service</label>
                                                    <input type="text" name="warranty" class="form-control" id="warranty" placeholder="Warranty of Service">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Recommended</label>
                                                    <input type="text" name="recommended" id="recommended" class="form-control" placeholder="Recommended">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Suggetion For Customer</label>
                                                    <input type="text" name="suggestion" id="suggestion" class="form-control" placeholder="Suggestion for future">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label>Service Image 1</label>
                                                    <input type="file" name="image1" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Service Image 2</label>
                                                    <input type="file" name="image2" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Sub Category</label>
                                                    <input type="file" name="image3" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Sub Category</label>
                                                    <input type="file" name="image4" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">

                                                <div class="col-sm-12">
                                                    <label>Sub Category</label>
                                                    <textarea style="height:200px;" class="textarea form-control input-mask" id="detail" name="detail" placeholder="Enter text ..." rows="15" data-height="100"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <button type="submit" name="submit" id="addservice" class="btn btn-success"><i class="fa fa-plus"></i> Update Service</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <a id="cancel_edit_service" style="float:right;" type="button" class="btn btn-danger" value="Cancel"><i class="fa fa-times"></i>Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.portlet -->
                    </div>

                </div>


                <div class="row" id="service_list">

                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title" style="width: 100%; height: 40px;">
                                    <h4>Service List <a id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New Service</a></h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Type</th>
                                                <th>Brand</th>
                                                <th>Modal</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Price</th>
                                                <th>Time Taking</th>
                                                <th>Warranty</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="load-service"></tbody>
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
                <!-- /.row -->
                <!-- end MAIN PAGE ROW -->

            </div>
            <!-- /.page-content -->


            <!-- /#page-wrapper -->
            <!-- end MAIN PAGE CONTENT -->

            <!-- /#page-wrapper -->
            <!-- end MAIN PAGE CONTENT -->
            <script>
                const service_request_id = '';
                const cus_id = '';
                const service_id = '';
                const car_id = '';
                const workshop_id = '';
            </script>
        </div>
        <!-- /#wrapper -->

        <!-- GLOBAL SCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
        <!-- <script src="js/plugins/popupoverlay/defaults.js"></script> -->
        <!-- Logout Notification Box -->
        <div id="logout">
            <div class="logout-message">
                <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
                <h3>
                    <i class="fa fa-sign-out text-green"></i> Ready to go?
                </h3>
                <p>Select "Logout" below if you are ready<br>to end your current session.</p>
                <ul class="list-inline">
                    <li>
                        <a href="logout" class="btn btn-green">
                            <strong>Logout</strong>
                        </a>
                    </li>
                    <li>
                        <button class="logout_close btn btn-green">Cancel</button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /#logout -->
        <!-- Logout Notification jQuery -->
        <script src="js/plugins/popupoverlay/logout.js"></script>
        <!-- HISRC Retina Images -->
        <script src="js/plugins/hisrc/hisrc.js"></script>

        <!-- PAGE LEVEL PLUGIN SCRIPTS -->
        <!-- HubSpot Messenger -->
        <!-- <script src="js/plugins/messenger/messenger.min.js"></script> -->
        <script src="js/plugins/messenger/messenger-theme-flat.js"></script>
        <!-- Date Range Picker -->
        <script src="js/plugins/daterangepicker/moment.js"></script>
        <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Morris Charts -->
        <!-- <script src="js/plugins/morris/raphael-2.1.0.min.js"></script> -->
        <!-- <script src="js/plugins/morris/morris.js"></script> -->
        <!-- Flot Charts -->
        <!--     <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
 --> <!-- Sparkline Charts -->
        <!-- <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script> -->
        <!-- Moment.js -->
        <!-- <script src="js/plugins/moment/moment.min.js"></script> -->
        <!-- jQuery Vector Map -->
        <!--     <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/demo/map-demo-data.js"></script>
 --> <!-- Easy Pie Chart -->
        <!-- <script src="js/plugins/easypiechart/jquery.easypiechart.min.js"></script> -->
        <!-- DataTables -->
        <script src="js/plugins/datatables/jquery.dataTables.js"></script>
        <script src="js/plugins/datatables/datatables-bs3.js"></script>

        <!-- THEME SCRIPTS -->
        <script src="js/flex.js"></script>
        <!-- <script src="js/demo/dashboard-demo.js"></script> -->
        <script src="js/demo/advanced-tables-demo.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript" src="js/dash_board.js"></script>

</body>
<?php include("include/footer.php"); ?>

</html>

<script>
    CKEDITOR.replace('detail');
    CKEDITOR.replace('detail1');
</script>