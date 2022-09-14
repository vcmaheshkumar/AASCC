<?php
error_reporting(0);
include "../Functions/Models/conn.php";
include "includes/title.php";
if(!defined('student')){
    header('Location: http://localhost/projectApollo/students-portal');
}
session_start();
if ($_SESSION['type'] != "student" ) {
    header('Location: http://localhost/projectApollo/candidates-system');
   exit();
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
    <link rel="stylesheet" href="http://localhost/projectApollo/students/assets/css/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/projectApollo/students/assets/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost/projectApollo/students/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://localhost/projectApollo/students/assets/img/logo.png" />
    <!-- datatable -->
    <link rel="stylesheet" href="http://localhost/projectApollo/students/assets/css/dataTables.bootstrap4.min.css">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo me-5" href="http://localhost/projectApollo/students-portal"><img src="http://localhost/projectApollo/students/assets/img/logo.png" class="me-2 logo-1" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="http://localhost/projectApollo/students-portal"><img src="http://localhost/projectApollo/students/assets/img/logo.png" alt="logo" class="logo-mini" /></a>
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
                            <i class="ti-email mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                            <?php
                                $messageSql = "SELECT * FROM message";
                                $messageResult = mysqli_query($conn, $messageSql);
                                if(mysqli_num_rows($messageResult) > 0){
                                    while($row = mysqli_fetch_array($messageResult)){
                                        if($row['msgto'] == 'student'){
                                ?>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <img src="http://localhost/projectApollo/students/assets/img/logo.png" alt="image" class="profile-pic">
                                    </div>
                                    <div class="item-content flex-grow">
                                        <h6 class="ellipsis font-weight-normal"><?php echo $row['msgfrom']; ?>
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            <?php echo $row['msgmessage']; ?>
                                        </p>
                                    </div>
                                </a>
                            <?php
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="http://localhost/projectApollo/students/assets/img/logo.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="students-logout">
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
                        <a class="nav-link">
                            <i class="ti-user menu-icon"></i>
                            <span class="menu-title"><?php echo $_SESSION['student_name']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/students-portal">
                            <i class="ti-shield menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/students-message">
                            <i class="ti-comment menu-icon"></i>
                            <span class="menu-title">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/college/media">
                            <i class="ti-rss-alt menu-icon"></i>
                            <span class="menu-title">Social Page</span>
                        </a>
                    </li>
                </ul>
            </nav>