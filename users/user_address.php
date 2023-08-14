
<?php
include("header.php");

?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
if(isset($_POST['btnadd']))
{
	$name=$_POST['txtname'];
	$mobile_no=$_POST['txtmob'];
	$pincode=$_POST['txtpin'];
	$city=$_POST['txtcity'];
	$address=$_POST['txtaddress'];
	$sys_date= date('d/m/y');		
	$abc=mysqli_query($con,"select * from order_master where u_id='$id' and date='$sys_date'");
	while($rows=mysqli_fetch_array($abc))
	{
		$o_id=$rows['order_id'];
		$query=mysqli_query($con,"insert into address values(null,'$id','$o_id','$name','$mobile_no','$pincode','$city','$address')");
		if($query)
		{
			$q=mysqli_query($con,"delete from cart where user_id='$id'");
			if($q)
			{
				header('location:thank.php');
			}
			else
			{
				echo '<script>alert("Error for placing order.. ")</script>';
			}
		}
		else
		{
			echo '<script>alert("Please re-enter address data.. ")</script>';
		}
	}
	
}
?>

							<br>
							<br>
							<table id="simple-table" class="table  table-bordered table-hover" border="1">
								<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="contact_form">
							<div id="message"></div>
							<form id="contactform" class="row" method="post" enctype="multipart/form-data">
								<fieldset class="row row-fluid">
								
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtname"  class="form-control" placeholder="Full Name" required="">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtmob"  class="form-control" placeholder="Mobile No" required="">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtpin"  class="form-control" placeholder="Pincode"required="">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="txtcity"  class="form-control" placeholder="City" required="">
									</div>									
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea class="form-control" name="txtaddress"  rows="6" placeholder=" Your Full Address" required=""></textarea>
									</div>
									<br>
									<b class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">(Net Banking Not Available)</b>
									<br>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
										<input type="radio" name="radio" value="cash on delivery" required=""  > <b>Cash On Delivery</b></input>
									</div>
									<br>
									<br>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
										<button type="submit" name="btnadd" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Place Order</button>
									</div>
									
								</fieldset>
							</form>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
								
								
							</table>
							
							
<?php
include("footer.php");

?>