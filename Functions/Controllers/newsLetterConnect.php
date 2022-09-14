<?php
require '/xampp/htdocs/projectApollo/Functions/Models/conn.php';

if(isset($_POST['subscribe'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $ipaddress = $_POST['ipaddress'];
    $date = date('Y-m-d');

    $newsLetterSql = "INSERT INTO newsletter (email,ipaddress,date) VALUE (?, ?, ?)";
    $newsLetterStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($newsLetterStmt, $newsLetterSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($newsLetterStmt, "sss",
                                            $email,
                                            $ipaddress,
                                            $date);
    mysqli_stmt_execute($newsLetterStmt);
    echo "<script>alert('Subscribed Successfully');</script>";
}