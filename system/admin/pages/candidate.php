<?php
define('admin',true);
$title = "ADMINISTRATION | CANDIDATE";
include "../includes/headers.php";
include "../Functions/Controllers/candidateController.php"
?>
    <script type="text/javascript">
        function Export() {
            var conf = confirm("Do you want to Export as CSV file");
            if (conf == true) {
                window.open("export-candidate", '_blank')
            }
        }
    </script>
            <!-- partial -->
            <div class="main-panel">
                <!-- content-wrapper ends -->
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">STUDENTS</h4>
                                    <p class="card-description">
                                        <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/add-candidate">Add Student Data</a>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>Ph. No.</th>
                                                    <th>Gender</th>
                                                    <th>Blood Group</th>
                                                    <th>class</th>
                                                    <th>admission year</th>
                                                    <th>Address</th>
                                                    <th>Nation</th>
                                                    <th>Mother Tongue</th>
                                                    <th>Identity Mark</th>
                                                    <th>Language Taken</th>
                                                    <th>Parents Name</th>
                                                    <th>Parents Ph. No.</th>
                                                    <th>Community Cert</th>
                                                    <th>TC Cert</th>
                                                    <th>Admit Card</th>
                                                    <th>SSLC Cert</th>
                                                    <th>SSLC Marks</th>
                                                    <th>HSC +1 Cert</th>
                                                    <th>HSC +1 Mark</th>
                                                    <th>HSC +2 Cert</th>
                                                    <th>HSC +2 Mark</th>
                                                    <th>Income Cert</th>
                                                    <th>Aadhar No.</th>
                                                    <th>PAN No.</th>
                                                    <th>Voter ID No.</th>
                                                    <th>Sem 1 MarkSheet No.</th>
                                                    <th>Sem 1 Marks</th>
                                                    <th>Sem 2 MarkSheet No.</th>
                                                    <th>Sem 2 Marks</th>
                                                    <th>Sem 3 MarkSheet No.</th>
                                                    <th>Sem 3 Marks</th>
                                                    <th>Sem 4 MarkSheet No.</th>
                                                    <th>Sem 4 Marks</th>
                                                    <th>Sem 5 MarkSheet No.</th>
                                                    <th>Sem 5 Marks</th>
                                                    <th>Sem 6 MarkSheet No.</th>
                                                    <th>Sem 6 Marks</th>
                                                    <th>Remark</th>
                                                    <th>Others</th>
                                                    <th>Others</th>
                                                    <th>Others</th>
                                                    <th>Date of Update</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>Ph. No.</th>
                                                    <th>Gender</th>
                                                    <th>Blood Group</th>
                                                    <th>class</th>
                                                    <th>admission year</th>
                                                    <th>Address</th>
                                                    <th>Nation</th>
                                                    <th>Mother Tongue</th>
                                                    <th>Identity Mark</th>
                                                    <th>Language Taken</th>
                                                    <th>Parents Name</th>
                                                    <th>Parents Ph. No.</th>
                                                    <th>Community Cert</th>
                                                    <th>TC Cert</th>
                                                    <th>Admit Card</th>
                                                    <th>SSLC Cert</th>
                                                    <th>SSLC Marks</th>
                                                    <th>HSC +1 Cert</th>
                                                    <th>HSC +1 Mark</th>
                                                    <th>HSC +2 Cert</th>
                                                    <th>HSC +2 Mark</th>
                                                    <th>Income Cert</th>
                                                    <th>Aadhar No.</th>
                                                    <th>PAN No.</th>
                                                    <th>Voter ID No.</th>
                                                    <th>Sem 1 MarkSheet No.</th>
                                                    <th>Sem 1 Marks</th>
                                                    <th>Sem 2 MarkSheet No.</th>
                                                    <th>Sem 2 Marks</th>
                                                    <th>Sem 3 MarkSheet No.</th>
                                                    <th>Sem 3 Marks</th>
                                                    <th>Sem 4 MarkSheet No.</th>
                                                    <th>Sem 4 Marks</th>
                                                    <th>Sem 5 MarkSheet No.</th>
                                                    <th>Sem 5 Marks</th>
                                                    <th>Sem 6 MarkSheet No.</th>
                                                    <th>Sem 6 Marks</th>
                                                    <th>Remark</th>
                                                    <th>Others</th>
                                                    <th>Others</th>
                                                    <th>Others</th>
                                                    <th>Date of Update</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                                $candidateSql = "SELECT * FROM candidate";
                                                $candidateQuery = $conn->query($candidateSql);
                                                while($candidateRow = $candidateQuery->fetch_assoc()){
                                                    $candidatename = $candidateRow['candidatename']; //1
                                                    $candidateemail = $candidateRow['candidateemail']; //2
                                                    $candidatephonenumber = $candidateRow['candidatephonenumber']; //3
                                                    $candidategender = $candidateRow['candidategender']; //4
                                                    $candidatebg = $candidateRow['candidatebg']; //5
                                                    $candidateclass = $candidateRow['candidateclass']; //6
                                                    $candidateadmityear = $candidateRow['candidateadmityear']; //7
                                                    $candidateaddress = $candidateRow['candidateaddress'];//8
                                                    $candidatenationality = $candidateRow['candidatenationality']; //9
                                                    $candidatemt = $candidateRow['candidatemt']; //10
                                                    $candidatelt = $candidateRow['candidatelt']; //11
                                                    $candidateim = $candidateRow['candidateim']; //12
                                                    $candidateparentsname = $candidateRow['candidateparentsname']; //13
                                                    $candidateparentphonenumber = $candidateRow['candidateparentphonenumber']; //14
                                                    $candidatecommunitynumber = $candidateRow['candidatecommunitynumber']; //15
                                                    $candidatetcnumaber = $candidateRow['candidatetcnumaber']; //16
                                                    $candidateAdmitcardnumber = $candidateRow['candidateAdmitcardnumber']; //17
                                                    $candidatesslcno = $candidateRow['candidatesslcno']; //18
                                                    $candidatesslcmark = $candidateRow['candidatesslcmark']; //19
                                                    $candidatehsconeno = $candidateRow['candidatehsconeno']; //20
                                                    $candidatehsconemark = $candidateRow['candidatehsconemark']; //21
                                                    $candidatehsctwono = $candidateRow['candidatehsctwono']; //22
                                                    $candidatehsctwomark = $candidateRow['candidatehsctwomark']; //23
                                                    $candidateicno = $candidateRow['candidateicno']; //39
                                                    $candidateaadhar = $candidateRow['candidateaadhar']; //40
                                                    $candidatepan = $candidateRow['candidatepan']; //41
                                                    $candidatevote = $candidateRow['candidatevote']; //42
                                                    $candidateonesemno = $candidateRow['candidateonesemno']; //43
                                                    $candidateonesemmark = $candidateRow['candidateonesemmark']; //24
                                                    $candidatetwosemno = $candidateRow['candidatetwosemno']; //25
                                                    $candidatetwosemmark = $candidateRow['candidatetwosemmark']; //26
                                                    $candidatethreesemno = $candidateRow['candidatethreesemno']; //27
                                                    $candidatethreesemmark = $candidateRow['candidatethreesemmark']; //28
                                                    $candidatetfoursemno = $candidateRow['candidatetfoursemno']; //29
                                                    $candidatefoursemmark = $candidateRow['candidatefoursemmark']; //30
                                                    $candidatetfivesemno = $candidateRow['candidatetfivesemno']; //44
                                                    $candidatetfivesemmark = $candidateRow['candidatetfivesemmark']; //45
                                                    $candidatesixsemno = $candidateRow['candidatesixsemno']; //31
                                                    $candidatesixsemmark = $candidateRow['candidatesixsemmark']; //32
                                                    $candidateremark = $candidateRow['candidateremark']; //33
                                                    $candidateotherone = $candidateRow['candidateotherone']; //34
                                                    $candidateothertwo = $candidateRow['candidateothertwo']; //35
                                                    $candidateotherthree = $candidateRow['candidateotherthree']; //36
                                                    $dateop = $candidateRow['dateop']; //37
                                                    $attendance = $candidateRow['attendance']; //38
                                                ?>
                                                <tr>
                                                    <td><?php echo $candidatename; ?></td>
                                                    <td><?php echo $candidateemail; ?></td>
                                                    <td><?php echo $candidatephonenumber; ?></td>
                                                    <td><?php echo $candidategender; ?></td>
                                                    <td><?php echo $candidatebg; ?></td>
                                                    <td><?php echo $candidateclass; ?></td>
                                                    <td><?php echo $candidateadmityear; ?></td>
                                                    <td><?php echo $candidateaddress; ?></td>
                                                    <td><?php echo $candidatenationality; ?></td>
                                                    <td><?php echo $candidatemt; ?></td>
                                                    <td><?php echo $candidateim; ?></td>
                                                    <td><?php echo $candidatelt; ?></td>
                                                    <td><?php echo $candidateparentsname; ?></td>
                                                    <td><?php echo $candidateparentphonenumber; ?></td>
                                                    <td><?php echo $candidatecommunitynumber; ?></td>
                                                    <td><?php echo $candidatetcnumaber; ?></td>
                                                    <td><?php echo $candidateAdmitcardnumber; ?></td>
                                                    <td><?php echo $candidatesslcno; ?></td>
                                                    <td><?php echo $candidatesslcmark; ?></td>
                                                    <td><?php echo $candidatehsconeno; ?></td>
                                                    <td><?php echo $candidatehsconemark; ?></td>
                                                    <td><?php echo $candidatehsctwono; ?></td>
                                                    <td><?php echo $candidatehsctwomark; ?></td>
                                                    <td><?php echo $candidateicno; ?></td>
                                                    <td><?php echo $candidateaadhar; ?></td>
                                                    <td><?php echo $candidatepan; ?></td>
                                                    <td><?php echo $candidatevote; ?></td>
                                                    <td><?php echo $candidateonesemno; ?></td>
                                                    <td><?php echo $candidateonesemmark; ?></td>
                                                    <td><?php echo $candidatetwosemno; ?></td>
                                                    <td><?php echo $candidatetwosemmark; ?></td>
                                                    <td><?php echo $candidatethreesemno; ?></td>
                                                    <td><?php echo $candidatethreesemmark; ?></td>
                                                    <td><?php echo $candidatetfoursemno; ?></td>
                                                    <td><?php echo $candidatefoursemmark; ?></td>
                                                    <td><?php echo $candidatetfivesemno; ?></td>
                                                    <td><?php echo $candidatetfivesemmark; ?></td>
                                                    <td><?php echo $candidatesixsemno; ?></td>
                                                    <td><?php echo $candidatesixsemmark; ?></td>
                                                    <td><?php echo $candidateremark; ?></td>
                                                    <td><?php echo $candidateotherone; ?></td>
                                                    <td><?php echo $candidateothertwo; ?></td>
                                                    <td><?php echo $candidateotherthree; ?></td>
                                                    <td><?php echo $dateop; ?></td>
                                                    <td class="d-flex justify-content-between">
                                                        <form action="delete-candidate" method="POST">
                                                            <input type="hidden" name="candidateid" value="<?php echo $candidateRow['id'];?>" />
                                                            <input type="submit" class="btn text-danger" name="delete" value="Delete" />
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>
                                    <p class="card-description">                  
                                        <button class="btn btn-outline-success" type="submit" onclick="Export()">
                                            <i class="fa fa-file-excel-o fa-fw"></i>Export to Excel
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
include "../includes/footers.php";
?>