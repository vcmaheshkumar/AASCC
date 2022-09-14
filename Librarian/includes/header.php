<?php
error_reporting(0);
if(!defined('librarian')){
    header('Location: http://localhost/projectApollo/Librarian/');
}
include "../../system/Functions/config.php";
session_start();
if(!isset($_SESSION['librarian_name']) && !isset($_SESSION['type'])){
    header('location: http://localhost/projectApollo/system/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="http://localhost/projectApollo/Librarian/assets/style/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/projectApollo/Librarian/assets/style/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost/projectApollo/Librarian/assets/style/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://localhost/projectApollo/Librarian/assets/img/logo.png" />
    <!-- datatable -->
    <link rel="stylesheet" href="http://localhost/projectApollo/Librarian/assets/style/dataTables.bootstrap4.min.css">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo me-5" href="http://localhost/projectApollo/Librarian/"><img src="http://localhost/projectApollo/Librarian/assets/img/logo.png" class="me-2 logo-1" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="http://localhost/projectApollo/Librarian/"><img src="http://localhost/projectApollo/Librarian/assets/img/logo.png" alt="logo" class="logo-mini" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="ti-view-list"></span>
                </button>
                <!-- <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="ti-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="http://localhost/projectApollo/Librarian/assets/img/logo.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-user text-primary"></i><?php echo $_SESSION['librarian_name'] ?>
                            </a>
                            <a class="dropdown-item" href="http://localhost/projectApollo/logout">
                                <i class="ti-power-off text-primary"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/library-management">
                            <i class="ti-shield menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/add-entry">
                            <i class="ti-clipboard  menu-icon"></i>
                            <span class="menu-title">Add Entry</span>
                        </a>
                    </li>
                </ul>
            </nav>