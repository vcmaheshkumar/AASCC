<?php
define('librarian',true);
$title = "LIBRARIAN | UPDATE | ENTRY";
require "includes/header.php";
require "libraryController.php";
$id = $_POST['libraryid'];

$query = "SELECT * FROM library WHERE id='$id'";
$query_run = mysqli_query($conn, $query);

if($query_run){
    while($row = mysqli_fetch_array($query_run)){
?>
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-title d-flex justify-content-between align-items-center m-4">
                                <h4 class="card-title">Update Entry</h4>
                                <a class="btn btn-outline-success mb-2" href="http://localhost/projectApollo/library-management">Go back</a>
                            </div>
                                <div class="card-body">
                                    <form class="forms-sample" method="POST">
                                        <?php
                                        if(isset($_SESSION['warning'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['warning']."</div>";
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <input type="hidden" name="libraryid" value="<?php echo $row['id'] ?>" hidden>
                                            <input type="hidden" name="ulibrarianName" value="<?php echo $_SESSION['librarian_name']; ?>">
                                            <label for="exampleInputBookName">Book Name</label>
                                            <input type="text" class="form-control" id="exampleInputBookName" value="<?php echo $row['BookName'] ?>" name="uBookName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputStatus">Status</label>
                                            <select class="form-control" name="ustatus" id="exampleInputStatus" name="status">
                                                <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                                                <option value="taken">Taken</option>
                                                <option value="returned">Returned</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNop">Name of Person</label>
                                            <input type="text" class="form-control" id="exampleInputNop" value="<?php echo $row['NameOp'] ?>" name="uNameOp">
                                        </div>
                                        <div class=
                                        <div class="form-group">
                                            <label for="exampleInputClass">Class</label>
                                            <input type="text" class="form-control" id="exampleInputClass" value="<?php echo $row['class'] ?>" name="uclass">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDot">Date of Taken</label>
                                            <input type="date" class="form-control" id="exampleInputDot" name="uDateOt" value="<?php echo $row['DateOt'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputLastCall">Last Call</label>
                                            <input type="date" class="form-control" id="exampleInputLastCall" value="<?php echo $row['LastCall'] ?>" name="uLastCall" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSd">Submitted Date</label>
                                            <input type="date" class="form-control" id="exampleInputSd" name="uSubDate" value="<?php echo $row['SubDate'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFine">Fine</label>
                                            <input type="text" class="form-control" id="exampleInputFine" value="<?php echo $row['Fine'] ?>" name="uFine" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputLic">Library In-charge</label>
                                            <input type="text" class="form-control" id="exampleInputLic" value="<?php echo $row['LibInChar'] ?>" name="uLibInChar">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="updateLibEntry">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
    }
}else{
    echo "data found";
}
?>
<?php
require "includes/footers.php";
?>