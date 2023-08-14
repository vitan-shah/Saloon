																<?php
																error_reporting(1);
																
																$con=mysqli_connect("localhost","root","","project");
																$id=$_GET['x'];
																$q=mysqli_query($con,"delete from faq where id=$id");
																if($q)																	
																	header('location:faq.php');
																else
																	echo '<script>alert("Not deleted...")</script>';
																?>