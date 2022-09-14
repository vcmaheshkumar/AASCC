<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['circularid'];

    $circularDelSql = "DELETE FROM circulars WHERE id='$id'";
    $circularDelResult = mysqli_query($conn, $circularDelSql);
    if($circularDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: http://localhost/projectApollo/admin/update/circular');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}