<html>
<head>
</head>
<body>
<?php
include("header.php");

?>
<?php
		session_start();
		include('conn.php');
	?>
<?php
									error_reporting(1);
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from admin_master where a_id=$id");
									$row=mysqli_fetch_array($q);
									$p=$row['photo'];
?>
<?php
if(isset($_POST['btnsub']))
{
	$name=$row['a_name'];
	$message=$_POST['txtmessage'];
	$photo=$p;
	$q=mysqli_query($con,"insert into conversation values(null,'$name','$message','$photo')");
	if($q)
	{
		echo '<script>alert("Inserted..")</script>';
	}
	else
	{
		echo '<script>alert("Not Inserted..")</script>';
	}
}

?>
<form method="post" enctype="multipart/form-data">
									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
													<i class="ace-icon fa fa-comment blue"></i>
													Conversation
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="dialogs">
													
														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png" />
															</div>
														<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="green"></span>
																</div>

																<div class="name">
																	<a href="#">Alexa</a>
																</div>
																<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														
													</div>

													
														<div class="form-actions">
															<div class="input-group">
																<input placeholder="Type your message here ..." type="text" class="form-control" name="txtmessage" />
																<span class="input-group-btn">
																	<input class="btn btn-sm btn-info no-radius" name="btnsub" type="submit">
																		<i class="ace-icon fa fa-share"></i>
																		Send
																	</input>
																</span>
															</div>
														</div>
													
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div>
									
									
</form>

</body>
<html>
