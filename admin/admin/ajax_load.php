<?php
include("../config/config.php");
session_start();
if(isset($_POST['add_retailer_ids']))
{	
$add_retailer_ids=$_POST['add_retailer_ids'];
$amount=$_POST['amount'];

if($conn)
{
$sql=$conn->prepare('select * from wallet where add_retailer_ids=?');
$sql->bindParam(1,amount);
if($sql->execute())
	{
	$b=count($sql);
	if($b > 0)
		{
while($row=$sql->fetch(PDO::FETCH_OBJ))
{
$c=$row->sql_count;
if($c != 0)
	{
		$count=$row->sql_count+$add_retailer_ids;
		$add_retailer_ids=$count;
	}
}

}
}
$sql1=$conn->prepare('update add_retailer_ids set sql_count=? where add_retailer_ids=?');
$sql->bindParam(1,$add_retailer_ids);
$sql->bindParam(1,$amount);
if($sql->execute())
{
if($add_retailer_ids == 1)
{
echo 'update successfully';
}
else
	{
	$sql2=$conn->prepare('update add_retailer_ids set sql_count=? where add_retailer_ids=1');
	$sql2->bindParam(1,$amount);
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
else
	{
	echo 'unable to connect';
	
	}
}
}
?>