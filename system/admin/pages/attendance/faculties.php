<?php
define('admin',true);
$title = "ADMINISTRATION | ATTENDANCE | FACULTY";
require "../../includes/headers.php";
require "../../Functions/Controllers/Models/conn.php";
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
                                    <h4 class="card-title">Faculties Attendance</h4>
                                    <p class="card-description">Complete faculties Presence Date</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>ID Number</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>ID Number</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $facultySql = "SELECT * FROM tbl_attendance INNER JOIN faculties ON tbl_attendance.IdNumber=faculties.facultyidnumber";
                                                $facultyResult = mysqli_query($conn, $facultySql);
                                                if(mysqli_num_rows($facultyResult) > 0){
                                                    while($row = mysqli_fetch_array($facultyResult)){
                                                        $Name = $row['facultyname'];
                                                        $Date = $row['LogDate'];
                                                        $facultyidnumber = $row['IdNumber'];
                                                        $department = $row['facultydepartment'];
                                                        $designation = $row['facultydesignation'];
                                                ?>
                                                <tr> 
                                                    <td><?php echo $Date;?></td>
                                                    <td><?php echo $Name;?></td>
                                                    <td><?php echo $facultyidnumber;?></td>
                                                    <td><?php echo $department;?></td>
                                                    <td><?php echo $designation;?></td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <script type="text/javascript">
                                function ExportF() {
                                    var conf = confirm("Do you want to Export as CSV file");
                                    if (conf == true) {
                                        window.open("http://localhost/projectApollo/admin/attendance/report-of-faculty-absents", '_blank')
                                    }
                                }
                            </script>
                                    <br/>
                                <p class="card-description">                  
                                    <button class="btn btn-outline-success" type="submit" onclick="ExportF()">
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