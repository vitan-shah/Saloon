<?php

include("header.php")
?>


<body>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btninsert']))
{
	$name=$_POST['txtname'];
	$price=$_POST['txtprice'];
	$desc=$_POST['txtdesc'];
	$file_name=$_FILES['txtimage']['name'];
	$file_temp=$_FILES['txtimage']['tmp_name'];
	$q=mysqli_query($con,"insert into product values(null,'$name','$price','$desc','$file_name')");
	move_uploaded_file($file_temp,"productimage/".$file_name);
	if($q)
	{
		move_uploaded_file($file_temp,"productimage/".$file_name);
		echo '<script>alert("Record Inserted..")</script>';
	}
	else
	{
		echo '<script>alert("Record not inserted..")</script>';
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
			<td><b>P_Price :-</b></td>
			<td>
													<input type="text" name="txtprice" placeholder="Price" >
													</input>
													
													</td>
		</tr>
		<tr>
			<td><b>P_Description :-</b></td>
			<td>
													<input type="text" name="txtdesc" placeholder="Description" >
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
<input type="submit" align="center" name="btninsert" value="Insert Data" ></input>      <a href="product_view.php" > View All Product</a>
</form>
</body>

<?php 
include("footer.php");
?>