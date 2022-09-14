<?php
include "Models/conn.php";

if (isset($_POST['addCircular'])) {
    $adminName = $_POST['adminName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $dateposted = date('Y-m-d');

    $circularSql = "INSERT INTO circulars (adminName,title,date,details,department,dateposted) VALUE (?, ?, ?, ?, ?, ?)";
    $circularStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($circularStmt, $circularSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($circularStmt, "ssssss",
                                            $adminName,
                                            $title,
                                            $date,
                                            $details,
                                            $department,
                                            $dateposted);
    mysqli_stmt_execute($circularStmt);
    $_SESSION['success'] = "Circular Posted Successfully";
}

if(isset($_POST['updateCircular'])){
    $id = $_POST['circularid'];
    $uadminName = $_POST["uadminName"];
    $utitle = mysqli_real_escape_string($conn, $_POST['utitle']);
    $udate = mysqli_real_escape_string($conn, $_POST['udate']);
    $udetails = mysqli_real_escape_string($conn, $_POST['udetails']);
    $udepartment = mysqli_real_escape_string($conn, $_POST['udepartment']);
    $udateposted = date('Y-m-d');

    $circularAddQuery = "UPDATE circulars SET adminName='$uadminName', title='$utitle', date='$udate', details='$udetails', department='$udepartment', dateposted='$udateposted' WHERE id='$id'";
    $circularAddResult = mysqli_query($conn, $circularAddQuery);
    $_SESSION['warning'] = "Updated Successfully";
}