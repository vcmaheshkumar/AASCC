<?php
define('faculty',true);
$title = "FACULTY | STUDY MATERIAL";
require "../includes/headers.php";
include "../Functions/Controllers/studyMaterialController.php";
?>
    <!-- partial -->
    <div class="main-panel">
        <!-- table content -->
        <div class="content-wrapper">
            <div class="row">
                <!-- DataTales Example -->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add study materials</h4>
                            <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <?php
                                if(isset($_SESSION['study'])){
                                    echo "<div class='alert alert-success'>".$_SESSION['study']."</div>";
                                }
                            ?>
                                    <input type="hidden"  name="uploadedBy" value="<?php echo $_SESSION['user_name'] ?>">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name of the study material</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name of the study material" name="nameOfTheStudyMaterial">
                                </div>
                                <div class="form-group">
                                    <label>study material</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control" name="pdfStudyMaterial">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Subject</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Subject Name with code" name="subjectName">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Class</label>
                                    <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Class, Ex: B.B.A 3" name="classBelongsTo">
                                </div>
                                <button type="submit" class="btn btn-primary me-2" name="addMaterial">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- DataTales Example -->
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Stud Materials</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Uploaded By</th>
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th>Subject</th>
                                            <th>Class</th>
                                            <th>Uploaded Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Uploaded By</th>
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th>Subject</th>
                                            <th>Class</th>
                                            <th>Uploaded Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        // Fetch Query
                                        $fileFetchSql = "SELECT * FROM studymaterial";
                                        $fileFetchQuery = $conn->query($fileFetchSql);
                                        while($fileFetchRow = $fileFetchQuery->fetch_assoc()){
                                            if($fileFetchRow['uploadedBy'] == $_SESSION['user_name']){
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
                                            <td><a href="../../../studyMaterial/<?php echo $path;?>" class="text-decoration-none text-success" download><i class="ti-download" s></i></a></td>
                                            <td><?php echo $subjectNameFile ?></td>
                                            <td><?php echo $class ?></td>
                                            <td><?php echo $upDate ?></td>
                                            <form action="../Functions/Controllers/studyMaterialDel.php" method="POST">
                                                <input type="hidden" name="fileid" value="<?php echo $fileFetchRow['id'];?>" />
                                                <td><input type="submit" class="btn btn-outline-danger" name="delete" value="Delete" /></td>
                                            </form>
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
            </div>
        </div>
        <!-- table content ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        require "../includes/footers.php";
        ?>