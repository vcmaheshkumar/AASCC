<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['candidateid'];

    $candidateDelSql = "DELETE FROM candidate WHERE id='$id'";
    $candidateDelResult = mysqli_query($conn, $candidateDelSql);
    if($candidateDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: http://localhost/projectApollo/admin/student');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}