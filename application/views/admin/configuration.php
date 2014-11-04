<?php
	$this->load->view('admin/header');
?>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-summernote/summernote.css">
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-quick-sidebar-over-content" onload="about_us()">
<?php
	$this->load->view('admin/sidebar');
?>
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">
				Pengaturan
			</h3>
		<?php
			if($this->session->flashdata('success_alert') != null)
			{
		?>	
			<div class="Metronic-alert alert alert-success fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button"></button>
				<?PHP echo $this->session->flashdata('success_alert')?>
			</div>
		<?php
			}
			else if($this->session->flashdata('error_alert') != null)
			{
		?>
			<div class="Metronic-alert alert alert-danger fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button"></button>
				<?PHP echo $this->session->flashdata('error_alert')?>
			</div>
		<?php
			}
			else if($this->session->flashdata('warning_alert') != null)
			{
		?>
			<div class="Metronic-alert alert alert-warning fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button"></button>
				<?PHP echo $this->session->flashdata('warning_alert')?>
			</div>
		<?php
			}
		?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-8">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-wrench"></i>Pengaturan Sistem
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal form-row-separated" enctype="multipart/form-data" action="<?PHP echo base_url()?>admin/configuration/saveConfiguration" method="post" onsubmit="return postForm1()">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Nama Sistem</label>
										<div class="col-md-5">
											<input type="text" class="form-control input-xlarge" maxlength="16" id="maxlength_defaultconfig"  value="<?PHP echo $system_name?>" name="system_name" placeholder="Nama sistem">
											<span class="help-block">
											Panjang maksimum 16 karakter</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Logo</label>
										<div class="col-md-6">
											<input type="file" name="system_logo">
											<p class="help-block">File GIF , JPG atau PNG <br> dengan resolusi maksimum 128 x 32 pixel</p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Alamat</label>
										<div class="col-md-5">
											<textarea class="form-control input-xlarge" name="frontend_address"><?PHP echo $frontend_address?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Telp.</label>
										<div class="col-md-5">
											<input type="text" class="form-control input-xlarge" value="<?PHP echo $frontend_telp?>" name="frontend_telp" placeholder="Nomor telepon">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Fax</label>
										<div class="col-md-5">
											<input type="text" class="form-control input-xlarge" value="<?PHP echo $frontend_fax?>" name="frontend_fax" placeholder="Your fax number">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Email</label>
										<div class="col-md-5">
											<input type="text" class="form-control input-xlarge" value="<?PHP echo $frontend_email?>" name="frontend_email" placeholder="Your email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Tentang Kami</label>
										<div class="col-md-9">
											<textarea name="about_us" id="summernote1"></textarea>
										</div>
									</div>

									<div id="about_us" style="display:none"><?PHP echo $about_us?></div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col md-5">
											<input type="submit" class="btn blue" value="Simpan">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?PHP echo base_url()?>assets/global/plugins/respond.min.js"></script>
<script src="<?PHP echo base_url()?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?PHP echo base_url()?>/inc/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?PHP echo base_url()?>/inc/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- Bootbox Confirm -->
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/admin/pages/scripts/ui-alert-dialog-api.js"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- Bootbox -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?PHP echo base_url()?>/inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/admin/layout/scripts/demo.js" type="text/javascript"></script>

<script src="<?PHP echo base_url()?>/inc/admin/pages/scripts/components-editors.js"></script>
<!-- Validation -->
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
	UIAlertDialogApi.init();
	ComponentsEditors.init();
	getNotifModule();
	getNotifDiscussion();

    $('#summernote1').summernote({
   		height:300,
   		toolbar: [
				        ['style', ['style']],
				        ['font', ['bold', 'italic', 'underline', 'clear']],
				        ['fontname', ['fontname']],
				        // ['fontsize', ['fontsize']], Still buggy
				        ['color', ['color']],
				        ['para', ['ul', 'ol', 'paragraph']],
				        ['height', ['height']],
				        ['table', ['table']],
				        ['insert', ['link', 'picture']],
				        ['view', ['codeview']],
			      ],
   	});
});
var postForm1 = function() {
	var content = $('textarea[name="about_us"]').html($('#summernote1').code());
}

function getNotifModule(){
	   $.ajax({
	      type: "POST",
	      url: "<?PHP echo base_url()?>admin/module/getNotifModuleComment",
	      dataType:'json',
	      success: function(response){
	       if(response!='0')
	      	{
		        $("#notifmodule-comment").css("display","block"); 
		        $("#notifmodule").css("display","block");
		    }
	       timer = setTimeout("getNotifModule()",5000);
	      }
	     }); 
}

function getNotifDiscussion(){
	   $.ajax({
	      type: "POST",
	      url: "<?PHP echo base_url()?>admin/discussion/getNotifDiscussionComment",
	      dataType:'json',
	      success: function(response){
	       if(response!='0')
	      	{
		        $("#notifdiscussion-comment").css("display","block"); 
		        $("#notifdiscussion").css("display","block");
		    }
	       timer = setTimeout("getNotifDiscussion()",5000);
	      }
	     }); 
}

function about_us()
{
	var about_us = $("#about_us").html();
	$('#summernote1').code(about_us);
}

</script>
<?php
	$this->load->view('admin/footer');
?>