<?php
include('include/header.php');
include('include/conn.php');
$id=$_GET['edit'];
// echo "<script>alert($id);</script>";
$sql1="SELECT * FROM `faq` WHERE id=$id";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);
$question=$row['ques'];
 $ans=$row['ans'];

    ?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit faq</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">FAQ</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <!-- <button class="btn btn-green btn-sm">Total earning <span style="background-color: whitesmoke; color: black;">1234</span></button> -->
        <div class="row" >
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" >
                        <form method="post" enctype="multipart/form-data" action="">
                     
                                <div class="row">
                                <div class="form-group">
                                    <label for="">Question</label>
                                    <input type="text" name="question" value="<?=$question?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Answer</label>
                                    <input type="text" name="answer" value="<?=$ans?>" class="form-control">
                                </div>
                                   
                                    
                                 
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="add_title" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="faq.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back  page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end MAIN PAGE ROW -->
    </div>
    <!-- /.page-content -->
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->

    <?php 
    if(isset($_POST['add_title'])){
        $question=$_POST['question'];
        $ans=$_POST['answer'];
      
    // Check the file extension 
  
        $sql="UPDATE `faq` SET `ques`='$question',`ans`='$ans'
        WHERE id=$id";
          $res=mysqli_query($conn,$sql);

          if($res){
            echo "<script>alert('updated datas  successfully');</script>";
            echo "<script>window.location.href ='faq.php';</script>";
          }else{
            echo "insert error".$conn->error;
          }
    }
    
    ?>
    <?php include("include/footer.php"); ?>


   