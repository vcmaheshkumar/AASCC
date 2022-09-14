<?php
define('admin',true);
$title = "ADMINISTRATION | ATTENDANCE | CANDIDATE";
include "../../includes/headers.php";
include "../../Functions/Controllers/Models/conn.php";
?>
    <!-- partial -->
    <div class="main-panel">
        <!-- content-wrapper ends -->
        <!-- table content -->
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Students Attendance</h4>
                            <p class="card-description">Complete Candidate Presence Date</p>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Roll Number</th>
                                            <th>Subject</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Roll Number</th>
                                            <th>Subject</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $candidateAttendSql = "SELECT * FROM candidate_attendance";
                                        $candidateAttendResult = mysqli_query($conn, $candidateAttendSql);
                                        if(mysqli_num_rows($candidateAttendResult) > 0){
                                            while($row = mysqli_fetch_array($candidateAttendResult)){
                                                if($row['attendance'] == 'present'){
                                                    $Name = $row['name'];
                                                    $candidaterollnumber = $row['rollnumber'];
                                                    $subject = $row['subject'];
                                                    $department = $row['class'];
                                                    $date = $row['date'];
                                        ?>
                                        <tr>
                                            <td><?php echo $Name; ?></td>
                                            <td><?php echo $candidaterollnumber; ?></td>
                                            <td><?php echo $subject; ?></td>
                                            <td><?php echo $department; ?></td>
                                            <td><?php echo $date; ?></td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <script type="text/javascript">
                                function ExportC() {
                                    var conf = confirm("Do you want to Export as CSV file");
                                    if (conf == true) {
                                        window.open("http://localhost/projectApollo/admin/attendance/report-of-student-absents", '_blank')
                                    }
                                }
                            </script>
                            <br/>
                                <p class="card-description">                  
                                    <button class="btn btn-outline-success" type="submit" onclick="ExportC()">
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
include "../../includes/footers.php";
?>