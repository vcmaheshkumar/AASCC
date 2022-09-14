<?php
define('attendance',true);
include "inc/headers.php";
?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <!-- content-wrapper ends -->
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Scanner</h4>
                                    <video id="scanArea" width="100%"></video>
                                    <?php
                                        if(isset($_SESSION['success'])){
                                            echo "<div class='alert alert-success'><h4>Success!</h4>".$_SESSION['success']."</div>";
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                        }
                                        if(isset($_SESSION['warning'])){
                                            echo "<div class='alert alert-warning'><h4>Waiting!</h4>".$_SESSION['warning']."</div>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div><div class="col-lg-8 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-sample" method="post">
                                            <label>Id Number</label>
                                            <input type="text" class="form-control border-0" name="detector"  id="detector" placeholder="Your Id number" readonly />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- DataTales Example -->
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Today Attendance</h4>
                                    <p class="card-description">                  
                                        <button class="btn btn-outline-success" type="submit" onclick="Export()">
                                            <i class="fa fa-file-excel-o fa-fw"></i>Export to Excel
                                        </button>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Number</th>
                                                    <th>Time In</th>
                                                    <th>Time Out</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Number</th>
                                                    <th>Time In</th>
                                                    <th>Time Out</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    include "inc/show.php";
                                                    while($row = $Query->fetch_assoc()){
                                                ?>
                                            <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['IdNumber']; ?></td>
                                                    <td><?php echo $row['TimeIn']; ?></td>
                                                    <td><?php echo $row['TimeOut']; ?></td>
                                                    <td><?php echo $row['LogDate']; ?></td>
                                                    <td><?php echo $row['Status']; ?></td>
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
            </div>
<?php
include "inc/footer.php";    
?>