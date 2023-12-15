<?php
include("include/database.php");

$pro_id = $_POST['proId'];

if ($_POST['model'] == "buy") {
    $sql = "SELECT *
    FROM `user_dealing`
    JOIN `service_provider` ON `service_provider`.`user_id` = `user_dealing`.`provider_id`
    WHERE `deal_for_id` = '$pro_id' 
    ORDER BY `user_dealing`.`dealing_price` ASC";

    $exc = $db->query($sql);

    if ($exc) {
        $data = array();
        while ($row = $exc->fetch_assoc()) {
            $data[] = $row;
        }
        $html = "<h2 style='margin-top: 10px;'>Dealers List</h2>
        <table class='deal_table'>
            <thead>
                <tr>
                    <th>Dealer Name</th>
                    <th>Dealing Price</th>
                </tr>
            </thead>
            <tbody>";

        if (!empty($data)) {
            foreach ($data as $res) {
                $html .= "<tr class='deal_list'>
                    <td>" . $res['s_name'] . "</td>
                    <td>" . $res['dealing_price'] . "</td>
                </tr>";
            }
        } else {
            $html .= "<tr class='deal_list'>
                <td colspan='2'>No data found</td>
            </tr>";
        }

        $html .= "</tbody>
        </table>";
        
        echo $html;
    } else {
        echo "Error executing the query";
    }
}
?>
