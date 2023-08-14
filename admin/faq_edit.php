
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
$q=mysqli_query($con,"select * from faq where id=$id");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$question=$_POST['txtques'];
	$answer=$_POST['txtans'];
	$q=mysqli_query($con,"update faq set question='$question' , answer='$answer' where id=$id");
	
	if($q)
	{
		echo '<script>window.location.href="faq.php";</script>';
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
															echo $row['id'];
													?>
													
													</td>
		</tr>
		<tr>
			<td><b>Question :-</b></td>
			<td>
			<input type="text" name="txtques" value="<?php
															echo $row['question'];
													?>" >
													</input>
			</td>
		</tr>
		
		<tr>
			<td><b>Answer :-</b></td>
			<td>
													
													<textarea type="text" name="txtans" id="txtabout" > <?php
															echo $row['answer'];
													?>
													</textarea>
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

<script>
 CKEDITOR.replace( 'txtans' );
</script>