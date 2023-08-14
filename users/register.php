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
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnregister']))
{
	$name=$_POST['txtname'];
	$pass=$_POST['txtpass'];
	$encrypt_pass=md5($pass);	
	$email=$_POST['txtemail'];
	$mobile=$_POST['txtmob'];
	$address=$_POST['txtadd'];
	//$photo=$_POST['txtphoto'];
	$file_name=$_FILES['txtphoto']['name'];
		$filetmpname=$_FILES['txtphoto']['tmp_name'];
		$filesize=$_FILES['txtphoto']['size'];
		$to_email=$_POST['txtemail'];
		$subject = 'OTP(One Time Password) Authentication';
		$abc=rand(1000,	9999);
		$body="Hi $to_email your OTP is $abc sended by tp barber saloon";
		$headers = 'From:shahtirth1010@gmail.com';
		$q=mysqli_query($con,"insert into user_master values(null,'$name','$encrypt_pass','$email','$mobile','$address','$file_name','0','$abc')");
		$ab=move_uploaded_file($filetmpname,"photo/".$file_name);
		if($q)
		{
			mail($to_email,$subject,$body,$headers);
			header('location:login.php?uploadsuccess');
		}
		else
		{
			echo '<script>alert("ERROR-404 Not Registered..")</script>';
		}
}
?>
<form method="post" enctype="multipart/form-data">
    

	
    

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
							<form id="contactform" class="" align="center" action="contact.php" name="contactform" method="post" enctype="multipart/form-data">
								<fieldset >
									<div align="center">
										<input type="text" name="txtname" id="first_name" class="form-control" placeholder="Username" required="">
									</div>									
									<div align="center">
										<input type="password" name="txtpass" id="last_name" class="form-control" placeholder="Password" required="">
									</div>	
									<div align="center">
										<input type="text" name="txtemail" id="last_name" class="form-control" placeholder="E-Mail" required="">
									</div>	
									<div align="center">
										<input type="text" name="txtmob" id="last_name" class="form-control" placeholder="Mobile No" required="">
									</div>	
									<div align="center">
										<input type="textarea" name="txtadd" id="last_name" class="form-control" placeholder="Address" required="">
									</div>	
									<div align="center">
										<input type="file" name="txtphoto" id="last_name" class="form-control" placeholder="Photo" required="">
									</div>	
									<div class="form-btn text-center">
										<input type="submit" name="btnregister" value="Register" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
									</div>
									<br>	
									<a href="login.php"> <input  value="Log In" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input> </a>
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