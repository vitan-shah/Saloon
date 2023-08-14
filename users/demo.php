<?php
									error_reporting(1);
									session_start();
									$con=mysqli_connect("localhost","root","","project");								

	$id=$_SESSION['id'];								
	$q=mysqli_query($con,"select * from user_master where u_id='$id'");
	$row=mysqli_fetch_array($q);
	$u_id=$row['id'];
	$name=$_POST['txtname'];
	$mob=$_POST['txtmob'];
	$pincode=$_POST['txtpin'];
	$city=$_POST['txtcity'];
	$house_no=$_POST['txtadd'];
	$near_road=$_POST['txtaddress'];
	$u_email=$row['u_email'];
	$p_id=$_GET['x'];
	$query=mysqli_query($con,"select * from product where p_id='$p_id'");
	$rows=mysqli_fetch_array($query);
	$p_name=$rows['p_name'];
	$p_price=$rows['p_price'];
	$quantity='1';
	$total=1 * $p_price ;
	$insert=mysqli_connect($con,"insert into order_master values(null,'$u_id','$name','$mob','$pincode','$city','$house_no','$near_road','$u_email','$p_name','$p_price','1','$total')");
	if($insert)
	{
		$success =  "Your Order Successfully Placed...";
	}
	else
	{
		echo '<script>alert("Error For Placing An Order")</script>';
	}

?>