<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$id=$_GET['x'];
$q=mysqli_query($con,"select * from contactus where c_id=$id");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$address=$_POST['txtadd'];
	$mobile_no=$_POST['txtphone'];
	$pincode=$_POST['txtpincode'];
	$email=$_POST['txtemail'];
	$q=mysqli_query($con,"update contactus set c_name='$name',c_add='$address',c_phone='$mobile_no',c_pincode='$pincode' , c_email='$email' where c_id=$id");
	
	if($q)
	{
		echo '<script>window.location.href="contact.php";</script>';
		//header("location:http://localhost/bca6/admin/admin_records.php");
	}
	else
	{
		echo '<script>alert("Record not updated..")</script>';
		echo '<script>window.location.href="contact.php";</script>';
	}
			
	
	
}
?>

<form method="post" enctype="multipart/form-data" >
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		
		<tr>
			<td><b>Id :-</b></td>
			<td>
													<?php
															echo $row['c_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>Name :-</b></td>
			<td>
			<input type="text" name="txtname" value="<?php
															echo $row['c_name'];
													?>" >
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>Address :-</b></td>
			<td>
													
													<input type="text" name="txtadd" value="<?php
															echo $row['c_add'];
													?>" >
													</input>
													</input>
													</td>
		</tr>
		<tr>
			<td><b>Mobile No :-</b></td>
			<td>
													
													<input type="text" name="txtphone" value="<?php
															echo $row['c_phone'];
													?>" >
													</input>
													</input>
													</td>
		</tr>
		<tr>
			<td><b>Pincode :-</b></td>
			<td>
													
													<input type="text" name="txtpincode" value="<?php
															echo $row['c_pincode'];
													?>" >
													</input>
													</input>
													</td>
		</tr>
		<tr>
			<td><b>E-Mail :-</b></td>
			<td>
													
													<input type="text" name="txtemail" value="<?php
															echo $row['c_email'];
													?>" >
													</input>
													</input>
													</td>
		</tr>
		
		
		
											
</table>
<input type="submit" align="center" name="btnsubmit" value="Update Data" ></input>
</form>
</body>

<?php 
include("footer.php");
?>