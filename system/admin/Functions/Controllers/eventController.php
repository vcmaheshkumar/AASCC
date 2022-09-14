<?php
include "Models/conn.php";

if (isset($_POST['addEvent'])) {
    $adminName = $_POST['adminName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $dateposted = date('Y-m-d');

    $eventSql = "INSERT INTO events (adminName,title,date,details,department,dateposted) VALUE (?, ?, ?, ?, ?, ?)";
    $eventStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($eventStmt, $eventSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($eventStmt, "ssssss",
                                            $adminName,
                                            $title,
                                            $date,
                                            $details,
                                            $department,
                                            $dateposted);
    mysqli_stmt_execute($eventStmt);
    $_SESSION['success'] = "Event Posted Successfully";
}

if(isset($_POST['updateEvent'])){
    $id = $_POST['eventid'];
    $uadminName = $_POST["uadminName"];
    $utitle = mysqli_real_escape_string($conn, $_POST['utitle']);
    $udate = mysqli_real_escape_string($conn, $_POST['udate']);
    $udetails = mysqli_real_escape_string($conn, $_POST['udetails']);
    $udepartment = mysqli_real_escape_string($conn, $_POST['udepartment']);
    $udateposted = date('Y-m-d');

    $eventAddQuery = "UPDATE events SET adminName='$uadminName', title='$utitle', date='$udate', details='$udetails', department='$udepartment', dateposted='$udateposted' WHERE id='$id'";
    $eventAddResult = mysqli_query($conn, $eventAddQuery);
    $_SESSION['warning'] = "Updated Successfully";
}