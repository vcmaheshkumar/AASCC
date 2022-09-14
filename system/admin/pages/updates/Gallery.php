<?php
define('admin',true);
$title = "ADMINISTRATION | GALLERY";
require "../../includes/headers.php";
require "../../Functions/Controllers/galleryControllers.php"
?>
            <!-- partial -->
            <div class="main-panel">
                <!-- content-wrapper ends -->
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Gallery</h4>
                                    <p class="card-description">
                                        <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/update/add-images">Add Gallery</a>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTableEvents" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Posted By</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>attribute</th>
                                                    <th>Image Tag</th>
                                                    <th>Date of post</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Posted By</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>attribute</th>
                                                    <th>Image Tag</th>
                                                    <th>Date of post</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    $gallerySql = "SELECT * FROM gallery";
                                                    $galleryQuery = $conn->query($gallerySql);
                                                    while($galleryRow = $galleryQuery->fetch_assoc()){
                                                        if($galleryRow['adminName'] == $_SESSION['admin_name']){
                                                            $adminName = $galleryRow['adminName'];
                                                            $title = $galleryRow['title'];
                                                            $image = $galleryRow['image'];
                                                            $attribute = $galleryRow['attribute'];
                                                            $imgTag = $galleryRow['imgTag'];
                                                            $date = $galleryRow['date'];
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $adminName;?></td>
                                                    <td><?php echo $title;?></td>
                                                    <td py-1><img src="http://localhost/projectApollo/assets/images/<?php echo $image;?>" /></td>
                                                    <td><?php echo $attribute;?></td>
                                                    <td><?php echo $imgTag;?></td>
                                                    <td><?php echo $date;?></td>
                                                    <td class="d-flex justify-content-between">
                                                        <form action="http://localhost/projectApollo/admin/update/gallery/update/<?php echo $galleryRow['id'];?>" method="POST">
                                                            <input type="hidden" name="galleryid" value="<?php echo $galleryRow['id'];?>" />
                                                            <input type="submit" class="btn btn-outline-warning" name="edit" value="Edit" />
                                                        </form>
                                                        <form action="http://localhost/projectApollo/admin/update/delete-image" method="POST">
                                                            <input type="hidden" name="galleryid" value="<?php echo $galleryRow['id'];?>" />
                                                            <input type="submit" class="btn btn-outline-danger" name="delete" value="Delete" />
                                                        </form>
                                                    </td>
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
<?php
require  "../../includes/footers.php"
?>