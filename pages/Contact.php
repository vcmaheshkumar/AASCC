<?php
define('AAASCC',true);
$title = "AAASCC | CONTACT";
include "../includes/headers.php";
require "../Functions/Models/ipdetect.php";
require '../Functions/Models/conn.php';
require_once '../Functions/Controllers/contactUsConnect.php';
?>
    <!--alert messages start
    <div class="alert-success">
      <span>Message Sent! Thank you for contacting us.</span>
    </div>
    <div class="alert-error">
      <span>Something went wrong! Please try again.</span>
    </div>
    alert messages end-->

    <!--contact section start-->
    <div class="contact-body">
        <div class="contact-section">
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
                <div><i class="fa fa-envelope"></i>contact@email.com</div>
                <div><i class="fa fa-phone"></i>+00 0000 000 000</div>
                <div><i class="far fa-clock"></i></i>Mon - Fri 8:00 AM to 5:00 PM</div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form class="contact" method="post">
                    <input type="text" name="ipaddress" class="text-box" value="<?php echo  get_client_ip(); ?>" hidden>
                    <input type="text" name="sender" class="text-box" placeholder="Your Name" required>
                    <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" name="send" class="send-btn">Send</button>
                </form>
            </div>
        </div>
    </div>
    <!--contact section end-->
<?php
include "../includes/footers.php";
?>