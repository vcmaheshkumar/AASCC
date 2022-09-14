<?php
session_start();
include "../Functions/Controllers/Models/conn.php";

$exportfilename = "CandidateRecord-".date('Y-m-d').".csv";
$exportquery = "SELECT * FROM candidate";
$exportresult = mysqli_query($conn,$exportquery);
$exportarray = array();
$exportfile = fopen($exportfilename,"w");
$exportarray = array("id","name","email","phone number","Gender","B.Group","Class","Admission Year","Address","Nation","Mother Tongue","Identity Mark","Language Taken","Parents Name","Parents Phone Number","Community Cert","TC Cert","Admit Card","SSLC Cert","SSLC Marks","HSC +1 Cert","HSC +1 Marks","HSC +2 Cert","HSC +2 Mark","Income Cert","Aadhar No.","PAN No","Voter Id","1st Sem Cert","1st Sem Mark","2nd Sem Cert","2nd Sem Mark","3rd Sem Cert","3rd Sem Mark","4th Sem Cert","4th Sem Mark","5th Sem Cert","5th Sem Mark","6th Sem Cert","6th Sem Mark","Reamrks","Other Cert Number","Other Cert Number","Other Cert Number","Added Date in Database","Attendance");
fputcsv($exportfile,$exportarray);

while($row = mysqli_fetch_array($exportresult)){
    $id = $row['id'];
    $candidatename = $row['candidatename']; //1
    $candidateemail = $row['candidateemail']; //2
    $candidatephonenumber = $row['candidatephonenumber']; //3
    $candidategender = $row['candidategender']; //4
    $candidatebg = $row['candidatebg']; //5
    $candidateclass = $row['candidateclass']; //6
    $candidateadmityear = $row['candidateadmityear']; //7
    $candidateaddress = $row['candidateaddress'];//8
    $candidatenationality = $row['candidatenationality']; //9
    $candidatemt = $row['candidatemt']; //10
    $candidatelt = $row['candidatelt']; //11
    $candidateim = $row['candidateim']; //12
    $candidateparentsname = $row['candidateparentsname']; //13
    $candidateparentphonenumber = $row['candidateparentphonenumber']; //14
    $candidatecommunitynumber = $row['candidatecommunitynumber']; //15
    $candidatetcnumaber = $row['candidatetcnumaber']; //16
    $candidateAdmitcardnumber = $row['candidateAdmitcardnumber']; //17
    $candidatesslcno = $row['candidatesslcno']; //18
    $candidatesslcmark = $row['candidatesslcmark']; //19
    $candidatehsconeno = $row['candidatehsconeno']; //20
    $candidatehsconemark = $row['candidatehsconemark']; //21
    $candidatehsctwono = $row['candidatehsctwono']; //22
    $candidatehsctwomark = $row['candidatehsctwomark']; //23
    $candidateicno = $row['candidateicno']; //39
    $candidateaadhar = $row['candidateaadhar']; //40
    $candidatepan = $row['candidatepan']; //41
    $candidatevote = $row['candidatevote']; //42
    $candidateonesemno = $row['candidateonesemno']; //43
    $candidateonesemmark = $row['candidateonesemmark']; //24
    $candidatetwosemno = $row['candidatetwosemno']; //25
    $candidatetwosemmark = $row['candidatetwosemmark']; //26
    $candidatethreesemno = $row['candidatethreesemno']; //27
    $candidatethreesemmark = $row['candidatethreesemmark']; //28
    $candidatetfoursemno = $row['candidatetfoursemno']; //29
    $candidatefoursemmark = $row['candidatefoursemmark']; //30
    $candidatetfivesemno = $row['candidatetfivesemno']; //44
    $candidatetfivesemmark = $row['candidatetfivesemmark']; //45
    $candidatesixsemno = $row['candidatesixsemno']; //31
    $candidatesixsemmark = $row['candidatesixsemmark']; //32
    $candidateremark = $row['candidateremark']; //33
    $candidateotherone = $row['candidateotherone']; //34
    $candidateothertwo = $row['candidateothertwo']; //35
    $candidateotherthree = $row['candidateotherthree']; //36
    $dateop = $row['dateop']; //37

    $exportarray = array($id,
                                        $candidatename,
                                        $candidateemail,
                                        $candidatephonenumber,
                                        $candidategender,
                                        $candidatebg,
                                        $candidateclass,
                                        $candidateadmityear,
                                        $candidateaddress,
                                        $candidatenationality,
                                        $candidatemt,
                                        $candidatelt,
                                        $candidateim,
                                        $candidateparentsname,
                                        $candidateparentphonenumber,
                                        $candidatecommunitynumber,
                                        $candidatetcnumaber,
                                        $candidateAdmitcardnumber,
                                        $candidatesslcno,
                                        $candidatesslcmark,
                                        $candidatehsconeno,
                                        $candidatehsconemark,
                                        $candidatehsctwono,
                                        $candidatehsctwomark,
                                        $candidateicno,
                                        $candidateaadhar,
                                        $candidatepan,
                                        $candidatevote,
                                        $candidateonesemno,
                                        $candidateonesemmark,
                                        $candidatetwosemno,
                                        $candidatetwosemmark,
                                        $candidatethreesemno,
                                        $candidatethreesemmark,
                                        $candidatetfoursemno,
                                        $candidatefoursemmark,
                                        $candidatetfivesemno,
                                        $candidatetfivesemmark,
                                        $candidatesixsemno,
                                        $candidatesixsemmark,
                                        $candidateremark,
                                        $candidateotherone,
                                        $candidateothertwo,
                                        $candidateotherthree,
                                        $dateop);
    fputcsv($exportfile,$exportarray);
}
fclose($exportfile);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$exportfilename");
header("Content-type: application/csv");
readfile($exportfilename);
unlink($exportfilename);
exit();