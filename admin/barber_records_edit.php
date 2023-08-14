<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$bid=$_GET['x'];
$q=mysqli_query($con,"select * from barber_master where b_id=$bid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$mobile_no=$_POST['txtmob'];
	
	$experience=$_POST['txtexp'];
	$aadhar=$_POST['txtaadhar'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];	
	
	$q=mysqli_query($con,"update barber_master set b_name='$name', b_email='$email', b_mobile_no='$mobile_no', b_experience='$experience', b_aadhar_card_no='$aadhar', b_photo='$file_name' where b_id=$bid");
	move_uploaded_file($file_temp,"barber_uploads/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="barber_records.php";</script>';
		//header("location:http://localhost/bca6/admin/admin_records.php");
	}
	else
	{
		echo '<script>alert("Record not updated..")</script>';
	}
			
	
	
}
?>

<form method="post" enctype="multipart/form-data" >
<table id="simple-table" class="table  table-bordered table-hover"  >
		
		<tr>
			<td><b>Id :-</b></td>
			<td>
													<?php
															echo $row['b_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>Barber Name :-</b></td>
			<td>
													<input type="text" name="txtname" value="<?php echo $row['b_name']; ?>" ></input>
													</input>
			</td>
		</tr>
		<tr>
			<td><b>E-Mail :-</b></td>
			<td>
													<input type="text" name="txtemail" value="<?php echo $row['b_email'];?>" ></input>
													
													</td>
		</tr>
		<tr>
			<td><b>Mobile No :-</b></td>
			<td>
													<input type="text" name="txtmob" value="<?php echo $row['b_mobile_no'];?>" ></input>
													
													
													</td>
		</tr>
		
		<tr>
			<td><b>Experience :-</b></td>
			<td>
													<input type="text" name="txtexp" value="<?php echo $row['b_experience'];?>" ></input>
													
													
													</td>
		</tr>
		<tr>
			<td><b>Aadhar Card No :-</b></td>
			<td>
													<input type="text" name="txtaadhar" value="<?php echo $row['b_aadhar_card_no'];?>" ></input>
													
													
													</td>
		</tr>
		<tr>
			<td><b>Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" value="<?php echo $row['b_photo'] ?>" required="" ></input>

													
													</input>
													</td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" align="center" name="btnsubmit" value="Update Data" ></input></td>
		</tr>
		
		
</table>

</form>
</body>

<?php 
include("footer.php");
?>