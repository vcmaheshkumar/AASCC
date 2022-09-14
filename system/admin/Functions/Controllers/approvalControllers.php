<?php
include "Models/conn.php";

function shorten($string, $length){
    if(strlen($string)<=$length){
        echo $string;
    }else{
        $dummy = substr($string, $length). '...';
        echo $dummy;
    }
}

if(isset($_POST['edit'])){
    $id = $_POST['alumniid'];

    $alumniSql = "UPDATE alumni SET status='1' WHERE id=$id";
    $alumniQuery = mysqli_query($conn, $alumniSql);
}