<?php

if(isset($_POST['mob_no']))
{	
 $mob_no = $_POST['mob_no'];
 $agent_id = $_POST['agent_id'];
 $amount = $_POST['amount'];
 $service_charge = $_POST['service_charge'];
 $client_trans_id=779933;


 $url = "https://api.goprocessing.in/moneyLoad.go?goid=5051060119&apikey=aLqG2qqtDHTn4GM&rtype=json&apimode=live&service_family=25&msisdn=$mob_no&agent_id=$agent_id&client_trans_id=$client_trans_id&amount=$amount&service_charge=$service_charge";
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

 if($array['ErrorCode'] == '')
 {
 echo "GO Transaction ID: ".$array['trans_id']." Your(Merchant) Transaction ID: ".$array['client_trans_id']."
Customer Mobile No: ".$array['msisdn']." Customer Balance: ".$array['user_balance']." Amount collected from
Customer: ".$array['user_charged_amount']." Customer balance before TopUp:
".$array['user_opening_balance']." Type: ".$array['type']." TopUp Amount: ".$array['amount']." DateTime:
".$array['datetime']." Status: ".$array['status']." Charged Amount: ".$array['charged_amount']." Opening Balance:
".$array['opening_balance']; 
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
?>