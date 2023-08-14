<!DOCTYPE html>
<html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Log In Page</title>  
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

<?php
session_start();
error_reporting(1);
$con=mysqli_connect("localhost","root","","project");
?>



<?php
session_start();
error_reporting(1);
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnupdate']))
{
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
	$cpass=$_POST['txtcpass'];
	$q=mysqli_query($con,"select * from user_master where email='$email' ");
	if($pass==$cpass)
	{
		$update=mysqli_query($con,"update user_master set password='$pass' where email='$email' ");
		header('location:login.php');
	}
	else
	{
		echo '<script>alert("Mismatch Password...")</script>';
	}
}
?>




<form method="post">
    

	
    <!-- Start header -->
	
	<!-- End header -->

<!-- Page Content -->
	<div id="page-content-wrapper">		
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="title title-1 text-center">
							
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
			
			<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="contact_form">
							<div id="message"></div>
							<form id="contactform" class="" align="center" action="contact.php" name="contactform" method="post">
								<fieldset >
									<div align="center">
										<input type="text" name="txtemail" id="first_name" class="form-control" placeholder="E-Mail" required="" >
									</div>
									<div align="center">
										<input type="password" name="txtpass" id="first_name" class="form-control" placeholder="New Password" required="" >
									</div>
									<div align="center">
										<input type="password" name="txtcpass" id="first_name" class="form-control" placeholder="Confirm New Password" required="">
									</div>
									<div class="form-btn text-center">
										<input type="submit" name="btnupdate" value="Update Password" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
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