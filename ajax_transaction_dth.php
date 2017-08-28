
<?php
include ("config/config.php");
$count=0;
 $operator_ids = $_REQUEST['operator_ids'];
 $subscriber_id = $_REQUEST['subscriber_id'];
 $amount =$_REQUEST['amount'];
  $service_ids =$_REQUEST['service_ids'];
  $add_client_ids =$_REQUEST['add_client_ids'];
 
  $add_retailer_ids =$_REQUEST['add_retailer_ids'];
  $date=date('Y-m-d H:i:s');
 
 $sf = 2; // for dth Airtime
$api='448TJsMFD9d4tbe';
$goid=5051060118;
$client_trans_id=789456;
 
 if($conn)
	{
	$sql=$conn->prepare('select * from wallet where add_retailer_ids=?');
	$sql->bindParam(1,$add_retailer_ids);
		if($sql->execute())
		{
	if(count($sql) > 0)
			{
				$row=$sql->fetch(PDO::FETCH_OBJ);
				 $wamount=$row->amount;
					if($wamount != 0 )
					{
						 " in wamount";
						$sql1=$conn->prepare('select * from mobile_margin where add_client_ids=? and operator_name=?');
						$sql1->bindParam(1,$add_client_ids);
						$sql1->bindParam(2,$operator_ids);
							if($sql1->execute())
						{
							$row1=$sql1->fetch(PDO::FETCH_OBJ);
								 'client margin:';
								 $client_margin=$row1->operator_margin;
								 '<br>';
						$sql4=$conn->prepare('select * from client_margin where add_client_ids=? and operator_ids=?');
						$sql4->bindParam(1,$add_client_ids);
						$sql4->bindParam(2,$operator_ids);
							if($sql4->execute())
						{
							$row4=$sql4->fetch(PDO::FETCH_OBJ);
																 'retaile margin:';

								 $retailer_margin=$row4->operator_margin;
							

							 '<br>';
							/*  -----this is for retailer--- */
								 $x=$client_margin/100*$amount;
								 '<br>';
								 $y=$retailer_margin/100*$amount;
								 '<br>';
								 $z=$amount-$y;
								 '<br>';
								 $b=$x-$y;	
						/*  -----end for retailer--- */
					
								$sql2=$conn->prepare('update wallet set amount=amount-? where add_retailer_ids=?');
								$sql2->bindParam(1,$z);
								$sql2->bindParam(2,$add_retailer_ids);
									if($sql2->execute())
									{
								$sql3=$conn->prepare('update client_wallet set amount=amount+? where add_client_ids=?');
										$sql3->bindParam(1,$b);
										$sql3->bindParam(2,$add_client_ids);
											if($sql3->execute())
											{
													//style
											}
											else
											{
												echo 'noo';
											}
									}
									else
									{
										echo 'no update';	
									}
									$sql5 =$conn->prepare('insert into transaction_retailer (`operator_ids`,`subscriber_id`,`amount`,`service_ids`,`add_client_ids`,`add_retailer_ids`,`date`) values (?,?,?,?,?,?,?)');

	$sql5->bindParam(1,$operator_ids);
	$sql5->bindParam(2,$subscriber_id);
	$sql5->bindParam(3,$amount);
	$sql5->bindParam(4,$service_ids);
	$sql5->bindParam(5,$add_client_ids);
	$sql5->bindParam(6,$add_retailer_ids);
	$sql5->bindParam(7,$date);
if($sql5->execute())
		{
			
	}
	else{
		
	}



 $url="https://api.goprocessing.in/serviceTrans.go?goid=$goid&apikey=$api&rtype=json&custid=$subscriber_id&operator_code=$operator_ids&amount=$amount&client_trans_id=$client_trans_id&service_family=$sf&apimode=live";


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CAINFO,"GoCAcert.pem");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Operators Time Out is 300 sec varies from operator to operator.
echo $result = curl_exec($ch);
curl_close($ch);
 $array = json_decode($result, true);

if($result != '' && is_array($array) && ($array['ErrorCode'] != '' || $array['status'] != ''))
{
if($array['ErrorCode'] == '')
{
echo "GO Transaction ID: ".$array['trans_id']." Your(client) Transaction ID: ".$array['client_trans_id']." Mobile Number: ".$array['msisdn']." Operator Code: ".$array['operator_code']. " Operator Name: ".$array['operator_name']." Amount: ".$array['trans_amount']." DateTime: ".$array['datetime']." Status: ".$array['status']." Charged Amount:".$array['charged_amount']." Response Code: ".$array['response_code']." Operator Transaction ID: ".$array['opr_transid']." Opening Balance: ".$array['opening_balance']; // Status: 'Pending' or 'Success'
}
else if($array['ErrorCode'] == '137')
{
echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message']; // Error Occurred - Duplicate 'client_trans_id'. Kindly make the necessary action at your end for the same.
}
else
{
echo "ErrorCode: ".$array['ErrorCode']." Message: ".$array['Message']; // Error Occurred
}
}
else
{
echo "No Response or Error "; // Error Occurred or No Response or Time Out - Mark the transaction as “Pending” and Check the status from Transaction Status Request API.
}


	
	
						}
						else{
							echo "sql4 execute fail";
						}
						}
						else{
							echo "sql 1 execute fail";
						}
			}
			else{
				echo "amount fail";
			}
			}
			else{
				echo "sql count fail";
			}
			}
			else{
				echo "sql execute fail";
			}
	}
	else{
		echo "no conn";
	}
							
?>
