<?php
include('./include/header.php');
include('./include/conn.php');
?>
<style>
    .form-control{
        width:800px;
        margin-left: 5px;
    }
</style>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add Bid Products</h1>
                   
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">BID</li>
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
                           


                            <!-- the bid form  detilas  -->

                            <div class="select-box">
                                <label>Category name</label>
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
                                <label for="">product name</label>
                                <input type="text" name="product_name" class="form-control">
                                <input type="hidden" name="vendor_id" value="<?php echo $_SESSION['id'] ?>" class="form-control">
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
                                    <label for="">image5</label>
                                    <input type="file" name="image5"  class="form-control">
                                </div>
                            </div>
                           <?php  
                       
                          ?>

                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">New price</label>
                                <input  style="margin-left: 5px;" type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">Bid Increment Price</label>
                                <input style="margin-left: 5px;" type="text" name="old_price"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">Brand Name</label>
                                <input style="margin-left: 5px;" type="text" name="brand_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">description</label>
                                <input type="text" name="description"
                                    class="form-control">
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">Shipping</label>
                                <input type="text" name="shipping"
                                    class="form-control">
                            </div>
                            <div class="form-group" style="margin-left: 5px;">
                                <label for="">specification</label>
                                <input style="margin-left: 5px;" type="text" name="specification" 
                                    class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                    <label for="">Days</label>
                                    <input type="text" name="bid_days" class="form-control" >
                                </div> -->
                            <!-- <div class="form-group">
                                <label for="">Hours</label>
                                <input type="text" name="hours" class="form-control">
                            </div> -->
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">Minutes</label>
                                <input  style="margin-left: 5px;"type="datetime-local" name="min"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">duration(in minutes)</label>
                                <input  style="margin-left: 5px;"type="text" name="bid_close"  class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Seconds</label>
                                <input type="text" name="sec" class="form-control"> -->
                            </div>
                            <div class="form-group">
                                <label for="" style="margin-left: 5px;">Type</label>
                                
                               <select  style="margin-left: 5px;"name="type" id="" class="form-control"> <option value="hot">Hot Bid</option>
                                <option value="upc">Upcoming Bid Products</option></select>
                            </div><br>


                            <!--  end of the bid form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit" name="add_bid_pro"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="bid_hot.php?type=hot">
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
// if(isset($_POST['type'])){
//     $type=$_POST['type'];
//     $sql="INSERT INTO `bid_product_details`(type) values('$type')";
//     }




if (isset($_POST['add_bid_pro'])){
    $pname = $_POST['product_name'];
    $product_new_price = $_POST['price'];
    $product_old_price = $_POST['old_price'];
    $product_image1 = $_FILES['image']['name'];
    $product_image2 = $_FILES['image2']['name'];
    $product_image3 = $_FILES['image3']['name'];
    $product_image4 = $_FILES['image4']['name'];
    $product_image5 = $_FILES['image5']['name'];
    $category_name = $_POST['category_name'];
    $sub_category_id = $_POST['subcategory_name'];
    $specification = $_POST['specification'];
    $product_description = $_POST['description'];
    $shipping = $_POST['shipping'];
    $brand_name = $_POST['brand_name'];
    // $hours = $_POST['hours'];
    $min = $_POST['min'];
    // $sec = $_POST['sec'];
    $type = $_POST['type'];
    $bid_close=$_POST['bid_close'];
    $vendor_id = $_POST['vendor_id'];
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");


    $expiry_time  = date('Y-m-d H:i:s', strtotime($min .' + '. $bid_close .'minutes'));

//     date_default_timezone_set("Asia/Calcutta");
//      date_default_timezone_get();
//       $newDate = date('Y-m-d H:i:s', strtotime('+'.$min.'minutes'));
// print_r($min);
// $newDate = date('Y-m-d H:i:s', strtotime('+1 minutes'));

// date_default_timezone_set('Asia/Kolkata');
// $current_time= date('d-m-Y H:i');
// echo $current_time;


                                                  

    // Check the file extension 
    if($product_image1!="" ||$product_image2!="" ||$product_image3!="" ||$product_image4!="" ||$product_image5!=""){
    $product_image1Extension = strtolower(pathinfo($product_image1, PATHINFO_EXTENSION));
    $product_image2Extension = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));
    $product_image3Extension = strtolower(pathinfo($product_image3, PATHINFO_EXTENSION));
    $product_image4Extension = strtolower(pathinfo($product_image4, PATHINFO_EXTENSION));
    $product_image5Extension = strtolower(pathinfo($product_image5, PATHINFO_EXTENSION));
    if (
        !in_array($product_image1Extension, $allowedExtensions) ||
        !in_array($product_image2Extension, $allowedExtensions) ||
        !in_array($product_image3Extension, $allowedExtensions) ||
        !in_array($product_image4Extension, $allowedExtensions) ||
        !in_array($product_image5Extension, $allowedExtensions)
    ) {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }

    // Move uploaded files to a permanent location
    $targetDir = "../upload/cards/";
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

    $sql = "INSERT INTO `bid_product_details` (`product_name`, `product_new_price`, `product_old_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `category_name`, `sub_category_id`, `specification`, `product_description`,`shipping`,`brand_name`,`min`,`expiry_time`,`type`,`bid_close`,`vendor_id`)
    VALUES ('$pname', '$product_new_price', '$product_old_price', '$product_image1', '$product_image2', '$product_image3', '$product_image4', '$product_image5', '$category_name', '$sub_category_id', '$specification', '$product_description','$shipping','$brand_name','$min', '$expiry_time', '$type','$bid_close','$vendor_id')";
    

    if ($conn->query($sql)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }
}

include('include/footer.php')
?>




<!-- <?php
// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Delete expired products
$sql = "DELETE FROM products WHERE start_time + INTERVAL duration MINUTE <= NOW()";
$conn->query($sql);

// Close the database connection
$conn->close();
?> -->









<?php

date_default_timezone_set('Asia/Kolkata');
$current_time= date('d-m-Y H:i');
       $end_time = date('Y-m-d H:i:s', strtotime($min .' + '. $bid_close .'minutes'));




   print_r(date('Y-m-d H:i:s'));
          print_r($end_time);



if(date('Y-m-d H:i:s') <= $min){

 echo 'This product has going to be start.<br>';?>
 const durationInMinutes<?php echo $bid_id;  ?> = <?php echo "dsds"?>;
 <?php } 

  
 elseif($min <= $end_time ) {
echo 'This product has statrt for bidding.<br>'; ?>
const durationInMinutes<?php echo $bid_id;  ?> = <?php echo $bid_close;?>;
<?php } 

   elseif($end_time <= date('Y-m-d H:i:s')) {
        echo 'This product has expired.<br>';?>
        const durationInMinutes<?php echo $bid_id;  ?> = <?php echo $bid_close;?>;
        <?php } ?>

// Delete expired products<?
$sqld = "DELETE FROM `bid_product_details` WHERE min + INTERVAL bid_close MINUTE <= NOW()";
$db->query($sqld);?>


