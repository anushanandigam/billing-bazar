<?php 
include("../config/config.php");

if(isset($_POST['password']))
{	
 $first_name1 = $_POST['password'];
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $middle_name = $_POST['middle_name'];
 $gender = $_POST['gender'];
 $agent_id = $_POST['agent_id'];
 $dob = $_POST['dob'];
 $mbl_num = $_POST['mbl_num'];
 $address = $_POST['address'];
$pincode = $_POST['pincode'];
 $city = $_POST['city'];
 $password = $_POST['password'];
 $id= $_POST['client_id'];
 $plan_ids= $_POST['plan_ids'];
 $state_code= $_POST['state_code'];
 $email_id= $_POST['email_id'];
 $date=date('Y-m-d H:i:s');
 $amount =0;
$status=1;


	
		if($conn)
		{
		 $sql =$conn->prepare('insert into add_retailer(`first_name`,`last_name`,`middle_name`,`gender`,`dob`,`mbl_num`,`address`,`add_client_ids`,`password`,`status`,`plan_ids`,`email_id`,`agent_id`,`pincode`,`city`,`state_code`) 
		 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			 $sql->bindParam(1,$first_name);
			 $sql->bindParam(2,$last_name);
			 $sql->bindParam(3,$middle_name);
			 $sql->bindParam(4,$gender);
			 $sql->bindParam(5,$dob);
			 $sql->bindParam(6,$mbl_num);
			 $sql->bindParam(7,$address);
			 $sql->bindParam(8,$id);
			 $sql->bindParam(9,$password);
			 $sql->bindParam(10,$status);
			 $sql->bindParam(11,$plan_ids);
			 $sql->bindParam(12,$email_id);
			 $sql->bindParam(13,$agent_id);
			 $sql->bindParam(14,$pincode);
			 $sql->bindParam(15,$city);
			 $sql->bindParam(16,$state_code);

 $url="https://api.goprocessing.in/agentRegister.go?goid=5051060119&apikey=aLqG2qqtDHTn4GM&rtype=json&agent_id=$agent_id&agent_msisdn=$mbl_num&service_code=25&agent_name=$first_name&agent_cname=$last_name&agent_address=$address&agent_city=$city&agent_state_code=$state_code&agent_pincode=$pincode";

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
$trans_id= $array['trans_id'];
if($array['ErrorCode'] == '')
{
echo $array['trans_id']; // Status: 'Pending' or 'Success'
}
else if($array['ErrorCode'] == '137')
{
echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message']; // Error Occurred - Duplicate 'client_trans_id'. Kindly make the necessary action at your end for the same.
}
else
{
echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message']; // Error Occurred
}
		 
		
		if($sql->execute())
				{
				
				$last_id = $conn->lastInsertId();
            $sql1 =$conn->prepare('insert into wallet(`add_client_ids`,`amount`,`add_retailer_ids`,`date`)VALUES(?,?,?,?)');
			$sql1->bindParam(1,$id);
			$sql1->bindParam(2,$amount);
			$sql1->bindParam(3,$last_id);
			$sql1->bindParam(4,$date);
				 		
							 if($sql1->execute())
								{
									
								}
								else
								{
								}
				
				
				}
		 else{
		 }
		 }
		 
		 else{
		 }
		 }
		 else{
		 }
		 
			
		 
		