<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$uid=$_GET['x'];
$q=mysqli_query($con,"select * from user_master where u_id=$uid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	
	$status=$_POST['txtstatus'];
	
	$q=mysqli_query($con,"update user_master set status='$status' where u_id=$uid");
	move_uploaded_file($file_temp,"../users/photo/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="user_records.php";</script>';
		//header("location:http://localhost/bca6/admin/admin_records.php");
	}
	else
	{
		echo '<script>alert("Record not updated..")</script>';
	}
			
	
	
}
?>

<form method="post" enctype="multipart/form-data" >
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		
	<tr>
			<td><b>Id :-</b></td>
			<td>
													<?php
															echo $row['u_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>User Name :-</b></td>
			<td>
			<?php
															echo $row['u_name'];
													?>
			</td>
		</tr>
		<tr>
			<td><b>Password :-</b></td>
			<td>
													<?php
															echo $row['password'];
													?>
													</td>
		</tr>
		<tr>
			<td><b>E-Mail :-</b></td>
			<td>
													<?php
															echo $row['email'];
													?>
													</td>
		</tr>
		<tr>
			<td><b>Mobile No :-</b></td>
			<td>
													<?php
															echo $row['mobile_no'];
													?>
													</td>
		</tr>
		<tr>
			<td><b>Address :-</b></td>
			<td>
													<?php
															echo $row['address'];
													?>
													</td>
		</tr>
		<tr>
			<td><b>Photo :-</b></td>
			<td>
													<?php echo $row['photo']; ?>
													</input>
													</td>
		</tr>
		<tr>
			<td><b>Status :-</b></td>
			<td>
													<input type="text" name="txtstatus" value="<?php
															echo $row['status'];
													?>" >
													</input>
													</td>
		</tr>
		
		
											
</table>
<input type="submit" align="center" name="btnsubmit" value="Update Status" ></input>
</form>
</body>

<?php 
include("footer.php");
?>