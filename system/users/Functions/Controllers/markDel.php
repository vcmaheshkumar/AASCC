<?php
require "Models/conn.php";

$id = $_GET['id'];
$marksDelSql = "DELETE FROM candidate_marks WHERE id='$id'";

$marksDelResult = mysqli_query($conn, $marksDelSql);
    
if($marksDelResult){
        header('location: http://localhost/projectApollo/system/users/pages/marks.php');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }