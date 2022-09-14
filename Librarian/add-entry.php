<?php
define('librarian',true);
$title = "LIBRARIAN | ADD | ENTRY";
require "includes/header.php";
require "libraryController.php";
?>
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Entry</h4>
                                    <form class="forms-sample" method="POST">
                                        <?php
                                        if(isset($_SESSION['success'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <input type="hidden" name="librarianName" value="<?php echo $_SESSION['librarian_name']; ?>">
                                            <label for="exampleInputBookName">Book Name</label>
                                            <input type="text" class="form-control" id="exampleInputBookName" placeholder="Name" name="BookName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label>
                                            <select class="form-control" name="status" id="exampleInputStatus" name="status">
                                                <option value="taken">Taken</option>
                                                <option value="returned">Returned</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNop">Name of Person</label>
                                            <input type="text" class="form-control" id="exampleInputNop" placeholder="Name of Person" name="NameOp">
                                        </div>
                                        <div class=
                                        <div class="form-group">
                                            <label for="exampleInputClass">Class</label>
                                            <input type="text" class="form-control" id="exampleInputClass" placeholder="Class" name="class">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDot">Date of Taken</label>
                                            <input type="date" class="form-control" id="exampleInputDot" name="DateOt" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputLastCall">Last Call</label>
                                            <input type="date" class="form-control" id="exampleInputLastCall" name="LastCall" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSd">Submitted Date</label>
                                            <input type="date" class="form-control" id="exampleInputSd" name="SubDate" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFine">Fine</label>
                                            <input type="text" class="form-control" id="exampleInputFine" placeholder="Fine" name="Fine" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputLic">Library In-charge</label>
                                            <input type="text" class="form-control" id="exampleInputLic" placeholder="Library In-charge" name="LibInChar">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="addLibEntry">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
require "includes/footers.php";
?>