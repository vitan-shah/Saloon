<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$o_id=$_GET['x'];
																$q=mysqli_query($con,"delete from order_master where order_id=$o_id");
																$q=mysqli_query($con,"delete from address where order_id=$o_id");
																if($q)																	
																	
																	header('location:product_order.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>