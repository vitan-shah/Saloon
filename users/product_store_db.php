<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];	
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$user_id= $row['u_id'];
	$p_id=$_GET['x'];
	$qry=mysqli_query($con,"select * from product where p_id='$p_id' ");
	$rows=mysqli_fetch_array($qry);
	if($qry)
	{
	
		$p_name=$rows['p_name'];
		$p_price=$rows['p_price'];
		$total=1*$p_price;
		$product="product";
		$insert=mysqli_query($con,"insert into cart values(null,'$user_id','$p_id','$p_name','$p_price','1','$total','$product')");
		if($insert)
		{
			header('location:product.php');
		}
		else
		{
			echo '<script>alert("Data not inserted into cart...")</script>';
			header('location:product.php');
		}
	}

?>
