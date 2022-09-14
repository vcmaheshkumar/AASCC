<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['publicationid'];

    $publicationDelSql = "DELETE FROM publication WHERE id='$id'";
    $publicationDelResult = mysqli_query($conn, $publicationDelSql);
    if($publicationDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: http://localhost/projectApollo/admin/update/publication');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}