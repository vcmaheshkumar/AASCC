<?php
require "Models/conn.php";

if(isset($_POST['SendtoOffice'])){
    $candidateParentPhoneNumber = mysqli_real_escape_string($conn, $_POST['candidateParentPhoneNumber']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $rollnumber = mysqli_real_escape_string($conn, $_POST['rollnumber']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $class = mysqli_real_escape_string($conn, $_POST['department']);
    $attendance = mysqli_real_escape_string($conn, $_POST['attendance']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $attendanceControlSql = "INSERT INTO candidate_attendance ( `candidateParentPhoneNumber`, `name`, `rollnumber`, `subject`, `class`, `attendance`, `date`) VALUE (?, ?, ?, ?, ?, ?, ?)";
    $attendanceControlStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($attendanceControlStmt, $attendanceControlSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($attendanceControlStmt, 'sssssss', $candidateParentPhoneNumber, $name, $rollnumber, $subject, $class, $attendance, $date);
    mysqli_stmt_execute($attendanceControlStmt);
    $_SESSION["message"] = "Attendance Submitted";
}