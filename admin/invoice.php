<?php include("include/header.php");?>
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>
                                Invoice
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index-2.html">Dashboard</a>
                                </li>
                                <li class="active">Invoice</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-12">
                        <div class="portlet portlet-default">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1><i class="fa fa-gears"></i> Flex Admin</h1>
                                        <br>
                                        <address>
                                            <strong>FlexCo Inc.</strong>
                                            <br>795 Folsom Ave, Suite 600
                                            <br>San Francisco, CA 94107
                                            <br>
                                            <abbr title="Phone">P:</abbr>(123) 456-7890
                                        </address>
                                    </div>
                                    <div class="col-md-6 invoice-terms">
                                        <h3>Invoice #3024</h3>
                                        <p>
                                            Invoice Date: 1/3/14
                                            <br>
                                            <strong><span class="text-red">Payment Due: 2/3/14</span></strong>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Client</h3>
                                        <address>
                                            <strong>John Doe</strong>
                                            <br>2342 River Ave.
                                            <br>San Francisco, CA 94107
                                            <br>
                                            <abbr title="Phone">P:</abbr>(555) 535-5555
                                        </address>
                                    </div>
                                    <div class="col-md-6 invoice-terms">
                                        <h3>Payment Instructions</h3>
                                        <p>
                                            Please send a check or money order made out to <strong>FlexCo Inc.</strong> to the P.O. Box listed above or pay online.
                                        </p>
                                        <a class="btn btn-green" href="#">Pay Online Now</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>Items</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Quantity</th>
                                                        <th>Item Price</th>
                                                        <th>Description</th> 
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Setup Fee</td>
                                                        <td>Setup fee for the hosting package purchased on 12/19/13.</td>
                                                        <td>₹25.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Basic Hosting Package</td>
                                                        <td>Basic hosting package. Includes 5GB storage space, 400GB monthly bandwidth, and forum support.</td>
                                                        <td>₹29.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Billed Support Hours</td>
                                                        <td>Additional tech support purchased outside of the basic hosting package.</td>
                                                        <td>₹15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-right"><strong>Subtotal:</strong>
                                                        </td>
                                                        <td><strong>₹264.00</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-right"><strong>Tax (7%):</strong>
                                                        </td>
                                                        <td><strong>₹18.48</strong>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-red">
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-right"><strong>Total Amount Due by 2/3/14:</strong>
                                                        </td>
                                                        <td><strong>₹282.48</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                        <a class="btn btn-green"><i class="fa fa-download"></i> Download Invoice as PDF</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->
<?php include("include/footer.php");?>