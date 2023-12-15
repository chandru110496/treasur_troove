<?php include("include/header.php");?>

 <div id="page-wrapper">

            <div class="page-content">

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                                </li>
                                <li class="active">Today's User</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">

                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Today's User</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                        <thead>
                                            <tr>
                                                <!-- <th>Cus Id</th> -->
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                                <!-- <th>Address</th> -->
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="load-today-user"></tbody>
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

            </div>
            <!-- /.page-content -->

        </div>
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
 -->    <!-- Sparkline Charts -->
    <!-- <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script> -->
    <!-- Moment.js -->
    <!-- <script src="js/plugins/moment/moment.min.js"></script> -->
    <!-- jQuery Vector Map -->
<!--     <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/demo/map-demo-data.js"></script>
 -->    <!-- Easy Pie Chart -->
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
<?php include("include/footer.php");?>
