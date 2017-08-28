<?php 
include("../config/config.php");

if(isset($_POST['id']))
{	
echo $add_client_ids = $_POST['id'];
	
	
		if($conn)
		{
		 $sql =$conn->prepare('insert into add_retailer(`add_client_ids`)
		 VALUES(?)');
			 $sql->bindParam(1,$add_client_ids);
			 
			 
			 
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