<?php
include "Functions/Controllers/Models/conn.php";

$CandidateAbsentSql = "SELECT * FROM candidate_attendance INNER JOIN candidate ON candidate_attendance.rollnumber=candidate.candidaterollno";
$candidateAbsentResult = mysqli_query($conn, $CandidateAbsentSql);
while($row = mysqli_fetch_array($candidateAbsentResult)){
    $Name = $row['name'];
    $candidaterollnumber = $row['rollnumber'];
    $subject = $row['subject'];
    $department = $row['class'];
    $genderName = $row['candidategender'];
    $date = $row['date'];
    $parentsNo = $row['candidateparentphonenumber'];

}
$messageText = "This Message if from Apollo Arts And Science College Chennai.<br/>Your ".
                    (($genderName == 'male')?'son':'daughter')." <strong>".$Name."</strong> 
                    have not attend the subject <strong>".$subject."</strong> today(".$date.")";


if(isset($_POST['sendMessage'])){
    $id = $_POST['rollnumber'];
	$encodedMessage = urldecode($messageText);

	$authKey = "";
	$senderId = "";
	$route = 4;
	$postData = array(
		'authKey' => $authKey,
		'mobiles' => $parentsNo,
		'message' => $encodedMessage,
		'sender' => $senderId,
		'route' => $route
	);
	$url="http://api.msg91.com/api/sendhttp.php";

	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $postData
	));
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$response = curl_exec($ch);
	if(curl_errno($ch)){
		echo 'error:' . curl_error($ch);
	}else{
		header("Location:http://localhost/projectApollo/system/admin/");
	}
	curl_close($ch);
}    