<?php
define('faculty',true);
$title = "FACULTY | ATTENDANCE";
require "../includes/headers.php";
include "../Functions/Controllers/attendanceController.php";
?>
    <!-- partial -->
    <div class="main-panel">
        <!-- table content -->
        <div class="content-wrapper">
            <div class="row">
                <script>
                    function selectClasses(){
                        var x = document.getElementById("ClassSelect").value;
                        $.ajax({
                            url:"http://localhost/projectApollo/faculties/attendance-change",
                            method: "POST",
                            data:{
                                id : x
                            },
                            success:function(data){
                                $("#candidatesName").html(data);
                            }
                        })
                    }
                </script>
                <!-- DataTales Example -->
                <form method="POST">
                <?php
                    if(isset($_SESSION['message'])){
                        echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                    }
                ?>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Students Data</h4>
                            <div class="d-flex justify-content-evenly align-items-center">
                                <p class="card-description">
                                        Class:
                                    <select name="department" class="form-control-sm border-0" id="ClassSelect" onchange="selectClasses()">
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
                                <p class="card-description">
                                    Subject:
                                    <div class="form-group text-muted">
                                        <input class="form-control-sm border-1" type="text" placeholder="Subject" name="subject"/>
                                    </div>
                                </p>
                                <p class="card-description">
                                    Date:
                                    <div class="form-group text-muted">
                                        <input class="form-control-sm border-1 text-muted" value="<?php echo date('d-m-Y') ?>" name="date" readonly/>
                                    </div>
                                </p>
                            </div>
                            <div class="table-responsive">

                                    <table class="table table-striped" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Roll No.</th>
                                                <th>Attend</th>
                                            </tr>
                                        </thead>
                                        <tbody id="candidatesName">

                                        </tbody>
                                    </table>
                                    <button type="submit" name="SendtoOffice" class="btn btn-success m-3">Submit to Office</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <!-- Show -->
                <script>
                    function selectClassesAttendanceToShow(){
                        var x = document.getElementById("attendanceSelect").value;
                        $.ajax({
                            url:"http://localhost/projectApollo/faculties/attendance-change-show",
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Students Data</h4>
                            <div class="d-flex justify-content-evenly align-items-center">
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
                            </div>
                            <div class="table-responsive">

                                    <table class="table table-striped" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Roll No.</th>
                                                <th>Subject</th>
                                                <th>Class</th>
                                                <th>Mention</th>
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
    require "../includes/footers.php";
    ?>