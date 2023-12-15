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
                    <h1>Add sub category</h1>
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
        <!-- <button class="btn btn-green btn-sm">total earning <span style="background-color: whitesmoke; color: black;">1234</span></button> -->
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" id="add_subcat">`
                        <form id="add_subcategory">
                            <div class="select-box">
                                <label>category name</label>
                                <select class="form-control" id="getcategory" name="category_id" required></select>
                            </div>
                            <div class="form-group">
                                <label for="">sub category name</label>
                                <input type="text" name="subcategory_name" class="form-control" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image" id="uploadfile" class="form-control" required>
                            </div> -->
                            <div class="form-group">
                                <button class="btn btn-primary" id="cat_btn" type="submit" name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="sub_category.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back sub category page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
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
    <script type="">

        $("form#add_category").submit(function(e){
    e.preventDefault();
    var formData = new FormData($(this)[0]);
    //append some non-form data also

    // formData.append( 'uploadfile', $('#uploadfile')[0].files[0]);

    $.ajax({
        type: "POST",
        url: 'ajax.php',
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data, textStatus, jqXHR) {
           //process data
           console.log(data.res);
           if(data.res == 'success'){
            alert('inserted');
            window.location.href = "subcategory.php";
           }
        },
        error: function(data, textStatus, jqXHR) {
           //process error msg
        },
});
});
    </script>