<?php 
include("../config/config.php");

if(isset($_POST['id']))
{	
echo $service_name = $_POST['id'];

$date = date('Y-m-d H:i:s');
	
	
		if($conn)
		{
		 $sql =$conn->prepare('insert into services(`service_name`,`date`)
		 VALUES(?,?)');
			 $sql->bindParam(1,$service_name);
			 $sql->bindParam(2,$date);
			 
			 
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