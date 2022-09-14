<?php
include "Models/conn.php";
 
if(isset($_POST['addCandidate'])){
    $candidatename = mysqli_real_escape_string($conn, $_POST['candidatename']); //1
    $candidaterollno = mysqli_real_escape_string($conn, $_POST['candidaterollno']); //2
    $candidateemail = mysqli_real_escape_string($conn, $_POST['candidateemail']); //3
    $candidatephonenumber = mysqli_real_escape_string($conn, $_POST['candidatephonenumber']); //4
    $candidategender = mysqli_real_escape_string($conn, $_POST['candidategender']); //5
    $candidatebg = mysqli_real_escape_string($conn, $_POST['candidatebg']); //6
    $candidatedepartment = mysqli_real_escape_string($conn, $_POST['candidatedepartment']); //7
    $candidateclass = mysqli_real_escape_string($conn, $_POST['candidateclass']); //8
    $candidateadmityear = mysqli_real_escape_string($conn, $_POST['candidateadmityear']); //9
    $candidateaddress = mysqli_real_escape_string($conn, $_POST['candidateaddress']);//10
    $candidatenationality = mysqli_real_escape_string($conn, $_POST['candidatenationality']); //11
    $candidatemt = mysqli_real_escape_string($conn, $_POST['candidatemt']); //12
    $candidatelt = mysqli_real_escape_string($conn, $_POST['candidatelt']); //13
    $candidateim = mysqli_real_escape_string($conn, $_POST['candidateim']); //14
    $candidateparentsname = mysqli_real_escape_string($conn, $_POST['candidateparentsname']); //15
    $candidateparentphonenumber = mysqli_real_escape_string($conn, $_POST['candidateparentphonenumber']); //16
    $candidatecommunitynumber = mysqli_real_escape_string($conn, $_POST['candidatecommunitynumber']); //17
    $candidatetcnumaber = mysqli_real_escape_string($conn, $_POST['candidatetcnumaber']); //18
    $candidateAdmitcardnumber = mysqli_real_escape_string($conn, $_POST['candidateAdmitcardnumber']); //19
    $candidatesslcno = mysqli_real_escape_string($conn, $_POST['candidatesslcno']); //20
    $candidatesslcmark = mysqli_real_escape_string($conn, $_POST['candidatesslcmark']); //21
    $candidatehsconeno = mysqli_real_escape_string($conn, $_POST['candidatehsconeno']); //22
    $candidatehsconemark = mysqli_real_escape_string($conn, $_POST['candidatehsconemark']); //23
    $candidatehsctwono = mysqli_real_escape_string($conn, $_POST['candidatehsctwono']); //24
    $candidatehsctwomark = mysqli_real_escape_string($conn, $_POST['candidatehsctwomark']); //25
    $candidateicno = mysqli_real_escape_string($conn, $_POST['candidateicno']); //26
    $candidateaadhar = mysqli_real_escape_string($conn, $_POST['candidateaadhar']); //27
    $candidatepan = mysqli_real_escape_string($conn, $_POST['candidatepan']); //28
    $candidatevote = mysqli_real_escape_string($conn, $_POST['candidatevote']); //29
    $candidateexamrollno = mysqli_real_escape_string($conn, $_POST['candidateexamrollno']); //30
    $candidateonesemno = mysqli_real_escape_string($conn, $_POST['candidateonesemno']); //31
    $candidateonesemmark = mysqli_real_escape_string($conn, $_POST['candidateonesemmark']); //32
    $candidatetwosemno = mysqli_real_escape_string($conn, $_POST['candidatetwosemno']); //33
    $candidatetwosemmark = mysqli_real_escape_string($conn, $_POST['candidatetwosemmark']); //34
    $candidatethreesemno = mysqli_real_escape_string($conn, $_POST['candidatethreesemno']); //35
    $candidatethreesemmark = mysqli_real_escape_string($conn, $_POST['candidatethreesemmark']); //36
    $candidatetfoursemno = mysqli_real_escape_string($conn, $_POST['candidatetfoursemno']); //37
    $candidatefoursemmark = mysqli_real_escape_string($conn, $_POST['candidatefoursemmark']); //38
    $candidatetfivesemno = mysqli_real_escape_string($conn, $_POST['candidatefivesemno']); //39
    $candidatetfivesemmark = mysqli_real_escape_string($conn, $_POST['candidatefivesemmark']); //40
    $candidatesixsemno = mysqli_real_escape_string($conn, $_POST['candidatesixsemno']); //41
    $candidatesixsemmark = mysqli_real_escape_string($conn, $_POST['candidatesixsemmark']); //42
    $candidateremark = mysqli_real_escape_string($conn, $_POST['candidateremark']); //43
    $candidateotherone = mysqli_real_escape_string($conn, $_POST['candidateotherone']); //44
    $candidateothertwo = mysqli_real_escape_string($conn, $_POST['candidateothertwo']); //45
    $candidateotherthree = mysqli_real_escape_string($conn, $_POST['candidateotherthree']); //46
    $dateop = date('Y-m-d'); //47

    $candidateSql = "INSERT INTO `candidate`(`candidatename`, `candidaterollno`, `candidateemail`, `candidatephonenumber`, `candidategender`, `candidatebg`, `candidateclass`, `candidatedepartment`, `candidateadmityear`, `candidateaddress`, `candidatenationality`, `candidatemt`, `candidatelt`, `candidateim`, `candidateparentsname`, `candidateparentphonenumber`, `candidatecommunitynumber`, `candidatetcnumaber`, `candidateAdmitcardnumber`, `candidatesslcno`, `candidatesslcmark`, `candidatehsconeno`, `candidatehsconemark`, `candidatehsctwono`, `candidatehsctwomark`, `candidateicno`, `candidateaadhar`, `candidatepan`, `candidatevote`, `candidateonesemno`, `candidateexamrollno`, `candidateonesemmark`, `candidatetwosemno`, `candidatetwosemmark`, `candidatethreesemno`, `candidatethreesemmark`, `candidatetfoursemno`, `candidatefoursemmark`, `candidatetfivesemno`, `candidatetfivesemmark`, `candidatesixsemno`, `candidatesixsemmark`, `candidateremark`, `candidateotherone`, `candidateothertwo`, `candidateotherthree`, `dateop`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $candidateStmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($candidateStmt, $candidateSql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($candidateStmt, "sssssssssssssssssssssssssssssssssssssssssssssss",
                                            $candidatename, //1
                                            $candidaterollno, //2
                                            $candidateemail, //3
                                            $candidatephonenumber, //4
                                            $candidategender, //5
                                            $candidatebg, //6
                                            $candidatedepartment, //7
                                            $candidateclass, //8
                                            $candidateadmityear, //9
                                            $candidateaddress, //10
                                            $candidatenationality, //11
                                            $candidatemt, //12
                                            $candidatelt, //13
                                            $candidateim, //14
                                            $candidateparentsname, //15
                                            $candidateparentphonenumber, //16
                                            $candidatecommunitynumber, //17
                                            $candidatetcnumaber, //18
                                            $candidateAdmitcardnumber, //19
                                            $candidatesslcno, //20
                                            $candidatesslcmark, //21
                                            $candidatehsconeno, //22
                                            $candidatehsconemark, //23
                                            $candidatehsctwono, //24
                                            $candidatehsctwomark, //25
                                            $candidateicno, //26
                                            $candidateaadhar, //27
                                            $candidatepan, //28
                                            $candidatevote, //29
                                            $candidateexamrollno, //30
                                            $candidateonesemno, //31
                                            $candidateonesemmark, //32
                                            $candidatetwosemno, //33
                                            $candidatetwosemmark, //34
                                            $candidatethreesemno, //35
                                            $candidatethreesemmark, //36
                                            $candidatetfoursemno, //37
                                            $candidatefoursemmark, //38
                                            $candidatetfivesemno, //39
                                            $candidatetfivesemmark, //40
                                            $candidatesixsemno, //41
                                            $candidatesixsemmark, //42
                                            $candidateremark, //43
                                            $candidateotherone, //44
                                            $candidateothertwo, //45
                                            $candidateotherthree, //46
                                            $dateop); //47
    mysqli_stmt_execute($candidateStmt);
    $_SESSION['success'] = "Candidate Added Successfully";
}