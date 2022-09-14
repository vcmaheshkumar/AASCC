<?php
require "includes/headers.php";
include "../Functions/Models/ipdetect.php";
include "alumniController.php";
?>
            <!-- partial -->
            <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Alumni</h4>
                                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_SESSION['success'])){
                                            echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                        }
                                        if(isset($_SESSION['error'])){
                                            echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                                        }
                                        ?>
                                        <input type="hidden" name="ipaddress" value="<?php echo  get_client_ip(); ?>">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Batch</label>
                                            <select name="batch" class="form-control">
                                                <option value="2018-2021">2018-2021</option>
                                                <option value="2019-2022">2019-2022</option>
                                                <option value="2020-2023">2020-2023</option>
                                                <option value="2021-2024">2021-2024</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="alumniImage">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputExperience">Qualification</label>
                                            <input type="text" class="form-control" id="exampleInputExperience" placeholder="Qualification" name="department">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputComment">Comment</label>
                                            <textarea class="form-control" rows="3" name="comment" placeholder="Comment"></textarea>
                                        </div>
                                        <input type="hidden" name="status" value="0">
                                         <button type="submit" class="btn btn-primary me-2" name="addReview">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table content ends -->
<?php
require "includes/footer.php";
?>