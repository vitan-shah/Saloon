<body>
<?php
include("header.php");
?>
<br>
<br>
<form method="post" enctype="multipart/form-data">
<table id="simple-table" class="table  table-bordered table-hover" >
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
													<th>Product Name</th>
													<th>Product Price</th>	
													<th>Quantity</th>	
													<th>Address </th>
													<th>Mobile No</th>
													<th>City </th>
													<th>Total</th>
													<th>Date</th>
													
													<th>Update</th>
																									
													
													

													
												</tr>
											</thead>
<?php
$con=mysqli_connect("localhost","root","","project");
session_start();
$id=$_SESSION['id'];
$q=mysqli_query($con,"select o1.*, a1.* from order_master o1, address a1 where o1.order_id = a1.order_id and o1.u_id='$id'");
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
														<div class="hidden-sm hidden-xs btn-group">															
															<button class="btn btn-xs btn-danger">
															
																<?php echo "<a href='order_history_delete.php?x=$row[0]' >";?>
																<i class="ace-icon fa fa-trash-o bigger-120"></i>																		
															</button>
															
														</div>

														
													</td>
													
													
												</tr>
												<?php
}
												?>
											</table>




</form>
<br>
<br>
<br>
<?php
include("footer.php");
?>
</body>