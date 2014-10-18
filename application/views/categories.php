<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Tourism | Admin Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>inc/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>inc/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>inc/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>inc/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url();?>inc/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>inc/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>inc/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?=base_url()?>">
			<img src="<?=base_url();?>inc/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle hide1" src="<?=base_url();?>inc/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Admin </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
                    	
						<li>
							<a href="login.html">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
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
				
				<li>
					<a href="<?=base_url()?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>                    
					<!--<span class="selected"></span>-->
					<span class="arrow"></span>
					</a>
					
				</li>
				<li>
					<a href="<?=base_url()?>index.php/news">
					<i class="icon-basket"></i>
					<span class="title">News</span>
                    <span class="arrow "></span>
					</a>	
                    <ul class="sub-menu">
                    	<li>
							<a href="<?=base_url()?>index.php/news">
							News Data
                            </a>
						</li>
						<li>
							<a href="<?=base_url()?>index.php/tag">
							Tag
                            </a>
						</li>
                    </ul>				
				</li>
				<li>
					<a href="<?=base_url()?>index.php/profile">
					<i class="icon-basket"></i>
					<span class="title">Profile</span>
                    <span class="arrow "></span>
					</a>					
				</li>				
                <li>
					<a href="<?=base_url()?>index.php/testimonial">
					<i class="icon-rocket"></i>
					<span class="title">Testimonial</span>
					<span class="arrow "></span>
					</a>					
				</li>      
                <li>
					<a href="<?=base_url()?>index.php/gallery">
					<i class="icon-basket"></i>
					<span class="title">Gallery</span>
                    <span class="arrow "></span>
					</a>					
				</li>	
                <li>
					<a href="<?=base_url()?>index.php/attraction">
					<i class="icon-basket"></i>
					<span class="title">Potential Attraction</span>
                    <span class="arrow "></span>
					</a>					
				</li>
				 <li class="start active open">
					<a href="<?=base_url()?>index.php/infrastructure">
					<i class="icon-basket"></i>
					<span class="title">Infrastructure</span>
                    <span class="arrow "></span>
					</a>		
                    <ul class="sub-menu">
						<li>
							<a href="<?=base_url()?>index.php/infrastructure/categories">
							Categories
                            </a>
						</li>
                        <li>
							<a href="<?=base_url()?>index.php/infrastructure">
							Infrastructure Data
                            </a>
						</li>
                    </ul>			
				</li>	
                <li>
					<a href="<?=base_url()?>index.php/sitemap">
					<i class="icon-basket"></i>
					<span class="title">Sitemap</span>
                    <span class="arrow "></span>
					</a>					
				</li>	
                <li>
					<a href="<?=base_url()?>index.php/askus">
					<i class="icon-basket"></i>
					<span class="title">Ask Us</span>
                    <span class="arrow "></span>
					</a>					
				</li>	           
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
			<?=$title?> <small><?=$small_title?></small>
			</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->			
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
										<label class="control-label col-md-3">Category (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="title_eng" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Kategori (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="title_ind" data-required="1" class="form-control"/>
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
											<button type="button" class="btn default">Cancel</button>
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
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?=base_url();?>inc/global/plugins/respond.min.js"></script>
<script src="<?=base_url();?>inc/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=base_url();?>inc/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=base_url();?>inc/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="<?=base_url();?>inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() { 
	$(".wysihtml5").wysihtml5();   
	$(".date").datepicker();   
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features 
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initIntro();
   Tasks.initDashboardWidget();
   FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>