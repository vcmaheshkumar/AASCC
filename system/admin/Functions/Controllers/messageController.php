<?php
include "Models/conn.php";

if(isset($_POST['messageBtn'])){
    $adminName = $_POST['adminName'];
    $adminFrom = $_POST['adminFrom'];
    $adminMessage = mysqli_real_escape_string($conn, $_POST['adminMessage']);
    $adminTo = $_POST['adminTo'];

    $messageSql = "INSERT INTO message (msgname,msgfrom,msgmessage,msgto) VALUE (?, ?, ?, ?)";
    $messageStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($messageStmt, $messageSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($messageStmt, "ssss",
                                            $adminName,
                                            $adminFrom,
                                            $adminMessage,
                                            $adminTo);
    mysqli_stmt_execute($messageStmt);
    $_SESSION['success'] = "Your message sent";
}