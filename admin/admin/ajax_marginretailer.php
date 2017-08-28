<?php
include("../config/config.php");

if(isset($_POST['mbl_num']))
{	
echo $plan_id = $_POST['mbl_num'];

		
	
		if($conn)
		{
		 $sql1 =$conn->prepare('select * from client_margin where plan_ids=?');
		 $sql1->bindParam(1,$plan_id);
		 if($sql1->execute())
			 
		{
		while($row1=$sql1->fetch(PDO::FETCH_OBJ))
		{
	     $sql2=$conn->prepare('select * from plans where plan_id=?');
		 $sql2->bindParam(1,$row1->plan_ids);
		 if($sql2->execute())
		 {
		 while($row2=$sql2->fetch(PDO::FETCH_OBJ))
		 {
			 $sql3=$conn->prepare('select * from operator where operator_id=?');
		 $sql3->bindParam(1,$row1->operator_ids);
		 if($sql3->execute())
		 {
		 while($row3=$sql3->fetch(PDO::FETCH_OBJ))
		 {
	
	?>
									<div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th>operator id</th>
                                                <th>operator name </th>
                                                <th>operator margin </th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
											<tr class="even pointer">
                                            <td class=" "><?php echo $row1->operator_ids;?></td>
                                            <td class=" "><?php echo $row1->plan_ids;?> </td>
                                            <td class=" "><?php echo $row1->operator_margin;?> </td>
											</tr>

											
									 </tbody>
                                     </table>

        </div>
	<?php
		}
		}
		 }
		 }
		 }
		 }
		 }
	
		echo "success";
				}
		 else{
		 echo "fail";
		 }				
		 
		 }
		 else{
		 echo "qry fail";
		 }
		 
		
		 ?>