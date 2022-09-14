<?php
include "../../Functions/config.php";
include "../Functions/Controllers/marksController.php";

$k = $_POST['id'];
$k = trim($k);

$candidateSql = "SELECT * FROM candidate WHERE candidatedepartment='$k'";
$candidateQuery = $conn->query($candidateSql);
while($candidateFetchRows=mysqli_fetch_assoc($candidateQuery)){
?>
    <tr>
        <td><input class="border-0" style="background-color: transparent;" value="<?php echo $candidateFetchRows['candidatedepartment'] ?>" name="department" readonly/></td>
        <td><input class="border-0" style="background-color: transparent;" value="<?php echo $candidateFetchRows['candidateclass'] ?>" name="class"  readonly/></td>
        <td><input class="border-0" style="background-color: transparent;" value="<?php echo $candidateFetchRows['candidatename'] ?>" name="name" readonly/></td>
        <td><input class="border-0" style="background-color: transparent;" value="<?php echo $candidateFetchRows['candidaterollno'] ?>" name="rollno" readonly/></td>
        <td><input class="border-0" style="height:30px" placeholder="Subject" name="subject" /></td>
        <td><input class="border-0" style="height:30px" placeholder="Name of the Exam"  name="examName" /></td>
        <td><input class="border-0" style="height:30px" placeholder="Marks Obtained"  name="markObtained" /></td>
        <td><input class="border-0" style="height:30px" placeholder="Total Marks"  name="totalMarks" /></td>
    </tr>
<?php
}