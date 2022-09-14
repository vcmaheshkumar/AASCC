<?php
define('admin',true);
$title = "ADMINISTRATION | ADD | CIRCULAR";
require "../../includes/headers.php";
require "../../Functions/Controllers/circularController.php"
?>
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-title d-flex justify-content-between align-items-center m-4">
                                    <h4 class="card-title">Add Circular</h4>
                                    <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/update/circular">Go back</a>
                                </div>
                                <div class="card-body">
                                    <form class="forms-sample" method="POST">
                                        <?php
                                        if(isset($_SESSION['success'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                        }
                                        ?>
                                        <input type="hidden"name="adminName" value="<?php echo $_SESSION['admin_name'] ?>" hidden>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputParentsDOP">Date of posting</label>
                                            <input type="date" name="date" class="form-control text-muted" id="exampleInputParentsDOP">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDetail">Detail</label>
                                            <textarea class="form-control" name="details"  id="exampleDetail" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDepartment">Department</label>
                                            <input type="text" class="form-control" name="department" id="exampleDepartment" placeholder="Department">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="addCircular">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
                <!-- partial:partials/_footer.html -->
<?php
require "../../includes/footers.php";
?>