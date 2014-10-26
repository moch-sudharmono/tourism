<<<<<<< HEAD
<?php include("cssfile.php"); ?>
<?php include("jsfile.php"); ?>

				<div class="row">
				<div class="col-md-12">
                	<!-- BEGIN VALIDATION STATES-->
                	<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?=$title?> Form
							</div>							
						</div>	
                        <div class="portlet-body form">
=======
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
				
				<?php include('sidebar.php'); ?>		
                	          
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
                	
                
					<!-- BEGIN VALIDATION STATES-->
                    <div id="ProfileForm">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $title?> Form
							</div>							
						</div>
                        
						<div class="portlet-body form">
>>>>>>> origin/master
							<!-- BEGIN FORM-->
							<form action="" id="form_profile" class="form-horizontal" method="post">
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
										<label class="control-label col-md-3">Parent Attraction Location
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="cbo_parent">
												<option value="">Please Choose Option</option>
                                                <?php foreach($query as $no=>$value){?>
<<<<<<< HEAD
                                                	<option value="<?=$value["id_lokasi_wisata"]?>"><?=$value["nama_lokasi_wisata_ina"]."/".$value["nama_lokasi_wisata_eng"]?></option>
=======
                                                	<option value="<?php echo $value["id_lokasi_wisata"]?>"><?php echo $value["nama_lokasi_wisata_ina"]." / ".$value["nama_lokasi_wisata_eng"]?></option>
>>>>>>> origin/master
                                                <?php }?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Attraction Location (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="title_eng" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Lokasi Wisata (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="title_ind" data-required="1" class="form-control"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">Description (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="description_eng" data-error-container="#editor1_error"></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Penjelasan (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="description_ind" data-error-container="#editor1_error"></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Map Position <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="cbo_map">
												<option value="">Please Choose Option</option>
<<<<<<< HEAD
												<option value="Option 1">Wakatobi</option>
												<option value="Option 2">Raja Ampat</option>
												<option value="Option 3">Pantai Sikka</option>
=======
>>>>>>> origin/master
											</select>
										</div>
									</div>
																											
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" id="submit_profile" value="">Submit</button>
											<button type="button" ID="CancelButton" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
<<<<<<< HEAD
                    </div>
                <!-- END VALIDATION STATES-->
					</div>
				</div>
                
                 <!-- IMAGE FORM -->
                        <div id="imageUpload">
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Image Form
                                    </div>							
                                </div>
                                
                                <form id="fileupload" action="<?=base_url();?>inc/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data">
                    	
                        
                                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                <div class="row fileupload-buttonbar">
                                    <div class="col-lg-7">
                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                        <span class="btn blue fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span>
                                        Add files... </span>
                                        <input type="file" name="files[]" multiple>
                                        </span>
                                        <button type="submit" class="btn blue start">
                                        <i class="fa fa-upload"></i>
                                        <span>
                                        Start upload </span>
                                        </button>
                                        <button type="reset" class="btn warning cancel">
                                        <i class="fa fa-ban-circle"></i>
                                        <span>
                                        Cancel upload </span>
                                        </button>
                                        <button type="button" class="btn red delete">
                                        <i class="fa fa-trash"></i>
                                        <span>
                                        Delete </span>
                                        </button>
                                        <input type="checkbox" class="toggle">
                                        <!-- The global file processing state -->
                                        <span class="fileupload-process">
                                        </span>
                                    </div>
                                    <!-- The global progress information -->
                                    <div class="col-lg-5 fileupload-progress fade">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-success" style="width:0%;">
                                            </div>
                                        </div>
                                        <!-- The extended global progress information -->
                                        <div class="progress-extended">
                                             &nbsp;
                                        </div>
                                    </div>
                                </div>
                                <!-- The table listing the files available for upload/download -->
                                <table role="presentation" class="table table-striped clearfix">
                                <tbody class="files">
                                </tbody>
                                </table>
                            </form>
                            </div>

                        </div>
                        <!-- END OF IMAGE FORM --> 
=======
                        </div>
						<!-- END VALIDATION STATES-->
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
<?php include("jsfile.php"); ?>

</body>
<!-- END BODY -->
</html>
>>>>>>> origin/master
