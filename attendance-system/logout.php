<?php

include '../system/Functions/config.php';

session_start();
session_unset();
session_destroy();

header('location: http://localhost/projectApollo/management');
$_SESSION['success'] = "Logout successfully";

?>