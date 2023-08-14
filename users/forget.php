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
		$body="Hi $to_email your OTP is $abc sended by tp barber saloon";
		$headers = 'From:shahtirth1010@gmail.com';
		if(mail($to_email,$subject,$body,$headers))
		{
			$send=mysqli_query($con,"insert into userforget values(null,'$to_email','$abc','0')");
			if($send)
			{
					header('location:forget.php');
				
			}
			else
			{
				echo '<script>alert("Error...")</script>';
			}
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

<?php
	$con=mysqli_connect("localhost","root","","project");
	if(isset($_POST['btnsendotp']))
	{
		$otp=$_POST['txtotp'];
		$aaa=mysqli_query($con,"select * from userforget where status=0 and random=$otp ");
		if($aaa)
		{
			//header('location:newpassword.php');
			header('location:newpassword.php');
			$aba=mysqli_query($con,"update userforget set status=1 where random=$otp ");
			
		}
		else
		{
			echo "wrong otp";
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
							<form  name="contactform" enctype="multipart/form-data" method="post">
								<fieldset >
									<div align="center">
										<input type="text" name="txtforgetemail" id="first_name" class="form-control" placeholder="E-Mail" >
									</div>	
									<div class="form-btn text-center">
										<input type="submit" name="btnsend" value="Send E-Mail" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
									</div>
									<br>
									<br>
									<br>
									<div align="center">
										<input type="text" name="txtotp" id="last_name" class="form-control" placeholder="Enter Otp" >
									</div>																	
									<div class="form-btn text-center">
										<input type="submit" name="btnsendotp" value="Verify" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
									</div>
									<br>
									
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