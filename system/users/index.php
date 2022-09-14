<?php
define('faculty',true);
$title = "FACULTY | HOME";
require "includes/headers.php";
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
                </div>
                <!-- content-wrapper ends -->
                <!-- table content -->
                <script>
                    function selectClassesAttendanceToShow(){
                        var x = document.getElementById("attendanceSelect").value;
                        $.ajax({
                            url:"http://localhost/projectApollo/faculties/candidate-show",
                            method: "POST",
                            data:{
                                id : x
                            },
                            success:function(data){
                                $("#candidatesAttendance").html(data);
                            }
                        })
                    }
                </script>
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Class Attendance</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                                <p class="card-description">
                                                Class:
                                            <select name="department" class="form-control-sm border-0" id="attendanceSelect" onchange="selectClassesAttendanceToShow()">
                                            <option>Select Class</option>
                                                <?php
                                                    $candidateSql = "SELECT * FROM candidate";
                                                    $candidateQuery = $conn->query($candidateSql);
                                                    while($candidateRow = $candidateQuery->fetch_assoc()){
                                                        $class1 = $candidateRow['candidatedepartment'];
                                                ?>                
                                                <option value="<?php echo $class1; ?>"><?php echo $class1; ?></option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
                                            </p>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Roll Number</th>
                                                    <th>subject</th>
                                                    <th>Mentions</th>
                                                    <th>date</th>
                                                </tr>
                                            </thead>
                                            <tbody id="candidatesAttendance">
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
require "includes/footers.php";
?>