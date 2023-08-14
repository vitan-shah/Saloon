
<body class="barber_version">
<?php

include("header.php");

?>
    
	<div id="home" class="parallax">
		<div id="full-width" class="owl-carousel owl-theme home-hero">
			<div class="text-center item slider-01 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>The Style Barber Shop</strong><br></h2>
						<h2 style="color:pink">Now Get A Home Service</h2>
						
						<p class="lead"></p>
</p>
						<a href="services.php" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Our Services</a>
					</div>
				</div>
			</div>
			<div class="text-center item slider-02 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>The Style Barber Shop</strong><br></h2>
						<h2 style="color:pink">Now Get A Home Service</h2>
						<p class="lead"></p>
						<a href="services.php" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Our Services</a>
					</div>
				</div>
			</div>
			<div class="text-center item slider-03 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>The Style Barber Shop</strong><br></h2>
						<h2 style="color:pink">Now Get A Home Service</h2>
						<p class="lead"></p>
						<a href="services.php" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Our Services</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end section -->
		
	<!-- Page Content -->
	<div id="page-content-wrapper">			
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
							<p class="lead"><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=2");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?></p>
<?php
							}

?></p>

							<a href="services.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
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
									
								</div>
								<div class="tab-pane fade" id="tab_c">
									<p><?php 
							$q=mysqli_query($con,"select * from aboutus where a_id=3");
							while($row=mysqli_fetch_array($q))
							{
							
							echo $row['aboutus'];
							
							?><a href="about.php" style="color:red"><u>View More</u></a></p>
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

		<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Services</h3>
						<small>Now Get A Home Service</small>
						</div>
					</div><!-- end title -->
					<div class="row flex-items-xs-middle flex-items-xs-center">
<?php
$qry=mysqli_query($con,"select * from services where s_id=1 or s_id=2 or s_id=3");
while($row=mysqli_fetch_array($qry))
{
?>
						<!-- Table #1  -->
						<div class="col-xs-12 col-lg-4">
						  <div class="card text-center">
							<div class="card-block">
							  <h4 class="card-title pricing-ti"> 
								<?php  echo $row['s_name'];      ?>
							  </h4>
							  <div class="line-pricing">
								<h5>Service</h5>
								<p><?php  echo $row['s_desc'];   ?></p>
								<a href="#">RS :-<?php  echo $row['s_price'];   ?></a>
							  </div>							  
							</div>
						  </div>
						</div>
<?php
}
?>
						
<a href="services.php" align="right" style="color:red">View More Services --></a>
					</div>
			</div>
		</div>
		
		
		<div id="barbers" class="section lb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
					<small>MEET OUR BABRER TEAM</small>
					<h3>OUR BARBERS</h3>
					</div>
				</div><!-- end title -->

				<div class="row dev-list text-center">
				<?php
				$con=mysqli_connect("localhost","root","","project");
				$q=mysqli_query($con,"select * from barber_master");
				while($row=mysqli_fetch_array($q))
				{
				?>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="widget our-inner-taem clearfix">
							<div class="t-top"></div>
							<div class="hover-br">
								<img src="../admin/barber_uploads/<?php echo $row['b_photo'];  ?>" height="300" width="60" alt="" class="img-responsive">
								<div class="social-up-hover">
									<div class="footer-social">
										
									</div>
								</div>
							</div>
							<div class="team-box">
								<div class="widget-title">
									<h3><?php echo $row['b_name'];  ?></h3>
									<small>The Style Barber Saloon Barber</small>
								</div>
								<!-- end title -->
								<p>Hello guys, I am <?php echo $row['b_name'];  ?>.I have <?php echo $row['b_experience'];  ?> years of experience ina barber field.</p>
							</div>
							<div class="t-bottom"></div>
						</div><!--widget -->
					</div><!-- end col -->
				<?php
				}
				?>

					
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<?php
		include("testimonial.php");
		
		?>
		
	</div>
    
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>
<?php
include("footer.php");
?>