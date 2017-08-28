<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="../css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="../css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="../css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="../css/switchery/switchery.min.css" />

    <script src="../js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style>
.navbar ul li{
list-style-type:none;
font-size:15px;
padding-top:10px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
	right: 17px;
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}
.dropdown-content li a{
	color: #23262b;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.menu_icons{
	 font-size: 20px;border: 1px solid;border-radius: 20px;padding: 4px;
}
</style>
</head>

<script>
	$(document).ready(function () 
	{ 
	alert("hi");
	$("#demo-form2").on('submit',(function(e) 
		{	
		alert("form1");
			
			e.preventDefault();  
			var count=document.getElementById('count').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('margin_'+i).value;
				
var y=document.getElementById('operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>
<script>
	$(document).ready(function () 
	{ 
	alert("electricity");
	$("#electricity").on('submit',(function(e) 
		{	
		alert("electricityform2");
			
			e.preventDefault();  
			var count=document.getElementById('count1').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('electricity_margin_'+i).value;
				
var y=document.getElementById('electricity_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("dth");
	$("#dth").on('submit',(function(e) 
		{	
		alert("dth_form");
			
			e.preventDefault();  
			var count=document.getElementById('count2').value;
						
			alert(count2);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('dth_margin_'+i).value;
				
var y=document.getElementById('dth_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("landline");
	$("#landline").on('submit',(function(e) 
		{	
		alert("landline_form");
			
			e.preventDefault();  
			var count=document.getElementById('count3').value;
						
			alert(count3);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('landline_margin_'+i).value;
				
var y=document.getElementById('landline_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("datacard");
	$("#datacard").on('submit',(function(e) 
		{	
		alert("datacard_form");
			
			e.preventDefault();  
			var count=document.getElementById('count4').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('datacard_margin_'+i).value;
				
var y=document.getElementById('datacard_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("bus");
	$("#bus").on('submit',(function(e) 
		{	
		alert("bus_form");
			
			e.preventDefault();  
			var count=document.getElementById('count5').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('bus_margin_'+i).value;
				
var y=document.getElementById('bus_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("gas");
	$("#gas").on('submit',(function(e) 
		{	
		alert("gas_form");
			
			e.preventDefault();  
			var count=document.getElementById('count6').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('gas_margin_'+i).value;
				
var y=document.getElementById('gas_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("broadband");
	$("#broadband").on('submit',(function(e) 
		{	
		alert("broadband_form");
			
			e.preventDefault();  
			var count=document.getElementById('count7').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('broadband_margin_'+i).value;
				
var y=document.getElementById('broadband_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("hotel");
	$("#hotel").on('submit',(function(e) 
		{	
		alert("hotel_form");
			
			e.preventDefault();  
			var count=document.getElementById('count8').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('hotel_margin_'+i).value;
				
var y=document.getElementById('hotel_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("flight");
	$("#flight").on('submit',(function(e) 
		{	
		alert("flight_form");
			
			e.preventDefault();  
			var count=document.getElementById('count9').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('flight_margin_'+i).value;
				
var y=document.getElementById('flight_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("movies");
	$("#movies").on('submit',(function(e) 
		{	
		alert("movies_form");
			
			e.preventDefault();  
			var count=document.getElementById('count10').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('movies_margin_'+i).value;
				
var y=document.getElementById('movies_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("moneytransfer");
	$("#moneytransfer").on('submit',(function(e) 
		{	
		alert("moneytransfer_form");
			
			e.preventDefault();  
			var count=document.getElementById('count11').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('moneytransfer_margin_'+i).value;
				
var y=document.getElementById('moneytransfer_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("IRCTC");
	$("#IRCTC").on('submit',(function(e) 
		{	
		alert("IRCTC_form");
			
			e.preventDefault();  
			var count=document.getElementById('count12').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('IRCTC_margin_'+i).value;
				
var y=document.getElementById('IRCTC_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>

<script>
	$(document).ready(function () 
	{ 
	alert("insurance");
	$("#insurance").on('submit',(function(e) 
		{	
		alert("insurance_form");
			
			e.preventDefault();  
			var count=document.getElementById('count13').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('insurance_margin_'+i).value;
				
var y=document.getElementById('insurance_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>


<body class="nav-md">

    <div class="container body">
        <div class="main_container">
		<?php include 'menu.php'; ?>
		
		 <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../images/img.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="../images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="../images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>

            
					
					<!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Network Services</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
<nav class="navbar">   
    <ul class="navBar">
                  <li class="active col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" href="#mobile" title="Mobile">&nbsp;
                    <i class="glyphicon glyphicon-phone menu_icons" ></i>
                  Mobile</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#electricity" title="Electricity">&nbsp;&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-flash menu_icons" ></i>Electricity</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#dth" title="DTH">&nbsp;
                    <i class="glyphicon glyphicon-cloud menu_icons" ></i>&nbsp;DTH</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#landline" title="Landline">&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-phone-alt menu_icons" ></i>Landline</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#datacard" title="Datacard">&nbsp;&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-tags menu_icons" ></i>Datacard</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#bus" title="Bus">&nbsp;
                    <i class="glyphicon glyphicon-map-marker menu_icons" ></i>&nbsp;&nbsp;Bus</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#gas" title="Gas">&nbsp;
                    <i class="glyphicon glyphicon-fire menu_icons" ></i>&nbsp;&nbsp;Gas</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#broadband" title="Broadband">&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-globe menu_icons" ></i>Broadband</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#hotel" title="Hotel">&nbsp;
                    <i class="glyphicon glyphicon-cutlery menu_icons"></i>&nbsp;Hotel</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#flight" title="Flight">&nbsp;
                    <i class="glyphicon glyphicon-plane menu_icons" ></i>&nbsp;Flight</a></li>
                  <li class="col-md-1 col-lg-1 col-sm-3 col-xs-4"><a data-toggle="tab" role="tab" href="#movie" title="Movies">&nbsp;
                    <i class="glyphicon glyphicon-sunglasses menu_icons" ></i>Movies</a></li>
                  
                <li role="presentation" class="col-md-1 col-lg-1 col-sm-3 col-xs-4 dropdown">
                    <a data-toggle="tab" role="tab" title="More" href="#more" class="dropbtn">&nbsp;
                    <i class="glyphicon glyphicon-option-horizontal menu_icons"></i>
                       &nbsp;More
                    </a>
                <ul class="dropdown-content">
                  <li><a data-toggle="tab" role="tab" href="#moneytransfer" title="MoneyTransfer">&nbsp;
                    <i class="glyphicon glyphicon-transfer"></i>&nbsp;&nbsp;Money Transfer</a></li>
                  <li><a data-toggle="tab" role="tab" href="#irctc" title="IRCTC">&nbsp;
                    <i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;IRCTC&nbsp;</a></li>
                  <li><a data-toggle="tab" role="tab" href="#insurance" title="Insurance">&nbsp;
                    <i class="  glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp;Insurance</a></li>
                </ul>
                </li>
              

             </ul>
</nav>

                                    
                                  
                                 <div class="clearfix"></div>
                                </div>
								
                                <div class="tab-content">
                                    <br />
									   
									 <div role="tabpanel" class="tab-pane fade in active" id="mobile">
                                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
<?php
	include '../config/config.php';
	
	$sql=$conn->prepare('select * from operator where service_ids="1"');
	if($sql->execute())
	{
		$count= $sql->rowCount();
		echo $count;
$i=0;
	while($row=$sql->fetch(PDO::FETCH_OBJ))
	{
		$i++;
?>									
<div class="form-group">

			<label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;
			echo $row->operator_id;
			
			?></label>
			<input type="hidden" name="operator_<?php echo $i;?>" id="operator_<?php echo $i;?>" value="<?php echo $row->operator_id;?>">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<input type="hidden" name="count" id="count" value="<?php echo $count;?>">
				
				<input type="text" name="margin_<?php echo $i;?>" id="margin_<?php echo $i;?>" class="form-control"  placeholder="Default Input">
			</div>
		</div>
<?php

}
}
?>
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
									</div>
									

									
									
										<div role="tabpanel" class="tab-pane fade" id="electricity">
										<form id="electricity" data-parsley-validate class="form-horizontal form-label-left">
										  	<?php 
											include("../config/config.php");
												$sql1=$conn->prepare('select * from operator where service_ids="2"');
												if($sql1->execute())
												{
													$count1= $sql1->rowCount();
													echo $count1;
													$i=0;
	                                     
	                                    while($row=$sql1->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;echo $row->operator_id; ?></label>
											<input type="hidden" name="electricity_operator_<?php echo $i;?>" id="electricity_operator_<?php echo $i;?>" value="<?php echo $row->operator_id;?>">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
										<input type="hidden" name="count1" id="count1" value="<?php echo $count1;?>">
										<input type="text" name="electricity_margin_<?php echo $i;?>" id="electricity_margin_<?php echo $i;?>" class="form-control"  placeholder="Default Input">
                                                
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
									
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                     </div>
   

									<div role="tabpanel" class="tab-pane fade" id="dth">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										  		  		<?php 
											include("../config/config.php");
												$sql2=$conn->prepare('select * from operator where service_ids="3"');
												if($sql2->execute())
												{
													$count2= $sql2->rowCount();
													echo $count2;
													$i=0;
	                                     
	                                    while($row=$sql1->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
											
                                            <input type="hidden" name="operator_<?php echo $i;?>" id="operator_<?php echo $i;?>" value="<?php echo $row->operator_id;?>">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
										<input type="hidden" name="count" id="count" value="<?php echo $count;?>">
										<input type="text" name="margin_<?php echo $i;?>" id="margin_<?php echo $i;?>" class="form-control"  placeholder="Default Input">	                  
										</div>
                                        </div>
										<?php
										}
										}
										
										?>
										<div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
									</div>
									
									
								
										<div role="tabpanel" class="tab-pane fade" id="datacard">
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										  	<?php 
											include("../config/config.php");
												$sql4=$conn->prepare('select * from operator where service_ids="4"');
												if($sql4->execute())
												{
													$count4= $sql4->rowCount();
													echo $count4;
													$i=0;
	                                     
	                                    while($row=$sql4->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <input type="hidden" name="operator_<?php echo $i;?>" id="operator_<?php echo $i;?>" value="<?php echo $row->operator_id;?>">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
										<input type="hidden" name="count" id="count" value="<?php echo $count;?>">
										<input type="text" name="margin_<?php echo $i;?>" id="margin_<?php echo $i;?>" class="form-control"  placeholder="Default Input">	                  
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
									
									
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
									</div>
									
									
								
								<div role="tabpanel" class="tab-pane fade" id="flight">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<?php 
											include("../config/config.php");
												$sql8=$conn->prepare('select * from operator where service_ids="8"');
												if($sql8->execute())
												{
													$count8= $sql8->rowCount();
													echo $count8;
													$i=0;
	                                     
	                                    while($row=$sql8->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
									
								
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="gas">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<?php 
											include("../config/config.php");
												$sql5=$conn->prepare('select * from operator where service_ids="5"');
												if($sql5->execute())
												{
													$count5= $sql5->rowCount();
													echo $count5;
													$i=0;
	                                     
	                                    while($row=$sql5->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>

	
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="bus">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<	<?php 
											include("../config/config.php");
												$sql5=$conn->prepare('select * from operator where service_ids="5"');
												if($sql5->execute())
												{
													$count5= $sql5->rowCount();
													echo $count5;
													$i=0;
	                                     
	                                    while($row=$sql5->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
		
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
							
								
								
								<div role="tabpanel" class="tab-pane fade" id="broadband">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<?php 
											include("../config/config.php");
												$sql7=$conn->prepare('select * from operator where service_ids="7"');
												if($sql7->execute())
												{
													$count7= $sql7->rowCount();
													echo $count7;
													$i=0;
	                                     
	                                    while($row=$sql7->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="moneytransfer">
								 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                      	<?php 
											include("../config/config.php");
												$sql11=$conn->prepare('select * from operator where service_ids="11"');
												if($sql11->execute())
												{
													$count11= $sql11->rowCount();
													echo $count11;
													$i=0;
	                                     
	                                    while($row=$sql11->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
		
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="movies">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<?php 
											include("../config/config.php");
												$sql10=$conn->prepare('select * from operator where service_ids="10"');
												if($sql10->execute())
												{
													$count10= $sql10->rowCount();
													echo $count10;
													$i=0;
	                                     
	                                    while($row=$sql10->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="hotel">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<?php 
											include("../config/config.php");
												$sql8=$conn->prepare('select * from operator where service_ids="8"');
												if($sql8->execute())
												{
													$count8= $sql8->rowCount();
													echo $count8;
													$i=0;
	                                     
	                                    while($row=$sql8->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
	
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="insurance">
								 <form id="insurance_form" data-parsley-validate class="form-horizontal form-label-left">
										<?php 
											include("../config/config.php");
												$sql13=$conn->prepare('select * from operator where service_ids="13"');
												if($sql13->execute())
												{
													$count13= $sql13->rowCount();
													echo $count1;
													$i=0;
	                                     
	                                    while($row=$sql13->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
							
                                    <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
								
								
								
							
							<div role="tabpanel" class="tab-pane fade" id="landline">
								<form id="landline_form" data-parsley-validate class="form-horizontal form-label-left">
									<?php 
											include("../config/config.php");
												$sql3=$conn->prepare('select * from operator where service_ids="3"');
												if($sql3->execute())
												{
													$count3= $sql3->rowCount();
													echo $count1;
													$i=0;
	                                     
	                                    while($row=$sql13->fetch(PDO::FETCH_OBJ))
	                                    {
										$i++;
                                    ?>
									<div class="form-group">
									
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text"  class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<?php
										}
										}
										
										?>
									
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="postpaidmobile">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tata Docomo CDMA/GSM</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Airtel</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Aircel</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">BSNL</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Idea</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Reliance CDMA/GSM</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Vodafone</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loop</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
										
										
	
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
								
								
								
								 </div>
                        
						<script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>
            


 <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="../js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="../js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="../js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="../js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="../js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="../js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="../js/moment.min2.js"></script>
        <script type="text/javascript" src="../js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="../js/editor/bootstrap-wysiwyg.js"></script>
        <script src="../js/editor/external/jquery.hotkeys.js"></script>
        <script src="../js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="../js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="../js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="../js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="../js/autocomplete/countries.js"></script>
        <script src="../js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="../js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>	
