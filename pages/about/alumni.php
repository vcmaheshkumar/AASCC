<?php
define('AAASCC',true);
$title = "AAASCC | ALUMNI";
include '../../includes/headers.php';
include "../../DatabaseFile/variables.php";
$conn = mysqli_connect($host,$userTag,$passTag,$databaseName);
?>
    <!-- CONTENT STARTS HERE -->
    <div class="alumni">
        <div class="alumniBody">
        <?php
            $mainSql = "SELECT * FROM alumni";
            $mainQuery = $conn->query($mainSql);
            while($mainRow = $mainQuery->fetch_assoc()){
                if($mainRow['status'] == "1"){
                        $alumniname = $mainRow['name'];
                        $alumnibatch = $mainRow['batch'];
                        $alumniimage = $mainRow['image'];
                        $alumniimage = $mainRow['image'];
                        $alumnidepartment = $mainRow['department'];
                        $alumnicomment = $mainRow['comment'];
                        $dateop = $mainRow['dateop'];
                ?>
            <div class="alumniPost">
                <div class="alumniPostImg">
                    <img src="http://localhost/projectApollo/assets/images/<?php echo $alumniimage; ?>" alt="">
                </div>
                <div class="alumniPostInfo">
                    <h1 class="alumniPostName"><?php echo $alumniname;?></h1>
                    <div class="alumniPostDate">
                        <span><?php echo $dateop;?></span>
                    </div>
                    <h3 class="alumniPostTitle"><?php echo $alumnidepartment;?></h3>
                    <p class="alumniPostText">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $alumnicomment ?>
                    </p>
                </div>
            </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- CONTENT ENDS HERE -->
<?php
include '../../includes/footers.php';
?>