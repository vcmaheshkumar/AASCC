<?php
include "../../Functions/config.php";
include "../Functions/Controllers/attendanceController.php";

$k = $_POST['id'];
$k = trim($k);

$candidateSql = "SELECT * FROM candidate WHERE candidatedepartment='$k'";
$candidateQuery = $conn->query($candidateSql);
while($candidateFetchRows=mysqli_fetch_assoc($candidateQuery)){
?>
    <tr>
        <td style="display: none;"><input name="candidateParentPhoneNumber" value="<?php echo $candidateFetchRows['candidateparentphonenumber']; ?>" hidden></td>
        <td><input class="border-0" style="background-color: transparent;"  name="name" value="<?php echo $candidateFetchRows['candidatename']; ?>" readonly></td>
        <td><input class="border-0" style="background-color: transparent;" name="rollnumber" value="<?php echo $candidateFetchRows['candidaterollno']; ?>" readonly></td>
        <td>
            <select class="border-0" id="exampleSelectAttendance" style="background-color: transparent;" name="attendance">
                <option class="text-success" value="present">/</option>
                <option class="text-danger" value="Absent">A</option>
                <option class="text-warning" value="On Duty">OD</option>
            </select>
        </td>
    </tr>
<?php
}