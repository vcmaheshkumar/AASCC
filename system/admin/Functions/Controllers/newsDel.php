<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['newsid'];

    $newsDelSql = "DELETE FROM news WHERE id='$id'";
    $newsDelResult = mysqli_query($conn, $newsDelSql);
    if($newsDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: http://localhost/projectApollo/admin/update/news');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}