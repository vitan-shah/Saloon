<?php
include("header.php");
?>

<?php

?>
<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<u>View Product Orders</u>
								</small>
							</h1>
							
						</div>
						<div class="row">
							
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									
									
									<table id="simple-table" class="table  table-bordered table-hover" >
											<thead>
												<tr>
													<th colspan="12"><h3 align="center" style="color:blue">New Orders</h3><th>
												<tr>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="detail-col">Order_Id</th>
													<th>User Name</th>													
													<th>Product Name</th>
													<th>Product Price</th>	
													<th>Quantity</th>	
													<th>Address </th>
													<th>Mobile No</th>
													<th>City </th>
													<th>Total</th>
													<th>Date</th>
													<th>Status</th>
													<th>Update</th>
																									
													
													

													
												</tr>
											</thead>
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select o1.*, a1.* from order_master o1, address a1 where o1.order_id = a1.order_id and product_or_service='product' and status='0'");
while($row=mysqli_fetch_array($q))
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
													
															echo $row['name'];													
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
															echo $row['address'];
													?>
													</td>
													<td>
													<?php
															echo $row['mobile_no'];
													?>
													</td>
													<td>
													<?php
															echo $row['city'];
													?>
													</td>
													<td>
													<?php
															echo $row['amount'];
													?>
													</td>
													<td>
													<?php
															echo $row['date'];
													?>
													</td>
													<td>
													<?php
															echo $row['status'];
													?>
													</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															
															<button class="btn btn-xs btn-info">
																<?php echo "<a href='product_order_records_edit.php?x=$row[0]'> "; ?>
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															
															
															<button class="btn btn-xs btn-danger">
															
																<?php echo "<a href='product_order_records_delete.php?x=$row[0]' >";?>
																<i class="ace-icon fa fa-trash-o bigger-120"></i>																		
															</button>
															
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">


																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
													
													
												</tr>
												<?php
}
												?>
											</table>
									
										<br>
										<br>
										<br>
									
									<table id="simple-table" class="table  table-bordered table-hover" >
											<thead>
												<tr>
													<th colspan="12"><h3 align="center" style="color:blue">Old Orders</h3><th>
												<tr>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="detail-col">Order_Id</th>
													<th>User Name</th>													
													<th>Product Name</th>
													<th>Product Price</th>	
													<th>Quantity</th>	
													<th>Address </th>
													<th>Mobile No</th>
													<th>City </th>
													<th>Total</th>
													<th>Date</th>
													<th>Status</th>
													<th>Update</th>
																									
													
													

													
												</tr>
											</thead>
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select o1.*, a1.* from order_master o1, address a1 where o1.order_id = a1.order_id and product_or_service='product' and status='1'");
while($row=mysqli_fetch_array($q))
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
													
															echo $row['name'];													
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
															echo $row['address'];
													?>
													</td>
													<td>
													<?php
															echo $row['mobile_no'];
													?>
													</td>
													<td>
													<?php
															echo $row['city'];
													?>
													</td>
													<td>
													<?php
															echo $row['amount'];
													?>
													</td>
													<td>
													<?php
															echo $row['date'];
													?>
													</td>
													<td>
													<?php
															echo $row['status'];
													?>
													</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															
															<button class="btn btn-xs btn-info">
																<?php echo "<a href='product_order_records_edit.php?x=$row[0]'> "; ?>
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															
															
															<button class="btn btn-xs btn-danger">
															
																<?php echo "<a href='product_order_records_delete.php?x=$row[0]' >";?>
																<i class="ace-icon fa fa-trash-o bigger-120"></i>																		
															</button>
															
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">


																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
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