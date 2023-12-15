<?php
include("include/database.php");
session_start();

if (isset($_POST['search'])) {
  $search = $_POST['search'];

  if (!empty($search)) {
    $searchTerm = "%$search%";
    $current_time= date('Y-m-d H:i:s');

    $sql = "SELECT `product_name`, `deal_id`
    FROM `deal_product_details`
    WHERE `product_status` = '1'
    AND `deal_product_details`.`expiry_time` > '$current_time' 
    AND `product_name` LIKE ?
    LIMIT 10;
    ";

    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $rows = array();

    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }

    if (!empty($rows)) {
      echo json_encode($rows);
    } else {
      // handle case when no matching products are found
    }
  } else {
    // handle case when $search is empty
  }
}
?>