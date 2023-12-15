<?php include("include/header.php");?>

        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Workshop</h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i> <a href="index">Dashboard</a>
                                </li>
                                <li class="active">Workshop</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row" id="add_workshop" style="display: none;">

                    <div class="col-lg-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Add New Workshop</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="inputSizing" class="panel-collapse collapse in">
                                <div class="portlet-body">


                                    <div class="row" id="addnewworkshop">
                                        <form id="workshopform">
                                            <div style="padding-left:20px; padding-right: 20px;" class="row form-group">
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Workshop Name" name="workshop_name" required>
                                                </div>
                                                <div class="col-sm-3">

                                                    <input type="text" class="form-control" placeholder="First Name" name="f_name" required>
                                                </div>
                                                <div class="col-sm-3">

                                                    <input type="text" class="form-control" placeholder="Last Name" name="l_name">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Email Id" name="email" required>
                                                </div>

                                            </div>
                                            <div style="padding-left:20px; padding-right: 20px;" class="row form-group">
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Password" name="password" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="City" name="city" required>
                                                </div>
                                                <div class="col-sm-2">

                                                    <input type="text" class="form-control" placeholder="State" name="state" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Pincode" name="pincode" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Landmark" name="landmark" required>
                                                </div>
                                            </div>
                                            <div style="padding-left:20px; padding-right: 20px;" class="row form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="Complete Address" name="address" required>
                                                </div>

                                            </div>


                                            <div class="col-sm-6">
                                                <input type="submit" name="submit" id="workbtn" class="btn btn-success" value="Add Workshop">
                                            </div>
                                            <div class="col-sm-6">
                                                <a id="cancel_add_workshop" style="float:right;" type="button" class="btn btn-danger" value="Cancel"><i class="fa fa-times"></i>Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.portlet -->
                    </div>

                </div>

                <div class="row" id="edit_workshop" style="display: none;">

                    <div class="col-lg-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Edit Workshop</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="inputSizing" class="panel-collapse collapse in">
                                <div class="portlet-body">


                                    <div class="row" id="editaddnewworkshop">
                                        <form id="editworkshopform">
                                            <div style="padding-left:20px; padding-right: 20px;" class="row form-group">
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Workshop Name" name="workshop_name" id="workshop_name" required>
                                                    <input type="hidden" name="workid" id="workshopid">
                                                </div>
                                                <div class="col-sm-3">

                                                    <input type="text" class="form-control" placeholder="First Name" name="f_name" id="firstname" required>
                                                </div>
                                                <div class="col-sm-3">

                                                    <input type="text" class="form-control" placeholder="Last Name" name="l_name" id="lastname">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Email Id" name="email" id="email" required>
                                                </div>

                                            </div>
                                            <div style="padding-left:20px; padding-right: 20px;" class="row form-group">
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Password" name="password" id="password" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="City" name="city" id="city" required>
                                                </div>
                                                <div class="col-sm-2">

                                                    <input type="text" class="form-control" placeholder="State" name="state" id="state" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="zip" required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder="Landmark" name="landmark" id="landmark" required>
                                                </div>
                                            </div>
                                            <div style="padding-left:20px; padding-right: 20px;" class="row form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="Complete Address" name="address" id="address" required>
                                                </div>

                                            </div>


                                            <div class="col-sm-6">
                                                <input type="submit" name="submit" id="workbtn" class="btn btn-success" value="Edit Workshop">
                                            </div>
                                            <div class="col-sm-6">
                                                <a id="cancel_add_workshop" style="float:right;" type="button" class="btn btn-danger" value="Cancel"><i class="fa fa-times"></i>Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.portlet -->
                    </div>

                </div>

                <div class="row" id="workshop_list">

                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title" style="width: 100%; height: 40px;">
                                    <h4>Workshop List <a id="add_new_workshop" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New Workshop</a></h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                        <thead>
                                            <tr>
                                                <th>Workshop</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip</th>
                                                <th>Reg Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="load-workshop"></tbody>
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
<?php include("include/footer.php");?>

</html>