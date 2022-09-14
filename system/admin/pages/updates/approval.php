<?php
define('admin',true);
$title = "ADMINISTRATION | APPROVAL";
require "../../includes/headers.php";
require "../../Functions/Controllers/approvalControllers.php";
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
                        <h4 class="card-title">Alumni</h4>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTableEvents" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Ip Address</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Image</th>
                                        <th>Department</th>
                                        <th>Date of Posted</th>
                                        <th>Comment</th>    
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Ip Address</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Image</th>
                                        <th>Department</th>
                                        <th>Date of Posted</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                    $alumniSql = "SELECT * FROM alumni";
                                    $alumniQuery = $conn->query($alumniSql);
                                    while($alumniRow = $alumniQuery->fetch_assoc()){
                                            $ipaddress = $alumniRow['ipaddress'];
                                            $name = $alumniRow['name'];
                                            $batch = $alumniRow['batch'];
                                            $images = $alumniRow['image'];
                                            $department = $alumniRow['department'];
                                            $dateop = $alumniRow['dateop'];
                                            $comment = $alumniRow['comment'];
                                            $status = $alumniRow['status'];
                                        ?>
                                    <tr>
                                        <td><?php echo $ipaddress; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $batch; ?></td>
                                        <td class="py-1"><img src="http://localhost/projectApollo/assets/images/<?php echo $images; ?>" alt="<?php echo $images; ?>"></td>
                                        <td><?php echo $department; ?></td>
                                        <td><?php echo $dateop; ?></td>
                                        <td><?php echo shorten($comment, 30); ?></td>
                                        <td>
                                            <?php 
                                            if($status == '0'){
                                            echo "Not approved";
                                            }elseif($status == '1'){
                                                echo "Approved";
                                            } ?>
                                        </td>
                                        <td class="d-flex justify-content-between">
                                            <form method="POST">
                                                <input type="hidden" name="alumniid" value="<?php echo $alumniRow['id'];?>" />
                                                <input type="submit" class="btn text-warning" name="edit" value="approve" />
                                            </form>
                                            <form action="http://localhost/projectApollo/admin/update/delete-alumni" method="POST">
                                                <input type="hidden" name="alumniid" value="<?php echo $alumniRow['id'];?>" />
                                                <input type="submit" class="btn text-danger" name="delete" value="Delete" />
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
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