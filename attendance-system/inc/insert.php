<?php
include "config/conn.php";
date_default_timezone_set("Asia/Kolkata"); 

if(isset($_POST['detector'])){

    $timezone = "Asia/Kolkata";

    $detector = $_POST['detector'];
    $date = date('Y-m-d');
    $time = date('g:i:s A');

    $sql = "SELECT * FROM tbl_attendance WHERE IdNumber='$detector' AND LogDate='$date' AND Status='0'";
    $query = $conn->query($sql);
    if($query->num_rows>0){
        $sql = "UPDATE tbl_attendance SET TimeOut=Now(), Status='1' WHERE IdNumber='$detector' AND LogDate='$date'";
        $query = $conn->query($sql);
        $_SESSION['success'] = $detector.' Evacuated Successfully';
    }else{       
        $sql = "INSERT INTO tbl_attendance(IdNumber,TimeIn,LogDate,Status) VALUE ('$detector','$time','$date','0')";
        if($conn->query($sql) === TRUE){
            $_SESSION['success'] = $detector.' Time In attendance Completed';
        }else{
            $_SESSION['error'] = $conn->error;
        }
    }
} //else{
//     $_SESSION['warning'] = 'Please scan your QR Code';
// }
$conn->close();