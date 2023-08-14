<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$pid=$_GET['x'];
$q=mysqli_query($con,"select * from package_master where p_id=$pid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	//$filesize=$_FILES['txtimage']['size'];
	//echo "update admin_master set a_name='$name' , password='$pass' , email='$email' , mobile_no='$mobile_no' , photo='$file_name' where a_id=$aid";
	$q=mysqli_query($con,"update package_master set p_name='$name' , p_photo='$file_name' where p_id=$pid");
	move_uploaded_file($file_temp,"packageimage/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="package_view.php";</script>';
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
			<td><b>Package Name :-</b></td>
			<td>
			<input type="text" name="txtname" value="<?php
															echo $row['p_name'];
													?>" >
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>Package Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													<?php echo $row['p_photo']; ?>
													</input>
													</td>
		</tr>
		
		
		
											
</table>
<input type="submit" align="center" name="btnsubmit" value="Update Package" ></input>
</form>
</body>

<?php 
include("footer.php");
?>