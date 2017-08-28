<?php 
include("../config/config.php");

if(isset($_POST['id']))
{	
echo $add_retailer_id = $_POST['id'];
echo $status=0;
if($conn)
{
	$sql2=$conn->prepare('update add_retailer set status=? where add_retailer_id=?');
					$sql2->bindParam(1,$status);
					$sql2->bindParam(2,$add_retailer_id);
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





?>