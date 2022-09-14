<?php
include "../../Functions/config.php";
include "../Functions/Controllers/attendanceController.php";

$k = $_POST['id'];
$k = trim($k);

$candidateSql = "SELECT * FROM candidate_attendance WHERE class='$k'";
$candidateQuery = $conn->query($candidateSql);
while($candidateFetchRows=mysqli_fetch_assoc($candidateQuery)){
    if($candidateFetchRows['date'] == date('d-m-Y')){
?>
    <tr>
        <td><?php echo $candidateFetchRows['name']; ?></td>
        <td><?php echo $candidateFetchRows['rollnumber']; ?></td>
        <td><?php echo $candidateFetchRows['subject']; ?></td>
        <td><?php echo $candidateFetchRows['class']; ?></td>
        <td><?php echo $candidateFetchRows['attendance']; ?></td>
        <td><?php echo $candidateFetchRows['date']; ?></td>
    </tr>
<?php
    }
}