<html>

<head>
<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
</head>

<body>
<?php
include('header.php');
?>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnsub']))
{
	$about=$_POST['txtabout'];
	$for_what=$_POST['select'];
	$q=mysqli_query($con,"insert into aboutus values(null,'$for_what','$about')");
	if($q)
		echo '<script>alert("Data Inserted...")</script>';
	else
		echo '<script>alert("Data Not Inserted...")</script>';
}

?>
<form method="post" enctype="multipart/form-data">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									About Us
								</small>
							</h1>
						</div>
						<table id="simple-table" class="table  table-bordered table-hover" border="1">
							
							<tr>
								<td><b>For What :-</b></td>
								<td>
								<select name="select">
									<option>Our Mission</option>
									<option>Why Us?</option>
									<option>About Us</option>
								</select>
								</td>
							</tr>
							
							<tr>
								<td><b>About Us :-</b></td>
								<td>
								<textarea name="txtabout" id="txtabout" >
													</textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
								<input type="submit" height="100" name="btnsub" value="Insert"  required="">
													</input>
								</td>
							</tr>
							
							
						</table>
						
</form>
<form method="post" enctype="multipart/form-data">					
						<table id="simple-table" class="table  table-bordered table-hover" border="1">
						<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th>Id</th>	
													<th> For What </th>
													<th>About Us</th>	
														
														
																									
													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Update
													</th>
													

													
												</tr>
											</thead>	

<?php
$a=mysqli_query($con,"select * from aboutus");
while($row=mysqli_fetch_array($a))
{
?>

												<tbody>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													<td>
													<?php
															echo $row['a_id'];
													?>
													</td>
													<td>
													<?php
															echo $row['for_what'];
													?>
													</td>
													<td>
													<?php
															echo $row['aboutus'];
													?>
													</td>
													
																										
													<td>
													<?php echo	"<a href='about_edit.php?x=$row[0]' class='btn btn-xs btn-info'><img src='assets/images/avatars/58727.png'  height='20' width='20'></img> </a>" 	?>
													<?php echo	"<a href='about_delete.php?x=$row[0]' class='btn btn-xs btn-danger'><img src='assets/images/avatars/delete.jpeg'  height='20' width='20'></img> </a>" ?>
														
													</td>
														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">


																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												
											</tbody>
											<?php
}
											?>										
						</table>

</form>

<?php
include('footer.php');
?>
</body>
</html>
<script>
 CKEDITOR.replace( 'txtabout' );
</script>




