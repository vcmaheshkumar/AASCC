<?php
define('admin',true);
$title = "ADMINISTRATION | HOME";
require "includes/headers.php";
require "Functions/Controllers/counter.php";
require "Functions/Controllers/indexController.php";
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="font-weight-bold mb-0">Apollo Arts and Science College Chennai</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Website Views</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $count ?></h3>
                                        <i class="ti-eye icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">No. of Faculties Absent</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $fCount ?></h3>
                                        <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-primary"><?php echo date("d/m/Y") ?><span class="text-black ms-1"><small>(current day)</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Request Pending</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $nCount; ?></h3>
                                        <p class="mb-0 mt-2 text-muted">contact Us</p>
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">|</h3>
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $cCount; ?></h3>
                                        <p class="mb-0 mt-2 text-muted">Newsletter</p>
                                        <i class="ti-hand-stop icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Alumni</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $aCount ?></h3>
                                        <i class="ti-face-smile icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- table content -->
                <div class="content-wrapper">
                    <a href="http://localhost/projectApollo/admin/qrcode/generator" class="btn btn-secondary m-2"><i class="ti-tablet"></i>&nbsp;Generate Faculty QR Code</a>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Faculties Attendance</h4>
                                    <p class="card-description">
                                        No. of faculties not arrived
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>ID number</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            // FOR VICE VERSA USE THIS -> $facultySql = "SELECT * FROM tbl_attendance LEFT OUTER JOIN faculties ON tbl_attendance.IdNumber=faculties.facultyidnumber WHERE faculties.facultyidnumber IS NULL";
                                            $facultySql = "SELECT * FROM faculties LEFT OUTER JOIN tbl_attendance ON faculties.facultyidnumber=tbl_attendance.IdNumber WHERE tbl_attendance.IdNumber IS NULL";
                                            $facultyResult = mysqli_query($conn, $facultySql);
                                                while($row = mysqli_fetch_assoc($facultyResult)){
                                                    $Name = $row['facultyname'];
                                                    $facultyidnumber = $row['IdNumber'];
                                                    $facultytableidnumber = $row['facultyidnumber'];
                                                    $department = $row['facultydepartment'];
                                                    $designation = $row['facultydesignation'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $Name;  ?></td>
                                                    <td><?php echo $facultytableidnumber ?></td>
                                                    <td><?php echo $department ?></td>
                                                    <td><?php echo $designation ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-between align-items-center">
                                    <p class="text-danger m-3">Note: It is Important to export and delete data every day</p>
                                    <div class="col">
                                        <p class="card-description m-3">                  
                                            <button class="btn btn-outline-success" type="submit" onclick="Export()">
                                                <i class="ti-upload"></i> Export to Excel
                                            </button>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <form method="POST" class="col m-3 float-end">
                                            <button class="btn btn-outline-danger" type="submit" name="deleteAttend">
                                                <i class="ti-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function Export() {
                                        var conf = confirm("Do you want to Export as CSV file");
                                        if (conf == true) {
                                            window.open("report-of-faculty-absent", '_blank')
                                        }
                                    }
                                </script>
                                <?php
                                    if(isset($_POST['deleteAttend'])){
                                        $facultyAttendSql = "DELETE FROM tbl_attendance";
                                        $facultyAttendResult = mysqli_query($conn, $facultyAttendSql);
                                        if($facultyAttendResult){
                                            echo "<script>alert('Deleted')</script>";
                                        }else{
                                            echo "<script>alert('Unable to delete')</script>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">To Do Lists</h4>
                                    <div class="list-wrapper pt-2">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom" style="height: 300px;">
                                        </ul>
                                    </div>
                                    <div class="add-items d-flex mb-0 mt-4">
                                        <input type="text" class="form-control todo-list-input me-2" id="newitem" placeholder="Add new task">
                                        <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- DataTales Example -->
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Absentees Students</h4>
                                    <div class="table-responsive">
                                        <?php
                                            if(isset($_SESSION['message'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                                            }
                                            if(isset($_SESSION['waring'])){
                                                echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['waring ']."</div>";
                                            }
                                        ?>
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Roll Number</th>
                                                    <th>Subject</th>
                                                    <th>Class</th>
                                                    <th>Date</th>
                                                    <th>Parents Phone No.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Roll Number</th>
                                                    <th>Subject</th>
                                                    <th>Class</th>
                                                    <th>Date</th>
                                                    <th>Parents Phone No.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    // $candidateAttendSql = "SELECT * FROM candidate_attendance";
                                                    $candidateAttendSql = "SELECT * FROM candidate_attendance ORDER BY date DESC";
                                                    // $candidateAttendSql = "SELECT * FROM candidate LEFT OUTER JOIN candidate_attendance ON candidate.candidaterollno=candidate_attendance.rollnumber";
                                                    $candidateAttendResult = mysqli_query($conn, $candidateAttendSql);
                                                    if(mysqli_num_rows($candidateAttendResult) > 0){
                                                        while($attendacerow = mysqli_fetch_array($candidateAttendResult)){
                                                            if($attendacerow['attendance'] == "Absent"){
                                                                $Name = $attendacerow['name'];
                                                                $candidaterollnumber = $attendacerow['rollnumber'];
                                                                $subject = $attendacerow['subject'];
                                                                $department = $attendacerow['class'];
                                                                $date = $attendacerow['date'];
                                                                $parentsNo = $attendacerow['candidateParentPhoneNumber'];
                                                                if($date = date('d-m-Y')){
                                                ?>
                                                <tr>
                                                    <td><?php echo $Name; ?></td>
                                                    <td><?php echo $candidaterollnumber; ?></td>
                                                    <td><?php echo $subject; ?></td>
                                                    <td><?php echo $department; ?></td>
                                                    <td><?php echo $date; ?></td>
                                                    <td><?php echo $parentsNo; ?></td>
                                                    <td>
                                                        <form action="send-message.php" method="POST">
                                                            <input type="hidden" name="rollnumber" value="<?php echo $row['rollnumber'];?>" />
                                                            <input type="submit" class="btn btn-outline-warning" name="sendMessage" value="Message" />
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function ExportSA() {
                                        var conf = confirm("Do you want to Export as CSV file");
                                        if (conf == true) {
                                            window.open("report-of-student-absent", '_blank')
                                        }
                                    }
                                </script>
                                <p class="card-description m-3">                  
                                        <button class="btn btn-outline-success" type="submit" onclick="ExportSA()">
                                            <i class="ti-upload"></i> Export to Excel
                                        </button>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
require "includes/footers.php";
?>