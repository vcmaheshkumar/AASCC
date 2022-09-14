<?php
define('admin',true);
$title = "ADMINISTRATION | FACULTY";
include "../includes/headers.php";
include "../Functions/Controllers/facultyController.php"
?>
    <script type="text/javascript">
        function Export() {
            var conf = confirm("Do you want to Export as CSV file");
            if (conf == true) {
                window.open("export-faculty", '_blank')
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
                            <h4 class="card-title">Faculties</h4>
                            <p class="card-description">
                                <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/add-faculty">Add Faculty</a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>image</th>
                                            <th>experience</th>
                                            <th>appointed date</th>
                                            <th>ID Number</th>
                                            <th>Ph. no.</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Qualification</th>
                                            <th>gender</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>image</th>
                                            <th>experience</th>
                                            <th>appointed date</th>
                                            <th>ID Number</th>
                                            <th>Ph. no.</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Qualification</th>
                                            <th>gender</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $facultiesSql = "SELECT * FROM faculties";
                                    $facultiesQuery = $conn->query($facultiesSql);
                                    while($facultiesRow = $facultiesQuery->fetch_assoc()){
                                            $facultyname = $facultiesRow['facultyname'];
                                            $facultyemail = $facultiesRow['facultyemail'];
                                            $facultyimage = $facultiesRow['facultyimage'];
                                            $facultyexperience = $facultiesRow['facultyexperience'];
                                            $facultyappointfrom = $facultiesRow['facultyappointfrom'];
                                            $facultyidnumber = $facultiesRow['facultyidnumber'];
                                            $facultyphonenumber = $facultiesRow['facultyphonenumber'];
                                            $facultydesignation = $facultiesRow['facultydesignation'];
                                            $facultydepartment = $facultiesRow['facultydepartment'];
                                            $facultyqualification = $facultiesRow['facultyqualification'];
                                            $facultygender = $facultiesRow['facultygender'];
                                            $facultyaddress = $facultiesRow['facultyaddress'];
                                        ?>
                                        <tr>
                                            <td><?php echo $facultyname; ?></td>
                                            <td><?php echo $facultyemail; ?></td>
                                            <td class="py-1"><img src="http://localhost/projectApollo/faculties/<?php echo $facultyimage;?>" alt="<?php echo $facultyimage;?>"></td>
                                            <td><?php echo $facultyexperience; ?></td>
                                            <td><?php echo $facultyappointfrom; ?></td>
                                            <td><?php echo $facultyidnumber; ?></td>
                                            <td><?php echo $facultyphonenumber; ?></td>
                                            <td><?php echo $facultydesignation; ?></td>
                                            <td><?php echo $facultydepartment; ?></td>
                                            <td><?php echo $facultyqualification; ?></td>
                                            <td><?php echo $facultygender; ?></td>
                                            <td><?php echo $facultyaddress; ?></td>
                                            <td>
                                                <form action="delete-faculty" method="POST">
                                                    <input type="hidden" name="facultyid" value="<?php echo $facultiesRow['id'];?>" />
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
        <!-- partial:partials/_footer.html -->
<?php
include "../includes/footers.php";
?>