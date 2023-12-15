
<?php 
// include('include/database.php');
include("include/job_menu.php"); ?><br>

            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Post a New Job</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard.php">Home</a></li>
                    <!-- <li class="item"><a href="dashboard.php">Dashboard</a></li> -->
                    <li class="item">Post a New Job</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->
            
            <!-- Start Post a New Job Area -->


            <?php
if(isset($_POST['submit'])){
    include('include/database.php');
    
    $jobtitle=$_POST['job_title'];
    $jobdescription=$_POST['job_description'];
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];
    $jobtype=$_POST['job_type'];
    $specialisms=$_POST['specialisms'];
    $offeredsalary=$_POST['offered_salary'];
    $careerlevel=$_POST['career_level'];
    $experience=$_POST['experience'];
    $gender=$_POST['gender'];
    $industry=$_POST['industry'];
    $qualification=$_POST['qualification'];
    $application_deadline=$_POST['application_deadline_date'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $complete_address=$_POST['complete_address'];
    $find_on_map=$_POST['find_on_map'];
    $latitude=$_POST['latitude'];
    $longtitude=$_POST['longtitude'];

    $sql="INSERT INTO `job_details`(`job_title`, `job_description`, `first_name`, `last_name`, `email`, `job_type`, `specialisms`, `offered_salary`, `career_level`, `experience`, `gender`, `industry`, `qualification`, `deadline_date`, `country`, `city`, `complete_address`, `find_on_map`, `latitude`, `longitude`) VALUES ('$jobtitle','$jobdescription','$firstname','$lastname','$email','$jobtype','$specialisms','$offeredsalary','$careerlevel','$experience','$gender','$industry','$qualification','$application_deadline','$country','$city','$complete_address','$find_on_map','$latitude','$longtitude')";

    $result_query=mysqli_query($db,$sql);
    if($result_query){
        echo 'Data inserted successfully.';
    }else{
        echo 'Error: '.$db->error;
    }
}
?>

<!-- Your HTML code here -->
<?php 
?>

<div class="breadcrumb-area">
    <!-- Breadcrumb HTML code here -->
</div>

<div class="post-a-new-job-box" style="display:grid;place-items:center;">
                <h3>Post Your Job</h3>
    
                <form method="post" id="job-post-form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="job_title" class="form-control" placeholder="Job Title Here">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea cols="30" name="job_description" rows="6" placeholder="Short description..." class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Type</label>

                                <select class="selectize-filter" name="job_type">
                                    <option value="1">Select</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Specialisms</label>

                                <select class="selectize-filter" name="specialisms">
                                    <option value="1">Select</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Offered Salary</label>
                                
                                <select class="selectize-filter" name="offered_salary">
                                    <option value="1">Select</option>
                                    <option value="2">$1500</option>
                                    <option value="3">$2500</option>
                                    <option value="4">$5000</option>
                                    <option value="5">$3500</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Career Level</label>
                                
                                <select class="selectize-filter" name="career_level" >
                                    <option value="1">Select</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Experience</label>
                                
                                <select class="selectize-filter" name="experience" >
                                    <option value="1">Select</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Gender</label>

                                <select class="selectize-filter" name="gender" >
                                    <option value="1">Select</option>
                                    <option value="2">Male</option>
                                    <option value="3">Female</option>
                                    <option value="4">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Industry</label>
                                
                                <select class="selectize-filter" name="industry" >
                                    <option value="1">Select</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Qualification</label>
                                
                                <select class="selectize-filter" name="qualification" >
                                    <option value="1">Select</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Digital & Creative</option>
                                    <option value="4">Human Resources</option>
                                    <option value="5">Management</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Application Deadline Date</label>
                                <input type="text" name="application_deadline_date" class="form-control" placeholder="Application Deadline Date">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Country</label>
                                
                                <select class="selectize-filter" name="country" >
                                    <option value="1">Select</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Japan</option>
                                    <option value="4">Germany</option>
                                    <option value="5">United States</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>City</label>
                                
                                <select class="selectize-filter" name="city" >
                                    <option value="1">Select</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Japan</option>
                                    <option value="4">Germany</option>
                                    <option value="5">United States</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Complete Address</label>
                                <input type="text" name="complete_address" class="form-control" placeholder="32, Wales Street, New York, USA">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Find On Map</label>
                                <input type="text" name="find_on_map" class="form-control" placeholder="32, Wales Street, New York, USA">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" name="latitude" class="form-control" placeholder="Melbourne">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" name="longtitude" class="form-control" placeholder="Melbourne">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" name="submit" class="default-btn">Post A Job <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("form").submit(function(e) {
        var inputs = $("input[type='text'], textarea");

        for (var i = 0; i < inputs.length; i++) {
            var input = $(inputs[i]);
            var value = input.val().trim();
            var errorMsg = input.siblings(".error-msg");

            if (value === "") {
                if (errorMsg.length === 0) {
                    input.after("<span class='error-msg' style='color:red;'>This field is required</span>");
                }
                e.preventDefault();
            } else {
                errorMsg.remove();
            }
        }
    });
});
</script>


<?php include("include/footer.php"); ?>

           
            </div>
            <!-- End Post a New Job Area -->

            <?php include("include/footer.php"); ?>