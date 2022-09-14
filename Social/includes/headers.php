<?php
error_reporting(0);
session_start();
if(!defined('social')){
    header('location: http://localhost/projectApollo/social/ ');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/projectApollo/assets/images/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/1d2f6cb552.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/projectApollo/social/style.css">
    <title><?php echo $title ?></title>
     <!-- META TAGS -->
    <meta property="og:title" content="APOLLO ARTS AND SCIENCE COLLEGE CHENNAI" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://localhost/projectApollo/home" />
    <meta property="og:site_name" content="Apollo arts and science college chennai" />
    <meta property="og:description" content="The Apollo Arts and Science College has two campuses located in Chennai, Tamil Nadu. One of the campuses is located in Poonamallee whilst the other is located in Guduvanchery. Both campuses offer arts and science courses which are AICTE approved. Students passing 10+2 examinations are eligible to apply for UG courses in AASC, Chennai." />
    <meta property="og:image" content="http://localhost/projectApollo/assets/images/300068843_429489305909885_6871657313198017319_n.jpg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="300" />
    <!-- TWITTER -->    
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="The Apollo Arts and Science College has two campuses located in Chennai, Tamil Nadu. One of the campuses is located in Poonamallee whilst the other is located in Guduvanchery. Both campuses offer arts and science courses which are AICTE approved. Students passing 10+2 examinations are eligible to apply for UG courses in AASC, Chennai." />
    <meta name="twitter:title" content="APOLLO ARTS AND SCIENCE COLLEGE CHENNAI" />
    <meta name="twitter:site" content="http://localhost/projectApollo/home" />
    <meta name="twitter:image" content="http://localhost/projectApollo/assets/images/300068843_429489305909885_6871657313198017319_n.jpg" />
    <meta name="twitter:creator" content="VCMK CYBER SEC" />
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="http://localhost/projectApollo/assets/images/logo.png" alt="Logo">
        </div>
    <?php
     if ($_SESSION['type'] == "admin")
     {
    ?>
    <div class="nav-middle">
        <a href="http://localhost/projectApollo/system/admin">
            <i class="fa fa-arrow-right" ></i>
        </a>
    </div>
    <?php
     }else{
    ?>
    <div class="nav-middle">
        <a href="http://localhost/projectApollo/home">
            <i class="fa fa-home" ></i>
        </a>
    </div>
    <?php
     }
     ?>
    </nav>

