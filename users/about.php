<?php

include("header.php");

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
								<h1>About</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">About</li>
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
							<h4>About</h4>
							<h2>Welcome to Style Barber</h2>
							<p class="lead"><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=3");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?></p>
<?php
							}
?>
							<p><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=2");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?></p>
<?php
							}

?> </p>

							<a href="services.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">View Services</a>
						</div><!-- end messagebox -->
					</div><!-- end col -->
					<div class="col-md-6 text-center">
						<div class="right-box">
							<img class="img-fluid" src="uploads/about-img.jpg" alt="" />
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
				
				<hr class="hr1"> 
				
				<div class="row">
					<div class="col-md-12">
						<div class="about-tab">
							<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Our Mission</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Why Us?</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">About Us</a></li>								
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="tab_a">
									<p><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=1");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?></p>
<?php
							}
?></p>
								</div>
								<div class="tab-pane fade" id="tab_b">
									<p><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=2");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?></p>
<?php
							}
?></p>
									<ul>
										<li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
										<li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
										<li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
										<li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
										<li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
										<li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="tab_c">
									<p><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=3");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?></p>
<?php
							}
?></p>
								</div>
							</div><!-- tab content -->
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
				
				

				
			</div><!-- end container -->
		</div><!-- end section -->

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