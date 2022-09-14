<?php
include "../../Functions/config.php";
include "../Functions/Controllers/marksController.php";

$k = $_POST['id'];
$k = trim($k);

$candidateSql = "SELECT * FROM candidate_marks WHERE department='$k'";
$candidateQuery = $conn->query($candidateSql);
while($candidateFetchRows=mysqli_fetch_assoc($candidateQuery)){
?>
    <tr>
        <td><?php echo $candidateFetchRows['department'] ?></td>
        <td><?php echo $candidateFetchRows['class'] ?></td>
        <td><?php echo $candidateFetchRows['name'] ?></td>
        <td><?php echo $candidateFetchRows['rollno'] ?></td>
        <td><?php echo $candidateFetchRows['subject'] ?></td>
        <td><?php echo $candidateFetchRows['examName'] ?></td>
        <td><?php echo $candidateFetchRows['markObtained'] ?></td>
        <td><?php echo $candidateFetchRows['totalMarks'] ?></td>
        <td><a href="../Functions/Controllers/markDel.php?id=<?php echo $candidateFetchRows['id'];?>" class="text-danger">Delete</a></td>
    </tr>
<?php
}