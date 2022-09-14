<?php
define('AAASCC',true);
define('popup',true);
$title = "AAASCC | HOME";
include "includes/headers.php";
require_once 'Functions/Models/ipdetect.php';
// require_once "Functions/Controllers/indexController.php";
require_once 'Functions/Controllers/newsLetterConnect.php';
?>
<!-- Static Corousel -->
    <!-- /CAROUSEL STARTS/ -->
    <div class="container-carousel">
        <div id="slider">
            <figure>
                <img src="http://localhost/projectApollo/assets/images/img1.jpg" alt="carousel_1">
                <img src="http://localhost/projectApollo/assets/images/img2.jpg" alt="carousel_2">
                <img src="http://localhost/projectApollo/assets/images/img3.jpg" alt="carousel_3">
                <img src="http://localhost/projectApollo/assets/images/img2.jpg" alt="carousel_1">
                <img src="http://localhost/projectApollo/assets/images/img1.jpg" alt="carousel_1">
            </figure>
        </div>
    </div>
    <!-- /CAROUSEL ENDS/ -->

    <!-- Dynamic Properties -->
    <!-- /EVENTS, CIRCULAR, NEWS STARTS/ -->
    <div class="circular-container" id="events">
        <div class="section left">
            <h1>events</h1>
            <div class="events">
                <?php
            $eventSql = "SELECT * FROM events";
            $eventQuery = $conn->query($eventSql);
            while($eventRow = $eventQuery->fetch_assoc()){
                    $eventTitle = $eventRow['title'];
                    $eventDate = $eventRow['date'];
                    $eventDetails = $eventRow['details'];
                    $eventDepartment = $eventRow['department'];
            ?>
                <div class="event">
                    <div class="detail">
                        <div class="name">
                            <a><?php echo $eventTitle ?></a>
                        </div>
                        <div class="time"><?php echo $eventDate ?></div>
                        <div class="event-body"><?php echo $eventDepartment; ?>|<?php echo $eventDetails; ?></div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
        <div class="section center">
            <h1>circulars</h1>
            <div class="circulars">
                <?php
                $circularSql = "SELECT * FROM circulars";
                $circularQuery = $conn->query($circularSql);
                while($circularRow = $circularQuery->fetch_assoc()){
                        $circularTitle = $circularRow['title'];
                        $circularDate = $circularRow['date'];
                        $circularDetails = $circularRow['details'];
                        $circularDepartment = $circularRow['department'];
                ?>
                <div class="circular">
                    <div class="detail">
                        <div class="name">
                            <a><?php echo $circularTitle; ?></a>
                        </div>
                        <div class="time"><?php echo $circularDate; ?></div>
                        <div class="event-body"><?php echo $circularDepartment; ?> | <?php echo $circularDetails; ?></div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="section right">
            <h1>news</h1>
            <div class="newses">
            <?php
                $newsSql = "SELECT * FROM news";
                $newsQuery = $conn->query($newsSql);
                while($newsRow = $newsQuery->fetch_assoc()){
                        $newsTitle = $newsRow['title'];
                        $newsDate = $newsRow['date'];
                        $newsDetails = $newsRow['details'];
                        $newsDepartment = $newsRow['department'];
                ?>
                <div class="news">
                    <div class="detail">
                        <div class="name">
                            <a><?php echo $newsTitle; ?></a>
                        </div>
                        <div class="time"><?php echo $circularDate; ?></div>
                        <div class="event-body"><?php echo $circularDepartment; ?>|<?php echo $circularDetails; ?></div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- /CIRCULAR ENDS/ -->
    <!-- /NEWSLETTER STARTS/ -->
    <div class="newsletter-container">
        <div class="newsletter">
            <div class="name">
                <h2>Enter your email to get instant updates</h2>
            </div>
            <form method="post">
                <div class="field">
                    <input type="email" name="email" placeholder="Enter your Email...">
                </div>
                <div class="field">
                    <input type="text" value="<?php echo  get_client_ip(); ?>" name="ipaddress" hidden>
                </div>
                <div class="button">
                    <button type="submit" name="subscribe">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /NEWSLETTER ENDS/ -->
    
<?php
include 'includes/footers.php';
?>
