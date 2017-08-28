<?php

if(isset($_POST['mob_no']))
{	
  $mob_no = $_POST['mob_no'];
  $agent_id = $_POST['agent_id'];
  $username = $_POST['username'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $Pincode = $_POST['Pincode'];
  $user_address = $_POST['user_address'];
  $client_trans_id=779933;


$url = "https://api.goprocessing.in/moneyRegister.go?goid=5051060119&apikey=aLqG2qqtDHTn4GM&rtype=json&apimode=live&service_family=25&msisdn=$mob_no&agent_id=$agent_id&user_name=$username&user_address=$user_address&user_city=$city&user_state=$state&user_pincode=$Pincode&client_trans_id=$client_trans_id&service_charge=2";

$result = '';
$array = '';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CAINFO, "GoCAcert.pem");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
$result = curl_exec($ch);
curl_close($ch);
$array = json_decode($result, true);
if($result != '' && is_array($array) && ($array['ErrorCode'] != '' || $array['status'] != ''))
{
 if($array['ErrorCode'] == '')
 {
 echo "GO Transaction ID: ".$array['trans_id']." Your(Merchant) Transaction ID: ".$array['client_trans_id']."
Customer Mobile No: ".$array['msisdn']." Type: ".$array['type']." DateTime: ".$array['datetime']." Status:
".$array['status']." Charged Amount: ".$array['charged_amount']." Opening Balance: ".$array['opening_balance'];
// Status: 'Pending' or 'Success'.
 }
 else if($array['ErrorCode'] == '137')
 {
 echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message'];
 }
 else
 {
 echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message']; 
 }
}
else
{
 echo "No Response or Error"; 
}
}


?>