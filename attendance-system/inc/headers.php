<?php
session_start();
include "inc/insert.php";
include "../system/Functions/config.php";
if(!defined('attendance')){
    header('Location: http://localhost/attendance-login');
}
if(!isset($_SESSION['atendencemaintainer_name']) && !isset($_SESSION['type'])){
    header('location: http://localhost/projectApollo/management');
}
global $conn;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ATTENDANCE | STAFF</title>
    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost/projectApollo/attendance-system/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://localhost/projectApollo/attendance-system/assets/img/logo.png" />
    <!-- datatable -->
    <link rel="stylesheet" href="http://localhost/projectApollo/attendance-system/assets/css/dataTables.bootstrap4.min.css">
    <!-- Script-scanner -->
    <script type="text/javascript" src="http://localhost/projectApollo/attendance-system/assets/js/instascan.min.js"></script>
    <!-- Script-adapter -->
    <script type="text/javascript" src="http://localhost/projectApollo/attendance-system/assets/js/adapter.min.js"></script>
    <!-- Script-vue -->
    <script type="text/javascript" src="http://localhost/projectApollo/attendance-system/assets/js/vue.min.js"></script>
    <link rel="shortcut icon" href="http://localhost/projectApollo/assets/images/favicon.ico" type="image/x-icon">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo me-5"><img src="http://localhost/projectApollo/assets/images/logo.png" class="me-2 logo-1" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini"><img src="http://localhost/projectApollo/assets/images/logo.png" alt="logo" class="logo-mini" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <a class="text-decoration-none btn btn-outline-secondary" href="http://localhost/projectApollo/logout">logout</a>
            </div>
        </nav>