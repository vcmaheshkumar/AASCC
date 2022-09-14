<?php
define('admin',true);
$title = "ADMINISTRATION | ADD | PUBLICATION";
require "../../includes/headers.php";
require "../../Functions/Controllers/publicationControllers.php"
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
                                    <h4 class="card-title">Add Publications</h4>
                                    <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/admin/update/publication">Go back</a>
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
                                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="Title" name="title" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleAuthor">Author</label>
                                            <input type="text" class="form-control" id="exampleAuthor" placeholder="Author" name="author" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleAuthor">Document Link</label>
                                            <input type="link" class="form-control" id="exampleDL" placeholder="Document Link" name="documentLink" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleType">Type</label>
                                            <select class="form-control" id="exampleType" name="type">
                                                <option value="article">Article</option>
                                                <option value="book">Article</option>
                                                <option value="review">Article</option>
                                                <option value="short communication">Article</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTag">Tag</label>
                                            <input type="text" class="form-control" id="exampleTag" placeholder="Tag" name="tag" />
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="addPublication">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
require  "../../includes/footers.php"
?>