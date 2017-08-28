<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
	<?php
session_start();
include("config/config.php");
if(isset($_POST['form-username']))
{
echo $mbl_num = $_POST['form-username'];
echo $password = $_POST['form-password'];

if($conn)
		{
				
		 $sql1 =$conn->prepare('select * from add_retailer where mbl_num=? AND password=?');
		 $sql1->bindParam(1,$mbl_num);
		 $sql1->bindParam(2,$password);
		 if($sql1->execute())
			 {
				 
				//echo $count= $sql1->rowCount();
				while($row2=$sql1->fetch(PDO::FETCH_OBJ))
	         {
				echo $mbl_num= $row2->mbl_num;
				echo $password= $row2->password;
				echo $add_retailer_ids=$row2->add_retailer_id;
				echo $add_client_ids=$row2->add_client_ids;
				echo $plan_ids=$row2->plan_ids;
	
				
				echo $_SESSION['mbl_num']=$mbl_num;
				echo $_SESSION['password']=$password;
				echo $_SESSION['add_retailer_ids']=$add_retailer_ids;
				echo $_SESSION['add_client_ids']=$add_client_ids;
				echo $_SESSION['plan_ids']=$plan_ids;
				
		       
				
		   		header('location:Dashboard');

			 }}
						else
					{
						echo 'invalid data';
				
					}

		}	
else{
echo "<script>alert('email id or password is incorrect!')</script>";
}	
}
else{
	echo 'no db';
}
?>



 
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">

                    
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-3">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn btn-primary">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	
                        </div>
                      
                        	
                        
                    </div>
                    
                </div>
            </div>
            
        </div>

       

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>