<?php
define('faculty',true);
$title = "FACULTY | MARKS";
require "../includes/headers.php";
include "../Functions/Controllers/marksController.php";
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
                            url:"http://localhost/projectApollo/faculties/marks-changer",
                            method: "POST",
                            data:{
                                id : x
                            },
                            success:function(data){
                                $("#candidateMarks").html(data);
                            }
                        })
                    }
                </script>
                <!-- DataTales Example -->
                            <form class="forms-sample" method="POST">
                            <?php
                                if(isset($_SESSION['marks'])){
                                    echo "<div class='alert alert-success'>".$_SESSION['marks']."</div>";
                                }
                            ?>
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add Candidate Marks</h4>
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
                                                <div class="table-responsive">
                                                    <table class="table table-striped" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>Department</th>
                                                                <th>Class</th>
                                                                <th>Name</th>
                                                                <th>Roll Number</th>
                                                                <th>Subject</th>
                                                                <th>Name of the Exam</th>
                                                                <th>Marks Obtained</th>
                                                                <th>Total Marks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="candidateMarks">

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button type="submit" class="btn btn-primary m-3" name="SendtoOffice">Update Marks</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>

                <!-- DataTales Example -->
                <script>
                    function selectClassesForMarks(){
                        var x = document.getElementById("ClassSelectToShow").value;
                        $.ajax({
                            url:"http://localhost/projectApollo/faculties/marks-changer-show",
                            method: "POST",
                            data:{
                                id : x
                            },
                            success:function(data){
                                $("#candidateMarksShow").html(data);
                            }
                        })
                    }
                </script>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Students Data</h4>
                            <p class="card-description">
                                Class:
                                <select name="department" class="form-control-sm border-0" id="ClassSelectToShow" onchange="selectClassesForMarks()">
                                <option>Select Class</option>
                                <?php
                                    $candidateSql = "SELECT * FROM candidate_marks";
                                    $candidateQuery = $conn->query($candidateSql);
                                    while($candidateRow = $candidateQuery->fetch_assoc()){
                                        $class1 = $candidateRow['department'];
                                ?>                
                                <option value="<?php echo $class1; ?>"><?php echo $class1; ?></option>
                                <?php
                                    }
                                ?>
                                </select>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Department</th>
                                        <th>Class</th>
                                        <th>Name</th>
                                        <th>Roll Number</th>
                                        <th>Subject</th>
                                        <th>Name of the Exam</th>
                                        <th>Marks Obtained</th>
                                        <th>Total Marks</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="candidateMarksShow">

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