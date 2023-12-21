<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treasure Troove</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">

</head>

<body>
    <?php include("include/database.php");

    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `wishlist` WHERE wishlist_id =$id";
        $result = mysqli_query($db, $sql);
        if ($result) {
            // echo "<script>alert('Remove From Wislist successfully!');</script>";
            // echo "<script>window.location.href ='wishlist.php'</script>";
    ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Remove From Wislist successfully!",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "wishlist.php";
                });
            </script>
    <?php

        } else {
            echo (mysqli_error($db));
        }
    }

    ?>

</body>

</html>