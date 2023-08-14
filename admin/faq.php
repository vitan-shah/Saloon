

<head>
<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
</head>






<body>
<?php
include("header.php");
?>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnins']))
{
	$question=$_POST['txtquestion'];
	$answer=$_POST['txtanswer'];
	$q=mysqli_query($con,"insert into faq values(null,'$question','$answer')");
	if($q)
	{
		echo '<script>alert("Question inserted..")</script>';		
		header('location:faq.php');
	}
	else
	{
		echo '<script>alert("Question not inserted..")</script>';
	}
}

?>
<form method="post" enctype="multipart/form-data">
						<div class="page-header">
							<h1>
								FAQ
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Frequently Asked Questions 
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="tabbable">
									

									<div class="tab-content no-border padding-24">
										<div id="faq-tab-1" class="tab-pane fade in active">
											<h4 class="blue">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Add & View Questions
											</h4>

											<div class="space-8"></div>
<table id="simple-table" class="table  table-bordered table-hover" border="1">
		<tr>
			<td><b>Question :-</b></td>
			<td>
			<input type="text" height="100" name="txtquestion" placeholder="write a question here.." required="">
													</input>
			</td>
		</tr>
		<tr>
			<td><b>Answer :-</b></td>
			<td>
			<textarea type="text" name="txtanswer" id="txtans" > <?php
															echo $row['answer'];
													?>
													</textarea>
			</td>
		</tr>
</table>
<input type="submit" name="btnins" value ="Insert Question">

</form>
<form method="post"  enctype="multipart/form-data">
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
													<th>Questions</th>	
													<th>Answer</th>	
																									
													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Update
													</th>
													

													
												</tr>
											</thead>	

<?php
$a=mysqli_query($con,"select * from faq");
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
															echo $row['id'];
													?>
													</td>
													<td>
													<?php
															echo $row['question'];
													?>
													</td>
													<td>
													<?php
															echo $row['answer'];
													?>
													</td>
													<td>
														<?php echo	"<a href='faq_edit.php?x=$row[0]' class='btn btn-xs btn-info'><img src='assets/images/avatars/58727.png'  height='20' width='20'></img> </a>" 	?>
														<?php echo	"<a href='faq_delete.php?x=$row[0]' class='btn btn-xs btn-danger'><img src='assets/images/avatars/delete.jpeg'  height='20' width='20'></img> </a>" ?>
														
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



											</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					
				</div>
			</div><!-- /.main-content -->

			
<script>
 CKEDITOR.replace( 'txtans' );
</script>
</html>

<?php
include("footer.php");
?>
