<?php
include('include/header.php');
include('include/conn.php');
$id=$_GET['edit'];
// echo "<script>alert($id);</script>";
$sql1="SELECT * FROM `save_activities` WHERE id=$id";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);


$title=$row['title'];
$heading=$row['heading'];
$image1=$row['background_image'];

    ?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit Background images</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">save a life</li>
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
                     
                                <div class="row">
                                <div class="form-group">
                                    <label for="">save activity </label>
                                    <input type="text" name="heading"  value="<?=$heading?>"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text" name="text"  value="<?=$title?>"class="form-control">
                                </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="">Background image</label>
                                        <img src="../upload/save_activities/<?=$image1?>" style="width:150px;height:150px;object-fit:cover;" alt="">
                                        <input type="file" name="image" id="" class="form-control">
                                         </div>
                                    
                                 
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="add_slider" value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="save_activities.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
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
    if(isset($_POST['add_slider'])){
        $title=$_POST['text'];
        $heading=$_POST['heading'];
        $image1=$_FILES['image']['name'];     
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");   
    // Check the file extension 
    if($image1!=""){
        $image1Extension = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
        if (
            !in_array($image1Extension, $allowedExtensions) 
        
        ) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
        // Move uploaded files to a permanent location
        $targetDir = "../upload/save_activities/";
        $target_image1 = $targetDir . basename($image1);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_image1);
        }else{
            $product_image1="";
        }
        $sql="UPDATE `save_activities` SET `background_image`='$image1',
        `title`='$title',`heading`='$heading' WHERE id=$id";
          $res=mysqli_query($conn,$sql);

          if($res){
            echo "<script>alert('updated datas  successfully');</script>";
            echo "<script>window.location.href = 'save_activities.php';</script>";
            

          }else{
            echo "insert error".$conn->error;
          }
    }
    
    ?>
    <?php include("include/footer.php"); ?>
  