<?php
define('admin',true);
$title = "ADMINISTRATION | ADD | EVENTS";
require "../../includes/headers.php";
require "../../Functions/Controllers/eventController.php";
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
                            <h4 class="card-title">Add Event</h4>
                            <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/system/admin/pages/updates/events.php">Go back</a>
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
                                <div class="form-group">
                                <input type="hidden"name="adminName" value="<?php echo $_SESSION['admin_name'] ?>" hidden>
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputTitle" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputParentsDOP">Date of posting</label>
                                    <input type="date" class="form-control text-muted" name="date" id="exampleInputParentsDOP" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleDetail">Detail</label>
                                    <textarea class="form-control" id="exampleDetail" name="details" rows="4" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleDepartment">Department</label>
                                    <input type="text" class="form-control" id="exampleDepartment" name="department" placeholder="Department" required>
                                </div>
                                <button type="submit" class="btn btn-primary me-2" name="addEvent">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table content ends -->
<?php
require "../../includes/footers.php";
?>