<html>
</html>
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
		<button type="button" class="close" ></button>
		<strong>
		<?php  
									error_reporting(1);
									session_start();
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from user_master where u_id=$id");
									$row=mysqli_fetch_array($q);
									$p=$row['photo'];
		
		
		
		
		
		?><img class="nav-user-photo" height="40" width="40" src="photo/<?php echo $p; ?>"  />
		<?php
									echo  "Welcome             ". $row['u_name'];
									?></strong>
									
									
	</div>
	
    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="home.php">
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
						<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
					</ul>
					
				</div>				
			</div>
		</nav>
		
	</header>
	<!-- End header -->

<?php									
									session_start();
									$con=mysqli_connect("localhost","root","","project");
									$uid=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from user_master where u_id='$uid'");
									$row=mysqli_fetch_array($q);
									$u_id=$row['u_id'];
									$u_email=$row['email'];
if(isset($_POST['btnorder']))
{
	$u_name=$_POST['txtname'];
	$mobile_no=$_POST['txtmob'];
	$pincode=$_POST['txtpin'];
	$city=$_POST['txtcity'];
	$address=$_POST['txtaddress'];
	$query=mysqli_query($con,"select * from cart where user_id='$uid'");
	while($rows=mysqli_fetch_array($query))
	{
	$p_s_id=$rows['service_or_product_id'];
	$p_s_name=$rows['service_or_product_name'];
	$p_s_price=$rows['service_or_product_price'];
	$quantity=$rows['quantity'];
	$total=$rows['total'];
	$payment=$_POST['radio'];
	$insert=mysqli_connect($con,"insert into order_master values(null,'$u_id','$u_name','$mobile_no','$pincode','$city','$address','$u_email','$p_s_id','$p_s_name','$p_s_price','$quantity','$total','$payment')");
	}
	
	if($insert)
	{
		header('location:thank.php');
	}
	else
	{
		echo '<script>alert("Error For Placing An Order")</script>';
	}
}
?>
<form method="post" enctype="multipart/form-data">
<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Order Summary </h3>
						<small></small>
						</div>
					</div><!-- end title -->
					<div class="row flex-items-xs-middle flex-items-xs-center">
					<div class="col-xs-1 col-lg-12">
						  <div class="card text-center">
							<div class="card-block">
							<form method="post" enctype="multipart/form-data">
							<table id="simple-table" class="table  table-bordered table-hover" border="1">
																
							</form>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
								
								<tr>
								<td>
								<h3 align="center" style="color:red">Your Products</h3>
								</td>
								</tr>
								</table	>
								
								<table id="simple-table" class="table  table-bordered table-hover" >
									<thead>
												<tr>
													<th>Cart Id</th>
													<th>Product Or Service Name</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Total</th>																					
													<th>
														<i ></i>
														Remove
													</th>
													

													
												</tr>
									</thead>								
										
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
while($rows=mysqli_fetch_array($q))
{
?>
									<tbody>
												<tr>
													<td class="hide">
													<?php
															echo $rows['cart_id'];
													?>
													</td>
												
													
													<td>
													<?php
															echo $rows['service_or_product_name'];
													?>
													</td>
													<td>
													<?php
															echo $rows['service_or_product_price'];
													?>
													</td>
													<td>
													<?php
															echo $rows['quantity'];
													?>
													</td>
													<td>
													<?php
															echo $rows['total'];
													?>
													</td>
																																						
													
													
													<td>
														<div >
															<?php echo	"<a href='cart_edit.php?x=$rows[0]' class='btn btn-xs btn'><img src='images/edit.png'  height='20' width='20'></img> </a>" ?>
															<?php echo	"<a href='cart_delete.php?x=$rows[0]' class='btn btn-xs btn-danger'><img src='images/delete.jpeg'  height='20' width='20'></img> </a>" ?>
															
														</div>

														
													</td>
												</tr>


<?php									
}
?>
								
								</tbody>
								

							
							</table>
							<table id="simple-table" class="table  table-bordered table-hover" border="1" >
							<tr>
							<br>
								<td>
								<h3 align="center" style="color:red">Your Address</h3>
								</td>
								</tr>
							</table>
							<br>
							<br>
							<table id="simple-table" class="table  table-bordered table-hover" border="1">
								<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="contact_form">
							<div id="message"></div>
							<form id="contactform" class="row" method="post" enctype="multipart/form-data">
								<fieldset class="row row-fluid">
								
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtname"  class="form-control" placeholder="Full Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtmob"  class="form-control" placeholder="Mobile No">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtpin"  class="form-control" placeholder="Pincode">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtcity"  class="form-control" placeholder="City">
									</div>									
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea class="form-control" name="txtaddress"  rows="6" placeholder=" Your Full Address"></textarea>
									</div>
									<br>
									<b class="col-lg-12 col-md-12 col-sm-12 col-xs-12">(Net Banking Not Available)</b>
									<br>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<input type="radio" name="radio" value="cash on delivery" required="" > <b>Cash On Delivery</b></input>
									</div>
									<br>
									<br>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
										<button type="submit" name="btnorder" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Place Order</button>
									</div>
									
								</fieldset>
							</form>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
								
								
							</table>													
						
						
						</form>
					</div>
					
			</div>
		</div>
		
</form>	
</body>
</html>
<?php
include("footer.php");
?>