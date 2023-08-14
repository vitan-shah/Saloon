<?php

include("header.php");

?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnservice']))
{
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];	
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$user_id= $row['u_id'];
	$s_id=$_POST['id'];
	$qry=mysqli_query($con,"select * from services where s_id='$s_id' ");
	$rows=mysqli_fetch_array($qry);
	if($qry)
	{	
	$s_name=$rows['s_name'];
	$service="service";
	$s_price=$rows['s_price'];
	$qty=$_POST['select'];
	$total= $p_price * $qty;
	$insert=mysqli_query($con,"insert into cart values(null,'$user_id','$s_id','$s_name','$service','$s_price','$qty','$total')");
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
								<h1>Our Services</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">Our Services</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->
		<!-- Page Content -->
	<div id="page-content-wrapper">		
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						
					</div>
				</div>
				
			</div>
		</div><!-- end all-page-bar -->
	<form method="post" enctype="multipart/form-data">
		<div id="services" class="section lb">
			<div class="container">
				<p class="lead" align="right">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
					<small>WELCOME TO THE OUR BARBER SHOP</small>
					<h3>OUR SERVICES</h3>
					<hr class="grd1">
					<p class="lead"></p>
					</div>
				</div><!-- end title -->
<?php
$qry=mysqli_query($con,"select * from services");
while($row=mysqli_fetch_array($qry))
{
?>
				<div class="row" >
					<div class="col-md-8 offset-md-2" >
						<div class="service-wrap text-center lastchild clearfix" >
						
							<div class="uptop">
								<img src="../admin/serviceimage/<?php echo $row['s_photo']; ?>" alt="" class="img-responsive img-rounded alignleft">
							</div>
							<h4><?php  echo $row['s_name'];      ?></h4>
							<input type="hidden" name="id" value="<?php  echo $row['s_id']; ?>" ></input> 
							<p><b>Price :-</b><?php  echo $row['s_price'];   ?></p>												
								<p><?php  echo $row['s_desc'];   ?></p>
								<br>
								<br>
							<u><h2 style="color:red" ><?php echo "<a href='service_store_db.php?x=$row[0]'> "; ?>Add To Cart </h2></u>
						</div><!-- end issue -->				
					</div><!-- end col -->
				</div>
<?php
}
?>
</form>



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
<?php
include("footer.php");
?>
</body>
</html>