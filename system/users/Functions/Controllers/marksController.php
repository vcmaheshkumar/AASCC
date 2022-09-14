<?php
require "Models/conn.php";

if(isset($_POST['SendtoOffice'])){
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $examName = mysqli_real_escape_string($conn, $_POST['examName']);
    $markObtained = mysqli_real_escape_string($conn, $_POST['markObtained']);
    $totalMarks = mysqli_real_escape_string($conn, $_POST['totalMarks']);

    $candidateMarksControlSql = "INSERT INTO candidate_marks (`department`, `class`, `name`, `rollno`, `subject`, `examName`, `markObtained`, `totalMarks`) VALUE (?, ?, ?, ?, ?, ?, ?, ?)";
    $candidateMarksControlStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($candidateMarksControlStmt, $candidateMarksControlSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($candidateMarksControlStmt, 'ssssssss', $department, $class, $name, $rollno, $subject, $examName, $markObtained, $totalMarks);
    mysqli_stmt_execute($candidateMarksControlStmt);
    $_SESSION["marks"] = "Candidate Marks Submitted";
}