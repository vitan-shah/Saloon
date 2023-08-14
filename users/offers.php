
<?php

include("header.php");

?>


<form method="post" enctype="multipart/form-data">
<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Our Package</h3>
						
						</div>
					</div><!-- end title -->
					<form method="post" enctype="multipart/form-data">
					<div class="row flex-items-xs-middle flex-items-xs-center">
<?php
$qry=mysqli_query($con,"select * from package_detail");
$query=mysqli_query($con,"select * from package_master");
while($row=mysqli_fetch_array($qry) and $rows=mysqli_fetch_array($query))
{
?>
						
						<!-- Table #1  -->
						<div class="col-xs-8 col-lg-4">
						  <div class="card text-center">							
							<div class="card-block">
								<img  height="140" width="150" src="../admin/packageimage/<?php echo $rows['p_photo']; ?>" > </img>
								<br>
								<br>
							  <h4 class=""> 
								<input type="hidden" name="id" value="<?php  echo $row['p_id']; ?>" ></input> 
								
								<b><?php  echo $rows['p_name'];?> </b>
							  </h4>
							  <p><?php  echo $row['p_desc'];   ?></p>
							  <p> Offer End Date:- <?php echo $row['p_offer_end_date']; ?>
							  <div class="line-pricing">								
															
								
								<a href="offers.php">RS :-<?php  echo $row['p_price'];   ?> </a>	
								
								<br>
								<br>
							<?php echo "<a href='package_store_db.php?x=$row[0]'> "; ?>Add To Cart
							  </div>												
							</div>
							<br>
						<br>
						  </div>
						</div>
						
						
<?php
}
?>
						

					</div>
				</form>
			</div>
		</div>
	
</form>

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