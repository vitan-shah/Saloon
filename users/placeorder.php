<?php
include("header.php");
?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];								
	$q=mysqli_query($con,"select * from user_master where u_id='$id'");
	$row=mysqli_fetch_array($q);
	$u_id=$row['u_id'];
	$u_email=$row['email'];
	
if(isset($_POST['btnorder']))
{
	$name=$_POST['txtname'];
	$mobile=$_POST['txtmob'];
	$pincode=$_POST['txtpin'];
	$city=$_POST['txtcity'];
	$address=$_POST['txtaddress'];
	$p_id=$_GET['x'];
	$query=mysqli_query($con,"select * from product where p_id='$p_id'");
	$rows=mysqli_fetch_array($query);
	$p_id=$rows['p_id'];
	$p_name=$rows['p_name'];
	$p_price=$rows['p_price'];
	$quantity='1';
	$total= 1 * $p_price ;
	$cash_on_delivery=$_POST['radio'];
	$date=date('d/m/y'); 
	$product="product";
	$insert=mysqli_query($con,"insert into order_master values(null,'$u_id','$p_name','$product','$p_price','$quantity','$total','$date','0')");
	if($insert)
	{
			header('location:user_address.php');
		
	}
	else
	{
		echo '<script>alert("Error For Placing An Order...")</script>';
	}
}
?>
<form method="post" enctype="multipart/form-data">
<div>
			<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Order Summary </h3>
						<small></small>
						</div>
					</div><!-- end title -->
					<div >
					<div class="col-xs-1 col-lg-12">
						  <div class="card text-center">
							<div>
						<form method="post" enctype="multipart/form-data">
							<table class="table  table-bordered table-hover" >
									<thead>
												<tr>
													<th colspan="5"><h1 align="center" style="color:red"> Your Products</h1></th>
												<tr>
												<tr>
													<th>Cart Id</th>
													<th>Product Name</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Total</th>																																																											
												</tr>
									</thead>								
										
<?php
session_start();
$p_id=$_GET['x'];
$q=mysqli_query($con,"select * from product where p_id='$p_id'");
while($rows=mysqli_fetch_array($q))
{
?>
									<tbody>
												<tr>
													<td class="hide">
													<?php
															echo $rows['p_id'];
													?>
													</td>
												
													
													<td>
													<?php
															echo $rows['p_name'];
													?>
													</td>
													<td>
													<?php
															echo $rows['p_price'];
													?>
													</td>
													<td>
													<?php
															echo '1';
													?>
													</td>
													<td>
													<?php
															echo 1 * $rows['p_price'];
													?>
													</td>
																																						
													
													
													
												</tr>
												<tr>
													<td colspan="6"><h1><input style="color:red" type="submit" name="btnorder" value="Place Order" ></input></td></h1>
												</tr>


<?php									
}
?>
												
								</tbody>
								

							
							</table>
							</form>
							<form method="post" enctype="multipart/form-data">
							
							</form>
							
							</div>
							<br>
								
								<br>
								
						  </div>
						  
					</div>
						
						<?php
							echo $success;
						?>
						</form>
					</div>
					
			</div>
		</div>
		
</form>	
</body>
</html>
<?php
include("footer.php");
?>