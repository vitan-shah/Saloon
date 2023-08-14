																<?php
																//error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$b_id=$_GET['x'];
																$q=mysqli_query($con,"delete from blog where b_id=$b_id");
																if($q)																	
																	
																	header('location:blog.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>