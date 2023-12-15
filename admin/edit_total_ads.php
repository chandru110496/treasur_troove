<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
// echo $id;
$sql = "SELECT * FROM `all_ads` WHERE ad_id=$id";
$result = mysqli_query($conn, $sql);
// print_r($res);  
$row = mysqli_fetch_assoc($result);
$ad_name = $row['ad_name'];
$product_image1 = $row['ads_img'];
?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add ads</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">ads</li>
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
                    <div class="select-box">
                                <label> ads category name</label>
                                <select class="form-control " id="" name="category_name">
                                    <option value="">Select Category</option>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM advertise");
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['ads_id']; ?>"><?php echo $row["ads_name"]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- the bid form  detilas  -->
                            <div class="form-group">
                                <label for="">ad name</label>
                                <input type="text" name="ad_name" value="<?=$ad_name?>" class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image1</label>
                                    <img src="../upload/ads/<?=$product_image1?>" alt="" style="width:150px;height:150px;object-fit:cover;" style="">
                                    <input type="file" name="image"  id="uploadfile" class="form-control">
                                </div>
                                
                            </div>
                            <br>
                            

                            

                            <!--  end of the bid form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary" id="btn_cards" type="submit" name="submit"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="total_ads.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
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
    $ad_name = $_POST['ad_name'];
    $product_image1=$_FILES['image']['name'];
    $category_name = $_POST['category_name'];
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
        $targetDir = "../upload/ads/";
        $targetproduct_image1 = $targetDir . basename($product_image1);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
       
        
    $sql = "UPDATE `all_ads` SET `ad_name`=' $ad_name',
    `ads_img`='$product_image1',`category_name`='$category_name'
    WHERE ad_id =$id";
    // echo "UPDATE `all_ads` SET `ad_name`=' $ad_name',
    // `ads_img`='$product_image1',`category_name`='$category_name'
    // WHERE ads_id =$id";

    $resul=mysqli_query($conn,$sql);
    if ($resul) {
        echo "<script>alert('ads Updated successfully!');</script>";
        echo "<script>window.location.href ='total_ads.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}






include('./include/footer.php');

?>



