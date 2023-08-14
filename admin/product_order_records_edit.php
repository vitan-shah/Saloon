<?php
include("header.php");
?>
<?php
$con=mysqli_connect("localhost","root","","project");
$oid=$_GET['x'];
$q=mysqli_query($con,"select * from order_master where order_id=$oid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$status=$_POST['txtstatus'];
	$q=mysqli_query($con,"update order_master set status='$status' where order_id='$oid'");
	if($q)
	{
		echo '<script>window.location.href="product_order.php";</script>';
	}
	else
	{
		echo '<script>alert("Not Updated...")</script>';
	}
}
?>
<form method="post" enctype="multipart/form-data" >
<h6 style="color:blue" align="center"> Type 0 For Not Sended Order or 1 For Sended Order in Status</h6>
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		
		<tr>
			<td><b>Id:-</b></td>
			<td>
													<?php
															echo $row['order_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>Status:-</b></td>
			<td>
													<input type="text" name="txtstatus"></input>
													
													</td>
		</tr>
		
											
</table>
<input type="submit" align="center" name="btnsubmit" value="Update Data" ></input>
</form>



<?php
include("footer.php");
?>