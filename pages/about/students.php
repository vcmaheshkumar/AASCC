<?php
define('AAASCC',true);
$title = "AAASCC | STUDENTS";
include '../../includes/headers.php';
include "../../DatabaseFile/variables.php";
$conn = mysqli_connect($host,$userTag,$passTag,$databaseName);
?>
    <!-- /STUDENT STARTS/ -->
    <div class="student-container">
        <div class="student-content">
            <div class="studentMainIndex">
                <div class="studentSubContainer">
                    <a href="http://localhost/projectApollo/students/attendance-rules" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                            <i class="fa fas fa-clipboard"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/attendance-rules">
                                    <h3>Attendance Rules & Regulations</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/students/events" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fas fa-basketball-ball"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/events">
                                    <h3>Cultures and Sports day</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/students/transport" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fa-solid fa-bus"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/transport">
                                    <h3>Transport Facilities for Student</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/students/benefits" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fas fa-map-pin"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/benefits">
                                    <h3>Geographical benefits of College</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/students/exams" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fas fa-book-reader"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/exams">
                                    <h3>Examinations and Practicals</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/students/participation" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fa-solid fa-user-graduate"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/participation">
                                    <h3>Students Programs and Participation</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/placements" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fa-solid fa-industry"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/placements">
                                    <h3>Placements and Tie-ups</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="http://localhost/projectApollo/students/regulations" style="cursor:  context-menu;">
                        <div class="box">
                            <div class="studentIcon">
                                <i class="fa fa-solid fa-school"></i>
                            </div>
                            <div class="studentContent">
                                <a href="http://localhost/projectApollo/students/regulations">
                                    <h3>College Rules and Regulations</h3>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="studentRightBar">
                <div class="studentEvents">
                    <div class="studentEventHeading">
                        <h3>Upcoming Events</h3>
                    </div>
                    <?php
                    $eventSql = "SELECT * FROM events";
                    $eventQuery = $conn->query($eventSql);
                    while($eventRow = $eventQuery->fetch_assoc()){
                            $eventTitle = $eventRow['title'];
                            $eventDate = $eventRow['date'];
                            $eventDetails = $eventRow['details'];
                            $eventDepartment = $eventRow['department'];
                            $eventDate = explode('-', $eventDate);
                            $month = $eventDate[0];
                            $month = $eventDate[1];
                            $day = $eventDate[2];
                    ?>
                    <div class="sEventPlace">
                        <div class="studentEvent">
                            <div class="studentEventContent">
                                <div class="seDate">
                                    <p><?php echo $month ?></p>
                                    <h2><?php echo $day ?></h2>
                                </div>
                                <div class="seBody">
                                    <p>
                                        <?php echo  $eventTitle." | ".$eventDetails." | ". $eventDepartment; ?><span><a href="http://localhost/projectApollo/home#events">Read more</a></span>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="sePortals">
                    <div class="portalHeads">
                        <h3>Useful Portals</h3>
                    </div>
                    <div class="portalLinks">
                        <h4>
                            <a href="http://localhost/projectApollo/candidates-system"><i class="fa fa-solid fa-user"></i>Parents Portal</a>
                        </h4>
                        <h4>
                            <a href="http://localhost/projectApollo/candidates-system"><i class="fa fa-solid fa-user-graduate"></i>Students Portal</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /STUDENT ENDS/ -->
<?php
include '../../includes/footers.php';
?>