<?php

include("header.php");

?>

<?php
$con=mysqli_connect("localhost","root","","project");
session_start();
$id=$_SESSION['id'];								
$q=mysqli_query($con,"select * from user_master where u_id=$id");
$row=mysqli_fetch_array($q);
if(isset($_POST['btnsubmit']))
{
	$u_id=$row['u_id'];
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$email=$_POST['txtemail'];
	$mobile=$_POST['txtmob'];
	$more_details=$_POST['txtdetails'];
	$q=mysqli_query($con,"insert into user_contact values(null,'$u_id','$fname','$lname','$email','$mobile','$more_details')");
	if($q)
	{
		$subject = 'Thank You For Contacting Us...';
		$body="hi $to_email. Thank You For Contacting Us.We Will Soon Response You...";
		$headers = 'From:shahtirth1010@gmail.com';
		$to_email =$_POST['txtemail'];
		mail($to_email,$subject,$body,$headers);
		echo '<script>alert("Thank You For Contacting Us...")</script>';
	}
	else
	{
		$error= "Error for sending a request...";
	}
}
?>


	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="title title-1 text-center">
							<div class="much">
								<img src="uploads/mustache.png" alt=""/>
							</div>
							
							<div class="title--heading">
								<h1>Contact</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">Contact</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->
		<div class="section wb">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-left">
						<div class="message-box">
							<h3></h3>
							<h2>Welcome to Style Barber</h2>
							<p class="lead"><?php 
							$q=mysqli_query($con,"select * from contactus where c_id=1");
							while($row=mysqli_fetch_array($q))
							{

								echo "Company Name :-        " .      $row['c_name'];
								echo "<br>";
								echo "<br>";
								echo "Address      :-        " .      $row['c_add'];
								echo "<br>";
								echo "<br>";
								echo "Mobile No    :-        " .      $row['c_phone'];
								echo "<br>";
								echo "<br>";
								echo "Pincode      :-        " .      $row['c_pincode'];
								echo "<br>";
								echo "<br>";
								echo "E-mail       :-        " .      $row['c_email'];



							?></p>
<?php
							}
?>
							

							
						</div><!-- end messagebox -->
					</div><!-- end col -->
					<div class="col-md-6 text-center">
						<div class="right-box">
							<div id="map"></div>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div>
		</div>
		<div id="contact" class="section wb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small></small>
						<h3>Contact Us</h3>
					</div>
				</div><!-- end title -->

				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="contact_form">
							<div id="message"></div>
							<form method="post" enctype="multipart/form-data">
								<fieldset class="row row-fluid">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtfname" id="first_name" class="form-control" placeholder="First Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtlname" id="last_name" class="form-control" placeholder="Last Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="txtemail" id="email" class="form-control" placeholder="Your Email">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtmob" id="phone" class="form-control" placeholder="Your Phone No">
									</div>									
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea class="form-control" name="txtdetails" id="comments" rows="6" placeholder="Give us more details.."></textarea>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
										<button type="submit" value="SEND" id="submit" name="btnsubmit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit</button>
									</div>
								</fieldset>
							</form>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->
<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<script src="js/map.js"></script>	
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
<?php 
		include("testimonial.php");
?>

 <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>
<?php
include("footer.php");
?>