<?php
include "../../Functions/config.php";

$k = $_POST['id'];
$k = trim($k);

$candidateSql = "SELECT * FROM candidate WHERE candidatedepartment='$k'";
$candidateQuery = $conn->query($candidateSql);
while($candidateFetchRows=mysqli_fetch_assoc($candidateQuery)){
?>
    <tr>
        <td><?php echo $candidateFetchRows['candidatename']; ?></td>
        <td><?php echo $candidateFetchRows['candidaterollno']; ?></td>
        <td><?php echo $candidateFetchRows['candidatedepartment']." ". $candidateFetchRows['candidateclass']; ?></td>
        <td><?php echo $candidateFetchRows['candidateemail']; ?></td>
        <td><?php echo $candidateFetchRows['candidatephonenumber']; ?></td>
        <td><?php echo $candidateFetchRows['candidateparentphonenumber']; ?></td>
        <td><?php echo $candidateFetchRows['candidateparentphonenumber']; ?></td>
    </tr>
<?php
}