<?php
define('AAASCC',true);
$title = "AAASCC | FACULTIES";
include '../../includes/headers.php';
include "../../DatabaseFile/variables.php";
$conn = mysqli_connect($host,$userTag,$passTag,$databaseName);
?>

    <!-- /CONTAINER STARTS/ -->
    <div class="faculties-container">
        <?php
            $mainSql = "SELECT * FROM faculties";
            $mainQuery = $conn->query($mainSql);
            while($mainRow = $mainQuery->fetch_assoc()){
                if($mainRow['facultydesignation'] == "chairman" || $mainRow['facultydesignation'] == "principal"){
                        $facultyname = $mainRow['facultyname'];
                        $facultydesignation = $mainRow['facultydesignation'];
                        $facultyqualification = $mainRow['facultyqualification'];
                        $facultyimage = $mainRow['facultyimage'];
                        $facultysociallink1 = $newsRow['facultysociallink1'];
                        $facultysociallink2 = $newsRow['facultysociallink2'];
                        $facultysociallink3 = $newsRow['facultysociallink3'];
                        $facultysociallink4 = $newsRow['facultysociallink4'];
                ?>
        <div class="faculty-container">
            <div class="card-faculty">
                <img class="faculty-image" src="http://localhost/projectApollo/faculties/<?php echo $facultyimage; ?>" alt="faculties_image" />
                <div class="content-faulty">
                    <h1><?php echo $facultyname ?></h1>
                    <p class="title-faculty"><?php echo $facultydesignation; ?></p>
                    <br/>
                    <p>Qualification:<?php echo $facultyqualification ?></p>
                    <div class="social-faculty">
                        <a href="<?php echo $facultysociallink1; ?>"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $facultysociallink2; ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $facultysociallink3; ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $facultysociallink4; ?>"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    <div class="row">
        <h1>Faculties of our College</h1>
        <?php
            $mainSql = "SELECT * FROM faculties";
            $mainQuery = $conn->query($mainSql);
            while($mainRow = $mainQuery->fetch_assoc()){
                if($mainRow['facultydesignation'] != "chairman" || $mainRow['facultydesignation'] != "principal"){
                    $facultyname = $mainRow['facultyname'];
                    $facultydesignation = $mainRow['facultydesignation'];
                    $facultyqualification = $mainRow['facultyqualification'];
                    $facultydepartment = $mainRow['facultydepartment'];
                    $facultyimage = $mainRow['facultyimage'];
                    $facultysociallink1 = $mainRow['facultysociallink1'];
                    $facultysociallink2 = $mainRow['facultysociallink2'];
                    $facultysociallink3 = $mainRow['facultysociallink3'];
                    $facultysociallink4 = $mainRow['facultysociallink4'];
        ?>
        <div class="column">
                <div class="card">
                    <img src="http://localhost/projectApollo/faculties/<?php echo $facultyimage; ?>" alt="faculties_image">
                    <h1><?php echo $facultyname ?></h1>
                    <p class="title"><?php echo $facultydesignation ?></p>
                    <p><?php echo $facultyqualification ?></p>
                    <p>Department: <?php echo $facultydepartment ?></p>
                    <div class="social">
                        <a href="<?php echo $facultysociallink1; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $facultysociallink2; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $facultysociallink3; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="<?php echo $facultysociallink4; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>    
        </div>
        <?php
                }
            }
        ?>
        </div>
    </div>
    <!-- /CONTAINER ENDS/ -->
<?php
include '../../includes/footers.php';
?>