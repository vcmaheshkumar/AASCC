<?php
session_start();
include "../../Functions/Controllers/Models/conn.php";

$exportfilename = "FacultyPresentRecord-".date('Y-m-d').".csv";
$exportquery = "SELECT * FROM tbl_attendance INNER JOIN faculties ON tbl_attendance.IdNumber=faculties.facultyidnumber";
$exportresult = mysqli_query($conn,$exportquery);
$exportarray = array();
$exportfile = fopen($exportfilename,"w");
$exportarray = array("Name","ID Number","Department","Designation","date");
fputcsv($exportfile,$exportarray);

while($row = mysqli_fetch_array($exportresult)){
    $Name = $row['facultyname'];
    $Date = $row['LogDate'];
    $facultyidnumber = $row['IdNumber'];
    $department = $row['facultydepartment'];
    $designation = $row['facultydesignation'];

    $exportarray = array($Name,
                                        $facultyidnumber,
                                        $department,
                                        $designation,
                                        $Date);
    fputcsv($exportfile,$exportarray);
}
fclose($exportfile);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$exportfilename");
header("Content-type: application/csv");
readfile($exportfilename);
unlink($exportfilename);
exit();