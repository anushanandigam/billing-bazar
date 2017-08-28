<?php
include("../config/config.php");
session_start();
if(isset($_POST['id']))
{	
$add_retailer_ids=$_POST['id'];
 $amount=$_POST['ids'];
 $date = date('Y-m-d H:i:s');
 echo $add_client_ids=$_POST['idss'];

if($conn)
{
$sql=$conn->prepare('select * from wallet where add_retailer_ids=?');
$sql->bindParam(1,$add_retailer_ids);
if($sql->execute())
	{
	$b=count($sql);
	if($b > 0)
		{
			$row=$sql->fetch(PDO::FETCH_OBJ);
				echo $c=$row->amount;
				if($c != 0)
				{
					echo 'not zero';
					echo $amount1=$c+$amount;
					$sql1=$conn->prepare('update wallet set amount=? where add_retailer_ids=?');
					$sql1->bindParam(1,$amount1);
					$sql1->bindParam(2,$add_retailer_ids);
					if($sql1->execute())
					{
						echo 'update successfully';
					}
				}
				else
				{
					$sql2=$conn->prepare('update wallet set amount=? where add_retailer_ids=?');
					$sql2->bindParam(1,$amount);
					$sql2->bindParam(2,$add_retailer_ids);
					if($sql2->execute())
					{
						echo 'updated successfully';	
					}
					else
					{
						echo 'invalid data';
				
					}
				}
}
}
$sql3 =$conn->prepare('insert into transaction_history(`add_retailer_ids`,`add_client_ids`,`amount`,`date`)
		 VALUES(?,?,?,?)');
			 $sql3->bindParam(1,$add_retailer_ids);
			 $sql3->bindParam(2,$add_client_ids);
			 $sql3->bindParam(3,$amount);
			 $sql3->bindParam(4,$date);
			 
			 if($sql3->execute())
				{
				echo "success";
				}
		 else{
		 echo "fail";
		 }
$sql4 =$conn->prepare('select * from client_wallet where add_client_ids=?');
			 $sql4->bindParam(1,$add_client_ids);

			 
			 if($sql4->execute())
				{
								$row4=$sql4->fetch(PDO::FETCH_OBJ);

$client_wallet=$row4->amount;
echo $final_client_wallet= $client_wallet-$amount;
$sql5=$conn->prepare('update client_wallet set amount=? where add_client_ids=?');
					$sql5->bindParam(1,$final_client_wallet);
					$sql5->bindParam(2,$add_client_ids);
					if($sql5->execute())
					{
						echo 'updated successfully';	
					}
					else
					{
						echo 'invalid data';
				
					}


			}
		 else{
		 echo "fail";
		 }	 
		 
}
}

					
?>