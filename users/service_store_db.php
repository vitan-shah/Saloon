<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];	
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$user_id= $row['u_id'];
	$s_id=$_GET['x'];
	$qry=mysqli_query($con,"select * from services where s_id='$s_id' ");
	$rows=mysqli_fetch_array($qry);
	if($qry)
	{	
		$s_name=$rows['s_name'];
		$s_price=$rows['s_price'];
		$total=1*$s_price;
		$service="service";
		$insert=mysqli_query($con,"insert into cart values(null,'$user_id','$s_id','$s_name','$s_price','1','$total','$service')");
		if($insert)
		{
			header('location:services.php');
		}
		else
		{
			echo '<script>alert("Data not inserted into cart...")</script>';
			header('location:services.php');
		}
	}

?>
