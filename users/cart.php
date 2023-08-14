<?php
include("header.php");
?>
<form method="post" enctype="multipart/form-data">
<?php
if(isset($_POST['btnhistory']))
{
	header('location:order_history.php');
}
if(!$_SESSION['id'])
{
	echo '<script>alert("Please Log-In First....")</script>';
}
?>
<div id="pricing" class="section lb">
			<div class="container">
					
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Cart</h3>
						<small>Now Get A Home Delivery</small>
						</div>
					</div><!-- end title -->
					<div class="row flex-items-xs-middle flex-items-xs-center">
					<div class="col-xs-1 col-lg-12">
						  <div class="card text-center">
							<div class="card-block">
								<table id="simple-table" class="table  table-bordered table-hover" >
									<thead>
												<tr>
													<th>Cart Id</th>
													<th>Product Or Service Name</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Total</th>																					
													<th>
														<i ></i>
														Remove
													</th>
													

													
												</tr>
									</thead>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
while($rows=mysqli_fetch_array($q))
{
?>

									<tbody>
												<tr>
													<td class="hide">
													<?php
															echo $rows['cart_id'];
													?>
													</td>
												
													
													<td>
													<?php
															echo $rows['service_or_product_name'];
													?>
													</td>
													<td>
													<?php
															echo $rows['service_or_product_price'];
													?>
													</td>
													<td>
													<?php
															echo $rows['quantity'];
													?>
													</td>
													<td>
													<?php
															echo $rows['total'];
													?>
													</td>
																																						
													
													
													<td>
														<div >
															<?php echo	"<a href='cart_edit.php?x=$rows[0]' class='btn btn-xs btn'><img src='images/edit.png'  height='20' width='20'></img> </a>" ?>
															<?php echo	"<a href='cart_delete.php?x=$rows[0]' class='btn btn-xs btn-danger'><img src='images/delete.jpeg'  height='20' width='20'></img> </a>" ?>
															
														</div>

														
													</td>
												</tr>


<?php									
}
?>
								
								</tbody>
								</table>
							</div>
							<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
$rows=mysqli_fetch_array($q)
?>
							<br>
							<h1 align="center" ><?php echo	"<a href='invoice.php?x=$rows[1]' class='btn btn-xs btn' style='color:red'>Place order </a>" ?></h1>	
							<h2 align="center"><input type="submit" style="color:red" align="right" name="btnhistory" value=" View Order History"></input></h2>
						  </div>
<?php
?>			  
						
						<br>
						
						</div>
						
						

					</div>
					
			</div>
		</div>
		
</form>	
</body>
</html>
<?php
include("footer.php");
?>