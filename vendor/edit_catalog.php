<?php include("include/header.php"); 
      include("include/conn.php");
    $id=$_GET['edit'];
    $sql1="SELECT * FROM `largecards` WHERE catalog_id=$id";
    $res1=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($res1);
    $image=$row['image'];
    $pdf=$row['pdf'];
     $pname=$row['product_name'];
    // $about=$row['about_price'];
    // $primary_text=$row['primary_text'];
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit Catalog</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Catalog</li>
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
                                <label for="">image</label>
                                <img src="../upload/largecards/<?=$image?>" style=";object-fit:cover;" alt="">
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Catalog PDF</label>
                                <img src="../upload/largecards/<?=$pdf?>" style="width:150px;height:150px;object-fit:cover;" alt="">
                                <input type="file" name="image2" class="form-control" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" value="<?=$pname?>" name="product_name" class="form-control" placeholder="Electronics"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">About Price</label>
                                <input type="text" value="<?=$about?>" name="About_Price" class="form-control" placeholder="STARTING AT"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">primary Text</label>
                                <input type="text" value="<?=$primary_text?>" name="primary_Text" class="form-control" placeholder="30% OFF"
                                    required>
                            </div> -->
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
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if ($image1 != "") {
        $image1Extension = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
        $product_image2Extension = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));


        if (!in_array($image1Extension, $allowedExtensions)||
        !in_array($product_image2Extension, $allowedExtensions)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
        $targetDir = "../upload/largecards/";
        $target_image1 = $targetDir . basename($image1);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_image1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $targetproduct_image2);
    } else {
        $image1 = "";
        $product_image2 = "";
    }
    $sql2 = "UPDATE `largecards` SET `image`='$image1',
    `product_name`='$product_name',`pdf`='$product_image2',
    WHERE catalog_id=$id";
     $res2=mysqli_query($conn,$sql2);

     if($res2){
        echo "<script>alert('data insert success');</script>";
        echo "<script>window.location.href = 'largecards.php';</script>";
      }else{
        echo "insert error".$conn->error;
      }


}
include("include/footer.php"); ?>