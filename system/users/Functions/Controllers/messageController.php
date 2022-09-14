<?php
include "Models/conn.php";

if(isset($_POST['messageBtn'])){
    $userName = $_POST['userName'];
    $userFrom = $_POST['userFrom'];
    $userMessage = mysqli_real_escape_string($conn, $_POST['userMessage']);
    $userTo = $_POST['userTo'];

    $messageSql = "INSERT INTO message (msgname,msgfrom,msgmessage,msgto) VALUE (?, ?, ?, ?)";
    $messageStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($messageStmt, $messageSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($messageStmt, "ssss",
                                            $userName,
                                            $userFrom,
                                            $userMessage,
                                            $userTo);
    mysqli_stmt_execute($messageStmt);
    $_SESSION['success'] = "Your message sent";
}