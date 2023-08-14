																<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$u_id=$_GET['x'];
																$q=mysqli_query($con,"delete from user_master where u_id=$u_id");
																if($q)
																	header('location:user_records.php');
																else
																	echo "data not deleted...";
																?>