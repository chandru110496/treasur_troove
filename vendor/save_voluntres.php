<?php include("include/header.php"); ?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>The Donners</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a></li>
                        <li class="active">Save a Life</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title" style="width: 100%; height: 40px;">
                            <h4>Donners list <a href="add_save_voluntres.php" id="add_new_service" class="btn btn-green btn-sm" style="float:right; margin-top:-7px;"><i class="fa fa-plus"></i> Add New voluters </a></h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body" id="slide_page_show">
                        <div class="table-responsive">
                            <table id="example-table" class="table table-striped table-bordered table-hover table-green">
                                <thead>
                                    <tr>
                                        <th>s.no</th>
                                        <th> Donner Image</th>
                                        <th>Name</th> 
                                        <th>Role</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $sql = "SELECT * FROM `save_voluntres`";
                                 $result = mysqli_query($conn, $sql);
                                //  print_r($result);
                             
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        $id=$row['id'];                                       
                                        $img=$row['background_image'];
                                        $name=$row['name'];
                                        $role=$row['role'];?>
                                    
                                        <tr>
                                              <td><?= $id?></td>
                                            <td><img src="../upload/save_voluntres/<?= $img ?>" alt="" style="width:150px;height:150px"></td>
                                            <td><?=$name?></td>
                                            <td><?=$role?></td>
                                           
                                           
                                            <td style="display:flex;justify-content:space-between;">
                                                    <a href="edit_save_voluntres.php?edit='<?= $id ?>'"><i class="fa fa-edit btn btn-primary"></i></a>
                                                    <a  onclick="confirm('Are you sure want to delete?')"href="delete_save_voluntres.php?deleteid='<?=$id ?>'"><i class="fa fa-trash-o btn btn-danger"></i></a>
                                             </td>
                                        </tr>




                                  <?php
                                     }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                   
                    <!-- /.portlet-body -->
                </div>
                <!-- /.portlet -->
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
    <?php include("include/footer.php"); ?>
    <script>
        CKEDITOR.replace('detail');
        CKEDITOR.replace('detail1');
    </script>