<?php
require 'Models/conn.php';

$contactusSql = "SELECT * FROM newsletter";
$contactusQuery = $conn->query($contactusSql);
while($contactusRow = $contactusQuery->fetch_assoc()){
    $ip = $contactusRow['ipaddress'];
    $email = $contactusRow['email'];
    $date = $contactusRow['date'];
}

$contactusSql = "SELECT * FROM contactus";
$contactusQuery = $conn->query($contactusSql);
while($contactusRow = $contactusQuery->fetch_assoc()){
    $ip = $contactusRow['ipaddress'];
    $name = $contactusRow['name'];
    $email = $contactusRow['email'];
    $message = $contactusRow['message'];
    $date = $contactusRow['date'];
}