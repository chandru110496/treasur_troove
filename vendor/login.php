<?php include("include/conn.php"); ?>
<?php
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $sql = "SELECT * FROM `vendor_details` WHERE email='$email' AND password='$password'";
    $query = mysqli_query($conn, $sql);											
    if (mysqli_num_rows($query) > 0) {
    $i=1;
    while($user = mysqli_fetch_array($query)) {
        $_SESSION['admin_name'] = $user['name'];
        $_SESSION["id"] = $user["vendor_id"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["type"] = $user["type"];
         header("location: index.php");
        exit();
        
    }}
    
    else {
        $error_message = "Invalid email or password.";
        echo '<div class="alert-container" id="alert-container">
        <div class="alert-box" id="alert-box">
            <span class="alert-message" id="alert-message"></span>
            <button class="alert-close" id="alert-close">&times;</button>
        </div>
    </div>
    ';
    }
    
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flex-admin.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <style>
        /* Alert container */
.alert-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    display: none;
    z-index: 1;
}
/* Alert box */
.alert-box {
    position: relative;
    margin: 10% auto;
    width: 80%;
    max-width: 600px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
}
/* Alert message */
.alert-message {
    display: block;
    padding: 20px;
    font-size: 1.2rem;
    text-align: center;
}
/* Alert close button */
.alert-close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 10px 15px;
    background-color: #f44336;
    color: #fff;
    font-size: 1.2rem;
    border: none;
    border-radius: 0 3px 0 0;
    cursor: pointer;
}
    </style>
</head>

<body class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-banner text-center">
                    <h1><i class="fa fa-gears"></i>Vendor  Login</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong>Login to Vendor</strong>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <form method="POST" action="" accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" autocomplete="off">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-lg btn-green btn-block" value="Sign IN">Sign IN</button>
                            </fieldset>
                            <br>
                            <p class="small">
                                <a href="#">Forgot your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GLOBAL SCRIPTS -->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>
    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>
    <script>
        // Get the alert container, box, message, and close button elements
var alertContainer = document.getElementById("alert-container");
var alertBox = document.getElementById("alert-box");
var alertMessage = document.getElementById("alert-message");
var alertClose = document.getElementById("alert-close");

// Function to show the alert popup with a message
function showAlert(message) {
    // Set the message text
    alertMessage.textContent = message;
    // Display the alert container
    alertContainer.style.display = "block";
}

// Function to hide the alert popup
function hideAlert() {
    // Hide the alert container
    alertContainer.style.display = "none";
}

// Add event listener to close button
alertClose.addEventListener("click", function() {
    hideAlert();
});

// Use the showAlert function to display the error message
showAlert("<?php echo $error_message; ?>");

    </script>
</body>
<!-- Mirrored from blackrockdigital.github.io/theme-flex-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 04:10:49 GMT -->

</html>
 


<?php              



// Step 1: Create a database table for users
// ...

// Step 2: Create a login form
// ...

// Step 3: Authenticate user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    $sql = "SELECT * FROM admin WHERE email = '$email' AND  password = '$password'";
    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
  
      session_start();
      $_SESSION["id"] = $row["id"];
      $_SESSION["username"] = $row["username"];
      $_SESSION["email"] = $row["email"];
      $_SESSION["type"] = $row["type"];
  
      header("Location: dashboard.php");
      exit;
    } else {
      echo "Invalid username or password";
    }
  }
  
  // Step 4: Create separate pages for admin and vendor

  
//   if ($_SESSION["type"] == "admin") {
    // Display admin dashboard
//   } else if ($_SESSION["type"] == "vendor") {
    // Display vendor dashboard
//   } else {
    // Redirect to login page
    // header("Location: login.php");
    // exit;
//   }
  
  // Step 5: Implement access control
//   if ($_SESSION["type"] != "admin") {
    // User does not have permission to access this page
    // header("Location: login.php");
    // exit;
//   }














?>