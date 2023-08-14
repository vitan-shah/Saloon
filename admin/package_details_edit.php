<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$pd_id=$_GET['x'];
$q=mysqli_query($con,"select * from package_detail where pd_id=$pd_id");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$p_id=$_POST['txtid'];
	$p_desc=$_POST['txtdesc'];
	$start_date=$_POST['txtsdate'];
	$end_date=$_POST['txtedate'];
	$price=$_POST['txtprice'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	$q=mysqli_query($con,"update package_detail set p_id='$p_id', p_desc='$p_desc' , p_offer_start_date='$start_date' , p_offer_end_date='$end_date' , p_price='$price' , p_photo='$file_name' where pd_id=$pd_id");
	move_uploaded_file($file_temp,"packagedetailsimage/".$file_name);
	if($q)
	{
		echo '<script>window.location.href="package_details_view.php";</script>';
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
			<td><b>Pd_Id :-</b></td>
			<td>
													<?php
															echo $row['pd_id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>P_Id :-</b></td>
			<td>
			<input type="text" name="txtid" value="<?php
															echo $row['p_id'];
													?>"
													
													</td>
		</tr>
		<tr>
			<td><b>Product Description :-</b></td>
			<td>
			<input type="text" name="txtdesc" value="<?php
															echo $row['p_desc'];
													?>" >
													</input>
			</td>
		</tr>
		<tr>
			<td><b>Offer Start Date :-</b></td>
			<td>
													<input type="text" name="txtsdate" value="<?php
															echo $row['p_offer_start_date'];
													?>" >
													</input>
													</td>
		</tr>
		<tr>
			<td><b>Offer Start Date :-</b></td>
			<td>
													<input type="text" name="txtedate" value="<?php
															echo $row['p_offer_end_date'];
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
			<td><b>Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													
													</input>
													</td>
		</tr>
		
		<tr>
		<td>
		</td>
		<td>
			<input type="submit" align="center" name="btnsubmit" value="Update Data" ></input>
		</td>
		</tr>
		
		
		
											
</table>

</form>
</body>

<?php 
include("footer.php");
?>