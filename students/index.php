<?php
define('student',true);
$title = "AAASCC | STUDENTS";
require "includes/headers.php";
?>
<!-- partial -->
<div class="main-panel">
    <!-- content-wrapper ends -->
    <!-- table content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Your Examination Activity</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll Number</th>
                                        <th>department</th>
                                        <th>Subjects</th>
                                        <th>Exam Name</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $examSql = "SELECT * FROM users INNER JOIN candidate_marks ON users.email=candidate_marks.rollno";
                                    $examResult = mysqli_query($conn, $examSql);
                                    if(mysqli_num_rows($examResult) > 0){
                                    while($row = mysqli_fetch_array($examResult)){
                                        $name = $row['name'];
                                        $rollNumber = $row['rollno'];
                                        $department = $row['department'];
                                        $subject = $row['subject'];
                                        $examName = $row['examName'];
                                        $markObtained = $row['markObtained'];
                                        $totalMarks = $row['totalMarks'];
                                    ?>
                                    <tr>
                                        <td><?php echo $name;?></td>
                                        <td><?php echo $rollNumber;?></td>
                                        <td><?php echo $department;?></td>
                                        <td><?php echo $subject;?></td>
                                        <td><?php echo $examName;?></td>
                                        <td><?php echo $markObtained;?> / <?php echo $totalMarks; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Your Attendance Activity</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll Number</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Today Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $examSql = "SELECT * FROM users INNER JOIN candidate_attendance ON users.email=candidate_attendance.rollnumber ORDER BY candidate_attendance.date DESC";
                                    $examResult = mysqli_query($conn, $examSql);
                                    if(mysqli_num_rows($examResult) > 0){
                                        while($row = mysqli_fetch_array($examResult)){
                                            $name = $row['name'];
                                            $rollnumber = $row['rollnumber'];
                                            $subject = $row['subject'];
                                            $class = $row['class'];
                                            $attendance = $row['attendance'];
                                            $date = $row['date'];
                                    ?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $rollnumber; ?></td>
                                        <td><?php echo $subject; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $attendance; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Study Materials</h4>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Uploaded By</th>
                                        <th>Name</th>
                                        <th>Download</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Uploaded Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Uploaded By</th>
                                        <th>Name</th>
                                        <th>Download</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Uploaded Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        $fileFetchSql = "SELECT * FROM studymaterial";
                                        $fileFetchQuery = $conn->query($fileFetchSql);
                                        while($fileFetchRow = $fileFetchQuery->fetch_assoc()){
                                                $By = $fileFetchRow['uploadedBy'];
                                                $name = $fileFetchRow['nameOfTheStudyMaterial'];
                                                $path = $fileFetchRow['pdfStudyMaterial'];
                                                $subjectNameFile = $fileFetchRow['subjectName'];
                                                $class = $fileFetchRow['classBelongsTo'];
                                                $upDate = $fileFetchRow['date'];
                                        ?>
                                    <tr>
                                        <td><?php echo $By; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><a href="http://localhost/projectApollo/studyMaterial/<?php echo $path;?>" class="text-decoration-none text-success" download><i class="ti-download"></i></a></td>
                                        <td><?php echo $subjectNameFile ?></td>
                                        <td><?php echo $class ?></td>
                                        <td><?php echo $upDate ?></td>
                                    </tr>
                                    <?php
                                            }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table content ends -->
<?php
include "includes/footers.php";
?>