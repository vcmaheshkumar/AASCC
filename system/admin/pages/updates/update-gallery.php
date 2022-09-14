<?php
define('admin',true);
$title = "ADMINISTRATION | UPDATE | GALLERY";
require "../../includes/headers.php";
require "../../Functions/Controllers/galleryControllers.php";

$id = $_POST['galleryid'];

$query = "SELECT * FROM gallery WHERE id='$id'";
$query_run = mysqli_query($conn, $query);

if($query_run){
    while($row = mysqli_fetch_array($query_run)){
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
                                <h4 class="card-title">Update Gallery</h4>
                                <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/update/gallery">Go back</a>
                            </div>
                                <div class="card-body">
                                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_SESSION['success'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                        }
                                        ?>
                                        <input type="hidden" name="galleryid" value="<?php echo $row['id'] ?>" hidden>
                                        <input type="hidden" name="uadminName" value="<?php echo $_SESSION['admin_name'] ?>">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" value="<?php echo $row['title']; ?>" name="utitle">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleImage">Image</label>
                                            <input type="file" class="form-control" id="image" name="uimage" />
                                            <input type="hidden" name="imageOld" value="<?php echo $row['image']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleAltributes">Alt</label>
                                            <input type="text" class="form-control" id="exampleAltributes" value="<?php echo $row['attribute']; ?>" name="uattribute">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleAltributes">Tag</label>
                                            <select class="form-control" name="uimgTag">
                                                <option value="<?php echo $row['imgTag']; ?>"><?php echo $row['imgTag']; ?></option>
                                                <option value="csk">csk</option>
                                                <option value="rcb">rcb</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="updateImage">Update</button>
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
require  "../../includes/footers.php"
?>