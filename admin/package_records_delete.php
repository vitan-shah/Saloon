																<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$p_id=$_GET['x'];
																$q=mysqli_query($con,"delete from package_master where p_id=$p_id");
																if($q)																																		
																	header('location:package_view.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>