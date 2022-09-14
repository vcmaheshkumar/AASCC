<?php
require "Models/conn.php";

if(isset($_POST['delete'])){
    $id = $_POST['eventid'];

    $eventDelSql = "DELETE FROM events WHERE id='$id'";
    $eventDelResult = mysqli_query($conn, $eventDelSql);
    if($eventDelResult){
        echo "<script>alert('Deleted')</script>";
        header('location: localhost/projectApollo/admin/update/events');
    }else{
        echo "<script>alert('Unable to delete')</script>";
    }
}