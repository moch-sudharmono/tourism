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

<?php include("cssfile.php"); ?>
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
				 <li>
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
                <li class="start active open">
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
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i><?=$title?> Data
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
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 Email Sender
								</th>
								<th>
									 Question
								</th>
								<th>
									 Answer
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
									<span class="label label-sm label-warning Answer">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
									 lisa
								</td>
								<td>
									 Lisa Wong
								</td>
								<td>
									<span class="label label-sm label-warning Answer">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
									 nick12
								</td>
								<td>
									 Nick Roberts
								</td>
								<td>
									<span class="label label-sm label-success">
									Answered </span>
								</td>
							</tr>
							<tr>
								<td>
									 goldweb
								</td>
								<td>
									 Sergio Jackson
								</td>
								<td>
									<span class="label label-sm label-success">
									Answered </span>
								</td>
							</tr>
							<tr>
								<td>
									 webriver
								</td>
								<td>
									 Antonio Sanches
								</td>
								<td>
									<span class="label label-sm label-success">
									Answered </span>
								</td>
							</tr>
							<tr>
								<td>
									 gist124
								</td>
								<td>
									 Nick Roberts
								</td>
								<td>
									<span class="label label-sm label-success">
									Answered </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
            	
            <div ID="AskUsForm">    	
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
										<label class="control-label col-md-3">Email Sender
										</label>
										<div class="col-md-4">
											<input type="text" name="title_eng" data-required="1" class="form-control" readonly placeholder="Email Sender"/>
										</div>
									</div>                                    
									
									<div class="form-group">
										<label class="control-label col-md-3">Question
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="editor1" data-error-container="#editor1_error" readonly placeholder="Their Question"></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Answer <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="editor2" data-error-container="#editor1_error"></textarea>
											<div id="editor2_error">
											</div>
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
<?php include("jsfile.php"); ?>
<!-- CUSTOMIZE JQUERY -->
<script>
jQuery(document).ready(function() { 
	$('#AskUsForm').hide();
	
	$('.Answer').click(function(e){
		$('#AskUsForm').show();
	});
	
	$('#CancelButton').click(function(e){
		$('#AskUsForm').hide();
	});
});
</script>
<!-- END CUSTOMIZE JQUERY -->
</body>
<!-- END BODY -->
</html>