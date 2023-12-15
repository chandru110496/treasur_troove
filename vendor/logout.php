<?php
session_start();
session_destroy();
include("include/conn.php");
header("Location:../vendor_page.php");
exit();

?>