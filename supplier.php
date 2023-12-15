<?php include("include/head.php");
include('include/database.php');
if (isset($_SESSION['user_details'])) 
$user_id=$_SESSION['user_details']['user_id']; ?>
<!-- Start Employers Area -->
<div class="employers-area ptb-100">
    <div class="container">
       <style>

.single-employer-item{
    /* border:1px solid grey; */
    display: grid;
    place-items: center;
}
.single-employer-item:hover{
    border:1px solid #0cebeb;
}

       </style>
        <div class="text-center" >
            <h1 style="margin-bottom:60px;margin-top:20px;"><u>Vendors</u></h1>
        </div>

        <div class="row justify-content-center">
                <?php
                
                 $sql = "SELECT * FROM `vendor_details`
            JOIN `largecards` ON `vendor_details`.`vendor_id`=`largecards`.`vendor_id`  ORDER BY `vendor_details`.`vendor_id`";
                $result = mysqli_query($db, $sql);
                // print_r($result);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $vendor_name = $row['name'];
                        $img = $row['vendor_image'];
                        $product_pdf = $row['pdf'];
                        $vendor_id= $row['vendor_id'];
                        ?>
                    <div class="col-lg-3 col-md-6 employer-more-item ">
                        <div class="single-employer-item">
                            <div class="company-logo">
                                <!-- <a href="employers-details.php?job_id=<?php echo$job_id?>"> -->
                                <img src="./upload/vendors/<?php echo $img;?>" alt="image"></a>
                            </div>
                            <h3>
                                <a href="employers-details.php?job_id=<?php echo$job_id?>">
                                    <?php echo $vendor_name; ?>
                                </a>
                            </h3>
                            <!-- <span><i class="flaticon-location"></i>
                                <?php echo $product_pdf; ?>
                            </span> -->
                            <button type="button" class="btn btn-outline-info"><a href="vendor_products_page.php?vendor_id=<?php echo$vendor_id?>" id=""  style="cursor:pointer">View Products</a></button><br>
                            <button type="button" class="btn btn-outline-info"><a href="./upload/largecards/<?php echo $product_pdf ?>" target="_blank">View Catalog</a></button>

                            


                            <!-- <ul class="employer-tag-list">
                                <li>Featured</li>
                                <li class="urgent">Urgent</li>
                                <li class="private">Private</li>
                                <li>Part Time</li>
                            </ul> -->

                            <div class="bookmark-btn">
                                <!-- <i class="ri-bookmark-line"></i> -->
                            </div>
                            <div class="hover-bookmark-btn">
                                <!-- <i class="ri-bookmark-fill"></i> -->
                            </div>
                        </div>

                    </div>

                <?php
                }
            }
            ?>
        </div>
       
    </div>
</div>
</div>
<!-- End Employers Area -->
<?php include("include/footer.php"); ?>

</html>
