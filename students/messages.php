<?php
define('student',true);
$title = "AAASCC | STUDENTS | MESSAGE";
require "includes/headers.php";
?>
            <!-- partial -->
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Messages</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>From</th>
                                                    <th>Message</th>
                                                    <th>To</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>From</th>
                                                    <th>Message</th>
                                                    <th>To</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                                $msgSql = "SELECT * FROM message";
                                                $msgQuery = $conn->query($msgSql);
                                                while($msgRow = $msgQuery->fetch_assoc()){
                                                    if($msgRow['msgto'] == 'student'){
                                                ?>                                                
                                                <tr>
                                                <td>
                                                    <?php if($msgRow['msgfrom'] == 'user'){
                                                        echo "faculties";
                                                        }else{
                                                            echo $msgRow['msgfrom'];
                                                        }?>
                                                </td>
                                                    <td><?php echo $msgRow['msgmessage'];?></td>
                                                    <td>
                                                        <?php if($msgRow['msgto'] == 'users'){
                                                        echo "faculties";
                                                        }else{
                                                            echo $msgRow['msgto'];
                                                        }?>
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
include "includes/footers.php";
?>