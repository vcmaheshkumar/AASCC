<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['facultyid'];

    $facultyDelSql = "DELETE FROM faculties WHERE id='$id'";
    $facultyDelResult = mysqli_query($conn, $facultyDelSql);
    if($facultyDelResult){
        $ImageDes = "../../../../faculties/".$oldImage;
        unlink($oldImageDes);
        header('location: http://localhost/projectApollo/admin/faculty');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}