
<?php

include("header.php");

?>
<body class="barber_version">

<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnsub']))
{
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$email=$_POST['email'];
	$mobile=$_POST['phone'];
	$details=$_POST['details'];
	$q=mysqli_query($con,"insert into user_appointments values(null,'$fname','$lname','$email','$mobile','$details','0')");
	if($q)
	{
		//header('location:appointment.php');
		$app="Your Appointment Has Been Booked...";
		$thank="Thank You";
		$time="Your Appointment Time is 10-2 Am";
		$subject = 'Your Appointment Has been successfully booked.';
		$body="hi $to_email your Appointment is been booked successfully.Thank You for placing an appointment.";
		$headers = 'From:shahtirth1010@gmail.com';
		$to_email =$_POST['email'];
		mail($to_email,$subject,$body,$headers);
	}	
	else
	{
		echo "data not inserted...";
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
								<h1>Appointment</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								
								<li class="active">Appointment</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->

		<div id="appointment" class="section wb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small>LET'S MAKE AN APPOINTMENT FOR YOUR LOOKS</small>
						<h3>Book now</h3>
					</div>
				</div><!-- end title -->

				<div class="row">
					<div class="col-lg-12">
						<div class="contact_form">
							<div id="message"></div>
							<form id="contactform" class="" name="contactform" method="post" >
								<fieldset class="row row-fluid">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtfname" id="first_name" class="form-control" placeholder="First Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtlname" id="last_name" class="form-control" placeholder="Last Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
									</div>									
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea class="form-control" name="details" id="comments" rows="6" placeholder="Give us more details.."></textarea>
									</div>
									<div class="form-btn text-center">
										<button type="submit" name="btnsub" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Get Appointment</button>
									</div>
								</fieldset>
							</form>
							
							<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small><?php echo $app;  ?></small>
						<h3><?php echo $thanks;  ?></h3>
						<h3><?php echo $time;  ?></h3>
					</div>
				</div><!-- end title -->
							
							
							
							
							
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<?php 
		include("testimonial.php");
?>
		
	</div>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
</form>
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