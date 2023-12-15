<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

    include("../include/config.php");
$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : die();


                     $sqlAssign = "SELECT * FROM `product_details` where `category` LIKE '%$cat_id%' or `product_name` LIKE '%$cat_id%' and `status` = '1'";											
                        $resultAssign = mysqli_query($db, $sqlAssign);											
                        $count_pro = mysqli_num_rows($resultAssign);
                        
                   $data[]='Showing Total Products '.$count_pro;
             
                    
                
                  echo json_encode($data);
?>