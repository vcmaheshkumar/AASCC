<?php
require "Models/conn.php";

$nCounter = "SELECT * FROM newsletter";
$nCounterResult = mysqli_query($conn, $nCounter);
$nCount = mysqli_num_rows($nCounterResult);

$cCounter = "SELECT * FROM contactus";
$cCounterResult = mysqli_query($conn, $cCounter);
$cCount = mysqli_num_rows($cCounterResult);

$facultySql = "SELECT * FROM faculties LEFT OUTER JOIN tbl_attendance ON faculties.facultyidnumber=tbl_attendance.IdNumber WHERE tbl_attendance.IdNumber IS NULL";
$facultyResult = mysqli_query($conn, $facultySql);
$fCount = mysqli_num_rows($facultyResult);

$alumniSql = "SELECT * FROM alumni WHERE status='1'";
$alumniResult = mysqli_query($conn, $alumniSql);
$aCount = mysqli_num_rows($alumniResult);
