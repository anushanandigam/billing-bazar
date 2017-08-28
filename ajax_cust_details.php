<?php
if(isset($_POST['mob_no']))
{	
$mob_no = $_POST['mob_no'];
$agent_id = $_POST['agent_id'];



$url = "https://api.goprocessing.in/moneyGetDetails.go?goid=5051060119&apikey=aLqG2qqtDHTn4GM&rtype=json&apimode=live&service_family=25&msisdn=$mob_no&agent_id=$agent_id";
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
if($result != '' && is_array($array))
{
 if($array['otp_status'] == 1 && $array['pin_status'] === 0)
 {
 echo "GO Transaction ID: ".$array['trans_id']." Customer Mobile No: ".$array['msisdn']." Remarks:
".$array['remarks']; // OTP has been send on Customer Mobile Number. Now call API request for Get

 }
 else if($array['otp_status'] === 0 && $array['pin_status'] == 1)
 {
 echo "GO Transaction ID: ".$array['trans_id']." Customer Mobile No: ".$array['msisdn']." Remarks:
".$array['remarks']; // PIN has been send on Customer Mobile Number. Now call API request for Get Customer

 }
 else if($array['otp_status'] === 0 && $array['pin_status'] === 0)
 {
 echo "Customer Name: ".$array['user_name']." Wallet Balance: ".$array['balance']." Monthly Limit
Available: ".$array['total_limit']." Limit Consumed for the Month: ".$array['consume_limit']." Limit remaining for
the Month: ".$array['remaining_limit']." KYC: ".(($array['is_kyc'] == 1)?"Updated":"Not Updated");
 echo " Beneficiary Details: ";
 if(is_array($array['beneficiary']))
 {
 foreach($array['beneficiary'] as $r)
 {
 echo " Beneficiary Reference Id: ".$r['beneficiary_id']." Name of Beneficiary:
".$r['beneficiary_name']." Type of Beneficiary: ".$r['beneficiary_type'];
 if($r['beneficiary_type'] == 'IMPS-MMID')
 echo " MMID of Beneficiary: ".$r['beneficiary_mmid']." Mobile Number associated with
MMID: ".$r['beneficiary_mobile'];
 else
 echo " Account Number of Beneficiary: ".$r['beneficiary_account_no']." IFSC Code belongs to
Account Number: ".$r['beneficiary_ifsc_code'];
 echo " Beneficiary Status : ".(($array['is_active'] == 1)?"Active":"Inactive")." Beneficiary Verified :
".(($array['is_checked'] == 1)?"Yes":"No")." Beneficiary Verification Available : ".(($array['checked_available'] ==
1)?"Yes":"No")." Beneficiary Deletion Available : ".(($array['delete_available'] == 1)?"Yes":"No")." Beneficiary
Disabled Available : ".(($array['disabled_available'] == 1)?"Yes":"No");

 }
 }
 else
 {
 echo " No Beneficiary Added.";
 }
 }
 else if($array['ErrorCode'] == '981')
 {
 echo "Not Registered"; // Error Occurred - Provided Customer Mobile No is Not Registered, Kindly call

 }
 else
 {
 echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message']; // Error Occurred.
 }
}
else
{
 echo "No Response or Error"; // Error Occurred or No Response or Time Out.
}

}

?>