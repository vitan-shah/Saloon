<?php
include("header.php");
?>


<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<u>Appointments</u>
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
													<th class="detail-col">Id</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>E-mail</th>
													<th>Mobile No</th>																										
													<th>More Details</th>
													<th>Status</th>
													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Update
													</th>
													

													
												</tr>
											</thead>
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select * from user_appointments");
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
															echo $row['u_id'];
													?>
													</td>
													<td>
													<?php
															echo $row['u_fname'];
													?>
													</td>
													<td>
													<?php
															echo $row['u_lname'];
													?>
													</td>
													<td>
													<?php
															echo $row['u_email'];
													?>
													</td>
													<td>
													<?php
															echo $row['u_mobile'];
													?>
													</td>																																							
													<td>
													<?php
															echo $row['u_more_details'];
													?>
													</td>
													<td>
													<?php
															echo $row['u_status'];
													?>
													</td>
													
													<td>
														<?php echo	"<a href='appointment_edit.php?x=$row[0]' class='btn btn-xs btn-info'><img src='assets/images/avatars/58727.png'  height='20' width='20'></img> </a>" 	?>
													<?php echo	"<a href='appointment_delete.php?x=$row[0]' class='btn btn-xs btn-danger'><img src='assets/images/avatars/delete.jpeg'  height='20' width='20'></img> </a>" ?>
														
													</td>
												</tr>
												<?php
}
												?>
											</table>
										</div>
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
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