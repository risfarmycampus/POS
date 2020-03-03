			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url('coba/index');?>">Dashboard</a>
							</li>
							<li class="active">Dormitory</li>
						</ul><!-- /.breadcrumb -->
					</div>
				<title>POS System | Data Dormitory</title>
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="page-header">
											<h1>
												Data Dormitory
												<small>
													<i class="ace-icon fa fa-angle-double-right"></i>
												</small>
											</h1>
										</div>
									<a href="<?php echo base_url('admin/addUserRole');?>" class="btn btn-white btn-info btn-bold"><i class="fa glyphicon-plus "></i> Add New Data</a><br><br>
										
										<?php 
												if(isset($_GET['message'])){
													$message = $_GET['message'];
													if($message == "input"){
														echo '<div class="alert alert-block alert-success">
															<button type="button" class="close" data-dismiss="alert">
																<i class="ace-icon fa fa-times"></i>
															</button>
																<i class="ace-icon fa fa-check green"></i>
																	Data successfully inputted.
														</div>';
													}else if($message == "update"){
														echo '<div class="alert alert-block alert-success">
															<button type="button" class="close" data-dismiss="alert">
																<i class="ace-icon fa fa-times"></i>
															</button>
																<i class="ace-icon fa fa-check green"></i>
																	Data successfully updated.
														</div>';
													}else if($message == "delete"){
														echo '<div class="alert alert-block alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																	<i class="ace-icon fa fa-check green"></i>
																		Data successfully deleted.
															</div>';
													}
												}
											?>
										<div class="table-header">
											Results for "Data Dormitory"
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															No.
														</th>
														<th>Kode Role</th>
														<th>User Role</th>
														<th><center>Action</center></th>
													</tr>
												</thead>

												<tbody>
												<?php $no=1; foreach ($dtRoleUser  as $r): ?>
													<tr>
														<td class="center">
															<center><?php echo $no++; ?></center>
														</td>
														<td><?=$r['kd_role'] ?></td>
														<td>
															<a href="<?php echo base_url();?>coba/detailDormitory/<?=$r['id'] ?>"><?=$r['role'] ?></a>
														</td>

														<td><center>
															<div class="hidden-sm hidden-xs action-buttons">

																<a class="green" href="<?=base_url();?>coba/editDataDormitory/<?=$r['id'] ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="<?=base_url();?>coba/deleteDataDormitory/<?=$r['id'] ?>">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div></center>
														</td>
													</tr>
													<?php endforeach ?>
												</tbody>
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