<?php
define('admin',true);
$title = "ADMINISTRATION | LIBRARY";
require "../../includes/headers.php";
include "../../Functions/Controllers/Models/conn.php"
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
                                    <h4 class="card-title">Library Entry</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTableEvents" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Book Name</th>
                                                    <th>Status</th>
                                                    <th>Name of Person</th>
                                                    <th>Class</th>
                                                    <th>Date of Taken</th>
                                                    <th>Last Call</th>
                                                    <th>Submitted Date</th>
                                                    <th>Fine</th>
                                                    <th>Library In-charge</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Book Name</th>
                                                    <th>Status</th>
                                                    <th>Name of Person</th>
                                                    <th>Class</th>
                                                    <th>Date of Taken</th>
                                                    <th>Last Call</th>
                                                    <th>Submitted Date</th>
                                                    <th>Fine</th>
                                                    <th>Library In-charge</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                                    $LibrarySql = "SELECT * FROM Library";
                                                    $LibraryQuery = $conn->query($LibrarySql);
                                                    while($LibraryRow = $LibraryQuery->fetch_assoc()){
                                                            $librarianName = $LibraryRow['librarianName'];
                                                            $status = $LibraryRow['status'];
                                                            $NameOp = $LibraryRow['NameOp'];
                                                            $class = $LibraryRow['class'];
                                                            $DateOt = $LibraryRow['DateOt'];
                                                            $LastCall = $LibraryRow['LastCall'];
                                                            $SubDate = $LibraryRow['SubDate'];
                                                            $Fine = $LibraryRow['Fine'];
                                                            $LibInChar = $LibraryRow['LibInChar'];
                                                    ?>
                                                <tr>
                                                    <td><?php echo $librarianName; ?></td>
                                                    <td><?php echo $status; ?></td>
                                                    <td><?php echo $NameOp; ?></td>
                                                    <td><?php echo $class; ?></td>
                                                    <td><?php echo $DateOt; ?></td>
                                                    <td><?php echo $LastCall; ?></td>
                                                    <td><?php echo $SubDate; ?></td>
                                                    <td><?php echo $Fine; ?></td>
                                                    <td><?php echo $LibInChar; ?></td>
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