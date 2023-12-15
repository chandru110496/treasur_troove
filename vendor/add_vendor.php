<?php include("include/header.php");
// check if the user has clicked the button "UPLOAD" 
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add Vendor</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">category</li>
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
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" id="add_vndr">
                        <form id="add_vendor">
                            <div class="form-group">
                                <label for="">Vendor image</label>
                                <input type="file" name="image" id="uploadfile" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Vendor Name</label>
                                <input type="text" name="vendor_name" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Phone No</label>
                                <input type="text" name="phone" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" name="city" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">State</label>
                                <input type="text" name="states" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Pin Code</label>
                                <input type="text" name="pincode" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">PAN Number</label>
                                <input type="text" name="pan_number" id="uploadfile" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">PAN Card Photo</label>
                                <input type="file" name="pan_photo" id="uploadfile" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Aadhar No</label>
                                <input type="text" name="aadhar_no" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Aadhar Front image</label>
                                <input type="file" name="aadharimage1" id="uploadfile" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">Aadhar Back image</label>
                                <input type="file" name="aadharimage2" id="uploadfile" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">GST No</label>
                                <input type="text" name="gst" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="">GST Certificate</label>
                                <input type="file" name="gst_img" id="uploadfile" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" id="vndr_btn" type="submit" name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="vendors.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i><span>Go Back vendors page</span> </button></a>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

    <?php include("include/footer.php"); ?>
   