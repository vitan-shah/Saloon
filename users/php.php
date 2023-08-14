<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btncart']))
{
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];								
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$name= $row['u_name'];
	$user_id= $row['u_id'];
	$email= $row['email'];
	$u_mobile= $row['mobile_no'];
	$address= $row['address'];
	$p_id=$_POST['pid'];
	$qry=mysqli_query($con,"select * from product where p_id='$p_id' ");
	$rows=mysqli_fetch_array($qry);
	$p_name=$rows['p_name'];
	$p_price=$rows['p_price'];
	$qty=$_POST['select'];
	$total= $p_price * $qty;
	$insert=mysqli_query($con,"insert into order_master values(null,'$user_id','$name','$email','$u_mobile','$address','$p_id','$p_name','$p_price','$qty','$total')");
}

?>



<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btncart']))
{
	$con=mysqli_connect("localhost","root","","project");
	$id=$_SESSION['id'];	
	$q=mysqli_query($con,"select * from user_master where u_id=$id");
	$row=mysqli_fetch_array($q);
	$user_id= $row['u_id'];
	$p_id=$_POST['pid'];
	$qry=mysqli_query($con,"select * from product where p_id='$p_id' ");
	$rows=mysqli_fetch_array($qry);
	$p_name=$rows['p_name'];
	$p_price=$rows['p_price'];
	$qty=$_POST['select'];
	$total= $p_price * $qty;
	$insert=mysqli_query($con,"insert into cart values(null,'$user_id','$p_id','$p_name','$p_price','$qty','$total')");
}

?>
