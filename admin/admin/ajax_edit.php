<?php 
include("../config/config.php");
if(isset($_POST['id']))
{	

		  echo $add_retailer_id=$_POST['id'];
				 $sql6=$conn->prepare('select * from add_retailer where add_retailer_id=?');
		         $sql6->bindParam(1,$add_retailer_id);
				 if($sql6->execute())
		{
				while($row6=$sql6->fetch(PDO::FETCH_OBJ))
				{
					
		  ?>
		  <form id="myModal2" action="edit_retailer.php">
		  
		  <div class="form-group">
		  <label>Select Plan:</label>
		  <select class="select2_single form-control" name="plan_id" id="plan_id" tabindex="-1">
	<?php
	
		
	$sql5=$conn->prepare('select * from plans');
	 
	if($sql5->execute())
	{
		
	while($row2=$sql5->fetch(PDO::FETCH_OBJ))
	{
	?>
                                                    <option value="<?php echo $row2->plan_id;?>"><?php echo $row2->plan_name;?></option>
                                                    <?php

	}
	}
?>													</select>
		  </div>
		  <div class="form-group">
		  <label>First Name:</label>
		  <input type="hidden" id="add_retailer_id" name="add_retailer_id" value="<?php echo $add_retailer_id;?>">
		  <input type="text" id="fname" name="fname" placeholder="<?php echo $row6->first_name;?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Last Name:</label>
		  <input type="text" id="lname" name="lname" placeholder="<?php echo $row6->last_name?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Middle Name/Initial:</label>
		  <input type="text" id="mname" name="mname"placeholder="<?php echo $row6->middle_name?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Password:</label>
		  <input type="text" id="pwd" name="pwd" placeholder="<?php echo $row6->password?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Gender:</label>
		  <input type="text" id="gender" name="gender" placeholder="<?php echo $row6->gender?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Date Of Birth:</label>
		  <input type="text" id="dob" name="dob" placeholder="<?php echo $row6->dob?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Mobile Number:</label>
		  <input type="text" id="mbl_num"  name="mbl_num" placeholder="<?php echo $row6->mbl_num?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Email Id:</label>
		  <input type="text" id="email_id"  name="email_id" placeholder="<?php echo $row6->email_id?>" class="form-control">
		  </div>
		  <div class="form-group">
		  <label>Address:</label>
		  <input type="text" id="address" name="address" placeholder="<?php echo $row6->address?>" class="form-control">
		  </div>
		  	  <div class="form-group">
		  <input type="submit"  value="Update" class="btn btn-primary">
		  </div>
		  </form>
			<?php
		}
		}
}
		?>
		  