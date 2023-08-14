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

	<div class="top-add alert alert-light alert-dismissible">
	<button type="button" class="close" ><li class="nav-item active"><a class="nav-link" href="cart.php"> My Cart</a></li></button>					

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
									<img class="nav-user-photo" height="40" width="40" src="photo/<?php echo $p; ?>"  />
		<a href="profile.php" ><?php if(!$_SESSION['id'])
						{
									echo "Welcome...";
						}
						else
						{
							
							echo  "Welcome             ". $row['u_name'];
						}
	    ?></a></strong>
									
									
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
						<?php  if(!$_SESSION['id'])
						{
							echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log In</a></li>";
						}
						else
						{
							echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Log Out</a></li>";
						}
						?>
					</ul>
					
				</div>				
			</div>
		</nav>
		
	</header>
	<!-- End header -->
</body>
</html>