<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treasure Troove</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">

</head>

<body>
    <?php
    include('include/database.php');
    session_start();

    extract($_GET);
    // echo  $product_id;
    // echo  $user_id;

    $user_id;
    $user;
    $user_table;
    $notValid = true;

    if (isset($_SESSION['user_details'])) {
        $user_id = $_SESSION['user_details']['user_id'];
        $user_table = "user_details";
        $user = "user_id";
        $notValid = false;
    }
    //  else if (isset($_SESSION['vendor_details'])) {
    //   $user_id = $_SESSION['vendor_details']['vendor_id'];
    //   $user_table = "vendor_details";
    //   $user = "vendor_id";
    //   $notValid=false;
    // } else if (isset($_SESSION['s_provider'])) {
    //   $user_id = $_SESSION['s_provider']['user_id'];
    //   $user_table = "service_provider";
    //   $user = "user_id";
    //   $notValid=false;
    // }
    if ($notValid) {
        header('Location: profile-authentication.php');
    }


    // print_r($_GET);


    // $product_id = $_REQUEST['product_id'];
    // $user_id = $_REQUEST['user_id'];
    function successMessage()
    {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: "success",
                title: "Add to your wishlist",
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location.href = "buy.php";
            });
        </script>
    <?php
    }

    $sql = "SELECT * FROM  wishlist WHERE product_id='$product_id' AND user_id='$user_id' ";
    $row = $db->query($sql);
    if ($row->num_rows > 0)
        successMessage();
    else {
        $sql = "INSERT INTO `wishlist`( `product_id`, `user_id`) VALUES ('$product_id','$user_id')";
        if ($db->query($sql)) {
            successMessage();
        } else {
            echo "ERROR: Could not able to execute $sql. " . $db->error;
        }
    }
    ?>

</body>

</html>