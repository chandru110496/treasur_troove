<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
// echo $id;
$sql = "SELECT * FROM `sub_category` WHERE sub_category_id=$id";
$result = mysqli_query($conn, $sql);
// print_r($res);  
$row = mysqli_fetch_assoc($result);
$sub_category_name = $row['sub_category_name'];




?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit sub_Category</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">sub_Category banner</li>
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
                            <div class="form-group">
                                <label for="">sub_Category name</label>
                                <input type="text" name="sub_category_name" value="<?= $sub_category_name ?>" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-primary" id="btn_product" type="submit" name="submit"
                                    value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="sub_category.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
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
    $sub_category_name = $_POST['sub_category_name'];
 
   
        
    $sql = "UPDATE `sub_category` SET `sub_category_name`='$sub_category_name' WHERE sub_category_id=$id";

    $resul=mysqli_query($conn,$sql);
    if ($resul) {
        echo "<script>alert('Updated sub_Category successfully!');</script>";
        echo "<script>window.location.href ='sub_category.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}






include('./include/footer.php');

?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sub_categoryDropdown = document.getElementById("getsub_category");
        const extraFieldsDiv = document.querySelector(".extra-fields");

        sub_categoryDropdown.addEventListener("change", function() {
            const selectedValue = sub_categoryDropdown.value;
            if (selectedValue === "103") { 
                extraFieldsDiv.style.display = "block";
            } else {
                extraFieldsDiv.style.display = "none";
            }
        });
    });
</script>