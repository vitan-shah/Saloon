


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
$q=mysqli_query($con,"select * from user_appointments where u_id=$id");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$status=$_POST['txtstatus'];	
	$q=mysqli_query($con,"update user_appointments set  u_status='$status' where u_id=$id");
	
	if($q)
	{
		echo '<script>window.location.href="appointment.php";</script>';
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
			<?php	echo $row['u_id']; ?>
													
													</td>
		</tr>		
		<tr>
			<td><b>Status :-</b></td>
			<td>
			<textarea type="text" name="txtstatus" id="txtabout" > <?php
															echo $row['u_status'];
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