<?php
define('admin',true);
$title = "ADMINISTRATION | CIRCULAR";
require "../../includes/headers.php";
require "../../Functions/Controllers/circularController.php"
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
                            <h4 class="card-title">Circulars</h4>
                            <p class="card-description">
                                <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/update/add-circular">Add Entry</a>
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
                                    $circularsSql = "SELECT * FROM circulars";
                                    $circularsQuery = $conn->query($circularsSql);
                                    while($circularsRow = $circularsQuery->fetch_assoc()){
                                        if($circularsRow['adminName'] == $_SESSION['admin_name']){
                                            $adminName = $circularsRow['adminName'];
                                            $title = $circularsRow['title'];
                                            $date = $circularsRow['date'];
                                            $details = $circularsRow['details'];
                                            $department = $circularsRow['department'];
                                            $dateposted = $circularsRow['dateposted'];
                                        ?>
                                        <tr>
                                            <td><?php echo $adminName;?></td>
                                            <td><?php echo $title;?></td>
                                            <td><?php echo $date;?></td>
                                            <td><?php echo $details;?></td>
                                            <td><?php echo $department;?></td>
                                            <td><?php echo $dateposted;?></td>
                                            <td class="d-flex justify-content-between">
                                                <form action="http://localhost/projectApollo/admin/update/circular/update/<?php echo $circularsRow['id'];?>" method="POST">
                                                    <input type="hidden" name="circularid" value="<?php echo $circularsRow['id'];?>" />
                                                    <input type="submit" class="btn btn-outline-warning" name="edit" value="Edit" />
                                                </form>
                                                <form action="http://localhost/projectApollo/admin/update/delete-circular" method="POST">
                                                    <input type="hidden" name="circularid" value="<?php echo $circularsRow['id'];?>" />
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