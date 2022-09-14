<?php
define('social',true);
$title = "AAASCC | MEDIA";
include "includes/headers.php";
include "socialController.php";

?>
<div class="container">
    <!-- Left Panel -->
    <div class="left-panel">
        <ul>
            <li>
                <a href="http://localhost/projectApollo/home" style="text-align: center; text-decoration: none; color:black;">Apollo Arts And<br/>Science College Chennai</a>
            </li>
            <a href="http://localhost/projectApollo/courses" style="text-decoration: none; color:black">
                <li>
                    <i class="fa fa-book"></i>
                    <p>Courses</p>
                </li>
            </a>
            <a href="http://localhost/projectApollo/department" style="text-decoration: none; color:black">
                <li>
                    <i class="fas fa-stream"></i>
                    <p>Department</p>
                </li>
            </a>
            <a href="http://localhost/projectApollo/about/students" style="text-decoration: none; color:black">
                <li>
                    <i class="fas fa-user-graduate"></i>
                    <p>Students</p>
                </li>
            </a>
            <a href="http://localhost/projectApollo/about/faculty" style="text-decoration: none; color:black">
                <li>
                    <i class="fa fa-user"></i>
                    <p>Faculties</p>
                </li>
            </a>
        </ul>
    </div>
    <!-- Middle Panel -->
    <div class="middle-panel">
        <?php
                                    
    if ($_SESSION['type'] == "admin")
    {
        ?>
        <div class="post">
            <?php
                if(isset($_SESSION['success'])){
                    echo "<a style='color: #006600'>".$_SESSION['success']."</a>";
                }
                if(isset($_SESSION['error'])){
                    echo "<a style='color: #ff0000'>".$_SESSION['error']."</a>";
                }?>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $_SESSION['admin_name'] ?>" name="name"/>
                <div style="display:flex; flex-direction:column; margin-bottom: 10px">
                    <label style="margin-bottom: 10px; color: grey;">Write Message</label><br/>
                    <textarea name="postText" rows="3" style="width: 100%; resize:none; border: none; background-color: #eee; border-radius:5px;"></textarea>
                </div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-bottom: 10px">
                    <label style="margin-bottom: 10px; color: grey;">Image</label><br/>
                    <input name="postPic" type="file" style="width: 50%; background-color: #eee; padding:10px; text-align: center; border-radius: 10px;" />
                </div>
                <button name="postBtn" type="submit" style="width: 20%; color:#eee; float: right; background-color: #006600; border: none; padding: 5px; border-radius: 5px;" >Post</button>
            </form>
        </div>
        <?php
    }
        ?>
        <?php
        $socialSql = "SELECT * FROM social";
        $socialQuery = $conn->query($socialSql);
        while($socialRow = $socialQuery->fetch_assoc()){
        ?>
        <div class="post">
            <div class="post-top">
                <div class="dp">
                    <img src="http://localhost/projectApollo/assets/images/logo.png" alt="">
                </div>
                <div class="post-info">
                    <p class="name"><?php echo $socialRow['name']?></p>
                    <span class="time"><?php echo $socialRow['date']?></span>
                </div>
                <!-- <i class="fas fa-ellipsis-h"></i> -->
            </div>
            <div class="post-content">
                <?php echo $socialRow['postText']?>
                <img src="http://localhost/projectApollo/social/post/<?php echo $socialRow['image']; ?>" />
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <!-- Right Panel -->
    <div class="right-panel">
        <div class="pages-section">
            <h4>Useful Links</h4>
            <a class='page' href="http://localhost/projectApollo/admission">
                <p class="name">Admission</p>
            </a>

            <a class='page' href="http://localhost/projectApollo/gallery">
                <p class="name">Gallery</p>
            </a>

            <a class='page' href="http://localhost/projectApollo/about/alumni">
                <p class="name">Alumni</p>
            </a>

            <a class='page' href="http://localhost/projectApollo/contact">
                <p class="name">Contact Us</p>
            </a>
        </div>

        <div class="friends-section">
            <h4>Log In</h4>

            <a class="friend" href="http://localhost/projectApollo/candidates-system">
                <p class="name">Student Log In</p>
            </a>

            <a class="friend" href="http://localhost/projectApollo/candidates-system">
                <p class="name">Faculty Log In</p>
            </a>

        </div>
    </div>
</div>
</body>

</html>