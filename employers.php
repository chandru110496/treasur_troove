<?php include("include/head.php");
include('include/database.php');
if (isset($_SESSION['user_details'])) 
$user_id=$_SESSION['user_details']['user_id']; ?>
<!-- Start Employers Area -->
<div class="employers-area ptb-100">
    <div class="container">
       
        <div class="text-center" >
            <h1 style="margin-bottom:60px;margin-top:20px;">Jobs For You</h1>
        </div>

        <div class="row justify-content-center">
                <?php
                $sql = "SELECT * FROM `jobs`";
                $result = mysqli_query($db, $sql);
                // print_r($result);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $jobimg = $row['job_img'];
                        $job_id = $row['job_id'];
                        $jobTitle = $row['job_title'];
                        $jobLocation = $row['job_location'];
                        $jobDescriptiion = $row['job_description'];

                        ?>
                    <div class="col-lg-3 col-md-6 employer-more-item ">
                        <div class="single-employer-item">
                            <div class="company-logo">
                                <a href="employers-details.php?job_id=<?php echo$job_id?>">
                                <img src="./upload/jobs/<?php echo $jobimg;?>" alt="image"></a>
                            </div>
                            <h3>
                                <a href="employers-details.php?job_id=<?php echo$job_id?>">
                                    <?php echo $jobTitle; ?>
                                </a>
                            </h3>
                            <span><i class="flaticon-location"></i>
                                <?php echo $jobLocation; ?>
                            </span>
                            <p>
                                <?php echo $jobDescriptiion; ?>
                            </p>

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
        <div class="load-more-btn">
            <a href="#" id="loadmore" class="default-btn">Load More <i class="flaticon-loading"></i></a>
        </div>
    </div>
</div>
</div>
<!-- End Employers Area -->
<?php include("include/footer.php"); ?>

</html>
