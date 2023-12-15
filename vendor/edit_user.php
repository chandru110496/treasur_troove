<?php
include('include/header.php');
include('include/conn.php');
$id=$_GET['edit'];

$sql="SELECT * FROM `user_details` WHERE user_id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

$name=$row['user_name'];
$email=$row['email_address'];
$mobile=$row['mobile_number'];
$pass=$row['password'];
$cpass=$row['cpassword'];


?>

<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit User Details</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">User</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <!-- <button class="btn btn-green btn-sm">total earning <span
                style="background-color: whitesmoke; color: black;">1234</span></button> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" name="fname" value="<?=$name?>" class="form-control" placeholder="Enter your Name"
                                    id="username">
                                <p id="name_error" style="color:red;"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" value="<?=$email?>" class="form-control" placeholder="Enter your email"
                                    id="email">
                                <p id="email_error" style="color:red;"></p>
                            </div>
                            <div class="form-group">
                                <input type="password" value="<?=$pass?>" name=password class="form-control" placeholder="Password"
                                    id="password">
                                <p id="pass_error" style="color:red;"></p>
                            </div>
                            <div class="form-group">
                                <input type="password" value="<?=$cpass?>" name="cpassword" class="form-control"
                                    placeholder="Confirm Password" id="cpassword">
                                <p id="cpass_error" style="color:red;"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?=$mobile?>" name="mobile" class="form-control"
                                    placeholder="Enter Your Mobile Number" id="mobile">
                                <p id="mobile_error" style="color:red;"></p>
                            </div>
                            <div class="remember-me-wrap">
                                <p>
                                    <input type="checkbox" id="test2">
                                    <label for="test2">I Accept All <a href="terms-of-service.php">Terms &
                                            Conditions</a></label>
                                <p id="test_error" style="color:red;"></p>
                                </p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="update"
                                    value="submit">Submit</button>
                            </div>
                            <a href="slider.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back Slider page</span> </button></a>
                        </form>
                        <script src="../assets/js/jquery.min.js"></script>
<script>
                    $(document).ready(function() {
                    $("form").submit(function(event) {
                        var fname = $("#username").val();
                        var email = $("#email").val();
                        var password = $("#password").val();
                        var cpassword = $("#cpassword").val();
                        var mobile = $("#mobile").val();
                        var isChecked = $("#test2").is(":checked");
                        
                        if (fname == "") {
                        // alert("Please enter your name.");
                        document.getElementById('name_error').innerHTML="Please enter Your Name";
                        event.preventDefault();
                        }else if (fname.length <= 3) {
                        document.getElementById('name_error').innerHTML="Username must have more than 3 letters.";
                        event.preventDefault();
                        }
                        else{
                        document.getElementById('name_error').innerHTML="";

                        }


                        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (email == "" || !emailPattern.test(email)) {
                        // alert("Please enter a valid email address.");
                        document.getElementById('email_error').innerHTML="Please enter a valid email address.";
                        event.preventDefault();
                        }else{
                            document.getElementById('email_error').innerHTML="";

                        }
                        if (password == "") {
                        // alert("Please enter your password.");
                        document.getElementById('pass_error').innerHTML="Please enter Your Password";
                        event.preventDefault();
                        }else{
                        document.getElementById('pass_error').innerHTML="";
                        }
                        if (cpassword == "") {
                        // alert("Please confirm your password.");
                        document.getElementById('cpass_error').innerHTML="Please enter Your Confirm Password";
                        event.preventDefault();
                        }else if(password != cpassword) {
                        // alert("Passwords do not match.");
                        document.getElementById('cpass_error').innerHTML="Password do not match";
                        event.preventDefault();
                        }
                        else{
                        document.getElementById('cpass_error').innerHTML="";
                        }
                        // Mobile Number Validation
                        var mobilePattern = /^[6-9]\d{9}$/;
                            if (mobile == "" || !mobilePattern.test(mobile)) {
                                $('#mobile_error').html("Please enter a valid 10-digit mobile number starting with 6-9");
                                event.preventDefault();
                            } else {
                                $('#mobile_error').html("");
                            }
                        if (!isChecked) {
                        // alert("Please accept the terms and conditions.");
                        document.getElementById('test_error').innerHTML="Please accept the terms and conditions.";
                        event.preventDefault();
                        }else{
                        document.getElementById('test_error').innerHTML="";
                        }
                    });
                    });
</script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['update'])) {
    $firstname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];

    // Check if email already exists
  
        $sql = "UPDATE `user_details` SET `user_name`='$firstname',
        `email_address`='$email',
        `mobile_number`='$mobile',`password`='$password',`cpassword`='$cpassword' WHERE user_id=$id";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "<script>alert('Successfully Updated');</script>";
            echo "<script>window.location.href = 'user.php';</script>";
            
           
        } else {
            echo "ERROR: Could not execute $sql. " . $conn->error;
        }
    }


include('include/footer.php');
?>