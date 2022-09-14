<?php
if(!defined('AAASCC')){
    header('Location: http://localhost/projectApollo/home');
}
?>
<!-- /FOOTERS STARTS/ -->
<div class="footer">
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
            </ul>
            <ul class="menu">
                <li>
                    <a href="http://localhost/projectApollo/home">Home</a>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/gallery">Gallery</a>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/admission">Admission</a>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/college/media">Social Page</a>
                </li>
                <li>
                    <a href="http://localhost/projectApollo/contact">Contact Us</a>
                </li>
            </ul>
            <p>© 2022 Apollo arts & science college chennai | All Rights Reserved</p>
        </footer>
    </div>
    <!-- /FOOTERS ENDS/ -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="http://localhost/projectApollo/assets/js/main.js"></script>
    <script src="http://localhost/projectApollo/assets/js/gallery.js"></script>
    <script src="http://localhost/projectApollo/assets/js/popup.js"></script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
</body>

</html>