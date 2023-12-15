<?php
include('./include/header.php');
include('./include/conn.php');
?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add ads </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">ads</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                            
                    
                            

                            <!-- the deal form  detilas  -->
                            <div class="form-group">
                                <label for="">Ad name</label>
                                <input type="text" name="ads_name" class="form-control">
                            </div>
                                
                                
                            </div>

                            <!--  end of the deal form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit" name="add_ads"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="advertise.php">
                            <button class="btn btn-blue center-block">
                                <i class="fa fa-backward" aria-hidden="true"></i>
                                <span>Go Back to Top Banner page</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<?php
if (isset($_POST['add_ads'])){
    $ads_name= $_POST['ads_name'];
   
  
 $sql = "INSERT INTO `advertise` (`ads_name`)
    VALUES (' $ads_name')";

    if ($conn->query($sql)) {
        echo "Ads category  added successfully!";
       
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;

    }
}

include('include/footer.php')
?>



