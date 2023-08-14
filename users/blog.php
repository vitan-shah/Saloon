<?php

include("header.php");

?>

<body>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btnupload']))
{
	$id=$_SESSION['id'];								
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$name=$row['u_name'];
	$blog=$_POST['txtblog'];
	$topic=$_POST['txttopic'];
	$abc=mysqli_query($con,"insert into blog values(null,'$name','$blog','$topic')");
	if($abc)
	{
		$subject = 'Blog Uploaded...';
		$body="hi $to_email.Your Blog Has Been Uploaded Successfully...Thank You For Sharing Details With Us..";
		$headers = 'From:shahtirth1010@gmail.com';
		$to_email =$row['email'];
		mail($to_email,$subject,$body,$headers);
		$success= "Successfully Uploaded...";
	}
	else
	{
		$error="Error to upload a photo";
	}
}

?>
	<!-- Page Content -->
	<div id="page-content-wrapper">		
		
		
		<div id="services" class="section lb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
					<small></small>
					<h3>Write A Blog Here...</h3>
					
					</div>
				</div><!-- end title -->
				<div align="center">
					<div class="col-lg-6">
						<div class="contact_form">
							<div ></div>
							<form method="post" id="contactform" class="row" enctype="multipart/form-data" >
								<fieldset class="row row-fluid">									
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<input type="text" name="txttopic"  class="form-control" placeholder="Your Topic">
									</div>																	
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea class="form-control" name="txtblog" rows="6" placeholder="Blog"></textarea>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<input type="file" name="image"  class="form-control" placeholder="Your Topic">
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
										<input type="submit" value="Upload Blog" name="btnupload" class="btn btn-light btn-radius btn-brd grd1 btn-block subt"></input>
									</div>
								</fieldset>
									
								
							</form>
						</div>
					</div>	
							
							<div class="section-title row text-center">
								<div class="col-md-12 offset-md-12">
								<br>
								<br>
									<h1 style="color:red"><?php echo $success;  ?></h1>
									<h1 style="color:red"><?php echo $error;  ?></h1>
								</div>
							</div><!-- end title -->
							
							
							
							
							
				</div>
			</div><!-- end col -->
		</div><!-- end row -->
						
					</div><!-- end col -->
					<!-- end issue -->
					</div><!-- end col -->
				</div>
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