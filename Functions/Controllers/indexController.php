<?php
require "../Models/conn.php";

$eventSql = "SELECT * FROM events";
$eventQuery = $conn->query($eventSql);
while($eventRow = $eventQuery->fetch_assoc()){
        $eventTitle = $eventRow['title'];
        $eventDate = $eventRow['date'];
        $eventDetails = $eventRow['details'];
        $eventDepartment = $eventRow['department'];
}