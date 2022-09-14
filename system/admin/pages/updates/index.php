<?php
$title = "ADMINISTRATION | OVERVIEW";
define('admin',true);
require "../../includes/headers.php";
require "../../Functions/Controllers/overviewController.php"
?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Apollo Arts and Science College Chennai</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- table content -->
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Events</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $overViewEventQuery = $conn->query($overViewEventSql);
                                        while($overViewEventRow = $overViewEventQuery->fetch_assoc()){
                                            $title = $overViewEventRow['title'];
                                            $department = $overViewEventRow['department'];
                                            $dateOp = $overViewEventRow['dateposted'];
                                        ?>
                                        <tr>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo $department; ?></td>
                                            <td><?php echo $dateOp; ?></td>
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
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Circulars</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>department</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>department</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $overViewCircularQuery = $conn->query($overViewCircularSql);
                                        while($overViewCircularRow = $overViewCircularQuery->fetch_assoc()){
                                            $title = $overViewCircularRow['title'];
                                            $department = $overViewCircularRow['department'];
                                            $dateOp = $overViewCircularRow['dateposted'];
                                        ?>
                                        <tr>
                                            <td><?php echo $title ?></td>
                                            <td><?php echo $department ?></td>
                                            <td><?php echo $dateOp ?></td>
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
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">News</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>department</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>department</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $overViewNewsQuery = $conn->query($overViewNewsSql);
                                        while($overViewNewsRow = $overViewNewsQuery->fetch_assoc()){
                                            $title = $overViewNewsRow['title'];
                                            $department = $overViewNewsRow['department'];
                                            $dateOp = $overViewNewsRow['dateposted'];
                                        ?>
                                        <tr>
                                            <td><?php echo $title ?></td>
                                            <td><?php echo $department ?></td>
                                            <td><?php echo $dateOp ?></td>
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
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><small>Approval </small>\ Alumni</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable3" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Batch</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Batch</th>
                                            <th>date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $overViewAlumniQuery = $conn->query($overViewAlumniSql);
                                        while($overViewAlumniRow = $overViewAlumniQuery->fetch_assoc()){
                                            $title = $overViewAlumniRow['name'];
                                            $department = $overViewAlumniRow['batch'];
                                            $dateOp = $overViewAlumniRow['dateop'];
                                        ?>
                                        <tr>
                                            <td><?php echo $title ?></td>
                                            <td><?php echo $department ?></td>
                                            <td><?php echo $dateOp ?></td>
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
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Publications</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable4" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $overViewPublicationQuery = $conn->query($overViewPublicationSql);
                                        while($overViewPublicationRow = $overViewPublicationQuery->fetch_assoc()){
                                            $title = $overViewPublicationRow['title'];
                                            $department = $overViewPublicationRow['author'];
                                            $dateOp = $overViewPublicationRow['dateposted'];
                                        ?>
                                        <tr>
                                            <td><?php echo $title ?></td>
                                            <td><?php echo $department ?></td>
                                            <td><?php echo $dateOp?></td>
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
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Moto</h4>
                            <div class="m-auto d-flex justify-content-center">
                                <h1 class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Vision</h4>
                            <div class="m-auto d-flex justify-content-center">
                                <h3 class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mission</h4>
                            <div class="m-auto d-flex justify-content-center">
                                <h3 class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing.</h3>
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