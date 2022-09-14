<?php
error_reporting(0);
if(!defined('admin')){
    header('Location: http://localhost/projectApollo/administration/');
}
include "../Functions/config.php";
include "../../Functions/config.php";
include "../../../Functions/config.php";
session_start();
// if(!isset($_SESSION['admin_name']) && !isset($_SESSION['type'])){
//     header('location: http://localhost/projectApollo/system/');
// }
if ($_SESSION['type'] != "admin" ) {
    header('location: http://localhost/projectApollo/AuthorizationRequired');
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
    <link rel="stylesheet" href="http://localhost/projectApollo/system/admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/projectApollo/system/admin/assets/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost/projectApollo/system/admin/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://localhost/projectApollo/system/admin/assets/img/logo.png" />
    <!-- datatable -->
    <link rel="stylesheet" href="http://localhost/projectApollo/system/admin/assets/css/dataTables.bootstrap4.min.css">
    <!-- QR GENERATOR -->
    <script type="text/javascript" src="http://localhost/projectApollo/system/admin/assets/js/qrcode.js"></script>
        <!-- Qr code -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>
</head>

<body>
    <div class="container-scroller" id="autoload">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo me-5" href="http://localhost/projectApollo/administration"><img src="http://localhost/projectApollo/system/admin/assets/img/logo.png" class="me-2 logo-1" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="http://localhost/projectApollo/administration"><img src="http://localhost/projectApollo/system/admin/assets/img/logo.png" alt="logo" class="logo-mini" /></a>
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
                                        if($row['msgto'] == 'admin'){
                                ?>
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <img src="http://localhost/projectApollo/system/admin/assets/img/logo.png" alt="image" class="profile-pic">
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
                            <img src="http://localhost/projectApollo/system/admin/assets/img/logo.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-user text-primary"></i><?php echo $_SESSION['admin_name'] ?>
                            </a>
                            <a class="dropdown-item" href="http://localhost/projectApollo/admin/logout">
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
                        <a class="nav-link" href="http://localhost/projectApollo/administration">
                            <i class="ti-shield menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="ti-user menu-icon"></i>
                            <span class="menu-title">Create User</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/faculty">Faculty</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/student">Candidate</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-attend" aria-expanded="false" aria-controls="ui-attend">
                            <i class="ti-layout-list-post menu-icon"></i>
                            <span class="menu-title">Attendance</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-attend">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/attendance/faculties">Faculties</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/attendance/candidates">Candidates</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-update" aria-expanded="false" aria-controls="ui-update">
                            <i class="ti-package  menu-icon"></i>
                            <span class="menu-title">Updates</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-update">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/overview">Overview</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/events">Events</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/circular">Circulars</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/news">News</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/publication">Publication</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/library">Library</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/gallery">Gallery</a></li>
                                <li class="nav-item"> <a class="nav-link" href="http://localhost/projectApollo/admin/update/notification">Approval</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/admin/request">
                            <i class="ti-hand-stop  menu-icon"></i>
                            <span class="menu-title">Requests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/admin/chat">
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
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectApollo/admin/create/users">
                            <i class="ti-user menu-icon"></i>
                            <span class="menu-title">Add Users</span>
                        </a>
                    </li>
                </ul>
            </nav>