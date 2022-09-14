<?php
error_reporting(0);
if(!defined('AAASCC')){
    header('Location: http://localhost/projectApollo/home');
}
require "/xampp/htdocs/projectApollo/DatabaseFile/variables.php";
$ip = $_SERVER['REMOTE_ADDR'];
$VisitorConn = mysqli_connect($host,$userTag,$passTag,$databaseName);
$visitorQuery = "INSERT INTO visitorscounter (visitorCounter) VALUE ('$ip')";
mysqli_query($VisitorConn, $visitorQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="http://localhost/projectApollo/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/projectApollo/assets/style/style.css">
    <link rel="stylesheet" href="http://localhost/projectApollo/assets/style/popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1d2f6cb552.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> -->

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
    <?php
    include "includes/popup.php";
    include "../includes/popup.php";
    ?> 
    <!-- /LOGO STARTS/ -->
    <div class="logo-content">
        <div class="logo-image">
            <img src="http://localhost/projectApollo/assets/images/logo.png" alt="Apollo Arts and Science College Chennai">
        </div>
        <div class="logo-name">
            <h1>APOLLO ARTS & SCIENCE COLLEGE CHENNAI</h1>
            <p>(Approved govt. of Tamil Nadu & Affiliated to University of Madras)</p>
        </div>
    </div>
    <!-- /LOGO END/ -->

    <!-- /NAVIGATION BAR STARTS/ -->
    <header class="">
        <img class="logo" src="http://localhost/projectApollo/assets/images/logo.png" alt="Apollo Arts and Science College Chennai">
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar"><span class="material-symbols-outlined">menu</span></label>
        <nav>
            <ul>
                <li>
                    <a href="http://localhost/projectApollo/home">home</a>
                </li>
                <li>
                    <a href="#">about us +</a>
                    <ul>
                        <li>
                            <a href="http://localhost/projectApollo/about/faculty">faculties</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/about/students">students</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/about/alumni">alumni</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/about/moto">moto</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/about/mission-vision">mission & vision</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/gallery">gallery</a>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/admission">admission</a>
                </li>
                <li>
                    <a href="#">academic +</a>
                    <ul>
                        <li>
                            <a href="http://localhost/projectApollo/placements">placement</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/courses">courses</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/department">departments</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/library">library</a>
                        </li>
                        <li>
                            <a href="http://localhost/projectApollo/publication">publications</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/college/media">social page</a>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/contact">contact us</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- /NAVIGATION BAR END/ -->