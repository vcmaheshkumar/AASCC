<?php
include "Models/conn.php";

if(isset($_POST['messageBtn'])){
    $parentsName = $_POST['parentsName'];
    $parentsFrom = $_POST['parentsFrom'];
    $parentsMessage = mysqli_real_escape_string($conn, $_POST['parentsMessage']);
    $parentsTo = $_POST['parentsTo'];

    $messageSql = "INSERT INTO message (msgname,msgfrom,msgmessage,msgto) VALUE (?, ?, ?, ?)";
    $messageStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($messageStmt, $messageSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($messageStmt, "ssss",
                                            $parentsName,
                                            $parentsFrom,
                                            $parentsMessage,
                                            $parentsTo);
    mysqli_stmt_execute($messageStmt);
    $_SESSION['success'] = "Your message sent";
}