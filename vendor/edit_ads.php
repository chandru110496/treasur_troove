<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
// echo $id;
$sql = "SELECT * FROM `advertise` WHERE `ads_id`=$id";
$result=mysqli_query($conn, $sql);
print_r($result);  
$row=mysqli_fetch_assoc($result);
$ads_name =$row['ads_name'];

?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add ads</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Ads</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" id="cards_banner">
                    <form method="post" enctype="multipart/form-data">
                            <!-- the bid form  detilas  -->
                            <div class="form-group">
                                <label for="">Advertisement</label>
                                <input type="text" name="ads_name" value="<?= $ads_name?>" class="form-control">
                            </div>

                            <!--  end of the bid form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary" id="btn_cards" type="submit" name="submit"
                                    value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="advertise.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
                                    aria-hidden="true"></i>
                                <span>Go Back Top Banner page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>



<?php
if (isset($_POST['submit'])) {
    $ads_name = $_POST['ads_name'];
    $sql = "UPDATE `advertise` SET `ads_name`='$ads_name'
    WHERE `ads_id` =$id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('ads Updated successfully!');</script>";
        echo "<script>window.location.href ='advertise.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}

include('./include/footer.php');

?>






