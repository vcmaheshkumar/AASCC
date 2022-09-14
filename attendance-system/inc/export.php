<?php
session_start();
include "config/conn.php";

$filename = "AttendanceRecord-".date('Ymdgis').".csv";
$query = "SELECT * FROM tbl_attendance";
$result = mysqli_query($conn,$query);
$array = array();
$file = fopen($filename,"w");
$array = array("id","IdNumber","TimeIn","TimeOut","LogDate","Status");
fputcsv($file,$array);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $IdNumber = $row['IdNumber'];
    $TimeIn = $row['TimeIn'];
    $TimeOut = $row['TimeOut'];
    $LogDate = $row['LogDate'];
    $Status = $row['Status'];

    $array = array($id,$IdNumber,$TimeIn,$TimeOut,$LogDate,$Status);
    fputcsv($file,$array);
}
fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$filename");
header("Content-type: application/csv");
readfile($filename);
unlink($filename);
exit();