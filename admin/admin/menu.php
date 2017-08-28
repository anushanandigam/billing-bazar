<?php
 session_start();
 include '../config/connections.php';
 $add_client_id=$_SESSION['add_client_id'];
  $check_user1=mysql_query("select * from add_client WHERE add_client_id='$add_client_id'")or die(mysql_error());
    if(mysql_num_rows($check_user1))
    {
     while($row1=mysql_fetch_array($check_user1))
{
    $Rid=$row1['first_name'];
	 }
	}
?>
 <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Building Bazar</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                           
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-home"></i> Home </a> </li>
							 <ul class="nav side-menu">
                                <li><a href="margin.php"><i class="fa fa-edit"></i> Assign Margin </a></li></ul>
							 <ul class="nav side-menu">
                                <li><a href="retailer.php"><i class="fa fa-user"></i> Add Retailer </a></li></ul>
							<ul class="nav side-menu">
                                <li><a href="load.php"><i class="fa fa-plus"></i> Add Load </a></li></ul></ul>
							<ul class="nav side-menu">
                                <li><a href="assignmargin.php"><i class="fa fa-edit"></i> Edit Margin </a></li></ul></ul>
							<ul class="nav side-menu">
                                <li><a href="retailermargin.php"><i class="fa fa-edit"></i> Retailer Margin List </a></li></ul></ul>
								
							<!--<ul class="nav side-menu">
                                <li><a href="addoperator.php"><i class="fa fa-plus"></i> Add Operators</a></li></ul></ul>
							<ul class="nav side-menu">
                                <li><a href="addservices.php"><i class="fa fa-plus"></i> Add Services</a></li></ul></ul>-->
                        </div>
                        

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>