<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];	
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$user_id= $row['u_id'];
	$p_id=$_GET['x'];
	$qry=mysqli_query($con,"select * from package_detail p1 where pd_id='$p_id' ");
	$rows=mysqli_fetch_array($qry);
	if($qry)
	{
		$abc=mysqli_query($con,"select * from package_master where p_id='$p_id'");
		$abc=mysqli_fetch_array($abc);
		$p_name=$abc['p_name'];
		$p_price=$rows['p_price'];
		$total=1*$p_price;
		$package="package";
		$insert=mysqli_query($con,"insert into cart values(null,'$user_id','$p_id','$p_name','$p_price','1','$total','$package')");
		if($insert)
		{
			header('location:offers.php');
		}
		else
		{
			echo '<script>alert("Data not inserted into cart...")</script>';
			header('location:offers.php');
		}
	}

?>
