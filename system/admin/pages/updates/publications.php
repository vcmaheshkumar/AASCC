<?php
define('admin',true);
$title = "ADMINISTRATION | PUBLICATION";
require "../../includes/headers.php";
require "../../Functions/Controllers/publicationControllers.php"
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
                                    <h4 class="card-title">publication</h4>
                                    <p class="card-description">
                                        <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/update/add-publication">Add Entry</a>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTableEvents" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Posted By</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Type</th>
                                                    <th>Tags</th>
                                                    <th>link</th>
                                                    <th>Date of Posted</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Posted By</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Type</th>
                                                    <th>Tags</th>
                                                    <th>link</th>
                                                    <th>Date of Posted</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                            $publicationql = "SELECT * FROM publication";
                                            $publicationQuery = $conn->query($publicationql);
                                            while($publicationRow = $publicationQuery->fetch_assoc()){
                                                if($publicationRow['adminName'] == $_SESSION['admin_name']){
                                                    $adminName = $publicationRow['adminName'];
                                                    $title = $publicationRow['title'];
                                                    $author = $publicationRow['author'];
                                                    $type = $publicationRow['type'];
                                                    $tag = $publicationRow['tag'];
                                                    $dateposted = $publicationRow['dateposted'];
                                                    $link = $publicationRow['link'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $adminName;?></td>
                                                    <td><?php echo $title;?></td>
                                                    <td><?php echo $author;?></td>
                                                    <td><?php echo $type;?></td>
                                                    <td><?php echo $tag;?></td>
                                                    <td><a href="<?php echo $link;?>" target="_blank" class="btn text-primary">Clink Here</a></td>
                                                    <td><?php echo $dateposted;?></td>
                                                    <td class="d-flex justify-content-between">
                                                        <form action="http://localhost/projectApollo/admin/update/publication/update/<?php echo $publicationRow['id'];?>" method="POST">
                                                            <input type="hidden" name="publicationid" value="<?php echo $publicationRow['id'];?>" />
                                                            <input type="submit" class="btn btn-outline-warning" name="edit" value="Edit" />
                                                        </form>
                                                        <form action="http://localhost/projectApollo/admin/update/delete-publication" method="POST">
                                                            <input type="hidden" name="publicationid" value="<?php echo $publicationRow['id'];?>" />
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
                <!-- partial:partials/_footer.html -->
<?php
require  "../../includes/footers.php"
?>