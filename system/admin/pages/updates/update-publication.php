<?php
define('admin',true);
$title = "ADMINISTRATION | UPDATE | PUBLICATION";
require "../../includes/headers.php";
require "../../Functions/Controllers/publicationControllers.php";
$id = $_POST['publicationid'];

$query = "SELECT * FROM publication WHERE id='$id'";
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
                            <h4 class="card-title">Update Publication</h4>
                            <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/update/publication">Go back</a>
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
                                <input type="hidden" name="publicationid" value="<?php echo $row['id'] ?>" hidden>
                                <input type="hidden"name="uadminName" value="<?php echo $_SESSION['admin_name'] ?>" hidden>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" value="<?php echo $row['title'] ?>" name="utitle" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleAuthor">Author</label>
                                    <input type="text" class="form-control" id="exampleAuthor" value="<?php echo $row['author'] ?>" name="uauthor" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleAuthor">Document Link</label>
                                    <input type="link" class="form-control" id="exampleDL" value="<?php echo $row['link'] ?>" name="udocumentLink" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleType">Type</label>
                                    <select class="form-control" id="exampleType" name="utype" value="<?php echo $row['type'] ?>">
                                        <option value="article">Article</option>
                                        <option value="book">Article</option>
                                        <option value="review">Article</option>
                                        <option value="short communication">Article</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTag">Tag</label>
                                    <input type="text" class="form-control" id="exampleTag" placeholder="Tag" name="utag" value="<?php echo $row['tag'] ?>" />
                                </div>
                                <button type="submit" class="btn btn-primary me-2" name="updatePublication">Update</button>
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