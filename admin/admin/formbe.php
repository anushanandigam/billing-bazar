<?php
require '../config/connections.php';
$service_id='0';
$add_client_id='0';
$operator_='0';
$margin_='0';
$plan_ids='0';

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
if (strpos($name, 'plan_ids') !== false) {
    $plan_ids=str_ireplace("+"," ",$value);
		echo $name;
		echo $plan_ids;
}

if($service_id=='0'||$add_client_id=='0'||$operator_=='0'||$plan_ids=='0'){
}
else{

$sql=mysql_query("INSERT INTO client_margin(`service_ids`,`add_client_ids`,`operator_ids`,`operator_margin`,`plan_ids`)VALUES
('$service_id','$add_client_id','$operator_','$margin_','$plan_ids')");


$operator_='0';
$margin_='0';


}
	?>
	<br>
	
	
	<?php
	

}
echo "<script type='text/javascript'>alert('Data Successfully Inserted');</script>";

	header( "refresh:0; url=margin.php" );




?>
