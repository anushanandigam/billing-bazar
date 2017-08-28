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


<body class="nav-md">

    <div class="container body">
        <div class="main_container">
		<?php include 'menu.php'; ?>

            <div class="col-md-12 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <br />
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="1"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
									

									
									
										<div role="tabpanel" class="tab-pane fade" id="electricity">
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										  	<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="2"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
   

									<div role="tabpanel" class="tab-pane fade" id="dth">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										  		  	<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="3"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
									
									
								
										<div role="tabpanel" class="tab-pane fade" id="datacard">
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										  <?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="5"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
									
									
								
								<div role="tabpanel" class="tab-pane fade" id="flight">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="10"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
												$sql=$conn->prepare('select * from operator where service_ids="7"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
									<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="6"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
												$sql=$conn->prepare('select * from operator where service_ids="8"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
												$sql=$conn->prepare('select * from operator where service_ids="12"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
												$sql=$conn->prepare('select * from operator where service_ids="11"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
								
								
								
								<div role="tabpanel" class="tab-pane fade" id="hotel">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="9"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
								 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="14"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<?php 
											include("../config/config.php");
												$sql=$conn->prepare('select * from operator where service_ids="4"');
	                                            if($sql->execute())
	                                    {
	                                    while($row=$sql->fetch(PDO::FETCH_OBJ))
	                                    {
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
