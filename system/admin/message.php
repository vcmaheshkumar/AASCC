<?php
define('admin',true);
$title = "ADMINISTRATION | MESSAGE";
require "includes/headers.php";
require "Functions/Controllers/messageController.php";
?>
            <!-- partial -->
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                            <?php
                            if(isset($_SESSION['success'])){
                                echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                            }
                            if(isset($_SESSION['error'])){
                                echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                            }
                            ?>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Write Messages</h4>
                                    <div class="table-responsive">
                                        <form action="" class="form-sample" method="post">
                                            <input type="text" name="adminName" value="<?php echo $_SESSION['admin_name'] ?>" hidden />
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">From</label>
                                                <input type="text" class="form-control text-muted" name="adminFrom" value="<?php echo $_SESSION['type'] ?>" readonly required />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Message</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="adminMessage" placeholder="Type your Message" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">To</label>
                                                <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="adminTo" required>
                                                  <option value="admin">Admin</option>
                                                  <option value="user">Faculties</option>
                                                  <option value="student">Students</option>
                                                  <option value="parents">Parents</option>
                                                </select>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-success" name="messageBtn" type="submit">
                                                  Send
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Messages</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>message count</th>
                                                    <th>From</th>
                                                    <th>Message</th>
                                                    <th>To</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>message count</th>
                                                    <th>From</th>
                                                    <th>Message</th>
                                                    <th>To</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $msgSql = "SELECT * FROM message";
                                                $msgQuery = $conn->query($msgSql);
                                                while($msgRow = $msgQuery->fetch_assoc()){
                                                    if($msgRow['msgname'] == $_SESSION['admin_name']){
                                                ?>
                                                <tr>
                                                    <td><?php echo $msgRow['id'];?></td>
                                                    <td><?php echo $msgRow['msgfrom'];?></td>
                                                    <td><?php echo $msgRow['msgmessage'];?></td>
                                                    <td>
                                                        <?php if($msgRow['msgto'] == 'user'){
                                                        echo "faculties";
                                                        }else{
                                                            echo $msgRow['msgto'];
                                                        }?>
                                                    </td>
                                                    <form action="Functions/Controllers/messageDel.php" method="POST">
                                                        <input type="hidden" name="msgid" value="<?php echo $msgRow['id'];?>" />
                                                        <td><input type="submit" class="btn btn-outline-danger" name="delete" value="Delete" /></td>
                                                    </form>
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
require "includes/footers.php";
?>