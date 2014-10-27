<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Sitemap Data
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a href="<?php echo base_url().'admin/sitemap/form/0'; ?>" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="#">
													Print </a>
												</li>
												<li>
													<a href="#">
													Save as PDF </a>
												</li>
												<li>
													<a href="#">
													Export to Excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            	<th>
									 Sitemap No
								</th>                                
								<th>
									 Parent Menu
								</th>
								<th>
									 Nama Menu
								</th>
                                <th>
									 Menu Name
								</th>
                                <th colspan="2">
									Action
								</th>
                                
							</tr>
							</thead>
							<tbody>
                            <?php foreach($sitemap as $val){ ?>
							<tr>
								<td>
									 <?php echo $val['sitemap_no']; ?>
								</td>
								<td>
									 Parent
								</td>
                                <td>
									 <?php echo $val['menu_name_ina']; ?>
								</td>
								<td>
									 <?php echo $val['menu_name_eng']; ?>
								</td>
                                
                                <td>
									<a href="<?php echo base_url().'admin/sitemap/form/'.$val['id_sitemap']; ?>">
											Edit
									</a>
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->