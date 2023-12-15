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
                    <h1>Add ads</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">ads</li>
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
                                <label> ads category name</label>
                                <select class="form-control " id="" name="category_name">
                                <?php    
                             
                             $sql = "SELECT * FROM `advertise`";
                          
                             $result = mysqli_query($conn, $sql);
                                  while($row = mysqli_fetch_assoc($result)) {
                             ?>
                                    <option value="<?php echo $row['ads_id']?>"><?php echo $row['ads_name'] ?></option>
                           <?php }?>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label>Ads name</label>
                                <input type="text" value="" name="ad_name" class="form-control">
                               
                            </div><br>

                            <!-- the deal form  detilas  -->
                            
                                <div class="form-group ">
                                    <label for="">Ads  Image</label>
                                    <input type="file" name="image"  class="form-control">
                                </div>
                                
                            </div>

                            <!--  end of the deal form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit" name="add_ads"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="total_ads.php">
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
if (isset($_POST['add_ads'])){
    $ad_name = $_POST['ad_name'];
   
    $product_image1=$_FILES['image']['name'];
    $category_name = $_POST['category_name'];
    

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
    $targetDir = "../upload/ads/";
    $targetproduct_image1 = $targetDir . basename($product_image1);
   
    move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
    }else{
        $product_image1="";
       
    }

  echo  $sql = "INSERT INTO `all_ads` (`ad_name`,`ads_img`,`category_name`)
    VALUES ('$ad_name','$product_image1','$category_name')";

    if ($conn->query($sql)) {
        echo "Ads added successfully!";
       
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;

    }
}

include('include/footer.php');

?>
<script>
   
</script>



