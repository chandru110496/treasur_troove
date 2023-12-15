<?php include("include/conn.php"); ?>
<?php
$sub_id=$_POST['sub_category_id'];
$result = mysqli_query($conn,"SELECT * FROM `inner_sub_category` WHERE `sub_category_name`='$sub_id'");
while($row = mysqli_fetch_assoc($result)) {

echo "<option value=".$row['in_sub_category_id'].">".$row['in_sub_category_name']."</option>";

}

    ?>