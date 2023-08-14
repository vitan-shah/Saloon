																<?php
																error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$id=$_GET['x'];
																$q=mysqli_query($con,"delete from aboutus where a_id=$id");
																if($q)																	
																	header('location:about.php');
																else
																	echo '<script>alert("Not deleted...")</script>';
																?>