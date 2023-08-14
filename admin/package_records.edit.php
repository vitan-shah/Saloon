<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$aid=$_GET['x'];
$q=mysqli_query($con,"select * from admin_master where a_id=$aid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$pass=$_POST['txtpass'];
	$email=$_POST['txtemail'];
	$mobile_no=$_POST['txtmob'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	//$filesize=$_FILES['txtimage']['size'];
	//echo "update admin_master set a_name='$name' , password='$pass' , email='$email' , mobile_no='$mobile_no' , photo='$file_name' where a_id=$aid";
	$q=mysqli_query($con,"update admin_master set a_name='$name' , password='$pass' , email='$email' , mobile_no='$mobile_no' , photo='$file_name' where a_id=$aid");
	move_uploaded_file($file_temp,"images/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="admin_records.php";</script>';
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
															echo $row['a_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>Admin Name :-</b></td>
			<td>
			<input type="text" name="txtname" value="<?php
															echo $row['a_name'];
													?>" >
													</input>
			</td>
		</tr>
		<tr>
			<td><b>Password :-</b></td>
			<td>
													<input type="text" name="txtpass" value="<?php
															echo $row['password'];
													?>" >
													</input>
													</td>
		</tr>
		<tr>
			<td><b>E-Mail :-</b></td>
			<td>
													<input type="text" name="txtemail" value="<?php
															echo $row['email'];
													?>" >
													</input>
													</td>
		</tr>
		<tr>
			<td><b>Mobile No :-</b></td>
			<td>
													<input type="text" name="txtmob" value="<?php
															echo $row['mobile_no'];
													?>" >
													</input>
													</td>
		</tr>
		<tr>
			<td><b>Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													
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