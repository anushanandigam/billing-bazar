<?php 
include("../config/config.php");

if(isset($_POST['id']))
{	
echo $operator_name = $_POST['id'];
echo $service_ids = $_POST['ids'];

$date = date('Y-m-d H:i:s');
	
	
		if($conn)
		{
		 $sql =$conn->prepare('insert into operator(`operator_name`,`service_ids`,`date`)
		 VALUES(?,?,?)');
			 $sql->bindParam(1,$operator_name);
			 $sql->bindParam(2,$service_ids);
			 $sql->bindParam(3,$date);
			 
			 
		if($sql->execute())
				{
				echo "success";
				}
		 else{
		 echo "fail";
		 }
		 }
		 else{
		 echo "qry fail";
		 }
		 }
		 else{
		 echo "insertion failed";
		 }
		 ?>