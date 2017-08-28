<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela!!! | </title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="fonts/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />

    <!-- Custom styling plus plugins -->
   <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet"href="css/icheck/flat/green.css" rel="stylesheet" />


    <script src="js/jquery.min.js"></script> 
	
	

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
<?php

include("config/connections.php");
if(isset($_POST['mbl_num']))
{
$name=$_POST['mbl_num'];
$password=$_POST['password'];
$check_user=mysql_query("select * from add_client WHERE mbl_num='$name' AND password='$password'")or die(mysql_error());
if(mysql_num_rows($check_user))
    {
	echo '<script> alert("hiiiiiiii");</script>';
		while($row=mysql_fetch_array($check_user))
		{
		  $name=$row['mbl_num'];
	$id=$row['add_client_id'];
		
				
			header('location:admin/index.php');
		   echo $_SESSION['add_client_id']=$id; 
        }

	}		
else{
echo "<script>alert('mobile number or password is incorrect!')</script>";
}	
}

?>
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="POST">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" name="mbl_num" class="form-control" placeholder="Mobile Number" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <input type="submit" value="login" class="btn btn-default submit ">
                                        <a href="Project/index2.php"> <input type="button" value="Click Here For Retailer Page" class="btn btn-default submit "></a>	

                        </div>
                        
                        
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>

        </div>
	</div>
</body>

</html>