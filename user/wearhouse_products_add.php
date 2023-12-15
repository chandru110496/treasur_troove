<?php
include('./include/header.php');
include('./include/conn.php');
?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add wear house products</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">wearhouse</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                            <!-- <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image" id="uploadfile" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control" placeholder="Electronics" required>
                            </div>
                            <div class="form-group">
                                <label for="">About Price</label>
                                <input type="text" name="About_Price" class="form-control" placeholder="STARTING AT" required>
                            </div>
                            <div class="form-group">
                                <label for="">primary Text</label>
                                <input type="text" name="primary_Text" class="form-control" placeholder="30% OFF" required>
                            </div> -->


                            <!-- the wearhouse form  detilas  -->
                            <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control">
                            </div>
                                <div class="form-group ">
                                    <label for="">image1</label>
                                    <input type="file" name="image"  class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label for="">image2</label>
                                    <input type="file" name="image2"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">image3</label>
                                    <input type="file" name="image3"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">image4</label>
                                    <input type="file" name="image4" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">image5</label>
                                    <input type="file" name="image5"  class="form-control">
                                </div>
                            </div>
                            <div class="dropdowns">
                                <div class="select-box">
                                    <label>main category name</label>
                                    <select class="form-control get_cat" id="getcategory" name="category_name">
                                        <option value="">Select main Category</option>
                                        <?php
                                        $result = mysqli_query($conn, "SELECT * FROM category");
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row["category_name"]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <label>category name</label>
                                       <select class="form-control get_inner_cat" id="getsubcategory"                     name="subcategory_name"> 
                                        <!-- <option style="color:black;" id="fstOp" value="">Category</option> -->
                                        
                                    </select>
                                </div>
                                <!-- <div class="select-box">
                                    <label>sub_category name</label> -->
                                    <!-- <select class="form-control" id="get_in_cat" name="in_subcategory_name">
                                        <option style="color:black;">Select SubCategory
                                        </option>                                  
                                    </select> -->
                                    <!-- <input type="text" name="in_subcategory_name" class="form-control">
                                </div> -->
                            </div>

                            <div class="form-group">
                                <label for="">New price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">old price</label>
                                <input type="text" name="old_price"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" name="brand_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <input type="text" name="description"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">specification</label>
                                <input type="text" name="specification" 
                                    class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                    <label for="">Days</label>
                                    <input type="text" name="wearhouse_days" class="form-control" >
                                </div> -->
                            <div class="form-group">
                                <label for="">Hours</label>
                                <input type="text" name="hours" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Minutes</label>
                                <input type="text" name="min"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Seconds</label>
                                <input type="text" name="sec" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Type</label>
                                
                               <select name="type" id="" class="form-control"> <option value="hot">Hot Bid</option>
                                <option value="upc">Upcoming Bid Products</option></select>
                            </div><br>


                            <!--  end of the wearhouse form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit" name="add_wearhouse_pro"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="wearhouse_products.php?type=hot">
                            <button class="btn btn-blue center-block">
                                <i class="fa fa-backward" aria-hidden="true"></i>
                                <span>Go Back to Top Banner page</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<?php
if (isset($_POST['add_wearhouse_pro'])){
    $pname = $_POST['product_name'];
    $product_new_price = $_POST['price'];
    $product_old_price = $_POST['old_price'];
    $product_image1 = $_FILES['image']['name'];
    $product_image2 = $_FILES['image2']['name'];
    $product_image3 = $_FILES['image3']['name'];
    $product_image4 = $_FILES['image4']['name'];
    $product_image5 = $_FILES['image5']['name'];
    $category_name = $_POST['category_name'];
    $sub_category_id = $_POST['subcategory_name'];
    // $in_sub_category_id = $_POST['in_subcategory_name'];
    $specification = $_POST['specification'];
    $product_description = $_POST['description'];
    $brand_name = $_POST['brand_name'];
    $hours = $_POST['hours'];
    $min = $_POST['min'];
    $sec = $_POST['sec'];
    $type = $_POST['type'];
    
                                                            

    // Check the file extension 
    if($product_image1!="" ||$product_image2!="" ||$product_image3!="" ||$product_image4!="" ||$product_image5!=""){
    $product_image1Extension = strtolower(pathinfo($product_image1, PATHINFO_EXTENSION));
    $product_image2Extension = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));
    $product_image3Extension = strtolower(pathinfo($product_image3, PATHINFO_EXTENSION));
    $product_image4Extension = strtolower(pathinfo($product_image4, PATHINFO_EXTENSION));
    $product_image5Extension = strtolower(pathinfo($product_image5, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (
       
        !in_array($product_image1Extension, $allowedExtensions) ||
        !in_array($product_image2Extension, $allowedExtensions) ||
        !in_array($product_image3Extension, $allowedExtensions) ||
        !in_array($product_image4Extension, $allowedExtensions) ||
        !in_array($product_image5Extension, $allowedExtensions)
    ) 
    {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }

    // Move uploaded files to a permanent location
    $targetDir = "../upload/wearhouse/";
    $targetproduct_image1 = $targetDir . basename($product_image1);
    $targetproduct_image2 = $targetDir . basename($product_image2);
    $targetproduct_image3 = $targetDir . basename($product_image3);
    $targetproduct_image4 = $targetDir . basename($product_image4);
    $targetproduct_image5 = $targetDir . basename($product_image5);
    move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
    move_uploaded_file($_FILES['image2']['tmp_name'], $targetproduct_image2);
    move_uploaded_file($_FILES['image3']['tmp_name'], $targetproduct_image3);
    move_uploaded_file($_FILES['image4']['tmp_name'], $targetproduct_image4);
    move_uploaded_file($_FILES['image5']['tmp_name'], $targetproduct_image5);

    // $sql = "INSERT INTO `wearhouse_product_details`(`product_name`, `product_new_price`, 
    // `product_old_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`,
    //  `product_image5`, `category_name`, `sub_category_id`, `specification`,
    //   `product_description`, `brand_name`,`hours`, `min`,
    //    `sec`) VALUES ('$pname','$product_new_price','$product_old_price','$product_image1','$product_image2','$product_image3',
    //    '$product_image4','$product_image5','$category_name','$sub_category_id','$specification','$product_description',
    //    '$brand_name','$hours','$min','$sec')";
    }else{
        $product_image1="";
        $product_image2="";
        $product_image3="";
        $product_image4="";
        $product_image5="";
    }

    $sql = "INSERT INTO `wearhouse_products` (`product_name`, `product_new_price`, `product_old_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `category_name`, `sub_category_id`, `specification`, `product_description`, `brand_name`, `hours`, `min`, `sec`, `type`)
    VALUES ('$pname', '$product_new_price', '$product_old_price', '$product_image1', '$product_image2', '$product_image3', '$product_image4', '$product_image5', '$category_name', '$sub_category_id', '$specification', '$product_description', '$brand_name', '$hours', '$min', '$sec', '$type');
    ";
    if ($conn->query($sql)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
include('include/footer.php')
?>
