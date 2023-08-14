																<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$c_id=$_GET['x'];
																$q=mysqli_query($con,"delete from cart where cart_id=$c_id");
																if($q)																																		
																	header('location:cart.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>