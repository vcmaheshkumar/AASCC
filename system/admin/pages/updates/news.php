<?php
define('admin',true);
$title = "ADMINISTRATION | NEWS";
require "../../includes/headers.php";
require "../../Functions/Controllers/newsControllers.php"
?>
    <div class="main-panel">
        <!-- content-wrapper ends -->
        <!-- table content -->
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">News</h4>
                            <p class="card-description">
                                <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/update/add-news">Add Entry</a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTableEvents" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Posted By</th>
                                            <th>Title</th>
                                            <th>Date of Host</th>
                                            <th>Detail</th>
                                            <th>Department</th>
                                            <th>Date of post</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Posted By</th>
                                            <th>Title</th>
                                            <th>Date of Host</th>
                                            <th>Detail</th>
                                            <th>Department</th>
                                            <th>Date of post</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $newsSql = "SELECT * FROM news";
                                    $newsQuery = $conn->query($newsSql);
                                    while($newsRow = $newsQuery->fetch_assoc()){
                                        if($newsRow['adminName'] == $_SESSION['admin_name']){
                                            $adminName = $newsRow['adminName'];
                                            $title = $newsRow['title'];
                                            $date = $newsRow['date'];
                                            $details = $newsRow['details'];
                                            $department = $newsRow['department'];
                                            $dateposted = $newsRow['dateposted'];
                                        ?>
                                        <tr>
                                            <td><?php echo $adminName;?></td>
                                            <td><?php echo $title;?></td>
                                            <td><?php echo $date;?></td>
                                            <td><?php echo $details;?></td>
                                            <td><?php echo $department;?></td>
                                            <td><?php echo $dateposted;?></td>
                                            <td class="d-flex justify-content-between">
                                                <form action="http://localhost/projectApollo/admin/update/news/update/<?php echo $newsRow['id'];?>" method="POST">
                                                    <input type="hidden" name="newsid" value="<?php echo $newsRow['id'];?>" />
                                                    <input type="submit" class="btn btn-outline-warning" name="edit" value="Edit" />
                                                </form>
                                                <form action="http://localhost/projectApollo/admin/update/delete-news" method="POST">
                                                    <input type="hidden" name="newsid" value="<?php echo $newsRow['id'];?>" />
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
require "../../includes/footers.php";
?>