<div id="testimonials" class="parallax section db parallax-inner-bg">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small>LET'S SEE OUR TESTIMONIALS</small>
						<h3>Happy Customer's</h3>
					</div>
				</div><!-- end title -->

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="testi-carousel owl-carousel owl-theme"> 
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select * from blog");
while($row=mysqli_fetch_array($q))
{
?>						
							<div class="testimonial clearfix">
								<div class="testi-meta">									
									<h4>[<?php echo $row['name'];  ?>]<small>- Happy Customer</small></h4>
								</div>
								<div class="desc">
									<h3><?php echo $row['topic'];  ?></h3>
									<p class="lead"><?php echo $row['blog'];  ?>.</p>
								</div>
								<!-- end testi-meta -->
							</div>
<?php
}
?>		
							
							<!-- end testimonial -->
						</div><!-- end carousel -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->
