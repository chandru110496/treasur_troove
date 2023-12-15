<?php include("include/header.php");
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add warhouse title</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">Warhouse</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <button class="btn btn-green btn-sm">total earning <span style="background-color: whitesmoke; color: black;">1234</span></button>
        <div class="row" >
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" >
                        <form method="post" enctype="multipart/form-data" action="">
                        
                                
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="add_cards" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="war_title.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back Slider page</span> </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_POST['add_cards'])){ 
        $title=$_POST['title'];
        $description=$_POST['description'];

        $sql="INSERT INTO `war_title`( `title`,`description`) VALUES ('$title','$description'
        )";
          $res=mysqli_query($conn,$sql);
          if($res){
            echo "Title added to successfully";
          }else{
            echo "insert error".$conn->error;
          }
    }
    ?>
    <?php include("include/footer.php"); ?>
  