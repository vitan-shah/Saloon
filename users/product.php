<html>
</html>
<?php

include("header.php");

?>


<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btncart']))
{
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];	
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$user_id= $row['u_id'];
	$p_id=$_POST['id'];
	$qry=mysqli_query($con,"select * from product where p_id='$p_id' ");
	$rows=mysqli_fetch_array($qry);
	if($qry)
	{
	
	$p_name=$rows['p_name'];
	$p_price=$rows['p_price'];
	$qty=$_POST['select'];
	$total= $p_price * $qty;
	$insert=mysqli_query($con,"insert into cart values(null,'$user_id','$p_id','$p_name','$p_price','$qty','$total')");
	}
}

?>
<form method="post" enctype="multipart/form-data">
<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Our Products</h3>
						<small>Now Get A Home Delivery</small>
						</div>
					</div><!-- end title -->
					<form method="post" enctype="multipart/form-data">
					<div class="row flex-items-xs-middle flex-items-xs-center">
<?php
$query=mysqli_query($con,"select * from product");
while($row=mysqli_fetch_array($query))
{
?>	
						
						<!-- Table #1  -->
						<div class="col-xs-8 col-lg-4">
						  <div class="card text-center">							
							<div class="card-block">
								<img  height="140" width="150" src="../admin/productimage/<?php echo $row['p_image']; ?>" > </img>
								<br>
								<br>
							  <h4 class=""> 
								<input type="hidden" name="id" value="<?php  echo $row['p_id']; ?>" ></input> 
								
								<?php  echo $row['p_name'];?>
							  </h4>
							  <div class="line-pricing">								
															
								
								<a href="#">RS :-<?php  echo $row['p_price'];   ?></a>	
								<br>
								<br>
								<a ><?php echo "<a href='product_view.php?x=$row[0]'> "; ?>View Product Details</a>
								<br>
								<br>
							<?php echo "<a href='product_store_db.php?x=$row[0]'> "; ?>Add To Cart
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
include("footer.php");
?>