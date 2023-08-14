<?php
include("header.php");
?>


						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>
									<?php
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from admin_master where a_id=$id");
									$row=mysqli_fetch_array($q);
									$p=$row['photo'];
									?>
									
									<img class="nav-user-photo" height="60" width="60" src="images/<?php echo $p; ?>"  />
									<strong class="green">
										<?php
									echo "Welcome        ". $row['a_name'];
									?>
									</strong>
									
								</div>

								<div class="row" >
									<div class="space-11" ></div>
									<div class=" alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>

										<a href="barber_add.php"><i class="ace-icon fa fa-pencil bigger-120 blue"></i>
										To Add New Barber Click Here...</a>
									</div>
									<br>
									
									<div class="col-sm-8 infobox-container">
										<div class="infobox infobox-brown">
											<div class="infobox-icon">
												
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<a href="product_order.php"><span class="infobox-data-number">New Orders</span></a>
												<a href="product_order.php">
												<div class="infobox-content"><b> View Product Order's</b></div>
												</a>
											</div>
											<div class="stat stat-success"></div>
										</div>
										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<a href="service_order.php"><span class="infobox-data-number">New Orders</span></a>
												<a href="service_order.php">
												<div class="infobox-content"><b> New Service Order's</b></div>
												</a>
											</div>
											<div class="stat stat-success"></div>
										</div>
										<div class="infobox infobox-orange" >
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data" href="appointment.php">
											
												<a href="appointment.php"><span class="infobox-data-number">New Appointments</span></a>
												<a href="appointment.php">
												<div class="infobox-content">User Appointments</div>
												</a>
											</div>

											
										</div>
										<div class="infobox infobox-black">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-list"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">Services</span>
												<a href="services_view.php">
												<div class="infobox-content">View Services</div>
												</a>
											</div>
										</div>

										<div class="infobox infobox-orange">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">Products</span>
												<a href="product_view.php">
												<div class="infobox-content">View Products</div>
												</a>
											</div>


										</div>

										

										<div class="infobox infobox-black">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-list"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">Package</span>
												<a href="package_details_view.php">
												<div class="infobox-content">View Package Details</div>
												</a>
											</div>
										</div>

										

										

										<div class="space-6"></div>

										
									</div>

									

									
								</div><!-- /.row -->


<br>



							<div class="row" >
									<div class="space-11" ></div>

									<div class="col-sm-8 infobox-container">
										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												
												<i class="ace-icon fa fa-tag"></i>
											</div>

											<div class="infobox-data">
												<a href="contact.php"><span class="infobox-data-number">Company Details</span></a>
												<a href="contact.php">
												<div class="infobox-content"><b>Contact Us</b></div>
												</a>
											</div>
											
										</div>
										<div class="infobox infobox-black">
											<div class="infobox-icon">
												
												<i class="ace-icon fa fa-edit"></i>
											</div>

											<div class="infobox-data">
												<a href="about.php"><span class="infobox-data-number">About Company</span></a>
												<a href="about.php">
												<div class="infobox-content"><b> About Us</b></div>
												</a>
											</div>
											
										</div>
										<div class="infobox infobox-green" >
											<div class="infobox-icon">
												<i class="ace-icon fa fa-list-alt"></i>
											</div>

											<div class="infobox-data" href="appointment.php">
											
												<a href="blog.php"><span class="infobox-data-number">Blogs</span></a>
												<a href="blog.php">
												<div class="infobox-content">View Blogs</div>
												</a>
											</div>

											
										</div>
										<div class="infobox infobox-brown">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-tag"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">Faq</span>
												<a href="faq.php">
												<div class="infobox-content">View & Add FAQ</div>
												</a>
											</div>
										</div>																									

										

										

										<div class="space-6"></div>

										
									</div>

									

									
								</div><!-- /.row -->



								


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php
include("footer.php");
?>