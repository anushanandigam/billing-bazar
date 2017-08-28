
<!DOCTYPE html>
<html>
<head>
	<title>Add Load</title>
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
	</style>

<script>
  $(document).ready(function () 
  { 
  $("#add_load").on('submit',(function(e) 
    { 
        alert("Thank u");
    e.preventDefault();  
    $.post("ajax_add_topload.php",$("#add_load").serialize(),function(output,status){
      alert(output); 
     
        
      });
    
    }));
  });
  

</script>

	<style>

	.row{padding-top:40px;padding-bottom:40px;}
	.form{padding-top:10px;padding-bottom:10px;}
	</style>
</head>
<body>
<div class="top">
	<div class="container">
        <div class="row">

            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 col-md-offset-4 col-lg-offset-4 form" style="background-color: #f2f4f7;">
                <form role="form" method="POST" action="#" id="add_load">

                    <legend class="text-center">Add Load</legend>

                    <fieldset>
                        
                        <div class="form-group col-md-12">
                            <label for="first_name">Mobile No</label>
                            <input type="text" class="form-control" name="mob_no" id="mob_no" placeholder="Customer Mobile">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="last_name">Agent Id</label>
                            <input type="text" class="form-control" name="agent_id" id="" placeholder="Agent Id">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="username">Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                        </div>

                        <div class="form-group col-md-12 hidden">
                            <input type="text" class="form-control" name="service_charge" id="service_charge" value="4">
                        </div>


                         

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                        <button type="reset" class="btn btn-danger">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>