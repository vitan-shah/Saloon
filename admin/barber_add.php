<?php
include("header.php");
?>

<body>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

	if(isset($_POST['btninsert']))
	{
				$name=$_POST['txtname'];				
				$mobile=$_POST['txtmobile'];
				$email=$_POST['txtemail'];
				$experience=$_POST['txtexp'];
				$aadharno=$_POST['txtaadhar'];		
				//$image=$_POST['image'];		
				$file_name=$_FILES['txtimage']['name'];
		$filetmpname=$_FILES['txtimage']['tmp_name'];		
		$q=mysqli_query($con,"insert into barber_master values(null,'$name','$email','$mobile','$experience','$aadharno','$file_name')");
		$ab=move_uploaded_file($filetmpname,"barber_uploads/".$file_name);
		if($q and $ab)
		{
			echo '<script>alert("data inserted...")</script>';
			echo '<script>window.location.href="barber_records.php";</script>';
		}
		else
		{
			echo '<script>alert("data not inserted...")</script>';
		}
	}
?>
<form method="post" enctype="multipart/form-data" >
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		
		
		
		<tr>
			<td><b>Name :-</b></td>
			<td>
			<input type="text" name="txtname" placeholder="Your Name"></input>
			
			</td>
		</tr>
		
		<tr>
			<td><b>E-mail :-</b></td>
			<td>
			<input type="email" name="txtemail" placeholder="E-mail">
													</input>
			</td>
		</tr>
		<tr>
			<td><b>Mobile Number :-</b></td>
			<td>
			<input type="text" name="txtmobile" placeholder="Mobile No">
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>Experience :-</b></td>
			<td>
			<input type="text" name="txtexp" placeholder="Experience">
													</input>
			</td>
		</tr>
		<tr>
			<td><b>Aadhar Card No :-</b></td>
			<td>
			<input type="text" name="txtaadhar" placeholder="Aadhar Card No">
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>Barber Profile :-</b></td>
			<td>
													<input type="file" name="txtimage" required="">
													
													</input>
													</td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td>
													<input type="submit" align="center" name="btninsert" value="Insert New Barber" ></input>
			</td>
		</tr>
		
		
		
											
</table>

</form>
</body>

<?php
include("footer.php");
?>