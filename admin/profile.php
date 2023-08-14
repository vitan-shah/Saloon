<?php
include('header.php')
?>



<?php
		session_start();
		include('conn.php');
?>
						<div class="page-header">
							<h1>
								<a href="home.php">Dashboard</a>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Profile
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
									<div class="pull-left alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>

										<i class="ace-icon fa fa-pencil bigger-120 blue"></i>
										To update profile click on the update profile...
									</div>									
								</div>

								<div class="hr dotted"></div>

								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img class="nav-user-photo" height="170" width="170" src="images/<?php echo $p; ?>"  />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white"><?php  echo $row['a_name']; ?></span>
														</a>
													</div>
												</div>
											</div>	
										</div>

										<div class="col-xs-12 col-sm-9">
											
											<?php
											error_reporting(1);
											$con=mysqli_connect("localhost","root","","project");
											$id=$_SESSION['id'];								
											$q=mysqli_query($con,"select * from admin_master where a_id=$id");
											$row=mysqli_fetch_array($q);
											$p=$row['photo'];
											?>
										<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Admin Name </div>

													<div class="profile-info-value">
														<span class="editable" ><?php
																							echo $row['a_name'];
																							?>
														</span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name"> Password </div>

													<div class="profile-info-value">
														<span class="editable" ><?php
																							echo $row['password'];																							
																							?>
														</span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name"> E-Mail </div>

													<div class="profile-info-value">
														<span class="editable" ><?php
																							echo $row['email'];
																							?>
														</span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name"> Mobile Number </div>

													<div class="profile-info-value">
														<span class="editable" ><?php
																							echo $row['mobile_no'];
																							?>
														</span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name"> Photo </div>

													<div class="profile-info-value">
														<span class="editable" >
														<img class="nav-user-photo" height="120" width="120" src="images/<?php echo $p; ?>"  />
														<?php
																							echo $row['photo'];
																							?>
														</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Update Profile </div>

													<div class="profile-info-value">
														<span class="editable" >
														<button class="">
																<?php echo "<a href='profile_edit.php?x=$row[0]'> "; ?>
																<i>Update Profile</i>
															</button>
														</span>
													</div>
												</div>
												

												
											</div>

											

											

											
										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php
include("footer.php")
?>
	</body>
</html>
