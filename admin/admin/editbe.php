<?php
require '../config/connections.php';
$service_id='0';
$add_client_id='0';
$operator_='0';
$margin_='0';
$plan_id='0';

$query = explode('&',$_SERVER['QUERY_STRING']);
$params = array();
foreach($query as $param){
	list($name,$value)=explode('=',$param,2);
	$params[urldecode($name)][]=urldecode($value);
	//echo $name ." ".str_ireplace("+"," ",$value)."";
if (strpos($name, 'service_id') !== false) {
    $service_id=str_ireplace("+"," ",$value);
	echo $name;
	echo $service_id;
}
if (strpos($name, 'add_client_id') !== false) {
    $add_client_id=str_ireplace("+"," ",$value);
		echo $name;
		echo $add_client_id;
}

if (strpos($name, 'operator_') !== false) {
    $operator_=str_ireplace("+"," ",$value);
		echo $name;

	echo $operator_;
}
if (strpos($name, 'margin_') !== false) {
    $margin_=str_ireplace("+"," ",$value);
		 echo $name;

	echo $margin_;
}
if (strpos($name, 'plan_id') !== false) {
    $plan_id=str_ireplace("+"," ",$value);
		echo $name;
		echo $plan_id;
}

 if($service_id=='0'||$add_client_id=='0'||$operator_=='0'||$margin_=='0'||$plan_id=='0'){
	 echo "in if";
 }
 else{
 echo "in else";
 $sql=mysql_query("update client_margin set operator_margin=$margin_ where operator_ids=$operator_");

 $operator_='0';
 $margin_='0';



}
	?>
	<br>
	
	
	<?php
	
}
header("Location:assignmargin.php");
echo "<script type='text/javascript'>alert('Data Successfully Inserted');</script>";





?>
