<html>
</html>
<?php

include("header.php");

?>
<?php
if(!$_SESSION['id'])
{
	echo '<script>alert("Please Log-In First....")</script>';
}

?>


<form method="post" enctype="multipart/form-data">
<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">						
						<h3>Your Profile</h3>
						<small></small>
						</div>
					</div><!-- end title -->
					<form method="post" enctype="multipart/form-data">
					<div class="row flex-items-xs-middle flex-items-xs-center">
<?php
									session_start();
									$con=mysqli_connect("localhost","root","","project");
									$id=$_SESSION['id'];								
									$q=mysqli_query($con,"select * from user_master where u_id=$id");
									$row=mysqli_fetch_array($q);
									$password= $row['password'];
									$decode_pass=md5($password) ;

?>	
						
						<!-- Table #1  -->
						<div class="col-xs-8 col-lg-12">
						  <div class="card text-center">							
							<div class="card-block" >
								<img  height="200" alt="Profile Image" width="250" src="photo/<?php echo $row['photo']; ?>" > </img>
								<br>
								<br>
							  <h4 class="" > 
								
								Name :- <?php  echo $row['u_name'];?>
							  </h4><br>							  																															
								Password :- <?php  echo "***";   ?> 	<br>
								<br>
								E-mail :- <?php  echo $row['email'];  ?> 	<br>
								<br>
								Mobile No :- <?php  echo $row['mobile_no'];   ?> 	<br>
								<br>
								Address :-<?php  echo $row['address']; ?> 	<br>
								
								<br>
								<br>
								<h1><a href="profile_edit.php" style="color:red">Want to edit profile?</a></a></h1>
							  </div>												
							</div>
							<br>
						<br>
						  </div>
						</div>
						
						
					

					</div>
				</form>
			</div>
		</div>
	
</form>
<?php
include("footer.php");
?>