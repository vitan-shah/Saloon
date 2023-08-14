<html>
<body>
<form method="post" enctype="multipart/form-data">
<?php

include("header.php");

?>
<?php
									session_start();
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from user_master where u_id=$id");
									$row=mysqli_fetch_array($q);
									if(isset($_POST['btnupdate']))
									{
										$name=$_POST['txtname'];
										$pass=$_POST['txtpass'];
										$encrypt_pass=md5($pass);	
										$email=$_POST['txtemail'];
										$mobile=$_POST['txtmob'];
										$address=$_POST['txtadd'];
										$file_name=$_FILES['image']['name'];
										$file_temp=$_FILES['image']['tmp_name'];
										$query=mysqli_query($con,"update user_master set u_name='$name' , password='$encrypt_pass' , email='$email' , mobile_no='$mobile' , address='$address' , photo='$file_name' where u_id='$id'");										
										
										if($query)
										{
											move_uploaded_file($file_temp,"photo/".$file_name);
											echo '<script>window.location.href="profile.php";</script>';
										}
										else
										{
											echo '<script>alert("Record not updated..")</script>';
										}
									}
?>
<?php
									session_start();
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from user_master where u_id=$id");
									$row=mysqli_fetch_array($q);
									$password=$row['password'];
									$decode_password=md5($password);
?>

<form method="post" enctype="multipart/form-data">
			<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Profile Updation</h3>
						<small></small>
						</div>
					</div><!-- end title -->
								<form method="Post" enctype="multipart/form-data">
										<div class="row flex-items-xs-middle flex-items-xs-center">									
											<!-- Table #1  -->									
														<div class="row">
															<div class="col-md-8 offset-md-2">
																<div class="contact_form">																	
																	<form method="post" enctype="multipart/form-data">
																		<fieldset class="row row-fluid">
																			
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																				<b>Name:</b><input type="text" name="txtname"  value="<?php  echo $row['u_name'];?>" class="form-control" ></input>
																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																				<b>Password:</b><input type="text" name="txtpass" class="form-control" required=""></input>
																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																				<b>E-mail:</b><input type="email" name="txtemail" value="<?php  echo $row['email'];?>" class="form-control" ></input>
																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																				<b>Mobile No:</b><input type="text" name="txtmob"  value="<?php  echo $row['mobile_no'];?>" class="form-control" ></input>
																			</div>									
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																				<b>Address:</b><input class="form-control" name="txtadd"  value="<?php echo $row['address'];?>"></input>
																			</div>
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																				<b>Profile Photo:</b><input type="file" class="form-control" name="image" value="<?php echo $row['photo'];?>" required=""></input>
																			</div>
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
																				<input type="submit" value="Update" name="btnupdate" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
																			</div>
																		</fieldset>
																	</form>
																</div>
															</div><!-- end col -->
														</div><!-- end row -->		
										</div>
								</form>							  
										
				</div>
			</div>
					
</form>
			
<?php
include("footer.php");
?>
</form>
</body>
</html>