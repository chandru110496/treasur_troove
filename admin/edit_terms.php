<?php



include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
$sql = "SELECT *FROM `terms` WHERE term=$id";
$result = mysqli_query($conn, $sql);
// print_r($result);
$row=mysqli_fetch_assoc($result);

$content =$row['content'];

?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Terms & Conditions </h1>
                
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
                            <!-- <h4>Jobs List <a href="add_product.php" id="add_new_service" class="btn btn-green btn-sm"
                                    style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add product</a>
                            </h4> -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">Panel Heading</div> -->
                            <div class="panel-body" id="add_vndr">
                                <form method="post" enctype="multipart/form-data">
                                 
                                    <div class="mb-3">
                                        <label for="Privacy">Terms and Conditions</label>
                                        <textarea class="form-control" name="terms" value=""  rows="10" cols="50"
                                            id="content" ><?php echo print_r($content) ?></textarea>
                                    </div><br>

                                 
                                    <button type="submit" name="submit" class="btn btn-primary">Update Terms & conditions </button>
                                </form>
                                <a href="edit_terms.php"><button class="btn btn-blue center-block"><i
                                            class="fa fa-backward" aria-hidden="true"></i><span>Go Back
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

if (isset($_POST['submit'])) {


    
    $content= $_POST['terms'];
   



    $sql = "UPDATE `terms` SET `content`='$content'
    WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Updated Terms & Conditions successfully!');</script>";
        echo "<script>window.location.href ='edit_terms.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}
    ?>
       <? include('./include/footer.php');
        ?>


