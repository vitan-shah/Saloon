
<?php
include("header.php");
?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
$sum=0;
while($rows=mysqli_fetch_array($q))
{
	
	$rows['total']."<br>";
	$products=$rows['service_or_product_name'];
	$quantity=$rows['quantity'];
	$sum=$rows['total'];
	$price=$rows['service_or_product_price'];
	$productservice=$rows['product_or_service'];	
	if(isset($_POST['btnorder']))
	{
		$o_id= $_GET['x'];
		$total_amount= $sum;
		$sys_date= date('d/m/y');		
		$query=mysqli_query($con,"insert into order_master values(null,'$o_id','$products','$productservice','$price','$quantity','$total_amount','$sys_date','0')");		
		if($query)
		{	
			$request=mysqli_query($con,"select * from order_master where u_id='$o_id' and date='date('d/m/y')'");
			while($abc=mysqli_fetch_array($request));
			{
			header('location:user_address.php?x=$abc[1]');
			}
		}
		else
		{
			echo '<script>alert("Error For Placing An Order...")</script>';
		}
	}
	
}

?>
<form method="post" enctype="multipart/form-data">
<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Invoice</h3>
						<small></small>
						</div>
					</div><!-- end title -->
					<div class="row flex-items-xs-middle flex-items-xs-center">
					<div class="col-xs-1 col-lg-12">
						  <div class="card text-center">
							<div class="card-block">
							<form method="post" enctype="multipart/form-data">
							
							<table id="simple-table" class="table  table-bordered table-hover" border="1">
							<thead>
												<tr>
													<th>Date</th>
													<th>Order Id</th>
													<th>Products</th>	
													<th>Price</th>
													<th>Quantity</th>
													<th>Price</th>												
																																												
												</tr>
							</thead>	
							<tbody>
												<tr>
													<td>
													<?php
															echo date('d/m/y'); 
													?>
													
													</td>
												
													
													<td>
													<?php
															 echo $_GET['x'];
													?>
													</td>
													<td>
													<?php

$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
$sum=0;
while($rows=mysqli_fetch_array($q))
{
	echo $rows['service_or_product_name']."<br>";
	
	
	$sum=$sum+$rows['total'];
}
?>
													</td>
													<td>
														<?php

$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
$sum=0;
while($rows=mysqli_fetch_array($q))
{
	echo $rows['service_or_product_price']."<br>";
	
	
	$sum=$sum+$rows['total'];
}
?>
													</td>
													<td>
													<?php

$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
$sum=0;
while($rows=mysqli_fetch_array($q))
{
	echo $rows['quantity']."<br>";
	
	
}
?>
													</td>
													<td>
													<?php $con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select * from cart where user_id='$id'");
$sum=0;
while($rows=mysqli_fetch_array($q))
{
	
	echo $rows['total']."<br>";
	
	$sum=$sum+$rows['total'];
} ?>
													</td>
													
													
												</tr>
												<tr>
												<td colspan="6" style="color:red"><b><u>TOTAL </u>:-</b> <?php echo $sum; ?></td>
												</tr>
												
												<tr>
													<td colspan="6"><h1><input style="color:red" type="submit" name="btnorder" value="Place Order" ></input></td></h1>
													
												</tr>



								
								</tbody>
							</table>								
							</form>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
								
								
								
							
								
						
						
						</form>
					</div>
					
			</div>
		</div>
		
</form>
<?php

include("footer.php");
?>