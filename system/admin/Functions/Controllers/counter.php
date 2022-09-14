<?php
require "Models/conn.php";

$q = "SELECT * FROM visitorscounter";
$f = mysqli_query($conn, $q);
$count = mysqli_num_rows($f);