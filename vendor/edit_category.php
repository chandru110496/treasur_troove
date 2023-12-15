<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
// echo $id;
$sql = "SELECT * FROM `category` WHERE category_id=$id";
$result = mysqli_query($conn, $sql);
// print_r($res);  
$row = mysqli_fetch_assoc($result);
$category_name = $row['category_name'];




?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit Category</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Category banner</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" id="product_banner">
                    <form method="post" enctype="multipart/form-data">
                        
                            <!-- the bid form  detilas  -->
                            <div class="form-group">
                                <label for="">Category name</label>
                                <input type="text" name="category_name" value="<?= $category_name ?>" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-primary" id="btn_product" type="submit" name="submit"
                                    value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="category.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
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
    $category_name = $_POST['category_name'];
   
        
    $sql = "UPDATE `category` SET `category_name`='$category_name' WHERE category_id=$id";

    $resul=mysqli_query($conn,$sql);
    if ($resul) {
        echo "<script>alert('Updated Category successfully!');</script>";
        echo "<script>window.location.href ='category.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}






include('./include/footer.php');

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