<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['msgid'];

    $msgDelSql = "DELETE FROM message WHERE id='$id'";
    $msgDelResult = mysqli_query($conn, $msgDelSql);
    if($msgDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: http://localhost/projectApollo/system/users/message.php');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}