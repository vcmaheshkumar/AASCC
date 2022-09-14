<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['alumniid'];

    $alumniDelSql = "DELETE FROM alumni WHERE id='$id'";
    $alumniDelResult = mysqli_query($conn, $alumniDelSql);
    if($alumniDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: http://localhost/projectApollo/admin/update/notification');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}