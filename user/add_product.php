<?php include("include/header.php");
// check if the user has clicked the button "UPLOAD" 
?>

<style>

    .module li{
padding-left:17px;

    }
</style>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                <!-- <h3><div class="module" style="display:flex;list-style-type:none;">
                    <li class="active"><input type="radio" name="action" value="bid"> Bid</li>
                        <li class="active"><input type="radio" name="action" value="buy"> Buy</li>
                        <li class="active">  <input type="radio" name="action" value="catalog"> Catalog</li>
                        <li class="active">  <input type="radio" name="action" value="iunvest"> Invest</li>
                        <li class="active"><input type="radio" name="action" value="deal"> Deal</li></div></h3> -->
                    <h3>Add product</h3>
                    
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">category</li><br>                        
                        
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <?php print_r($_SESSION);?>
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <!-- <button class="btn btn-green btn-sm">Total Earning <span style="background-color: whitesmoke; color: black;">123454</span></button> -->
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" id="add_prdt" >
                        <form id="add_product">
                        <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control" >
                                <input type="hidden" name="vendor_id" value="<?php echo $_SESSION['id'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image" id="uploadfile" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">image2</label>
                                <input type="file" name="image2" id="uploadfile2" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">image3</label>
                                <input type="file" name="image3" id="uploadfile3" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">image4</label>
                                <input type="file" name="image4" id="uploadfile4" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">image5</label>
                                <input type="file" name="image5" id="uploadfile5" class="form-control" >
                            </div>
                            <div class="select-box">
                                <label>category name</label>
                                <select class="form-control" id="getcategory" name="category_name" ></select>
                            </div>
                            <div class="select-box">
                                <label>sub_category name</label>
                                <select class="form-control" id="getsubcategory" name="subcategory_name" ><option style="color:black;" value="">Select SubCategory</option></select>
                            </div>
                            <div class="form-group">
                                <label for="">sku no</label>
                                <input type="text" name="sku_no" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">New price</label>
                                <input type="text" name="price" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">old price</label>
                                <input type="text" name="old_price" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" name="brand_name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <input type="text" name="description" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">specification</label>
                                <input type="text" name="specification" class="form-control" >
                            </div>
                          
                            <div class="form-group">
                                <label for="">Type</label>
                                
                               <select name="type" id="" class="form-control"> <option value="hot">Hot Bid</option>
                                <option value="upc">Upcoming Bid Products</option></select>
                            </div><br>

                            <div class="form-group">
                                <button class="btn btn-primary" id="cat_btn" type="submit" name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="product.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back product page</span> </button></a>
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

//     $.ajax({
//         type: "POST",
//         url: 'ajax.php',
//         data: formData,
//         processData: false,
//         contentType: false,
//         dataType: "json",
//         success: function(data, textStatus, jqXHR) {
//            //process data
//            console.log(data.res);
//            if(data.res == 'success'){
//             alert('inserted');
//             window.location.href = "category.php";
//            }
//         },
//         error: function(data, textStatus, jqXHR) {
//            //process error msg
//         },
// });
});
    </script>