<?php include("include/conn.php"); ?>
<?php
$sub_id=$_POST['category_id'];
$result = mysqli_query($conn,"SELECT * FROM `sub_category` WHERE `category_id`='$sub_id'");
// $data=array();
while($row = mysqli_fetch_array($result)) {
 echo "<option value=".$row['sub_category_id'].">".$row['sub_category_name']."</option>";
// $data=$row;
}
echo json_encode($data);
?>