
<?php
 include("include/conn.php");
$data=extract($_POST);
// print_r($data);

// echo $specification;
$sql="INSERT INTO `invest_details` (`product_name`,`brand_name`,`description`,`specification`,`project_plan`,`job_response`,`about_project`,`blog_video`,`days`,`hours`,`min`,`sec`) VALUES ('$product_name','$brand_name','$description','$specification','$project_plan','$job_response','$about_project','$blog_video','$invest_days','$invest_hours','$invest_mins','$invest_sec');";
$result=$conn->query($sql);
echo $sql;
if ($result===TRUE) {
    header('Location:add_product.php');
  }

  // elseif{

  // }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>