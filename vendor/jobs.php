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
                    <h1>Jobs</h1>
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
        <button class="btn btn-green btn-sm">Total earning <span
                style="background-color: whitesmoke; color: black;">1234</span></button>
        <div class="row" id="service_list">
        <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Jobs List <a href="add_jobs.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i>Add Jobs</a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>Job image</th>
                                        <th>Job name</th>
                                        <th>Job Location</th>
                                        <th>Job Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              <tbody>
                                <?php
                                 $sql = "SELECT * FROM `jobs`";
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                         $jobId=$row['job_id'];
                                         $jobimg = $row['job_img'];
                                         $jobTitle = $row['job_title'];
                                         $jobLocation = $row['job_location'];
                                         $jobDescriptiion = $row['job_description'];

                                        

                                     
                                         ?>
                                         <tr>
                                         <td><img  style="width:100px;height:66px;" src="../upload/jobs/<?php echo $jobimg; ?>"></td>
                                         <td><?php echo $jobTitle; ?></td>
                                         <td><?php echo $jobLocation; ?></td>
                                         <td><?php echo $jobDescriptiion; ?></td>
                                         <td style="display:flex;justify-content:space-between;">
                                            <a href="edit_job_form.php?edit='<?=$row['job_id']?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                            <a href="del_job_form.php?delid='<?=$row['job_id']?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
                                        </td>
                                       
                                     </tr>
                              </tbody>
                              <?php
                        }?>
                            </table>
 
                        
                        
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
            </div>
        </div>
        
        <?php
        include('./include/footer.php');
        
        ?>