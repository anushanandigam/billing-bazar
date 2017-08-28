<?php
	include '../config/config.php';
	 session_start();

	if(isset($_POST['id']))
{
$id=$_POST['id'];
 $ids=$_SESSION['add_client_id'];
echo $plan_id=$_POST['ids'];

?>
	<input type="hidden" name="service_id" id="service_id" value="<?php echo $id;?>">
	<input type="hidden" name="add_client_id" id="add_client_id" value="<?php echo $ids;?>">
<?php
	
	$sql4=$conn->prepare('select * from operator where service_ids=?');
	$sql4->bindParam(1,$id);
	if($sql4->execute())
	{
		$count= $sql4->rowCount();
	while($row=$sql4->fetch(PDO::FETCH_OBJ))
	{
	?>
	
<?php
	
	 $operator_id=$row->operator_id;
	 $sql5=$conn->prepare('select * from client_margin where operator_ids=? and plan_ids=?');
	 $sql5->bindParam(1,$operator_id);
	 $sql5->bindParam(2,$plan_id);
	 if($sql5->execute())
	{
	$operator_count= $sql4->rowCount();
	while($row5=$sql5->fetch(PDO::FETCH_OBJ))
	{
?>
<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $row->operator_name;?></label>
			<div class="col-md-3 col-sm-3 col-xs-12">
			<input type="hidden" name="operator_<?php echo $operator_id;?>" id="operator_<?php echo $operator_id;?>" value="<?php echo $operator_id;?>">
			<input type="text" name="margin_<?php echo $row->operator_id;?>" id="margin_<?php echo $row->operator_id;?>" class="form-control" onkeyup="myfun()" placeholder="<?php echo $row5->operator_margin;?>">				   
		</div>
		</div>
<?php
}

}
}}
}
?>

                                    <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary" id="click_cancel">Cancel</button>
                                                <button type="submit" class="btn btn-success" id="click_submit">Update</button>
												
                                            </div>
                                            </div>