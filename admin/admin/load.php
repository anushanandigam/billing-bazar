<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->
	

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/icheck/flat/green.css" rel="stylesheet">
    <link href="../css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	



    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
</head>

<body class="nav-md">

    <div class="container body">


        <div class="main_container">
		<?php include 'menu.php';?>

            <div class="col-md-3 left_col">
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
                            <h3>
                    Invoice
                    <small>
                        Some examples to get you started
                    </small>
                </h3>
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
                                    <h2>Daily active users <small>Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a></li>
										                   </ul>
                                   <div class="clearfix"></div>
                                </div>
								
                 
								
								
								<!--<div class>
                  <div id="DataTables_Table_0_length" class="dataTables_length">show</div>
					<nav class="navbar navbar-inverse">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <ul class="navbar-form navbar-left">
    <span style="color:#fff;">Show</span>
	
      <select class="btn btn-default button(margin-right:6px)" >
      
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
    </ul>
    <form class="navbar-form navbar-right" >
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</div>-->
	           
                  
								<div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th>S.No</th>
                                                <th>Retailer Name </th>
                                                <th>Email Id </th>
                                                <th>Password </th>
                                                <th>Mobile Number</th>
                                                <th>Plan</th>
                                                <th>Amount </th>
                                                <th class=" no-link last"><span class="nobr">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
									<?php
	include '../config/config.php';
	$status=1;
	$sql4=$conn->prepare('select * from add_retailer where add_client_ids=? and status=?');
	 $sql4->bindParam(1,$add_client_id);
	 $sql4->bindParam(2,$status);
	if($sql4->execute())
	{
		$count= $sql4->rowCount();
	while($row=$sql4->fetch(PDO::FETCH_OBJ))
	{
	    $sql5=$conn->prepare('select * from wallet where add_retailer_ids=?');
		$sql5->bindParam(1,$row->add_retailer_id);
		if($sql5->execute())
		{
		while($row2=$sql5->fetch(PDO::FETCH_OBJ))
		{
			$sql6=$conn->prepare('select * from plans where plan_id=?');
		$sql6->bindParam(1,$row->plan_ids);
		if($sql6->execute())
		{
		while($row3=$sql6->fetch(PDO::FETCH_OBJ))
		{
	
	?>
	
	
                                            
											<tr class="even pointer">
                                                <td class="a-center "><?php echo $row->add_retailer_id;?></td>
                                                
                                                <td class=" "><?php echo $row->first_name;?></td>
                                                <td class=" "><?php echo $row->first_name;?> </td>
                                                <td class=" "><?php echo $row->password;?> </td>
                                                <td class=" "><?php echo $row->mbl_num;?></td>
                                                <td class=" "><?php echo $row3->plan_name;?></td>
                                                <td class=" "><?php echo $row2->amount;?></td>
												<td>
												<a class="btn"><i class="fa fa-plus" data-toggle="modal" onclick="myModal('<?php echo $row->add_retailer_id;?>','<?php echo $add_client_id?>')"data-target="#myModal1"></i></a>
												<a class="btn"><i class="fa fa-times" data-toggle="modal" data-target="#myModal3" onclick="myModal3('<?php echo $row->add_retailer_id;?>')"></i></a>
												<a class="btn"><i class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModal2" onclick="myModal2('<?php echo $row->add_retailer_id;?>')"></i></a>

                                               
                                                </td>
                                          
                                                
                                            </tr>
	<?php
	}
	}
	}
	}
	}
	}
	?>
											
																		       </tbody>
                                     </table>

									  <!-- Modal1-->
									  <script>
									  function myModal(x,y){
									  
									  document.getElementById('add_retailer_id').innerHTML=x;
									  document.getElementById('add_retailer_ids').value=x;
									  document.getElementById('add_client_id').innerHTML=y;
									  document.getElementById('add_client_ids').value=y;
									  }
									    function myModal3(z){
									  
									  document.getElementById('block_add_retailer_id').innerHTML=z;
									  
									  document.getElementById('block_add_retailer_ids').value=z;
									  }
									  function myModal2(p){
										  alert(p);
									  
									  // document.getElementById('edit_add_retailer_id').innerHTML=p;
									  
									  // document.getElementById('edit_add_retailer_ids').value=p;
									  // var c=document.getElementById('edit_add_retailer_ids').value;
									  // alert(c);
									  $.post("ajax_edit.php",{id:p},function(result)
									{
	alert(result);
									document.getElementById('display_add_retailer_id').innerHTML=result;
									});
															  
									  }
									  </script>
									  <script>
						$(document).ready(function () 
	{ 
	

	alert("hi");
	$("#form_amount").on('submit',(function(e) 
		{	
		alert("amount form");
			
			e.preventDefault();  
		
			var x= document.getElementById('add_retailer_ids').value;
			alert(x);
			var y=document.getElementById('amount').value;
			alert(y);
			var z=document.getElementById('add_client_ids').value;
			alert(z);
			
			$.post("ajax_wallet.php",{id:x,ids:y,idss:z},function(result)
			 {
	
			   alert(result);
			});
			
		}));

});

</script>


            
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="add_retailer_id">Modal Header</h4>
		  <input type="hidden" id="add_retailer_ids">
		  <input type="hidden" id="add_client_ids">
        </div>
        <div class="modal-body">
        <!-- <p>hello this is first</p>-->
		<form id="form_amount">
		  <div class="form-group">
		  <label>Amount:</label>
		  <input type="text" id="amount" value="" class="form-control">
		  <div style="display:none;"id="add_client_id"></div>
		  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Save</button>
        </div>
      </div>
      
    </div>
  </div>
									  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="edit_add_retailer_id">Modal Header</h4>
		  <input type="hidden" id="edit_add_retailer_id">
        </div>
        <div class="modal-body">
          
		 <div id="display_add_retailer_id"></div>
		  	
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  									 <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="block_add_retailer_id">Modal Header</h4>
		  <input type="hidden" id="block_add_retailer_ids">
        </div>
        <div class="modal-body">
      <form>
	 <div class="form-group"> <input type="checkbox" id="check_1"><span>Terms & Conditions</span></div>
	 <div><input type="button" class="btn btn-danger" value="block" onclick="block()"></div>
	  </form>
	  <script>
	  function block()
	  {
		  alert("block");
		var x=document.getElementById('block_add_retailer_ids').value;  
		alert(x);
		
		$.post("ajax_block.php",{id:x},function(result)
			 {
	
			   alert(result);
			});
		
	  }
	  </script>
	  
	  
        </div>
		
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    </div>

									 </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
                    
                    
                </div>
                <!-- /page content -->
            </div>

        </div>

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

        <script src="../js/custom.js"></script>


        <!-- Datatables -->
        <script src="../js/datatables/js/jquery.dataTables.js"></script>
        <script src="../js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumn<!-- Datatables -->
        <script src="../js/datatables/js/jquery.dataTables.js"></script>
        <script src="../js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).rDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
</body>

</html>
                                