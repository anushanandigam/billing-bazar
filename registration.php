<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
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
  $("#customer_reg").on('submit',(function(e) 
    { 
        alert("Thank u");
    e.preventDefault();  
    $.post("ajax_cust_reg.php",$("#customer_reg").serialize(),function(output,status){
      alert(output); 
     
        
      });
    
    }));
  

    
        
      });
  

</script>
	<style>
	
	body{
	background-image: url("images/images143.jpg");
	background-repeat:no-repeat;
	background-size: 100% 100%;
	}
	.row{padding-top:40px;padding-bottom:40px;}
	.form{padding-top:10px;padding-bottom:10px;}
	</style>
</head>
<body>
<div class="top">
	<div class="container">
        <div class="row">

            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 col-md-offset-4 col-lg-offset-4 form" style="background-color: #f2f4f7;">
                <form role="form" method="POST" action="#" id="customer_reg">

                    <legend class="text-center">Customer Registration</legend>

                    <fieldset>
                        
                        <div class="form-group col-md-12">
                            <label for="first_name">Mobile No</label>
                            <input type="text" class="form-control" name="mob_no" id="mob_no" placeholder="Mobile No">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="last_name">Agent Id</label>
                            <input type="text" class="form-control" name="agent_id" id="" placeholder="Agent Id">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="username">User name</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="User name">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="username">User Address</label>
                            <textarea class="form-control" name="user_address" id="user_address">
                                
                            </textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="password">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="state">State</label>
                            <select class="form-control" name="state" id="state">
                                <option>Select state</option>
                                <?php 
                                         include 'config/config.php';
                                         $sql1=$conn->prepare('select * from state');
                                        
                                         if($sql1->execute())
                                            {
                                            while($row1=$sql1->fetch(PDO::FETCH_OBJ))
                                                {
                                        ?>
                                            <option value="<?php echo $row1->state_name;?>">
                                            <?php echo $row1->state_name,$row1->state_code;?>
                                            
                                            </option>
                                            
                                            <?php
                                                }
                                            }
                                 ?> 
                            </select>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="email">Pincode</label>
                            <input type="text" class="form-control" name="Pincode" id="Pincode" placeholder="Pincode">
                        </div>
                         

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="">
                                    I accept the <a href="#">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                        <button type="reset" class="btn btn-danger">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                            <a href="customerDetails.php">Already have an account?</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>