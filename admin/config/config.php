<?php 
ob_start();
date_default_timezone_set("Asia/Kolkata");
/*if(session_id()){

}
else{
	session_start();
}*/

$conn=0;
try{

$conn=new PDO("mysql:host=localhost;dbname=jsnbopxa_recharge","jsnbopxa_recharg","rech@7799");

}

catch(PDOException $exp)
{
$exp->getMessage();
}
?>