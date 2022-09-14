<?php
// Database Connection
require "/xampp/htdocs/projectApollo/DatabaseFile/variables.php";
// Variable for mysqli function
$conn = new mysqli($host,$userTag,$passTag,$databaseName);
// Error Notifier
if($conn->connect_error){
    die('Connection Error'.$conn->connect_error);
}
// Default TimeZone
date_default_timezone_set("Asia/Kolkata"); 
// else{
    // echo "<p>Connection Established with Database Name: ".$Database_Name."</p>";
// }