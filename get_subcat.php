<?php include("include/database.php");


if(isset($_GET['cat_id'])){
  $cat_id = $_GET['cat_id'];


  $result = $db->query("SELECT * FROM `states` WHERE `country_id`='$cat_id'");
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
      }
  } else {
      echo "<option value=''>No Data</option>";
  }

  $db->close();
}
if(isset($_GET['sub_cat_id'])){
  $sub_cat_id = $_GET['sub_cat_id'];
  $result = $db->query("SELECT * FROM `cities` WHERE `state_id`='$sub_cat_id'");
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
      }
  } else {
      echo "<option value=''>No Data</option>";
  }
  $db->close();
}