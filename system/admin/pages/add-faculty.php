<?php
define('admin',true);
$title = "ADMINISTRATION | ADD | FACULTY";
include "../includes/headers.php";
include "../Functions/Controllers/facultyController.php"
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
                            <h4 class="card-title">Add Faculty</h4>
                            <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/faculty">Go back</a>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                <?php
                                if(isset($_SESSION['success'])){
                                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                }
                                if(isset($_SESSION['warning'])){
                                    echo "<div class='alert alert-danger'>".$_SESSION['warning']."</div>";
                                }
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="facultyname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="facultyemail">
                                </div>
                                <div class="form-group">
                                    <label class="facultyimage">Image</label>
                                    <input type="file" class="form-control" name="facultyimage" id="facultyimage">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputExperience">Experience</label>
                                    <input type="text" class="form-control" id="exampleInputExperience" placeholder="Experience" name="facultyexperience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAppointedFrom">appointed from</label>
                                    <input type="date" class="form-control text-muted" id="exampleInputAppointedFrom" name="facultyappointfrom">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputIdnumber">ID Number</label>
                                    <input type="text" class="form-control" id="exampleInputIdnumber" placeholder="ID Number" name="facultyidnumber">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhnumber">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputPhnumber" placeholder="Phone Number" name="facultyphonenumber">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesignation">Designation</label>
                                    <input type="text" class="form-control" id="exampleInputDesignation" placeholder="Designation" name="facultydesignation">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDepartment">Department</label>
                                    <input type="text" class="form-control" id="exampleInputDepartment" placeholder="Department" name="facultydepartment">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputQualification">Qualification</label>
                                    <input type="text" class="form-control" id="exampleInputQualification" placeholder="Qualification" name="facultyqualification">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" id="exampleSelectGender" name="facultygender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleAddress">Address</label>
                                    <textarea class="form-control" id="exampleAddress" rows="4" name="facultyaddress"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsl1">Social Links 1</label>
                                    <input type="text" class="form-control" id="exampleInputsl1" placeholder="Facebook" name="facultysociallink1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsl2">Social Links 2</label>
                                    <input type="text" class="form-control" id="exampleInputsl2" placeholder="Linkedin" name="facultysociallink2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsl2">Social Links 3</label>
                                    <input type="text" class="form-control" id="exampleInputsl2" placeholder="Instagram" name="facultysociallink3">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsl2">Social Links 4</label>
                                    <input type="text" class="form-control" id="exampleInputsl2" placeholder="Twitter" name="facultysociallink4">
                                </div>
                                <input type="hidden"name="attendance" value="">
                                <button type="submit" class="btn btn-primary me-2" name="addFaculty">Add</button>
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