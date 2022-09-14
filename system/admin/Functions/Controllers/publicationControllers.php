<?php
include "Models/conn.php";

if (isset($_POST['addPublication'])) {
    $adminName = $_POST['adminName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $type = $_POST['type'];
    $tag = mysqli_real_escape_string($conn, $_POST['tag']);
    $dateposted = date('Y-m-d');
    $documentLink = mysqli_real_escape_string($conn, $_POST['documentLink']);

    $PublicationSql = "INSERT INTO Publication (adminName,title,author,type,tag,dateposted,link) VALUE (?, ?, ?, ?, ?, ?, ?)";
    $PublicationStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($PublicationStmt, $PublicationSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($PublicationStmt, "sssssss",
                                            $adminName,
                                            $title,
                                            $author,
                                            $type,
                                            $tag,
                                            $dateposted,
                                            $documentLink);
    mysqli_stmt_execute($PublicationStmt);
    $_SESSION['success'] = "Publication Posted Successfully";
}

if(isset($_POST['updatePublication'])){
    $id = $_POST['publicationid'];
    $uadminName = $_POST['uadminName'];
    $utitle = mysqli_real_escape_string($conn, $_POST['utitle']);
    $uauthor = mysqli_real_escape_string($conn, $_POST['uauthor']);
    $utype = $_POST['utype'];
    $utag = mysqli_real_escape_string($conn, $_POST['utag']);
    $udateposted = date('Y-m-d');
    $udocumentLink = mysqli_real_escape_string($conn, $_POST['udocumentLink']);

    $PublicationAddQuery = "UPDATE Publication SET adminName='$uadminName', title='$utitle', author='$uauthor', type='$utype', tag='$utag', dateposted='$udateposted', link='$udocumentLink' WHERE id='$id'";
    $PublicationAddResult = mysqli_query($conn, $PublicationAddQuery);
    $_SESSION['warning'] = "Updated Successfully";
}