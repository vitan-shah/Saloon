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
								<h1>FAQ</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">FAQ</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->
		
		<div id="services" class="section lb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
					<small>WELCOME TO THE OUR BARBER SHOP</small>
					<h3>OUR SERVICES</h3>
					<hr class="grd1">
					<p class="lead"></p>
					</div>
				</div><!-- end title -->
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select * from faq");
while($row=mysqli_fetch_array($q))
{


?>
				<div class="row">
					<div class="col-md-12">
						<div class="service-wrap text-center clearfix">
							
							<h4><?php  echo $row['question'];      ?></h4>
							<p><?php  echo $row['answer'];      ?></p>
						</div><!-- end issue -->
<?php
}
?>
						
					</div><!-- end col -->
					<!-- end issue -->
					</div><!-- end col -->
				</div>
			</div><!-- end container -->
		</div><!-- end section -->

		<div id="testimonials" class="parallax section db parallax-inner-bg">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small>LET'S SEE OUR TESTIMONIALS</small>
						<h3>HAPPY TESTIMONIALS</h3>
					</div>
				</div><!-- end title -->

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="testi-carousel owl-carousel owl-theme">                                
							<div class="testimonial clearfix">
								<div class="testi-meta">
									<i class="fa fa-quote-right"></i>
									<img src="uploads/testi_01.png" alt="" class="img-responsive alignright">
									<h4>James Fernando <small>- Manager of Racer</small></h4>
								</div>
								<div class="desc">
									<h3>Wonderful Support!</h3>
									<p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
								</div>
								<!-- end testi-meta -->
							</div>
							<!-- end testimonial -->
							<div class="testimonial clearfix">
								<div class="testi-meta">
									<i class="fa fa-quote-right"></i>
									<img src="uploads/testi_02.png" alt="" class="img-responsive alignright">
									<h4>Jacques Philips <small>- Designer</small></h4>
								</div>
								<div class="desc">
									<h3>Awesome Services!</h3>
									<p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
								</div>
								<!-- end testi-meta -->
							</div>
							<!-- end testimonial -->
							<div class="testimonial clearfix">
								<div class="testi-meta">
									<i class="fa fa-quote-right"></i>
									<img src="uploads/testi_03.png" alt="" class="img-responsive alignright">
									<h4>Venanda Mercy <small>- Newyork City</small></h4>
								</div>
								<div class="desc">
									<h3>Great & Talented Team!</h3>
									<p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
								</div>
								<!-- end testi-meta -->
							</div>
							<!-- end testimonial -->
							<div class="testimonial clearfix">
								<div class="testi-meta">
									<i class="fa fa-quote-right"></i>
									<img src="uploads/testi_03.png" alt="" class="img-responsive alignright">
									<h4>Venanda Mercy <small>- Newyork City</small></h4>
								</div>
								<div class="desc">
									<h3> Great & Talented Team!</h3>
									<p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
								</div>
								<!-- end testi-meta -->
							</div>
							<!-- end testimonial -->
						</div><!-- end carousel -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		
	</div>
    

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