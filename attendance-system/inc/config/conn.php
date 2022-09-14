<?php
require "array.php";

$conn = new mysqli($HOST, $USER, $PASS, $DBNAME);
if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}