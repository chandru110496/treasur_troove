<?php
include("include/database.php");
session_start();

if (isset($_POST['search'])) {
  $search = $_POST['search'];

  if (!empty($search)) {
    $searchTerm = "%$search%";

    $sql = "SELECT `product_name`, `product_id`
    FROM `product_details`
    WHERE `product_status` = '1'
      AND `status` = 'approved'
      AND `balanced_stock` != 0
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