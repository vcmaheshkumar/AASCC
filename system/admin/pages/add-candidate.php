<?php
define('admin',true);
$title = "ADMINISTRATION | ADD | CANDIDATE";
include "../includes/headers.php";
include "../Functions/Controllers/candidateController.php"
?>
            <!-- partial -->
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-title d-flex justify-content-between align-items-center m-4">
                                <h4 class="card-title">Add Candidate</h4>
                                <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/student">Go back</a>
                            </div>
                                <div class="card-body">
                                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_SESSION['success'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="candidatename">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputRlnumber">Roll Number</label>
                                            <input type="text" class="form-control" id="exampleInputRlnumber" placeholder="Roll Number" name="candidaterollno">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="candidateemail">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhnumber">Phone Number</label>
                                            <input type="text" class="form-control" id="exampleInputPhnumber" placeholder="Phone Number" name="candidatephonenumber">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" id="exampleSelectGender" name="candidategender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDepartment">Blood Group</label>
                                            <input type="text" class="form-control" id="exampleInputDepartment" placeholder="Blood Group" name="candidatebg">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDepartment">Department</label>
                                            <input type="text" class="form-control" id="exampleInputDepartment" placeholder="Class" name="candidatedepartment">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDepartment">Class</label>
                                            <input type="text" class="form-control" id="exampleInputDepartment" placeholder="Class" name="candidateclass">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputYear">Admission Year</label>
                                            <input type="text" class="form-control" id="exampleInputYear" placeholder="Admission Year" name="candidateadmityear">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleAddress">Address</label>
                                            <textarea class="form-control" id="exampleAddress" rows="4" placeholder="Address" name="candidateaddress"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputParentsName">Nationality</label>
                                            <input type="text" class="form-control" id="exampleInputParentsName" placeholder="Nationality" name="candidatenationality">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputParentsName">Mother Tongue</label>
                                            <input type="text" class="form-control" id="exampleInputParentsName" placeholder="Mother Tongue" name="candidatemt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputParentsName">Language Taken</label>
                                            <input type="text" class="form-control" id="exampleInputParentsName" placeholder="Language Taken" name="candidatelt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputParentsName">Identifiable Marks</label>
                                            <input type="text" class="form-control" id="exampleInputParentsName" placeholder="Identifiable Marks" name="candidateim">
                                        </div>
                                        <hr/>
                                        <p class="text-muted">Parents Detail</p>
                                        <div class="form-group">
                                            <label for="exampleInputParentsName">Parents Name</label>
                                            <input type="text" class="form-control" id="exampleInputParentsName" placeholder="Parents Name" name="candidateparentsname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPPhnumber">Parents Phone Number</label>
                                            <input type="text" class="form-control" id="exampleInputPPhnumber" placeholder="Parents Phone Number" name="candidateparentphonenumber">
                                        </div>
                                        <hr/>
                                        <p class="text-muted">Certificates Details</p>
                                        <div class="form-group">
                                            <label for="exampleRemark">Community Certificate Number</label>
                                            <input type="text" class="form-control" id="exampleRemark" placeholder="Remarks" name="candidatecommunitynumber">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTcnumber">TC Number</label>
                                            <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="TC Number" name="candidatetcnumaber">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTcnumber">Admit Card Number</label>
                                            <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Admit Card Number" name="candidateAdmitcardnumber">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">SSLC certificate Number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="SSLC certificate Number" name="candidatesslcno">
                                            </div>
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">SSLC Marks</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="SSLC Marks" name="candidatesslcmark">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">HSC +1 certificate Number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Admit Card Number" name="candidatehsconeno">
                                            </div>
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">HSC +1 Marks</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Admit Card Number" name="candidatehsconemark">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">HSC +2 certificate Number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="HSC +2 certificate Number" name="candidatehsctwono">
                                            </div>
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">HSC +2 Marks</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="HSC +2 Marks" name="candidatehsctwomark">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTcnumber">Income Certificate Number</label>
                                            <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Income Certificate Number" name="candidateicno">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">Aadhar Card Number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Aadhar Card Number" name="candidateaadhar">
                                            </div>
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">PAN Card Number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="PAN Card Number" name="candidatepan">
                                            </div>
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">Voter ID number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Voter ID number" name="candidatevote">
                                            </div>
                                            <hr/>
                                            <p class="text-muted">College Details</p>
                                            <div class="form-group col">
                                                <label for="exampleInputTcnumber">Exam Roll Number</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Exam Roll Number" name="candidateexamrollno">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">1st Semester Certificate Number</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="1st Semester Certificate Number" name="candidateonesemno">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">1st Semester Marks</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="1st Semester Marks" name="candidateonesemmark">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">2nd Semester Certificate Number</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="2nd Semester Certificate Number" name="candidatetwosemno">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">2nd Semester Marks</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="2md Semester Marks" name="candidatetwosemmark">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">3rd Semester Certificate Number</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="3rd Semester Certificate Number" name="candidatethreesemno">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">3rd Semester Marks</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="3rd Semester Marks" name="candidatethreesemmark">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">4th Semester Certificate Number</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="4th Semester Certificate Number" name="candidatetfoursemno">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">4th Semester Marks</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="4th Semester Marks" name="candidatefoursemmark">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">5th Semester Certificate Number</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="5th Semester Certificate Number" name="candidatefivesemno">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">5th Semester Marks</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="5th Semester Marks" name="candidatefivesemmark">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">6th Semester Certificate Number</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="6th Semester Certificate Number" name="candidatesixsemno">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">6th Semester Marks</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="6th Semester Marks" name="candidatesixsemmark">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTcnumber">Remarks</label>
                                                <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Remarks" name="candidateremark">
                                            </div>
                                            <hr/>
                                            <p class="text-muted">Other Certificates</p>
                                            <p class="text-danger">Only if the candidate have any other extra activity certificates which negotiable by Government.</p>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">Certificate Name 1</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="Certificate Name" name="candidateotherone">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">Certificate Name 2</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="6th Semester Marks" name="candidateothertwo">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputTcnumber">Certificate Name 3</label>
                                                    <input type="text" class="form-control" id="exampleInputTcnumber" placeholder="6th Semester Marks" name="candidateotherthree">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="addCandidate">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
include "../includes/footers.php";
?>