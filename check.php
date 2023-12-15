<?php

$db = new mysqli('localhost', 'root', '', 'treasure');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
//  echo "connected to database";

$sql = "SELECT count(*) count from my_cart WHERE  product_id='75' AND  user_id='2'  ";
$smt = $db->query($sql);
if ($smt->fetch_assoc()['count']>0)
    echo "available";
else
    echo "not available";
