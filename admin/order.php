<?php
include("header.php");
?>


<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<u>View Orders</u>
								</small>
							</h1>
							
						</div>
						<div class="row">
							
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									
									<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="detail-col">Order_Id</th>
													<th>User Name</th>
													<th>User E-mail</th>
													<th>Product/Service Name</th>
													<th>Product/Service Price</th>	
													<th>Quantity</th>	
													<th>Total</th>														
													
																									
													
													

													
												</tr>
											</thead>
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select * from order_master where product_or_service='product'");
$query=mysqli_query($con,"select * from address where ");
while($row=mysqli_fetch_array($q) and $rows=mysqli_fetch_array($query))
{
?>
											<tbody>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

												
													<td>
													<?php
															echo $row['order_id'];
													?>
													</td>
													<td>
													<?php
													
															echo $rows['name'];
													
													?>
													</td>
													<td>
													<?php
															echo $row['user_email'];
													?>
													</td>
													<td>
													<?php
															echo $row['product'];
													?>
													</td>
													<td>
													<?php
															echo $row['price'];
													?>
													</td>
													<td>
													<?php
															echo $row['quantity'];
													?>
													</td>
													<td>
													<?php
															echo $row['amount'];
													?>
													</td>																																						
													
													
													
												</tr>
												<?php
}
												?>
											</table>
											
											
										</div>
									</div>
								</div>

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php 
			include("footer.php");
			?>