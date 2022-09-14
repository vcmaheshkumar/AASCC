<?php
include "/xampp/htdocs/projectApollo/Functions/Models/conn.php";

if (isset($_POST['addLibEntry'])) {
    $librarianName = $_POST['librarianName'];
    $BookName = mysqli_real_escape_string($conn, $_POST['BookName']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $NameOp = mysqli_real_escape_string($conn, $_POST['NameOp']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $DateOt = mysqli_real_escape_string($conn, $_POST['DateOt']);
    $LastCall = mysqli_real_escape_string($conn, $_POST['LastCall']);
    $SubDate = mysqli_real_escape_string($conn, $_POST['SubDate']);
    $Fine = mysqli_real_escape_string($conn, $_POST['Fine']);
    $LibInChar = mysqli_real_escape_string($conn, $_POST['LibInChar']);

    $LibrarySql = "INSERT INTO library (librarianName,BookName,status,NameOp,class,DateOt,LastCall,SubDate,Fine,LibInChar) 
                            VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $LibraryStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($LibraryStmt, $LibrarySql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($LibraryStmt, "ssssssssss",
                                            $librarianName,
                                            $BookName,
                                            $status,
                                            $NameOp,
                                            $class,
                                            $DateOt,
                                            $LastCall,
                                            $SubDate,
                                            $Fine,
                                            $LibInChar);
    mysqli_stmt_execute($LibraryStmt);
    $_SESSION['success'] = "Entered data successfully";
}

if(isset($_POST['updateLibEntry'])){
    $id = $_POST['libraryid'];
    $ulibrarianName = $_POST['ulibrarianName'];
    $uBookName = mysqli_real_escape_string($conn, $_POST['uBookName']);
    $ustatus = mysqli_real_escape_string($conn, $_POST['ustatus']);
    $uNameOp = mysqli_real_escape_string($conn, $_POST['uNameOp']);
    $uclass = mysqli_real_escape_string($conn, $_POST['uclass']);
    $uDateOt = mysqli_real_escape_string($conn, $_POST['uDateOt']);
    $uLastCall = mysqli_real_escape_string($conn, $_POST['uLastCall']);
    $uSubDate = mysqli_real_escape_string($conn, $_POST['uSubDate']);
    $uFine = mysqli_real_escape_string($conn, $_POST['uFine']);
    $uLibInChar = mysqli_real_escape_string($conn, $_POST['uLibInChar']);


    $LibraryAddQuery = "UPDATE library SET librarianName='$ulibrarianName', 
                                                                        BookName='$uBookName', 
                                                                        status='$ustatus', 
                                                                        NameOp='$uNameOp', 
                                                                        class='$uclass', 
                                                                        DateOt='$uDateOt', 
                                                                        LastCall='$uLastCall', 
                                                                        SubDate='$uSubDate', 
                                                                        Fine='$uFine', 
                                                                        LibInChar='$uLibInChar' WHERE id='$id'";
    $LibraryAddResult = mysqli_query($conn, $LibraryAddQuery);
    $_SESSION['warning'] = "Library Updated";
}
