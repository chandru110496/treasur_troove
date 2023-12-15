<?php
// this is db connect from live code
// $db = new mysqli('localhost', 'u541379268_treasure', 'Teckzy@123', 'u541379268_treasure');

$db = new mysqli('localhost', 'root', '', 'treasure');

// $db = new mysqli('localhost', 'traitspm_treasure', 'traitspm_treasure', 'traitspm_treasure');




if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
} else {
    //  echo "connected to database";
}
