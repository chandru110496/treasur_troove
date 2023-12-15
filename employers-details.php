
<?php include("include/head.php");
include('include/database.php');

if (isset($_SESSION['user_details'])) 
$user_id=$_SESSION['user_details']['user_id']; ?>

<?php


$job=$_GET['job_id'];
                $sql = "SELECT * FROM `jobs` WHERE `job_id`='$job'";
                $result = mysqli_query($db, $sql);
                //  print_r($result);
                if ($result) {
                    if ($row = mysqli_fetch_assoc($result)) {
       $jobimg = $row['job_img'];
        $job_title = $row['job_title'];
        $job_location = $row['job_location'];
        $job_description = $row['job_description'];
        $about_company = $row['about_company'];
        $job_resp = $row['job_resp'];
        $key_skills= $row['key_skills'];
        $company_name = $row['company_name'];
        $Primary_Industry= $row['Primary_Industry'];
        $Founded= $row['Founded'];
        $Phone=$row['Phone'];
        $Email= $row['Email'];
        $Experience = $row['Experience'];
        $Qualification= $row['Qualification'];
        $Salary = $row['Salary'];
        }
    }?>       
        <!-- Start Employers Details Area -->
        <div class="employers-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12" style="margin-top: 10px;">
                        <div class="employers-details-desc">
                            <div class="employers-desc-content">
                                <h3>About Company</h3>
                                <p><?php echo $about_company;?></p>
                            </div>       
                            <div class="employers-desc-content">
                                <h3>Job Responsibilities</h3>                                
                                <ul class="responsibilities-list">
                                    <li><i class="ri-check-fill"></i> <?php echo $job_resp;?></li>
                                    <!-- <li><i class="ri-check-fill"></i> Enterprise and entrepreneurial skills</li>
                                    <li><i class="ri-check-fill"></i> Negotiation and persuasion</li>
                                    <li><i class="ri-check-fill"></i> Understand where the other person is coming from so that you can both get what</li>
                                    <li><i class="ri-check-fill"></i> Accurately estimate design tickets during planning sessions</li>
                                    <li><i class="ri-check-fill"></i> Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                                    <li><i class="ri-check-fill"></i> Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>
                                    <li><i class="ri-check-fill"></i> Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>
                                    <li><i class="ri-check-fill"></i> Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li> -->
                                </ul>
                            </div>
                            <div class="employers-desc-content">
                                <h3>Key Skills</h3>
                                
                                <ul class="responsibilities-list">
                                    <li><i class="ri-check-fill"></i> <?php echo $key_skills;?></li>
                                    <!-- <li><i class="ri-check-fill"></i> Enterprise and entrepreneurial skills</li>
                                    <li><i class="ri-check-fill"></i> Negotiation and persuasion</li>
                                    <li><i class="ri-check-fill"></i> Understand where the other person is coming from so that you can both get what</li>
                                    <li><i class="ri-check-fill"></i> Accurately estimate design tickets during planning sessions</li>
                                    <li><i class="ri-check-fill"></i> Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                                    <li><i class="ri-check-fill"></i> Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>
                                    <li><i class="ri-check-fill"></i> Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>
                                    <li><i class="ri-check-fill"></i> Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li> -->
                                </ul>
                            </div>

                            <div class="employers-desc-image">
                                <img src="assets/images/employers-details.jpg" alt="image">
                            </div>

                           

                          
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="employers-details-sticky">
                            <form action="" method="POST">
                            <div class="employers-details-information" style="margin-top: 10px;">
                                <div class="information-box">
                                    <div class="company-logo" >
                                        
                                        <img src="./upload/jobs/<?php echo $jobimg;?>" alt="image">
                                    </div>
                                    
                                    <h3><?php echo $company_name?></h3>
                                    <span><?php echo $job_title?></span>
                                </div>
    
                                <ul class="information-list-box">
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Primary Industry:</span>
                                            <?php echo $Primary_Industry?>
                                        </div>
                                    </li>

                                    <!-- <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Company Size:</span>
                                            701-1-000
                                        </div>
                                    </li> -->

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Founded In:</span>
                                            <?php echo $Founded?>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Phone</span>
                                            <a href="tel:00901361246725"><?php echo    $Phone?></a>
                                        </div>
                                    </li>
    
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Email</span>
                                            <a href="#"><?php echo $Email?></a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Location</span>
                                            <?php echo  $job_location?>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Experience</span>
                                            <?php echo $Experience?>
                                        </div>
                                    </li>
    
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Qualification</span>
                                            <?php echo $Qualification?>
                                        </div>
                                    </li>
    
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Salary</span>
                                            <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                            <input type="hidden" name="job_id" value="<?php echo $job;?>">
                                            <?php echo $Salary?>
                                        </div>
                                    </li>
                                </ul>
    
                                <div class="employers-details-btn-box">
                                    <button class="default-btn" type="submit" name="apply_job" value="submit">Contact Me <i class="flaticon-send"></i></button>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <?php
if (isset($_POST['apply_job'])) {
    $job= $_POST['job_id'];
    $user= $_POST['user_id'];
   
 $sql ="INSERT INTO `job_reports`(`user_id`,`job_id`) VALUES ('$user','$job')";
    $result = $db->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Hii   ".$_SESSION['user_name']."  You Job Applied Succesfully!');</script>";
    } else {
        echo "ERROR: Could not execute $sql.". $db->error;

    }


        
    }



   

?>





        <!-- End Employers Details Area -->

        <?php include("include/footer.php"); ?>