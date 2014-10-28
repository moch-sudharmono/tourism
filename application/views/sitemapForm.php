					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Sitemap Form
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
<?php include("jsfile.php"); ?>
<?php include("cssfile.php"); ?>