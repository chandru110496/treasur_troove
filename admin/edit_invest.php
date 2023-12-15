<?php
include('include/header.php');
include('include/conn.php');
$id=$_GET['edit'];
// echo "<script>alert($id);</script>";
$sql1="SELECT * FROM `invest_details` WHERE invest_id=$id";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);


$pname=$row['product_name'];
$image1=$row['product_image1'];
$image2=$row['product_image2'];
$image3=$row['product_image3'];
$image4=$row['product_image4'];
$image5=$row['product_image5'];
$price=$row['price'];
$old_price=$row['product_old_price'];
$category_id=$row['category_id'];
$category_name=$row['category_name'];
$sub_category_id=$row['sub_category_id'];
$brand_name=$row['brand_name'];
$description=$row['	product_description'];
$specification=$row['specification'];
$plan=$row['project_plan'];
$response=$row['job_response'];
$about=$row['about_project'];
$blog=$row['blog_video'];
$days=$row['days'];
$hours=$row['hours'];
$min=$row['min'];
$sec=$row['sec'];
    ?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit Invest Products</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Invest</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <button class="btn btn-green btn-sm">total earning <span style="background-color: whitesmoke; color: black;">1234</span></button>
        <div class="row" >
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" >
                        <form method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                                    <label for="">product name</label>
                                    <input type="text" value="<?=$pname?>" name="product_name" class="form-control">
                                </div>
                                <div class="row">

                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="">image</label>
                                        <img src="../upload/slider_banner/<?=$image1?>" style="width:150px;height:150px" alt="">
                                        <input type="file" name="image" id="" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="">image2</label>
                                        <img src="../upload/slider_banner/<?=$image2?>" style="width:150px;height:150px" alt="">
                                        <input type="file" name="image2" id="" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="">image3</label>
                                        <img src="../upload/slider_banner/<?=$image3?>" style="width:150px;height:150px" alt="">
                                        <input type="file" name="image3" id="" class="form-control" >
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="">image4</label>
                                        <img src="../upload/slider_banner/<?=$image4?>" style="width:150px;height:150px" alt="">
                                        <input type="file" name="image4" id="" class="form-control" >
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="">image5</label>
                                        <img src="../upload/slider_banner/<?=$image5?>" style="width:150px;height:150px" alt="">
                                        <input type="file" name="image5" id="" class="form-control" >
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
                                    <option style="color:black;">Select SubCategory
                                    </option>
                                </select>
                            </div>
                                
                                <div class="form-group">
                                    <label for="">Brand Name</label>
                                    <input type="text" value="<?=$brand_name?>" name="brand_name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">description</label>
                                    <input type="text" value="<?= $description?>" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">specification</label>
                                    <input type="text" value="<?=$specification?>" name="specification" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Days</label>
                                    <input type="text" value="<?=$days?>" name="invest_days" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Hours</label>
                                    <input type="text" name="hours" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Minutes</label>
                                    <input type="text" value="<?=$min?>" name="min" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Seconds</label>
                                    <input type="text" name="sec" value="<?=$sec?>" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Project Plan</label>
                                    <textarea name="project_plan"  class="form-control" style="resize:none;" placeholder="Enter Your Project Plan.." id="project_plan" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Job Responsibilities</label>
                                    <textarea name="job_response" class="form-control" style="resize:none;" placeholder="Enter Job Responsibility.." id="job_response" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">About project</label>
                                    <textarea name="about_project" class="form-control" style="resize:none;" placeholder="About Your Project.." id="about_project" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Blog (Video)</label>
                                    <video src="../upload/slider_banner/videos/<?=$blog?>" controls style="width:150px"></video>
                                    <input type="file" name="blog_video" class="form-control" >
                                </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="add_invest" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="slider.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back Slider page</span> </button></a>
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

    <?php 
    if(isset($_POST['add_invest'])){
        $pname=$_POST['product_name'];
        $image1=$_FILES['image']['name'];
        $image2=$_FILES['image2']['name'];
        $image3=$_FILES['image3']['name'];
        $image4=$_FILES['image4']['name'];
        $image5=$_FILES['image5']['name'];
        $category=$_POST['category_name'];
        $subcategory=$_POST['subcategory_name'];
        $brand_name=$_POST['brand_name'];
        $description=$_POST['description'];
        $specification=$_POST['specification'];
        $days=$_POST['invest_days'];
        $hours=$_POST['hours'];
        $min=$_POST['min'];
        $sec=$_POST['sec'];
        $project=$_POST['project_plan'];
        $jobresponse=$_POST['job_response'];
        $aboutproject=$_POST['about_project'];
        $blog=$_FILES['blog_video']['name'];
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        
    // Check the file extension 
    if($image1!="" ||$image2!="" ||$image3!="" ||$image4!="" ||$image5!=""){

        $image1Extension = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
        $image2Extension = strtolower(pathinfo($image2, PATHINFO_EXTENSION));
        $image3Extension = strtolower(pathinfo($image3, PATHINFO_EXTENSION));
        $image4Extension = strtolower(pathinfo($image4, PATHINFO_EXTENSION));
        $image5Extension = strtolower(pathinfo($image5, PATHINFO_EXTENSION));
        if (
            !in_array($image1Extension, $allowedExtensions) ||
            !in_array($image2Extension, $allowedExtensions) ||
            !in_array($image3Extension, $allowedExtensions) ||
            !in_array($image4Extension, $allowedExtensions) ||
            !in_array($image5Extension, $allowedExtensions)
        ) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    
        // Move uploaded files to a permanent location
        $targetDir = "../upload/slider_banner/";
        $target_image1 = $targetDir . basename($image1);
        $target_image2 = $targetDir . basename($image2);
        $target_image3 = $targetDir . basename($image3);
        $target_image4 = $targetDir . basename($image4);
        $target_image5 = $targetDir . basename($image5);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_image1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $target_image2);
        move_uploaded_file($_FILES['image3']['tmp_name'], $target_image3);
        move_uploaded_file($_FILES['image4']['tmp_name'], $target_image4);
        move_uploaded_file($_FILES['image5']['tmp_name'], $target_image5);
    
       
        }else{
            $product_image1="";
            $product_image2="";
            $product_image3="";
            $product_image4="";
            $product_image5="";
        }

        // Check if a video file is selected
    if($blog != "") {
        $blogExtension = strtolower(pathinfo($blog, PATHINFO_EXTENSION));

        // Check the file extension 
        $allowedExtensions = array("mp4", "mov", "avi");
        if (!in_array($blogExtension, $allowedExtensions)) {
            echo "Only MP4, MOV, and AVI files are allowed for the video.";
        } else {
            // Move uploaded video to a permanent location
            $targetDir = "../upload/slider_banner/videos/";
            $targetblog= $targetDir . basename($blog);
            move_uploaded_file($_FILES['blog_video']['tmp_name'], $targetblog);
        }
    } else {
        $blog = ""; // If no video is selected, set it to an empty string
    }



        $sql="UPDATE `invest_details` SET `product_name`=' $pname',
        `product_image1`='$image1',`product_image2`='$image2',`product_image3`='$image3',
        `product_image4`='$image4',`product_image5`='$image5',`category_name`='$category',
        `sub_category_id`='$subcategory',`brand_name`='$brand_name',`	product_description`='$description',
        `specification`='$specification',`project_plan`='$plan',`job_response`='$jobresponse',
        `about_project`='$aboutproject',`blog_video`='$blog',
        `days`='$days',`hours`='$hours',`min`='$min',`sec`='$sec' WHERE 'invest_id'=$id";
          $res=mysqli_query($conn,$sql);

          if($res){
            echo "<script>alert('data insert success');</script>";
            echo "<script>window.location.href = 'slider.php';</script>";
            

          }else{
            echo "insert error".$conn->error;
          }
    }
    
    ?>
    <?php include("include/footer.php"); ?>
  