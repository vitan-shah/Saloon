<?php
include("header.php");
?>
<form method="post" enctype="multipart/form-data">
<?php
$con=mysqli_connect("localhost","root","","project");
$id=$_GET['x'];
if(isset($_POST['btnupdate']))
{
	$quantity=$_POST['quantity'];
	$query=mysqli_query($con,"select * from cart where cart_id='$id'");
	$row=mysqli_fetch_array($query);
	$price=$row['service_or_product_price'];
	$value= $row['total'];
	$total=$quantity * $price ;
	$q=mysqli_query($con,"update cart set quantity='$quantity' , total='$total' where cart_id=$id");
	if($q)
	{
		header('location:cart.php');
	}
	else
	{
		echo '<script>alert("Quantity not updated")</script>';
		header('location:cart.php');
	}
}






?>
<div id="pricing" class="section lb">
				<div class="container">
					
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
$c_id=$_GET['x'];
$q=mysqli_query($con,"select * from cart where cart_id='$c_id'");
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
													<select name="quantity">
														<option> 1  </option>
														<option>2  </option>
														<option>3  </option>
													</select>
													</td>
													<td>
													<?php
															$value=$rows['total'];
															echo "----";																									
													?>
													</td>
																																						
													
													
													<td>
														<div >
															<input type="submit" name="btnupdate" style="color:red" value="Update Quantity"></input>
														</div>

														
													</td>
												</tr>


<?php									
}
?>
								</tbody>
								</table>
							</div>
						  </div>
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