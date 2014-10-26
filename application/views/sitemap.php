<?php include('header.php'); ?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
				<?php include("sidebar.php");?>      
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo $title?> <small><?php echo $small_title?></small>
			</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->	
            <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i><?php echo $title?> Data
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
											<button id="AddNew" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button>
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
									 Parent Menu
								</th>
								<th>
									 Menu Name
								</th>
                                <th>
									 URL
								</th>
                                <th>
									 CSS ID
								</th>
                                <th>
									 CSS Class
								</th>
								<th>
									 Icon
								</th>
                                <th>
									 Delete
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
                                <td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
            
            <div ID="SitemapForm">		
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $title?> Form
							</div>							
						</div>
                        
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="form_sample_3" class="form-horizontal">
								<div class="form-body">									
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Parent Menu <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="options2">
												<option value="">Please Choose Option</option>
												<option value="Option 1">Menu 1</option>
												<option value="Option 2">Menu 2</option>
												<option value="Option 3">Menu 3</option>
											</select>
										</div>
									</div>
                                    
									<div class="form-group">
										<label class="control-label col-md-3">Menu Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="menu_name" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">URL <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="url" data-required="1" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">CSS ID
										</label>
										<div class="col-md-4">
											<input type="text" name="cssid" data-required="1" class="form-control"/>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">CSS Class <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="cssclass" data-required="1" class="form-control"/>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Icon Select <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="options3">
												<option value="">Please Choose Option</option>
												<option value="Option 1">Cart</option>
												<option value="Option 2">Rocket</option>
												<option value="Option 3">Door</option>
											</select>
										</div>
									</div>
																											
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" ID="CancelButton" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>
			</div>
            </div>
			<!-- END PAGE CONTENT-->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Tourism by SS and co.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<?php include("jsfile.php");?>
<!-- CUSTOMIZE JQUERY -->
<script>
jQuery(document).ready(function() { 
	$('#SitemapForm').hide();
	
	$('#AddNew').click(function(e){
		$('#SitemapForm').show();
	});
	
	$('#CancelButton').click(function(e){
		$('#SitemapForm').hide();
	});
});
</script>
<!-- END CUSTOMIZE JQUERY -->
</body>
<!-- END BODY -->
</html>