<?php
session_start();
include "../../Functions/Controllers/Models/conn.php";

$exportfilename = "CandidateAbsentRecord-".date('Y-m-d').".csv";
$candidateAttendSql = "SELECT * FROM candidate_attendance";
$exportresult = mysqli_query($conn,$candidateAttendSql);
$exportarray = array();
$exportfile = fopen($exportfilename,"w");
$exportarray = array("Name","Roll Number","Subject","class","date");
fputcsv($exportfile,$exportarray);

while($row = mysqli_fetch_assoc($exportresult)){
    $id = $row['id'];
    $name = $row['name'];
    $rollnumber = $row['rollnumber'];
    $subject = $row['subject'];
    $class = $row['class'];
    $date = $row['date'];

    $exportarray = array($name,
                                        $rollnumber,
                                        $subject,
                                        $class,
                                        $date);
    fputcsv($exportfile,$exportarray);
}
fclose($exportfile);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$exportfilename");
header("Content-type: application/csv");
readfile($exportfilename);
unlink($exportfilename);