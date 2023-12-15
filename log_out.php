<?php
session_start();
session_destroy();

header("Location: profile-authentication.php");
exit();

?>