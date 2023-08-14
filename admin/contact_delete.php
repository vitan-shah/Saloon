																<?php
																error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$id=$_GET['x'];
																$q=mysqli_query($con,"delete from contactus where c_id=$id");
																if($q)																	
																	header('location:contact.php');
																else
																	echo '<script>alert("Not deleted...")</script>';
																?>