<?php
if(isset($_POST['trans_id']))
{
$otp = $_POST['otp'];
$trans_id = $_POST['trans_id'];


$url="https://api.goprocessing.in/agentRegisterOTP.go?goid=5051060119&apikey=aLqG2qqtDHTn4GM&rtype=json&apimode=test&service_family=25&trans_id=$trans_id&otp=$otp";



$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CAINFO,"GoCAcert.pem");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Operators Time Out is 300 sec varies from operator to operator.
$result = curl_exec($ch);
curl_close($ch);
$array = json_decode($result, true);
echo '<pre>'; print_r($array); echo '</pre>';
echo '<script>alert("agent Registration successful")</script>';
}
else{
	echo "failed to load otp";
}

?>
<script type="text/javascript">
window.location.href = 'retailer.php';
</script>