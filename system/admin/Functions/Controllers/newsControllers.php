<?php
include "Models/conn.php";

if (isset($_POST['addNews'])) {
    $adminName = $_POST['adminName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $dateposted = date('Y-m-d');

    $newsSql = "INSERT INTO news (adminName,title,date,details,department,dateposted) VALUE (?, ?, ?, ?, ?, ?)";
    $newsStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($newsStmt, $newsSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($newsStmt, "ssssss",
                                            $adminName,
                                            $title,
                                            $date,
                                            $details,
                                            $department,
                                            $dateposted);
    mysqli_stmt_execute($newsStmt);
    $_SESSION['success'] = "News Posted Successfully";
}

if(isset($_POST['updateNews'])){
    $id = $_POST['newsid'];
    $uadminName = $_POST["uadminName"];
    $utitle = mysqli_real_escape_string($conn, $_POST['utitle']);
    $udate = mysqli_real_escape_string($conn, $_POST['udate']);
    $udetails = mysqli_real_escape_string($conn, $_POST['udetails']);
    $udepartment = mysqli_real_escape_string($conn, $_POST['udepartment']);
    $udateposted = date('Y-m-d');

    $newsAddQuery = "UPDATE news SET adminName='$uadminName', title='$utitle', date='$udate', details='$udetails', department='$udepartment', dateposted='$udateposted' WHERE id='$id'";
    $newsAddResult = mysqli_query($conn, $newsAddQuery);
    $_SESSION['warning'] = "Updated Successfully";
}