<?php
define('admin',true);
$title = "ADMINISTRATION | UPDATE | NEWS";
require "../../includes/headers.php";
require "../../Functions/Controllers/newsControllers.php";
$id = $_POST['newsid'];

$query = "SELECT * FROM news WHERE id='$id'";
$query_run = mysqli_query($conn, $query);

if($query_run){
    while($row = mysqli_fetch_array($query_run)){
?>
    <div class="main-panel">
        <!-- table content -->
        <div class="content-wrapper">
            <div class="row">
                <!-- DataTales Example -->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between align-items-center m-4">
                            <h4 class="card-title">Update News</h4>
                            <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/update/news">Go back</a>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" method="POST">
                                <?php
                                if(isset($_SESSION['warning'])){
                                    echo "<div class='alert alert-success'>".$_SESSION['warning']."</div>";
                                }
                                if(isset($_SESSION['error'])){
                                    echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                }
                                ?>
                                <div class="form-group">
                                <input type="hidden" name="newsid" value="<?php echo $row['id'] ?>" hidden>
                                <input type="hidden"name="uadminName" value="<?php echo $row['adminName'] ?>" hidden>
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" name="utitle" id="exampleInputTitle"value="<?php echo $row['title'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputParentsDOP">Date of posting</label>
                                    <input type="date" class="form-control text-muted" name="udate" id="exampleInputParentsDOP" value="<?php echo $row['date'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleDetail">Detail</label>
                                    <textarea class="form-control" id="exampleDetail" name="udetails" rows="4" required><?php echo $row['details'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleDepartment">Department</label>
                                    <input type="text" class="form-control" id="exampleDepartment" name="udepartment" value="<?php echo $row['department'] ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary me-2" name="updateNews">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table content ends -->
<?php
    }
}else{
    echo "data found";
}
?>
<?php
require "../../includes/footers.php";
?>