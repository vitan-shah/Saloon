<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>StyleBarber</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">
<form method="post">
    <!-- LOADER -->
    
    <!-- END LOADER -->

	<div>
	
		<strong>
		<?php  
									error_reporting(1);
									session_start();
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from user_master where u_id=$id");
									$row=mysqli_fetch_array($q);
									$p=$row['photo'];
		
		
		
		
		
		?>
		</strong>
									
									
	</div>
	
    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation" >
					
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="services.php">Our Services</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="offers.php">Our Packages</a></li>
						<li class="nav-item"><a class="nav-link" href="appointment.php">Appointment</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="product.php">Our Products</a></li>	
						
					</ul>
					
				</div>				
			</div>
		</nav>
		
	</header>
	<!-- End header -->
</head>
<body class="barber_version">
<?php
$con=mysqli_connect("localhost","root","","project");
session_start();
error_reporting(1);
if(isset($_POST['btnlog']))
{
	$email=$_POST['txtemail'];
	$password=$_POST['txtpass'];
	$decode_pass=md5($password);
	$a=mysqli_query($con,"select * from user_master where email='$email' and password='$decode_pass' ");
	$count=mysqli_num_rows($a);
	$row=mysqli_fetch_array($a);
	$_SESSION['id']=$row[0];
	if($count>0)
	{
		header('location:index.php');
	}	
	else
	{
		echo '<script>alert("Incoreect E-Mail Or Password..")</script>';
	}
}
?>
<form method="post" enctype="multipart/form-data">
    

<!-- Page Content -->
	<div id="page-content-wrapper">		
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
				
					<div >
						<div class="title title-1 text-center">
							
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
			
			<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="contact_form">
							<div id="message"></div>
							<form id="contactform" class="" align="center" action="contact.php" name="contactform" method="post" enctype="multipart/form-data">
								<fieldset >
									<div align="center">
										<input type="text" name="txtemail" id="first_name" class="form-control" placeholder="E-Mail" required="">
									</div>									
									<div align="center">
										<input type="password" name="txtpass" id="last_name" class="form-control" placeholder="Password" required="">
									</div>	
										
									<div class="form-btn text-center">
										<input type="submit" name="btnlog" value="Log In" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
									</div>
									<br>									
									<br>
									<div>
										<h3 align="center"> <a href="register.php">New User ? Sign Up Now<a> </h3>
									</div>
									<br>
									<div>
										<h3 align="center"> <a href="forget.php">Forget Password?<a> </h3>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div>
	</div>
	</form>
	</body>
	</html>