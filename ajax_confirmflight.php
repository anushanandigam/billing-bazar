<?php

 $psnger = $_POST['passengers'];
 $option = $_POST['localObj'];
 $name = $_POST['name'];
 $mobileno = $_POST['mobileno'];
 $email = $_POST['email'];
 echo $adults = $_POST['adults'];
 echo $childrens = $_POST['childrens'];
 echo $infants = $_POST['infants'];

set_time_limit(0);

$url = 'https://api.goprocessing.in/airBooking.go?goid=5051060118&apikey=XELcTq93yxryFnl&rtype=json&apimode=live&service_family=04';




$params = array(
				"departOpt"=>$option,
				"passengerDetails"=>array("passengerDetail"=>$psnger),
				"name"=>$name,
				"phoneNo"=>$mobileno,
				"emailID"=>$email,
				"adultPax"=>$adults,
				"childPax"=>$childrens,
				"infantPax"=>$infants,
				"mode"=>"ONE",
				"client_trans_id"=>"test221214",
				"serviceType"=>"DOM"
				);

$params = http_build_query($params);

$c = curl_init ($url);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt ($c, CURLOPT_POST, true);
curl_setopt ($c, CURLOPT_POSTFIELDS,$params);
curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 300); 
curl_setopt($c, CURLOPT_TIMEOUT, 300);
$page = curl_exec ($c);
curl_close ($c);

echo $page;

?>