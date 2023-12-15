<?php
include("include/header.php");
include("include/conn.php");
session_start();

?>

<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper" style="min-height:142vh;">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Change Password</h1>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" id="">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php

                            // Check if admin ID is stored in the session
                            if (!isset($_SESSION['admin_id'])) {
                                // Admin ID is not set, redirect to login page or handle accordingly
                                header("Location: login.php"); // Replace "login.php" with your actual login page
                                exit();
                            }

                            // Retrieve the admin ID from the session
                            $adminID = $_SESSION['admin_id'];

                            // Database connection and password change logic
                            include("include/conn.php");

                            if (isset($_POST['old_pass']) && isset($_POST['new_pass']) && isset($_POST['confirm_pass'])) {
                                $oldPassword = $_POST['old_pass'];
                                $newPassword = $_POST['new_pass'];
                                $confirmPassword = $_POST['confirm_pass'];

                                // Query the database to retrieve the current admin password
                                $query = "SELECT * FROM admin_login WHERE Admin_ID = '$adminID'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);

                                // Verify if the old password matches the one stored in the database
                                if ($row['Admin_Pwd'] === $oldPassword) {
                                    // Check if the new password and confirm password match
                                    if ($newPassword === $confirmPassword) {
                                        // Update the admin password
                                        $updateQuery = "UPDATE admin_login SET Admin_Pwd = '$newPassword', Admin_Cpwd = '$newPassword' WHERE Admin_ID = '$adminID'";
                                        mysqli_query($conn, $updateQuery);

                                        // Display success message or handle accordingly
                                        echo "<script>alert('Password Changed successfully!');</script>";
                                        echo "<script>window.location.href ='index.php';</script>";
                                    } else {
                                        $message = "New password and confirm password do not match.";
                                    }
                                } else {
                                    $message = "Old password is incorrect.";
                                }
                            }
                        ?>





                        <!-- Add your HTML content here -->
                        <?php if (isset($message)) { ?>
                        <div class="success-message"><?php echo $message; ?></div>
                        <?php } ?>
                        <div class="col-lg-8">

                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="old_pass">Enter Your Old Password</label>
                                    <input type="password" class="form-control" name="old_pass" id="old_pass" required>
                                </div>

                                <div class="form-group">
                                    <label for="new_pass">Enter Your New Password</label>
                                    <input type="password" class="form-control" name="new_pass" id="new_pass" required>
                                </div>

                                <div class="form-group">
                                    <label for="confirm_pass">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm_pass" id="confirm_pass"
                                        required>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Change Password">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->

    </div>
</div>

<?php
if (isset($_POST['update_profile'])) {
    $insub_cat_name = $_POST['insub_cat'];
    $sub_cat_name = $_POST['subcategory'];
    $cat_name = $_POST['category'];
    $brand = $_POST['brand'];
    $insub_cat_desc = $_POST['insub_cat_description'];

    $sql = "UPDATE `product_inner_sub_category` SET `insub_cat_name`='$insub_cat_name', `insub_cat_description`='$insub_cat_desc', `sub_cat_for_id`='$sub_cat_name', `category_for_id`='$cat_name', `brand_for_id`='$brand' WHERE insub_cat_id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Updated successfully!');</script>";
        echo "<script>window.location.href ='inner_sub_category.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- end MAIN PAGE CONTENT -->

<?php
include("include/footer.php");
?>