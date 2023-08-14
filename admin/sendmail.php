<html>
<head>
</head>
<body>


<?php
$to_email = $_POST['txtforgotemail'];
$subject = 'OTP(One Time Password) Authentication';
$abc=rand(1000,	9999);
$body="hi deep darji your OTP is $abc sended by Style Barber saloon";
$headers = 'From:shahtirth1403@gmail.com';
if(mail($to_email,$subject,$body,$headers))
{
	echo "E-mail successfully send to $to_email...";
}
else
{
	echo "E-mail sending failed...";

?>



<form method="post" enctype="multipart/form-data">
								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form method="post" enctype="multipart/form-data">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="txtforgotemail" class="form-control" placeholder="Email" required="" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<input type="submit" name="btnsend" class="width-35 pull-right btn btn-sm btn-danger" value="Send"></input>																											
														
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->
</form>


</body>
</html>