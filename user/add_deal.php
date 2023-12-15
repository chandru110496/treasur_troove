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
                    <h1>Add deal products</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">cards banner</li>
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
                          


                            <!-- the deal form  detilas  -->
                            <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control">
                                <input type="hidden" name="vendor_id" value="<?php echo $_SESSION['id'] ?>"> 
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
                                <label for="">Video</label>
                                <input type="file" name="image5" accept="video/*" class="form-control">
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
                                 
                                    </select>
                                </div>
                             
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
                            <div class="extra-fields">
                    <!-- Extra input fields here -->
                    <label for="">Cut</label>
                    <select name="cut" id="" class="form-control">
                        <option value="">Select Cut</option>
                        <option value="Well cut">Well cut</option>
                        <option value="Too Shallow">Too Shallow</option>
                        <option value="To Deep">To Deep</option>
                    </select>
                    <label for="">Color</label>
                    <select name="color" id="" class="form-control">
                        <option value="">Select Color</option>
                        <option value="Colorless">Colorless</option>
                        <option value="Near Colorless"> Near Colorless</option>
                        <option value="Faint Yellow ">Faint Yellow </option>
                        <option value="Very Light Yellow ">Very Light Yellow </option>
                        <option value="Light Yellow">Light Yellow </option>
                    </select>
                    <label for="">Clarity</label>
                    <select name="clarity" id="" class="form-control">
                        <option value="">Select Clarity</option>
                        <option value="Flawless">Flawless(FL)</option>
                        <option value="Very very Slightly Included">Very very Slightly Included(VVS)</option>
                        <option value="Very  Slightly Included">Very Slightly Included(VS)</option>
                        <option value="Slightly Included"> Slightly Included(SI)</option>
                        <option value="Included-1">Included-1(1)</option>
                        <option value="Included-2">Included-2(2)</option>
                        <option value="Included-3">Included-3(3)</option>
                    </select>
                    <label for="">Carat</label>
                    <select name="carat" id="" class="form-control">
                        <option value="">Select Carat</option>
                        <option value="2ct">2ct</option>
                        <option value="1 3/4 ct">1 3/4 ct</option>
                        <option value="1 1/2 ct">1 1/2 ct</option>
                        <option value="1 1/4 ct">1 1/4 ct</option>
                        <option value="3/4 ct">3/4 ct</option>
                        <option value="1/2 ct">1/2 ct</option>
                        <option value="1/4 ct">1/4 ct</option>
                    </select></div>
                            <!-- <div class="form-group">
                                    <label for="">Days</label>
                                    <input type="text" name="deal_days" class="form-control" >
                                </div> -->
                           
                                <div class="form-group">
                                <label for="" style="margin-left: 0px;">Minutes</label>
                                <input  style="margin-left: 0px;"type="datetime-local" name="min"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" style="margin-left: 0px;">duration(in minutes)</label>
                                <input  style="margin-left: 5px;"type="text" name="deal_close"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Type</label>
                                
                               <select name="type" id="" class="form-control"> <option value="hot">Hot Deal</option>
                                <option value="upc">Upcoming Deal Products</option></select>
                            </div><br>


                            <!--  end of the deal form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit" name="add_deal_pro"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="deal.php?type=hot">
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
if (isset($_POST['add_deal_pro'])){
    $pname = $_POST['product_name'];
   
    $product_image1 = $_FILES['image']['name'];
    $product_image2 = $_FILES['image2']['name'];
    $product_image3 = $_FILES['image3']['name'];
    $product_image4 = $_FILES['image4']['name'];
    $product_image5 = $_FILES['image5']['name'];
    $category_name = $_POST['category_name'];
    $sub_category_id = $_POST['subcategory_name'];
    $specification = $_POST['specification'];
    $product_description = $_POST['description'];
    $cut = $_POST['cut'];
    $clarity = $_POST['clarity'];
    $color = $_POST['color'];
    $carat = $_POST['carat'];
    $deal_close = $_POST['deal_close'];
    $min= $_POST['min'];
   
    $type = $_POST['type'];
    $vendor_id = $_POST['vendor_id'];
    $expiry_time  = date('Y-m-d H:i:s', strtotime($min .' + '. $deal_close .'minutes'));
    
                                                            

    // Check the file extension 
    if($product_image1!="" ||$product_image2!="" ||$product_image3!="" ||$product_image4!="" ||$product_image5!=""){
    $product_image1Extension = strtolower(pathinfo($product_image1, PATHINFO_EXTENSION));
    $product_image2Extension = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));
    $product_image3Extension = strtolower(pathinfo($product_image3, PATHINFO_EXTENSION));
    $product_image4Extension = strtolower(pathinfo($product_image4, PATHINFO_EXTENSION));
    $product_image5Extension = strtolower(pathinfo($product_image5, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "mp4", "mkv", "mov", "avi", "wmv", "flv");
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
    $targetDir = "../upload/deal/";
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

    }else{
        $product_image1="";
        $product_image2="";
        $product_image3="";
        $product_image4="";
        $product_image5="";
    }
    $sql = "INSERT INTO `deal_product_details` (`product_name`,  `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `category_name`, `sub_category_id`, `specification`, `product_description`,`cut`,`color`,`clarity`,`carat`, `expiry_time`,`min`, `deal_close`, `type`,`vendor_id`)
    VALUES ('$pname', '$product_image1', '$product_image2', '$product_image3', '$product_image4', '$product_image5', '$category_name', '$sub_category_id','$specification','$product_description','$cut','$color','$clarity','$carat', '$expiry_time','$min','$deal_close', '$type','$vendor_id')
    ";
    if ($conn->query($sql)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }
}

include('include/footer.php')
?>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryDropdown = document.getElementById("getcategory");
        const extraFieldsDiv = document.querySelector(".extra-fields");

        categoryDropdown.addEventListener("change", function() {
            const selectedValue = categoryDropdown.value;
            if (selectedValue === "103") {
                extraFieldsDiv.style.display = "block";
            } else {
                extraFieldsDiv.style.display = "none";
            }
        });
    });
</script>
