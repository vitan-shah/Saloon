


<head>
<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
</head>
<?php
include("header.php");
?>



<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$id=$_GET['x'];
$q=mysqli_query($con,"select * from aboutus where a_id=$id");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$about=$_POST['txtabout'];	
	$q=mysqli_query($con,"update aboutus set  aboutus='$about' where a_id=$id");
	
	if($q)
	{
		echo '<script>window.location.href="about.php";</script>';
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
			<?php	echo $row['a_id']; ?>
													
													</td>
		</tr>
		<tr>
								<td><b>For What :-</b></td>
								<td>
								<?php echo $row['for_what']; ?>
								</td>
							</tr>
		<tr>
			<td><b>About Us :-</b></td>
			<td>
			<textarea type="text" name="txtabout" id="txtabout" > <?php
															echo $row['aboutus'];
													?>
													</textarea>
			</td>
		</tr>
											
</table>
<input type="submit" align="center" name="btnsubmit" value="Update Data" ></input>
</form>
</body>

<?php 
include("footer.php");
?>

<script>
 CKEDITOR.replace( 'txtabout' );
</script>