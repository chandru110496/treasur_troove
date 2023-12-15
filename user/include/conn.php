<?php

$conn = new mysqli('localhost', 'u541379268_treasure', 'Teckzy@123', 'u541379268_treasure');
// $conn = new mysqli('localhost', 'root', '', 'treasure');
// $conn = new mysqli('localhost', 'traitspm_treasure', 'traitspm_treasure', 'traitspm_treasure');

if ($conn->connect_error) {

    echo "error to MYSQL(".$conn->error.")".($conn->error);
    echo "changes done";
}
?>