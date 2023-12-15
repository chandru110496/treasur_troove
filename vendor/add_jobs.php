<?php include("include/header.php");
include('include/conn.php');
// check if the user has clicked the button "UPLOAD" 
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>New Jobs</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">category</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->

        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <button class="btn btn-green btn-sm">total earning <span
                style="background-color: whitesmoke; color: black;">1234</span></button>
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" id="add_vndr">
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="job_img" id="job_img">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Job Title</label>
                                <input type="text" class="form-control" name="job_title" id="job_title">
                            </div>
                            <div class="mb-3">
                                <label for="job_location">Job Location</label>
                                <input type="text" class="form-control" name="job_location" id="job_location">
                            </div>
                            <div class="mb-3">
                                <label for="job_description">Job Description</label>
                                <textarea class="form-control" name="job_description" id="job_description" style="resize:none;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="job_description">About Company</label>
                                <textarea class="form-control" name="about_company" id="about_company" style="resize:none;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="job_description">Job Responsibilities</label>
                                <textarea class="form-control" name="job_resp" id="job_resp" style="resize:none;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="job_description">Key Skills</label>
                                <textarea class="form-control" name="key_skills" id="key_skills" style="resize:none;"></textarea>
                            </div>



                            <div class="mb-3">
                                <label for="job_title">company_name</label>
                                <input type="text" class="form-control" name="company_name" id="company_name">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Primary Industry</label>
                                <input type="text" class="form-control" name="Primary_Industry" id="Primary_Industry">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Founded In</label>
                                <input type="text" class="form-control" name="Founded" id="Founded">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Phone</label>
                                <input type="text" class="form-control" name="Phone" id="Phone">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Email</label>
                                <input type="text" class="form-control" name="Email" id="Email">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Experience</label>
                                <input type="text" class="form-control" name="Experience" id="Experience">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Qualification</label>
                                <input type="text" class="form-control" name="Qualification" id="Qualification">
                            </div>
                            <div class="mb-3">
                                <label for="job_title">Salary</label>
                                <input type="text" class="form-control" name="Salary" id="Salary">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <a href="vendors.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
                                    aria-hidden="true"></i><span>Go Back vendors page</span> </button></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
     if (isset($_POST['submit'])) {
        $job_img = $_FILES['job_img']['name'];
        $job_title = $_POST['job_title'];
        $job_location = $_POST['job_location'];
        $job_description = $_POST['job_description'];
        $about_company = $_POST['about_company'];
        $job_resp = $_POST['job_resp'];
        $key_skills= $_POST['key_skills'];
        $company_name = $_POST['company_name'];
        $Primary_Industry= $_POST['Primary_Industry'];
        $Founded= $_POST['Founded'];
        $Phone=$_POST['Phone'];
        $Email= $_POST['Email'];
        $Experience = $_POST['Experience'];
        $Qualification= $_POST['Qualification'];
        $Salary = $_POST['Salary'];
        
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    
        $job_imgExtension = strtolower(pathinfo($job_img, PATHINFO_EXTENSION));
        if (!in_array($job_imgExtension, $allowedExtensions)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            exit;
        }
    
        $targetDir = "../upload/jobs/";
        $targetImage = $targetDir . basename($job_img);
        move_uploaded_file($_FILES['job_img']['tmp_name'], $targetImage);
    
        // $sql = "INSERT INTO `jobs`(`job_img`, `job_title`, `job_location`, `job_description`) S ('$job_img','$job_title','$job_location','$job_description')";



        $sql =" INSERT INTO `jobs`(`job_img`, `job_title`, `job_location`, `job_description`, `about_company`, `job_resp`, `key_skills`, `company_name`, `Primary_Industry`, `Founded`, `Phone`, `Email`, `Experience`, `Qualification`, `Salary`) VALUES ('$job_img','$job_title','$job_location','$job_description',' $about_company','$job_resp','$key_skills','$company_name','$Primary_Industry','$Founded ','$Phone','$Email','$Experience','$Qualification','$Salary')";

        $query = mysqli_query($conn, $sql);
    
        if ($query) {
            echo "<script>alert('Add Your Job successfully!');</script>";
        } else {
            echo "<script>alert('Data insertion error');</script>";
            echo "Error: " . mysqli_error($conn);
        }
    }
        ?>
      


<?php include("include/footer.php"); ?>