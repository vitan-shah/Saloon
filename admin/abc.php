<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

<body class="login-layout">
<?php
session_start();
error_reporting(1);
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnregister']))
{
	if(isset($_POST['checkuser']))
	{
		$name=$_POST['txtname'];
		$pass=$_POST['txtpass'];
		$email=$_POST['txtemail'];
		$mobile=$_POST['txtmob'];
		//$photo=$_POST['image'];
			$file_name=$_FILES['image']['name'];
		$filetmpname=$_FILES['image']['tmp_name'];
		$filesize=$_FILES['image']['size'];
		$fileerror=$_FILES['image']['error'];
		$filetype=$_FILES['image']['type'];
		$fileExt=explode('.',$file_name);
		$fileActualExt=strtolower(end($fileExt));
		$allowed=array('jpg','jpeg','png');
		$fileNameNew=uniqid('',true).".".$fileActualExt;
		$q=mysqli_query($con,"insert into admin_master values(null,'$name','$pass','$email','$mobile','$file_name')");
		$ab=move_uploaded_file($filetmpname,"images/".$file_name);
		if($q and $ab)
		{					
			header('location:index.php?uploadsuccess');
		}
		else
		{
		echo '<script>alert("Data not inserted..")</script>';
		}
	}
}
if(isset($_POST['btnlog']))
{
	$email=$_POST['txtemail'];
	$password=$_POST['txtpass'];
	$a=mysqli_query($con,"select * from admin_master where email='$email' and password='$password' ");
	$count=mysqli_num_rows($a);
	$row=mysqli_fetch_array($a);
	$_SESSION['id']=$row[0];
	if($count>0)
		header('location:home.php');
	else
		echo '<script>alert("Incoreect E-Mail Or Password..")</script>';
}
?>
<?php
if(isset($_POST['btnsend']))
{
	$to_email =$_POST['txtforgetemail'];
	$con=mysqli_connect("localhost","root","","project");
	$query=mysqli_query($con,"select * from admin_master where email='$to_email'");
	$row=mysqli_fetch_array($query);
	$email=$row['email'];
	if($email==$to_email)
	{
	
		$subject = 'OTP(One Time Password) Authentication';
		$abc=rand(1000,	9999);
		$body="hi $to_email your OTP is $abc sended by Style Barber Saloon saloon";
		$headers = 'From:shahtirth1010@gmail.com';
		if(mail($to_email,$subject,$body,$headers))
		{
			echo '<script>alert("E-mail successfully send to $to_email...")</script>';
		}
		else
		{
			echo '<script>alert("E-mail sending failed...")</script>';
		}
	}
	else
	{
		echo '<script>alert("E-mail not found...")</script>';
	}
}
?>
<body>
	<form method="post" enctype="multipart/form-data">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="red">Admin</span>
									<span class="white" id="id-text2">Login</span>
								</h1>
								<h4 class="blue" id="id-company-text"><i>Style Barber Saloon</i></h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>


											<form method="post" enctype="multipart/form-data">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="txtemail" class="form-control" placeholder="E-Mail" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="txtpass" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<input type="submit" name="btnlog" value="Log In" class="width-35 pull-right btn btn-sm btn-primary">
															
															<span class="bigger-110"></span>
														</input>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a href="https://www.facebook.com/" class="btn btn-primary">													
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<a href="https://twitter.com/" class="btn btn-info">
													<i class="ace-icon fa fa-twitter"></i>
												</a>

												<a href="https://google.com/" class="btn btn-danger">
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form method="post" enctype="multipart/form-data">
												
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="txtforgetemail" class="form-control" placeholder="Email" required="" ></input>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<input type="submit" name="btnsend" class="width-35 pull-right btn btn-sm btn-danger" value="Send"></input>																											
														
													</div>
												
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->


								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form method="post" enctype="multipart/form-data">											
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="txtname" class="form-control" placeholder="Name" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="txtpass" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="txtemail" class="form-control" placeholder="E-mail" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="txtmob" class="form-control" placeholder="Mobile No" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="file" name="image" class="form-control" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" name="checkuser" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="submit" name="btnregister" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->
							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
	</form>

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
</body>
	</body>
</html>
