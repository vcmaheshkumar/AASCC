<?php
define('AAASCC',true);
$title = "AAASCC | PUBLICATION";
include "../../includes/headers.php";
include "../../DatabaseFile/variables.php";
$conn = mysqli_connect($host,$userTag,$passTag,$databaseName);
?>
    <!-- CONTENT STARTS HERE -->
    <div class="blogs-containeh">
        <h2>Publications</h2>
    </div>
    <div class="blogs-container">
        <?php
            $mainSql = "SELECT * FROM publication";
            $mainQuery = $conn->query($mainSql);
            while($mainRow = $mainQuery->fetch_assoc()){
                        $title = $mainRow['title'];
                        $author = $mainRow['author'];
                        $type = $mainRow['type'];
                        $tag = $mainRow['tag'];
                        $dateposted = $mainRow['dateposted'];
                        $link = $mainRow['link'];
                ?>
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="http://localhost/projectApollo/assets/images/books-gb216cfbeb_1280.jpg" alt="">
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span><?php echo $dateposted ?></span>
                </div>
                <h1 class="blog-post_title"><?php echo $title ?></h1>
                <p class="blog-post_text">
                    author: <?php echo $author?> | Tag: <?php echo $tag; ?> | Type: <?php echo $type; ?><br/>
                    Publication Link: <a href="<?php echo $link;?>" style="text-decoration: none;"><?php echo $link; ?></a>
                </p>
            </div>
        </div>
                <?php
            }
        ?>
    </div><br/><br/><br/>
    <!-- CONTENT ENDS HERE -->
<?php
include "../../includes/footers.php"
?>