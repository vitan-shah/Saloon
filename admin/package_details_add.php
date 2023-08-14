<?php

include("header.php")
?>


<body>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btninsert']))
{
	$p_id=$_POST['ddl1'];
	$desc=$_POST['txtdesc'];
	$startdate=$_POST['txtsdate'];
	$enddate=$_POST['txtedate'];
	$price=$_POST['txtprice'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	$q=mysqli_query($con,"insert into package_detail values(null,'$p_id', '$desc','$startdate','$enddate','$price','$file_name')");
	move_uploaded_file($file_temp,"packagedetailsimage/".$file_name);
	if($q)
	{
		echo '<script>alert("Package details inserted..")</script>';
	}
	else
	{
		echo '<script>alert("Package details not inserted..")</script>';
	}
			
	
	
}
?>

<form method="post" enctype="multipart/form-data" >
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		
		
		
		<tr>
			<td><b>P_Id :-</b></td>
			<td>
			<?php
				$con=mysqli_connect("localhost","root","","project");
				$q=mysqli_query($con,"select * from package_master ");									
				
				?>
				<select name="ddl1">
				<?php
		
				while($row=mysqli_fetch_array($q))
				{
				
				echo "<option value=$row[0]>".$row[1]."</option>";
				
				}
				?>
				</select>
			
			</td>
		</tr>
		<tr>
			<td><b>P_Description :-</b></td>
			<td>
			<input type="text" name="txtdesc" placeholder="Description">
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>Offer Start Date :-</b></td>
			<td>
			<input type="date" name="txtsdate" placeholder="">
													</input>
			</td>
		</tr>
		<tr>
			<td><b>Offer End Date :-</b></td>
			<td>
			<input type="date" name="txtedate" placeholder="">
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>P_Price :-</b></td>
			<td>
			<input type="text" name="txtprice" placeholder="Price">
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>P_Photo :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													
													</input>
													</td>
		</tr>
		
		
		
											
</table>
<input type="submit" align="center" name="btninsert" value="Insert Package Details" ></input>      <a href="package_details_view.php" > View All Package Details</a>
</form>
</body>

<?php 
include("footer.php");
?>