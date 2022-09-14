<?php
session_start();
include "Functions/Controllers/Models/conn.php";

$exportfilename = "FacultyAbsentRecord-".date('Y-m-d').".csv";
$exportquery = "SELECT * FROM faculties LEFT OUTER JOIN tbl_attendance ON faculties.facultyidnumber=tbl_attendance.IdNumber WHERE tbl_attendance.IdNumber IS NULL";
$exportresult = mysqli_query($conn,$exportquery);
$exportarray = array();
$exportfile = fopen($exportfilename,"w");
$exportarray = array("Name","ID Number","Department","Designation");
fputcsv($exportfile,$exportarray);

while($row = mysqli_fetch_assoc($exportresult)){
    $id = $row['id'];
    $Name = $row['facultyname'];
    $facultyidnumber = $row['IdNumber'];
    $facultytableidnumber = $row['facultyidnumber'];
    $department = $row['facultydepartment'];
    $designation = $row['facultydesignation'];

    $exportarray = array($Name,
                                        $facultytableidnumber,
                                        $department,
                                        $designation);
    fputcsv($exportfile,$exportarray);
}
fclose($exportfile);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$exportfilename");
header("Content-type: application/csv");
readfile($exportfilename);
unlink($exportfilename);
exit();