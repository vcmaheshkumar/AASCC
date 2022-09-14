<?php
session_start();
include "../Functions/Controllers/Models/conn.php";

$exportfilename = "FacultyRecord-".date('Y-m-d').".csv";
$exportquery = "SELECT * FROM faculties";
$exportresult = mysqli_query($conn,$exportquery);
$exportarray = array();
$exportfile = fopen($exportfilename,"w");
$exportarray = array("id","name","email","experience","image","DOJ","ID Number","Phone Number","Designation","Department","Qualification","Gender","Address","Link1","Link2","Link3","Link4","Added Date in Database","Attendance");
fputcsv($exportfile,$exportarray);

while($row = mysqli_fetch_array($exportresult)){
    $id = $row['id'];
    $facultyname = $row['facultyname'];
    $facultyemail = $row['facultyemail'];
    $facultyexperience = $row['facultyexperience'];
    $facultyimage = $row['facultyimage'];
    $facultyappointfrom = $row['facultyappointfrom'];
    $facultyidnumber = $row['facultyidnumber'];
    $facultyphonenumber = $row['facultyphonenumber'];
    $facultydesignation = $row['facultydesignation'];
    $facultydepartment = $row['facultydepartment'];
    $facultyqualification = $row['facultyqualification'];
    $facultygender = $row['facultygender'];
    $facultyaddress = $row['facultyaddress'];
    $facultysociallink1 = $row['facultysociallink1'];
    $facultysociallink2 = $row['facultysociallink2'];
    $facultysociallink3 = $row['facultysociallink3'];
    $facultysociallink4 = $row['facultysociallink4'];
    $datecreated = $row['datecreated'];
    $attendance = $row['attendance'];

    $exportarray = array($id,
                                        $facultyname,
                                        $facultyemail,
                                        $facultyexperience,
                                        $facultyimage,
                                        $facultyappointfrom,
                                        $facultyidnumber,
                                        $facultyphonenumber,
                                        $facultydesignation,
                                        $facultydepartment,
                                        $facultyqualification,
                                        $facultygender,
                                        $facultyaddress,
                                        $facultysociallink1,
                                        $facultysociallink2,
                                        $facultysociallink3,
                                        $facultysociallink4,
                                        $datecreated,
                                        $attendance);
    fputcsv($exportfile,$exportarray);
}
fclose($exportfile);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$exportfilename");
header("Content-type: application/csv");
readfile($exportfilename);
unlink($exportfilename);
exit();