<?php
define('admin',true);
$title = "ADMINISTRATION | REQUEST";
require "../includes/headers.php";
require "../Functions/Controllers/requestController.php";
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
                                    <h4 class="card-title">Newsletter</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTableNL" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Ip address</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Ip address</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $ip; ?></td>
                                                    <td><?php echo $email;?></td>
                                                    <td><?php echo $date; ?></td>
                                                    <td><a href="mailto:<?php echo $email;?>" target="_blank" class="btn btn-outline-warning"><i class="ti-email"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Contact us</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTableEvents" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Ip Address</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                    <th>Date of Posted</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Ip Address</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                    <th>Date of Posted</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $ip; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td><?php echo $message; ?></td>
                                                    <td><?php echo $date; ?></td>
                                                    <td>
                                                        <a href="mailto:<?php echo $email; ?>" target="_blank" class="textdecoration-none"><button class="btn btn-outline-warning">Contact</button></a>
                                                    </td>
                                                </tr>
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
require "../includes/footers.php";
?>