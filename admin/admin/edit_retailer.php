<?php
require '../config/connections.php';
$s ="update add_retailer set ";
$count=0;
echo $plan_id=$_REQUEST['plan_id'];
echo $fname=$_REQUEST['fname'];
echo $lname=$_REQUEST['lname'];
echo $mname=$_REQUEST['mname'];
echo $pwd=$_REQUEST['pwd'];
echo $gender=$_REQUEST['gender'];
echo $dob=$_REQUEST['dob'];
echo $mbl_num=$_REQUEST['mbl_num'];
echo $email_id=$_REQUEST['email_id'];
echo $address=$_REQUEST['address'];
echo $add_retailer_id=$_REQUEST['add_retailer_id'];
if ($fname!='')
{
	if($count==0){
	
	$s.=  "first_name='".$fname."'";
    $count++;
	}
   else{
	  $s.= " , first_name='".$fname."'";
   }
}

if ($lname!='')
{
	if($count==0){
	$s.=  "last_name='".$lname."'";
    $count++;
	}
   else{
    $s.= " , last_name='".$lname."'";
   }	
}

if ($mname!='')
{
	if($count==0){
	$s.=  "middle_name='".$mname."'";
    $count++;
	}
   else{
    $s.= " , middle_name='".$mname."'";
   }	
}
if ($pwd!='')
{
	if($count==0){
	$s.=  "password='".$pwd."'";
    $count++;
	}
   else{
    $s.= " , password='".$pwd."'";
   }	
}

if ($gender!='')
{
	if($count==0){
	$s.=  "gender='".$gender."'";
    $count++;
	}
   else{
    $s.= " , gender='".$gender."'";
   }	
}

if ($dob!='')
{
	if($count==0){
	$s.=  "dob='".$dob."'";
    $count++;
	}
   else{
    $s.= " , dob='".$dob."'";
   }	
}

if ($mbl_num!='')
{
	if($count==0){
	$s.=  "mbl_num='".$mbl_num."'";
    $count++;
	}
   else{
    $s.= " , mbl_num='".$mbl_num."'";
   }	
}

if ($address!='')
{
	if($count==0){
	$s.=  "address='".$address."'";
    $count++;
	}
   else{
    $s.= " , address='".$address."'";
   }	
}

if ($email_id!='')
{
	if($count==0){
	$s.=  "email_id='".$email_id."'";
    $count++;
	}
   else{
    $s.= " , email_id='".$email_id."'";
   }	
}

if ($plan_id!='')
{
	if($count==0){
	
	$s.=  "plan_ids='".$plan_id."'";
    $count++;
	}
   else{
	  $s.= " , plan_ids='".$plan_id."'";
   }
}

$s.="where add_retailer_id='".$add_retailer_id."';";
echo $s;
$q=mysql_query($s);


?>