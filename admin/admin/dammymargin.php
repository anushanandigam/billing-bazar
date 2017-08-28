
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
		
		 <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../images/img.jpg" alt="">techywing
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
			
			<!--top navigation end>

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
	<?php
	include '../config/config.php';
	
	$sql=$conn->prepare('select * from services');
	if($sql->execute())
	{
	
	while($row=$sql->fetch(PDO::FETCH_OBJ))
	{
$id=$row->service_id;

?>							
                  <li class="active col-md-1 col-lg-1 col-sm-1 col-xs-1" ><a data-toggle="tab" href="#<?php echo $row->service_name;?>" title="<?php echo $row->service_name;?>">&nbsp;
                    <i class="<?php echo $row->class_name;?>" ></i>
                 <?php echo $row->service_name;?><input type="hidden" value="" id="service_id">  </a></li>
               
             
			  
			  
 <?php
}
}
?>

             </ul>
</nav>

                                <div class="clearfix"></div>
                                </div>
								<div class="tab-content">
                                    <br />
							<div role="tabpanel" class="tab-pane fade in active" id="<?php echo $row->service_name;?>">
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									
										
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
		<script>
function fun(x){
alert(x);
}


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
		alert("dthform");
			
			e.preventDefault();  
			var count=document.getElementById('count2').value;
						
			alert(count);
			
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
		alert("landlineform");
			
			e.preventDefault();  
			var count=document.getElementById('count3').value;
						
			alert(count);
			
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
		alert("datacardform");
			
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
	alert("gas");
	$("#gas").on('submit',(function(e) 
		{	
		alert("gasform");
			
			e.preventDefault();  
			var count=document.getElementById('count7').value;
						
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
	alert("flight");
	$("#flight").on('submit',(function(e) 
		{	
		alert("flightform");
			
			e.preventDefault();  
			var count=document.getElementById('count10').value;
						
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
	alert("insurance");
	$("#insurance").on('submit',(function(e) 
		{	
		alert("insuranceform");
			
			e.preventDefault();  
			var count=document.getElementById('count14').value;
						
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
<script>
	$(document).ready(function () 
	{ 
	alert("postpaidmobile");
	$("#postpaidmobile").on('submit',(function(e) 
		{	
		alert("postpaidmobileform");
			
			e.preventDefault();  
			var count=document.getElementById('count15').value;
						
			alert(count);
			
			for(var i=1;i<=count;i++){
				var x=document.getElementById('postpaidmobile_margin_'+i).value;
				
var y=document.getElementById('postpaidmobile_operator_'+i).value;
				
	alert(x);		
alert(y);
				
			$.post("ajax_margin.php",{id:x,ids:y},function(result){
			 
			  alert(result);
			});
			}
			
		}));

});
</script>
</body>

</html>	
