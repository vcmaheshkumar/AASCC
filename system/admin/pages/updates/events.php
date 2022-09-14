<?php
define('admin',true);
$title = "ADMINISTRATION | EVENTS";
require "../../includes/headers.php";
require "../../Functions/Controllers/eventController.php"
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
                                    <h4 class="card-title">Events</h4>
                                    <p class="card-description">
                                        <a class="btn btn-outline-success" href="http://localhost/projectApollo/admin/update/add-event">Add Event</a>
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
                                                    $eventsSql = "SELECT * FROM events";
                                                    $eventsQuery = $conn->query($eventsSql);
                                                    while($eventsRow = $eventsQuery->fetch_assoc()){
                                                        if($eventsRow['adminName'] == $_SESSION['admin_name']){
                                                            $adminName = $eventsRow['adminName'];
                                                            $title = $eventsRow['title'];
                                                            $date = $eventsRow['date'];
                                                            $details = $eventsRow['details'];
                                                            $department = $eventsRow['department'];
                                                            $dateposted = $eventsRow['dateposted'];
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $adminName;?></td>
                                                    <td><?php echo $title;?></td>
                                                    <td><?php echo $date;?></td>
                                                    <td><?php echo $details;?></td>
                                                    <td><?php echo $department;?></td>
                                                    <td><?php echo $dateposted;?></td>
                                                    <td class="d-flex justify-content-between">
                                                        <form action="http://localhost/projectApollo/admin/update/event/update/<?php echo $eventsRow['id'];?>" method="POST">
                                                            <input type="hidden" name="eventid" value="<?php echo $eventsRow['id'];?>" />
                                                            <input type="submit" class="btn btn-outline-warning" name="edit" value="Edit" />
                                                        </form>
                                                        <form action="http://localhost/projectApollo/admin/update/delete-event" method="POST">
                                                            <input type="hidden" name="eventid" value="<?php echo $eventsRow['id'];?>" />
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