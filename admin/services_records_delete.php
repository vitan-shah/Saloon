<?php
																
																
																$con=mysqli_connect("localhost","root","","project");
																$s_id=$_GET['x'];
																$q=mysqli_query($con,"delete from services where s_id=$s_id");
																if($q)																	
																	header('location:services_add.php');
																else
																	echo '<script>alert("data not deleted...")</script>';
																?>