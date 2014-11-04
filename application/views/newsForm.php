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
			<?php echo $title; ?> <small><?php echo $small_title; ?></small>
			</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>News Form
							</div>							
						</div>
                        
						<div class="portlet-body form">
							<!-- BEGIN FORM-->

							<form action="<?php echo base_url().'index.php/'.$modul.'/'.$action; ?>" method="post" id="form_news" class="form-horizontal">

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
										<label class="control-label col-md-3">Title (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="text" 
                                            value="<?php echo (isset($value['judul_berita_eng'])?$value['judul_berita_eng']:''); ?>" name="title_eng" data-required="1" class="form-control" id="title_eng" required/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Judul (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text"
                                            value="<?php echo (isset($value['judul_berita_ina'])?$value['judul_berita_ina']:''); ?>"
                                            name="title_ind" data-required="1" class="form-control" required/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">News (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="isi_eng" data-error-container="#isi_eng" required>
                                            <?php echo (isset($value['isi_berita_eng'])?$value['isi_berita_eng']:''); ?>
                                            </textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Berita (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="isi_ind" data-error-container="#isi_ind" required>
                                            <?php echo (isset($value['isi_berita_ina'])?$value['isi_berita_ina']:''); ?>
                                            </textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">News Date</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
												<input type="text" 
                                                value="<?php echo (isset($value['tanggal_berita'])?$value['tanggal_berita']:''); ?>"
                                                class="form-control" readonly name="datepicker" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
																											
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" name="submit" id="submit_news" class="btn green" value="save">Submit</button>
											<button type="button" id="CancelButton" class="btn default">Cancel</button>
                                            <input type="hidden" value="<?php echo (isset($id)? $id: '') ?>" name="id_news" data-required="1" class="form-control"/>
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
            <!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Tourism by SS & co.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<script src="<?php base_url() ?>inc/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php base_url() ?>inc/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php base_url() ?>inc/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="<?php base_url() ?>inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php base_url() ?>inc/admin/layout/scripts/demo.js" type="text/javascript"></script>

<!-- END PAGE LEVEL STYLES -->
<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
});
</script>
<script>
		
</script>
</body>
<!-- END BODY -->
</html>
