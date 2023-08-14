<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$pid=$_GET['x'];
$q=mysqli_query($con,"select * from product where p_id=$pid");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$price=$_POST['txtprice'];
	$desc=$_POST['txtdesc'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	$q=mysqli_query($con,"update product set p_name='$name' , p_price='$price' , p_desc='$desc' , p_image='$file_name' where p_id=$pid");
	move_uploaded_file($file_temp,"productimage/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="product_view.php";</script>';
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
			<td><b>P_Id :-</b></td>
			<td>
													<?php
															echo $row['p_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>P_Name :-</b></td>
			<td>
			<input type="text" name="txtname" value="<?php
															echo $row['p_name'];
													?>" >
													</input>
			</td>
		</tr>
		<tr>
			<td><b>P_Price :-</b></td>
			<td>
													<input type="text" name="txtprice" value="<?php
															echo $row['p_price'];
													?>" >
													</input>
													</td>
		</tr>
		<tr>
			<td><b>P_Description :-</b></td>
			<td>
													<input type="text" name="txtdesc" value="<?php
															echo $row['p_desc'];
													?>" >
													</input>
													</td>
		</tr>
		
		<tr>
			<td><b>P_Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													<?php echo $row['p_image']; ?>
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