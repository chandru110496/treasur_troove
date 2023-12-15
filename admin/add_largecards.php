<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add catalog</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">catalog </li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control" placeholder="Electronics"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Catalog PDF</label>
                                <input type="file" name="image2" class="form-control" required>
                            </div>
                            
                            <!-- <div class="form-group">
                                <label for="">About Price</label>
                                <input type="text" name="About_Price" class="form-control" placeholder="STARTING AT"
                                    required>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="">primary Text</label>
                                <input type="text" name="primary_Text" class="form-control" placeholder="30% OFF"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="">Type</label>
                                
                               <select name="type" id="" class="form-control"> <option value="hot">Hot Bid</option>
                                <option value="upc">Upcoming Bid Products</option></select>
                            </div><br> -->
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="add_largecards"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="largecards.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
                                    aria-hidden="true"></i>
                                <span>Go Back Catalog page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<?php
if (isset($_POST['add_largecards'])) {
    $image1 = $_FILES['image']['name'];
    $product_image2 = $_FILES['image2']['name'];
    $product_name = $_POST['product_name'];
    // $about_price = $_POST['About_Price'];
    // $primary = $_POST['primary_Text'];
    // $type = $_POST['type'];
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if ($image1 != "") {
        $image1Extension = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
        $product_image2Extension = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));

        if (!in_array($image1Extension, $allowedExtensions) ||
        !in_array($product_image2Extension, $allowedExtensions)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
        $targetDir = "../upload/largecards/";
        $target_image1 = $targetDir . basename($image1);
        $targetproduct_image2 = $targetDir . basename($product_image2);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_image1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $targetproduct_image2);
    } else {
        $image1 = "";
        $product_image2 = "";
    }
    $sql = "INSERT INTO `largecards`(`image`, `product_name`,`pdf`)
     VALUES ('$image1','$product_name','$product_image2')";
     $res=mysqli_query($conn,$sql);

     if($res){
        echo "<script>alert('Add a catalog successfully');</script>";
      }else{
        echo "insert error".$conn->error;
      }


}
include("include/footer.php"); ?>