<?php
																
																
																$con=mysqli_connect("localhost","root","","project");
																$p_id=$_GET['x'];
																$q=mysqli_query($con,"delete from product where p_id=$p_id");
																if($q)																	
																	header('location:product_view.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>