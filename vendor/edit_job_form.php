<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
$sql = "SELECT *FROM `jobs` WHERE id=$id";
$result = mysqli_query($conn, $sql);
// print_r($result);
$row = mysqli_fetch_assoc($result);

$jobimg = $row['job_img'];
$jobTitle = $row['job_title'];
$jobLocation = $row['job_location'];
$jobDescriptiion = $row['job_description'];
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

?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Jobs</h1>
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
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Jobs List <a href="add_product.php" id="add_new_service" class="btn btn-green btn-sm"
                                    style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add product</a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">Panel Heading</div> -->
                            <div class="panel-body" id="add_vndr">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="">Image</label>
                                        <img style="width:100px;height:66px;" src="../upload/jobs/<?=$jobimg?>" alt=""><br>
                                        <input type="file" class="form-control" name="job_img" id="job_img" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Job Title</label>
                                        <input type="text" class="form-control" value="<?=$jobTitle?>"
                                            name="job_title" id="job_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_location">Job Location</label>
                                        <input type="text" class="form-control" value="<?=$jobLocation?>"
                                            name="job_location" id="job_location">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_description">Job Description</label>
                                        <textarea class="form-control" value="<?=$jobDescriptiion?>"
                                            name="job_description" id="job_description" style="resize:none;"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_description">About Company</label>
                                        <textarea class="form-control" value="<?= $about_company?>"
                                            name="about_company" id="about_company" style="resize:none;"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_description">Job Responsibilities</label>
                                        <textarea class="form-control" value="<?=$job_resp?>" name="job_resp"
                                            id="job_resp" style="resize:none;"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_description">Key Skills</label>
                                        <textarea class="form-control" name="key_skills" value="<?=$key_skills?>"
                                            id="key_skills" style="resize:none;"></textarea>
                                    </div>



                                    <div class="mb-3">
                                        <label for="job_title">company_name</label>
                                        <input type="text" class="form-control" value="<?=$company_name?>"
                                            name="company_name" id="company_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Primary Industry</label>
                                        <input type="text" class="form-control" value="<?=$Primary_Industry?>"
                                            name="Primary_Industry" id="Primary_Industry">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Founded In</label>
                                        <input type="text" class="form-control" value="<?=$Founded?>" name="Founded"
                                            id="Founded">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Phone</label>
                                        <input type="text" class="form-control" value="<?=$Phone?>" name="Phone"
                                            id="Phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Email</label>
                                        <input type="text" class="form-control" value="<?=$Email?>" name="Email"
                                            id="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Experience</label>
                                        <input type="text" class="form-control" value="<?=$Experience?>"
                                            name="Experience" id="Experience">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Qualification</label>
                                        <input type="text" class="form-control" value="<?=$Qualification?>"
                                            name="Qualification" id="Qualification">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_title">Salary</label>
                                        <input type="text" class="form-control" value="<?=$Salary?>" name="Salary"
                                            id="Salary">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <a href="vendors.php"><button class="btn btn-blue center-block"><i
                                            class="fa fa-backward" aria-hidden="true"></i><span>Go Back vendors
                                            page</span> </button></a>
                            </div>
                        </div>

                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
            </div>
        </div>

        <?php


if (isset($_POST['submit'])) {$job_img = $_FILES['job_img']['name'];$job_title = $_POST['job_title'];$job_location = $_POST['job_location'];$job_description = $_POST['job_description'];


    $about_company = $_POST['about_company'];$job_resp = $_POST['job_resp'];
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

    $sql = "UPDATE `jobs` SET `job_img`='$job_img',`job_title`='$job_title',`job_location`='$job_location',`job_description`='$job_description',
    `about_company`='$about_company',`job_resp`='$job_resp',`key_skills`='$key_skills',`company_name`='$company_name',`Primary_Industry`='$Primary_Industry',`Founded`='$Founded',`Phone`='$Phone', `Email`='$Email', `Experience`='$Experience', `Qualification`='$Qualification',`Salary`='$Salary'
    WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Updated Jobs successfully!');</script>";
        echo "<script>window.location.href ='jobs.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}
    ?>



       <? include('./include/footer.php');

        ?>