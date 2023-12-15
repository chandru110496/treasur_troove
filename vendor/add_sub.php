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
                    <h1>Add sub_category products</h1>
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
                            
                    <div class="select-box">
                                <label> main category name</label>
                                <select class="form-control get_cat" id="getcategory" name="category_name">
                                    <option value="">Select Main Category</option>
                                   
                                </select>
                            </div>
                            <div class="select-box">
                                <label>category name</label>
                                <select class="form-control" id="getsubcategory" name="subcategory_name">
                                    <option style="color:black;">Select Category
                                    </option>
                                </select>
                            </div><br>

                            <!-- the deal form  detilas  -->
                            <div class="form-group">
                                <label for="">sub-category name</label>
                                <input type="text" name="in_sub_category_name" class="form-control">
                            </div>
                                <div class="form-group ">
                                    <label for="">image1</label>
                                    <input type="file" name="image"  class="form-control">
                                </div>
                                
                            </div>

                            <!--  end of the deal form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit" name="add_deal_pro"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="Inner_category.php">
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
    $sub_name = $_POST['in_sub_category_name'];
   
    $product_image1=$_FILES['image']['name'];
    $category_name = $_POST['category_name'];
    $sub_category_name = $_POST['subcategory_name'];

    // Check the file extension 
    if($product_image1!=""){
    $product_image1Extension = strtolower(pathinfo($product_image1, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (
       
        !in_array($product_image1Extension, $allowedExtensions)
  
    ) 
    {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }

    // Move uploaded files to a permanent location
    $targetDir = "../upload/inner_cat/";
    $targetproduct_image1 = $targetDir . basename($product_image1);
   
    move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
    }else{
        $product_image1="";
       
    }

  echo  $sql = "INSERT INTO `inner_sub_category` (`in_sub_category_name`,`in_subcategoty_image`,`category_name`, `sub_category_name`)
    VALUES ('$sub_name','$product_image1','$category_name',' $sub_category_name')";

    if ($conn->query($sql)) {
        echo "Product added successfully!";
       
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;

    }
}

include('include/footer.php')
?>



