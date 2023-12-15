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

        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Modal</h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i> <a href="index">Dashboard</a>
                                </li>
                                <li class="active">Modal</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row">

                    <div class="col-lg-6" id="add_modal">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Add New Modal</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="inputSizing" class="panel-collapse collapse in">
                                <div class="portlet-body">


                                    <div class="row" id="modal">
                                        <form id="add_modal">
                                            <div class="col-sm-6">
                                                <input required type="text" name="modal" class="form-control" placeholder="Modal Name">
                                            </div>
                                            <div class="col-sm-6">

                                                <select required class="form-control" name="brand" id="getbrand"></select>
                                            </div><br><br>
                                            <div class="col-sm-12">
                                                <input required type="file" name="image" class="form-control" placeholder=".col-sm-3">
                                            </div>

                                            <br><br>
                                            <div class="col-sm-6">
                                                <input type="submit" id="addmodal" class="btn btn-success" value="Add Modal">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.portlet -->
                    </div>

                    <div class="col-lg-6" id="edit_modal" style="display:none;">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Edit Modal</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="inputSizing" class="panel-collapse collapse in">
                                <div class="portlet-body">


                                    <div class="row" id="editmodal">
                                        <form id="edit_modals">
                                            <div class="col-sm-6">
                                                <input required type="text" name="modal" id="commodal" class="form-control" placeholder="Modal Name">
                                                <input type="hidden" name="modal_id" id="modalid">
                                                <input type="hidden" name="old_image" id="image">
                                            </div>
                                            <div class="col-sm-6">

                                                <select required class="form-control" name="brand" id="getbrands"></select>
                                            </div><br><br>
                                            <div class="col-sm-12">
                                                <input type="file" name="image" class="form-control" placeholder=".col-sm-3">
                                            </div>

                                            <br><br>
                                            <div class="col-sm-12">
                                                <input type="submit" id="addmodal" class="btn btn-success" value="Edit Modal">
                                                <a style="float: right;" id="cancel_modal_update" class="btn btn-danger">Cancel</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.portlet -->
                    </div>


                    <div class="col-lg-6" id="activate_modal_list">

                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title" style="width: 100%; height: 40px;">
                                    <h4>Modal List</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                        <thead>
                                            <tr>
                                                <th>Modal</th>
                                                <th>Brand</th>
                                                <th>Modal Image</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="load-modal"></tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.portlet-body -->
                        </div>
                        <!-- /.portlet -->
                    </div>


                </div>
                <!-- /.row -->
                <!-- end MAIN PAGE ROW -->

            </div>
            <!-- /.page-content -->

        </div>
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


</html>
<?php include("include/footer.php"); ?>