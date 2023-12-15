<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
// echo $id;
$sql = "SELECT * FROM `inner_sub_category` WHERE in_sub_category_id=$id";
$result = mysqli_query($conn, $sql);
// print_r($res);  
$row = mysqli_fetch_assoc($result);
$sub_name = $row['in_sub_category_name'];
$product_image1 = $row['in_subcategoty_image'];
?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add Cards</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">cards banner</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" id="cards_banner">
                    <form method="post" enctype="multipart/form-data">
                            <!-- the bid form  detilas  -->
                            <div class="form-group">
                                <label for="">sub_category_name</label>
                                <input type="text" name="in_sub_category_name" value="<?= $sub_name?>" class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image1</label>
                                    <img src="../upload/cards/<?= $product_image1 ?>" alt="" style="width:150px;height:150px" style="">
                                    <input type="file" name="image"  id="uploadfile" class="form-control">
                                </div>
                                
                            </div>
                            <div class="select-box">
                                <label>category name</label>
                                <select class="form-control get_cat" id="getcategory" name="category_name">
                                    <option value="">Select Category</option>
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
                                <label>sub_category name</label> 
                                <select class="form-control" id="getsubcategory" name="subcategory_name">
                                    <option style="color:black;" value="<?= $sub_category_id ?>">Select SubCategory
                                    </option>
                                </select>
                            </div>

                            

                            <!--  end of the bid form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary" id="btn_cards" type="submit" name="submit"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="Inner_category.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
                                    aria-hidden="true"></i>
                                <span>Go Back Top Banner page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>



<?php
if (isset($_POST['submit'])) {
    $sub_name = $_POST['in_sub_category_name'];
    $product_image1=$_FILES['image']['name'];
    $category_name = $_POST['category_name'];
    $sub_category_name = $_POST['subcategory_name'];
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        // check the file extension 
        $product_image1Extension = strtolower(pathinfo($product_image1,PATHINFO_EXTENSION));
        if (
            !in_array($product_image1Extension, $allowedExtensions)  
        ) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            exit;
        }
        
        // Move uploaded files to a permanent location
        $targetDir = "../upload/inner_cat/";
        $targetproduct_image1 = $targetDir . basename($product_image1);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
       
        
    $sql = "UPDATE `inner_sub_category` SET `in_sub_category_name`=' $sub_name',
    `in_subcategoty_image`='$product_image1',`category_name`='$category_name',`sub_category_name`='$sub_category_name'
    WHERE in_sub_category_id =$id";

    $resul=mysqli_query($conn,$sql);
    if ($resul) {
        echo "<script>alert('Data Updated successfully!');</script>";
        echo "<script>window.location.href ='Inner_category.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}






include('./include/footer.php');

?>






Fatal error: Uncaught TypeError: in_array(): Argument #2 ($haystack) must be of type array, null given in C:\xampp\htdocs\BidTreasureTrove\admin\edit_sub.php:108 Stack trace: #0 C:\xampp\htdocs\BidTreasureTrove\admin\edit_sub.php(108): in_array('jpg', NULL) #1 {main} thrown in C:\xampp\htdocs\BidTreasureTrove\admin\edit_sub.php on line 108