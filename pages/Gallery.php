<?php
define('AAASCC',true);
$title = "AAASCC | GALLERY";
include "../DatabaseFile/variables.php";
include "../includes/headers.php";
$conn = mysqli_connect($host,$userTag,$passTag,$databaseName);
?>
    <!-- GALLERY STARTS -->
    <div class="gallery-wrapper">
        <!-- filter Items -->
        <nav>
            <div class="items">
                <span class="item active" data-name="all">All</span>
                <?php
            $mainSql = "SELECT * FROM gallery";
            $mainQuery = $conn->query($mainSql);
            while($mainRow = $mainQuery->fetch_assoc()){
                $galleryTag = $mainRow['imgTag'];
                ?>
                <span class="item" data-name="<?php echo $galleryTag; ?>"><?php echo $galleryTag; ?></span>
                <?php
            }
            ?>
            </div>
        </nav>
        <div class="gallery">
        <?php
            $mainSql = "SELECT * FROM gallery";
            $mainQuery = $conn->query($mainSql);
            while($mainRow = $mainQuery->fetch_assoc()){
                        $galleryTitle = $mainRow['title'];
                        $galleryImage = $mainRow['image'];
                        $galleryAttribute = $mainRow['attribute'];
                        $galleryTag = $mainRow['imgTag'];
                        $galleryDate = $mainRow['date'];
                ?>
        <!-- filter Images -->
            <div class="image" data-name="<?php echo $galleryTag; ?>"><span><img style="width:400px; height:400px;" src="http://localhost/projectApollo/assets/images/<?php echo $galleryImage; ?>" alt="<?php echo $galleryAttribute; ?>"></span></div>
        <?php
                }
        ?>
        </div>
    </div>
    <!-- fullscreen img preview box -->
    <div class="preview-box" style="z-index: 9999;">
        <div class="details">
            <span class="title">Image Category: <p></p></span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box" style="display:flex; justify-content:center;"><img src="" alt="" style="width:auto !important; height:400px;"></div>
    </div>
    <div class="shadow"></div><br/><br/><br/><br/><br/>
    <!-- GALLERY ENDS -->
<?php
include "../includes/footers.php";
?>