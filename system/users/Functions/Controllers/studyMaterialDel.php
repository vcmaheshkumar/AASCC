<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['fileid'];

    $fileDelSql = "DELETE FROM studymaterial WHERE id='$id'";
    $fileDelResult = mysqli_query($conn, $fileDelSql);
    if($fileDelResult){
        $fileDes = "../../../../studyMaterial/".$path;
        unlink($fileDes);
        header('location: http://localhost/projectApollo/system/users/pages/materials.php');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}