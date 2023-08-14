																<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$b_id=$_GET['x'];
																$q=mysqli_query($con,"delete from barber_master where b_id=$b_id");
																if($q)
																	header('location:barber_records.php');
																else
																	echo "data not deleted...";
																?>