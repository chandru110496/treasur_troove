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
                    <h1>Add Brand</h1>
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
        <!-- <button class="btn btn-green btn-sm">total earning <span style="background-color: whitesmoke; color: black;">1234</span></button> -->
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" id="brand" >
                        <form id="add_brand">
                            <div class="form-group">
                                <label for="">Brand name</label>
                                <input type="text" name="brand_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Brand Image</label>
                                <input type="file" name="image" id="uploadfile" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" id="cat_btn" type="submit" name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="brand.php"><button class="btn btn-blue"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back brand page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end MAIN PAGE ROW -->
    </div>

    <!-- end MAIN PAGE CONTENT -->
    <?php include("include/footer.php"); ?>
    <script type="">

$("form#add_category").submit(function(e){
    e.preventDefault();
    var formData = new FormData($(this)[0]);
});
    </script>