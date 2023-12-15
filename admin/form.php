<?php include("include/header.php");?>
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Basic Form Elements
                                <small>Form Features</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index-2.html">Dashboard</a>
                                </li>
                                <li class="active">Basic Form Elements</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row">

                    <!-- begin RIGHT COLUMN -->
                    <div class="col-lg-12">

                        <div class="row">

                           
                            <div class="col-lg-12">
                                <div class="portlet portlet-default">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Input Sizing</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="inputSizing" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                           
                                            <h4>Custom Input Widths</h4>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" placeholder=".col-lg-12">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder=".col-sm-6">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder=".col-sm-6">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" placeholder=".col-sm-2">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder=".col-sm-3">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder=".col-sm-3">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea style="height:200px;" class="textarea form-control input-mask" id="detail" name="detail" placeholder="Enter text ..." rows="15" data-height="100" ></textarea>
                                           
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.col-lg-6 -->
                    <!-- end RIGHT COLUMN -->

                </div>
                <!-- /.row -->
                <!-- end MAIN PAGE ROW -->

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->
<?php include("include/footer.php");?>
<script>
    CKEDITOR.replace( 'detail' );
//    CKEDITOR.replace( 'detail1' );
</script>