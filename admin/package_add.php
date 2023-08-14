<?php

include("header.php")
?>


<body>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btninsert']))
{
	$name=$_POST['txtname'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	$q=mysqli_query($con,"insert into package_master values(null,'$name','$file_name')");
	move_uploaded_file($file_temp,"packageimage/".$file_name);
	if($q)
	{
		echo '<script>alert("Package Inserted..")</script>';
	}
	else
	{
		echo '<script>alert("Package not inserted..")</script>';
	}
			
	
	
}
?>

<form method="post" enctype="multipart/form-data" >
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		
		<tr>
			<td><b>P_Id :-</b></td>
			<td>
													
													
													</td>
		</tr>
		<tr>
			<td><b>P_Name :-</b></td>
			<td>
			<input type="text" name="txtname" placeholder="Name">
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
<input type="submit" align="center" name="btninsert" value="Insert Data" ></input>      <a href="package_view.php" > View All Package</a>
</form>
</body>

<?php 
include("footer.php");
?>