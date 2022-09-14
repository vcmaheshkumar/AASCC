<?php

include 'Functions/Models/conn.php';

session_start();
session_unset();
session_destroy();

header('location: http://localhost/projectApollo/home');

?>