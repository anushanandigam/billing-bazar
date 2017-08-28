<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
   <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	<style type="text/css">
		form * {
    border-radius:0 !important;
}

form > fieldset > legend {
    font-size:120%;
}
label{
	color: #404142;
}
.row{padding-top:40px;padding-bottom:40px;}
	.form{padding-top:10px;padding-bottom:10px;}
	</style>

<script>
  $(document).ready(function () 
  { 
  $("#customer_details").on('submit',(function(e) 
    { 
        alert("Thank u");
    e.preventDefault();  
    $.post("ajax_cust_details.php",$("#customer_details").serialize(),function(output,status){
      alert(output); 
     
        
      });
    
    }));
  

    
        
      });
  

</script>
</head>
<body>
<div class="top">
	<div class="container">
        <div class="row">

            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 col-md-offset-4 col-lg-offset-4 form" style="background-color: #f2f4f7;">
                <form role="form" method="POST" action="#" id="customer_details">

                    <legend class="text-center">Customer Details</legend>

                    <fieldset>
                        
                        <div class="form-group col-md-12">
                            <label for="first_name">Mobile No</label>
                            <input type="text" class="form-control" name="mob_no" id="mob_no" placeholder="Mobile No">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="last_name">Agent Id</label>
                            <input type="text" class="form-control" name="agent_id" id="agent_id" placeholder="Agent Id">
                        </div>                   

                    </fieldset>


                    <div class="cust_det_btn">
                        <div class="col-md-12">
                        <button type="reset" class="btn btn-danger">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary" id="cust_det">
                                Submit
                            </button>


                        </div>
                    </div>

                </form>
				<div  id="otp_form" class="hidden">
				<form name="customer-otp-form">

						<div class="form-group col-md-12">
                            <label for="last_name">OTP</label>
                            <input type="text" class="form-control" name="otp" id="" placeholder="Enter OTP">
                        </div>

						 <div class="form-group">
                        <div class="col-md-12">
                        <button type="reset" class="btn btn-danger">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary" id="cust_det">
                                Submit
                            </button>


                        </div>
                    </div>

				</form>
				</div>
            </div>

        </div>
    </div>
</div>


		<script type="text/javascript">
		$(document).ready(function() {
			$("#cust_det").click(function(){
			$(".cust_det_btn").hide();
			$("#otp_form").removeClass();
			});

		});
	</script>
</body>
</html>