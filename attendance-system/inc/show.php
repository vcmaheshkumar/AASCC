<?php
include "config/conn.php";

$Sql = "SELECT * FROM tbl_attendance WHERE DATE(LogDate)=CURDATE()";
$Query = $conn->query($Sql);