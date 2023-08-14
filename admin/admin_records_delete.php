																<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$a_id=$_GET['x'];
																$q=mysqli_query($con,"delete from admin_master where a_id=$a_id");
																if($q)																	
																	
																	header('location:admin_records.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>