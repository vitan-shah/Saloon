<?php

include("header.php");

?>


<body>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnsub']))
{
	$c_name=$_POST['txtcname'];
	$c_add=$_POST['txtadd'];
	$c_phone=$_POST['txtmob'];
	$c_pincode=$_POST['txtpincode'];
	$c_email=$_POST['txtemail'];
	$q=mysqli_query($con,"insert into contactus values(null,'$c_name','$c_add','$c_phone','$c_pincode','$c_email')");
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
									Contact Us
								</small>
							</h1>
						</div>
						<table id="simple-table" class="table  table-bordered table-hover" border="1">
							<tr>
								<td><b>Company's Name :-</b></td>
								<td>
								<input type="text" height="100" name="txtcname"  required="">
													</input>
								</td>
							</tr>
							<tr>
								<td><b>Address :-</b></td>
								<td>
								<input type="text" width="50" name="txtadd" height="100"  required="">
													</input>
								</td>
							</tr>
							<tr>
								<td><b>Phone No :-</b></td>
								<td>
								<input type="text" width="50" name="txtmob" height="100"  required="">
													</input>
								</td>
							</tr>
							<tr>
								<td><b>Pincode :-</b></td>
								<td>
								<input type="text" width="50" name="txtpincode" height="100"  required="">
													</input>
								</td>
							</tr>
							<tr>
								<td><b>Email :-</b></td>
								<td>
								<input type="email" width="50" name="txtemail" height="100"  required="">
													</input>
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td>
									<input type="submit" name="btnsub" value="Submit" ></input>
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
													<th>Company Name</th>	
													<th>Address</th>	
													<th>Phone No</th>	
													<th>Pincode</th>	
													<th>E-mail</th>	
														
																									
													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Update
													</th>
													

													
												</tr>
											</thead>	

<?php
$a=mysqli_query($con,"select * from contactus");
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
															echo $row['c_id'];
													?>
													</td>
													<td>
													<?php
															echo $row['c_name'];
													?>
													</td>
													<td>
													<?php
															echo $row['c_add'];
													?>
													</td>
													<td>
													<?php
															echo $row['c_phone'];
													?>
													</td>
													<td>
													<?php
															echo $row['c_pincode'];
													?>
													</td>
													<td>
													<?php
															echo $row['c_email'];
													?>
													</td>
																										
													<td>
														<?php echo	"<a href='contact_edit.php?x=$row[0]' class='btn btn-xs btn-info'><img src='assets/images/avatars/58727.png'  height='20' width='20'></img> </a>" 	?>
														<?php echo	"<a href='contact_delete.php?x=$row[0]' class='btn btn-xs btn-danger'><img src='assets/images/avatars/delete.jpeg'  height='20' width='20'></img> </a>" ?>
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

</body>

<?php

include("footer.php")

?>