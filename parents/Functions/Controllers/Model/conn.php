<?php
require "../../../../DatabaseFile/variables.php";
date_default_timezone_set("Asia/Kolkata"); 

$conn = new mysqli($host, $userTag, $passTag, $databaseName);

if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}