<?php
include("config/config.php");
$count=0;
  $flight_service = $_REQUEST['flight_service'];
  $flight_from = $_REQUEST['flight_from'];
  $flight_to=$_REQUEST['flight_to'];
  $departure_date =$_REQUEST['departure_date'];
  $return_date =$_REQUEST['return_date'];
  $flight_adults =$_REQUEST['flight_adults'];
  $flight_childrens =$_REQUEST['flight_childrens'];
  $flight_infants =$_REQUEST['flight_infants'];
  $flight_class =$_REQUEST['flight_class'];
  $serviceType="DOM";

 //change excution time.
set_time_limit(0);
$url = 'https://api.goprocessing.in/airSearch.go?goid=5051060118&apikey=XELcTq93yxryFnl&rtype=json&apimode=live&service_family=04';

$params = array(
				"origin"=>$flight_from,
				"destination"=>$flight_to,
				"departDate"=>$departure_date,
				"adultPax"=>$flight_adults,
				"childPax"=>$flight_childrens,
				"infantPax"=>$flight_infants,
				"classPreferred"=>$flight_class,
				"mode"=>$flight_service,
				"serviceType"=>"DOM",
				);
/*$params= "origin="$flight_from."&destination="$flight_to."&departDate="$departure_date."&adultPax="$flight_adults."&childPax="$flight_childrens."&infantPax="$flight_infants."&classPreferred="$flight_class."&mode="$flight_service."&serviceType="$serviceType;*/

$c = curl_init ($url);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt ($c, CURLOPT_POST, true);
curl_setopt ($c, CURLOPT_POSTFIELDS,$params);
curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 300); 
curl_setopt($c, CURLOPT_TIMEOUT, 300);
$page = curl_exec ($c);
curl_close ($c);

/*$page2= new simplexmlelements(file_get_contents($page));*/
echo $page;


?>
			 