<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$sid=$_GET['x'];
$q=mysqli_query($con,"select * from services where s_id=$sid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$price=$_POST['txtprice'];
	$desc=$_POST['txtdesc'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	$q=mysqli_query($con,"update services set s_name='$name' , s_price='$price' , s_desc='$desc' , s_photo='$file_name' where s_id=$sid");
	move_uploaded_file($file_temp,"serviceimage/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="services_add.php";</script>';
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
			<td><b>S_Id :-</b></td>
			<td>
													<?php
															echo $row['s_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>S_Name :-</b></td>
			<td>
			<input type="text" name="txtname" value="<?php
															echo $row['s_name'];
													?>" >
													</input>
			</td>
		</tr>
		<tr>
			<td><b>S_Price :-</b></td>
			<td>
													<input type="text" name="txtprice" value="<?php
															echo $row['s_price'];
													?>" >
													</input>
													</td>
		</tr>
		<tr>
			<td><b>S_Description :-</b></td>
			<td>
													<input type="text" name="txtdesc" value="<?php
															echo $row['s_desc'];
													?>" >
													</input>
													</td>
		</tr>
		
		<tr>
			<td><b>S_Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													<?php echo $row['s_photo']; ?>
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