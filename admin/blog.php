<?php
include("header.php");
?>


<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<u>Blogs</u>
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
													<th class="detail-col">Blog Id</th>
													<th>Name</th>
													<th>Blog</th>
													<th>Topic</th>																								
													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Update
													</th>
													

													
												</tr>
											</thead>
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select * from blog");
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
															echo $row['b_id'];
													?>
													</td>
													<td>
													<?php
															echo $row['name'];
													?>
													</td>
													<td>
													<?php
															echo $row['blog'];
													?>
													</td>
													<td>
													<?php
															echo $row['topic'];
													?>
													</td>													
													
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															
															
															
															
															<button class="btn btn-xs btn-danger">
															
																<?php echo "<a href='blog_record_delete.php?x=$row[0]' >";?>
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