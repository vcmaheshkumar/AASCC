<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['galleryid'];

    $galleryDelSql = "DELETE FROM gallery WHERE id='$id'";
    $galleryDelResult = mysqli_query($conn, $galleryDelSql);
    if($galleryDelResult){
        $ImageDes = "../../../../assets/images/".$oldImage;
        unlink($oldImageDes);
        header('location: http://localhost/projectApollo/admin/update/gallery');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}