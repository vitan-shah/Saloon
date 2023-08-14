<?php

include("header.php");
?>
<body>
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$query=mysqli_query($con,"select * from user_master where u_id='$id'");
$row=mysqli_fetch_array($query);

		$to_email=$row['email'];
		$name=$row['u_name'];
		$subject = 'Thank You For Placing Your Order';
		$body="Hi $name your order has been placed successfully. In a few hours you will receive your order. Thank You For Choosing Us";
		$headers = 'From:shahtirth1010@gmail.com';
		mail($to_email,$subject,$body,$headers);
?>
<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">	
						<br>
						<h3> <img src="images/Capture1.PNG" align="center" width="600" height="200"></img> </h3>
						<h2 style="color:red"><i>Your Order Has Been Placed...</i></h2>						
						<br>
						<small><a style="color:red" href="index.php"><u><i>Go to home page</i></u>...</a></small>
						</div>
					</div><!-- end title -->
</div>
</body>
<?php
include("footer.php");
?>