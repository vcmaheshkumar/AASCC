<?php

if(isset($_POST['send'])){
    $ipaddress = $_POST['ipaddress'];
    $sender = mysqli_real_escape_string($conn, $_POST['sender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $date = date('Y-m-d');

    $contactUsSql = "INSERT INTO contactus (ipaddress,name,email,message,date) VALUE (?, ?, ?, ?, ?)";
    $contactUsStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($contactUsStmt, $contactUsSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($contactUsStmt, "sssss",
                                            $ipaddress,
                                            $sender,
                                            $email,
                                            $message,
                                            $date);
    mysqli_stmt_execute($contactUsStmt);
    echo "<script>alert('We will get you soon');</script>";
}