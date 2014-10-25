<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Tourism | Admin Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
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
<body class="page-header-fixed page-quick-sidebar-over-content ">
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
					<span class="title">Utama / <em>Dashboard</em></span>                    
					<!--<span class="selected"></span>-->
					<span class="arrow"></span>
					</a>
					
				</li>
				<li class="start active open">
					<a href="<?=base_url()?>index.php/news">
					<i class="icon-basket"></i>
					<span class="title">Berita / <em>News</em></span>
                    <span class="arrow "></span>
					</a>	
                    <ul class="sub-menu">
                    	<li class="start active open">
							<a href="<?=base_url()?>index.php/news">
							Daftar Berita / <em>News Data</em>
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
					<span class="title">Lokasi Wisata / <em>Profile</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>				
                <li>
					<a href="<?=base_url()?>index.php/testimonial">
					<i class="icon-rocket"></i>
					<span class="title">Testimoni / <em>Testimonial</em></span>
					<span class="arrow "></span>
					</a>					
				</li>      
                <li>
					<a href="<?=base_url()?>index.php/gallery">
					<i class="icon-basket"></i>
					<span class="title">Galeri foto / <em>Gallery</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>	
                <li>
					<a href="<?=base_url()?>index.php/attraction">
					<i class="icon-basket"></i>
					<span class="title">Paket Wisata / <em>Potential Attraction</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>
				 <li>
					<a href="<?=base_url()?>index.php/infrastructure">
					<i class="icon-basket"></i>
					<span class="title">Sarana Prasarana / <em>Infrastructure</em></span>
                    <span class="arrow "></span>
					</a>		
                    <ul class="sub-menu">
						<li>
							<a href="<?=base_url()?>index.php/infrastructure/categories">
							Kategori / <em>Categories</em>
                            </a>
						</li>
                        <li>
							<a href="<?=base_url()?>index.php/infrastructure">
							Daftar Sarana Prasarana / <em>Infrastructure Data</em>
                            </a>
						</li>
                    </ul>			
				</li>	
                <li>
					<a href="<?=base_url()?>index.php/sitemap">
					<i class="icon-basket"></i>
					<span class="title">Peta Situs / <em>Sitemap</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>
                <li>
					<a href="<?=base_url()?>index.php/askus">
					<i class="icon-basket"></i>
					<span class="title">Tanya Kami / <em>Ask Us</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>		
                <li>
					<a href="<?=base_url()?>index.php/route">
					<i class="icon-basket"></i>
					<span class="title">Rute Perjalanan / <em>Route</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>   
                <li>
					<a href="<?=base_url()?>index.php/promotion">
					<i class="icon-basket"></i>
					<span class="title">Promosi / <em>Promotion</em></span>
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
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="add_new" class="btn green">
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
                            	<th>No.</th>
								<th>Judul</th>
								<th>Title</th>
                                <th>Konten</th>
                                <th>Content</th>
								<th>Tanggal/Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							</thead>
							<tbody>
                            	<?php foreach($query as $no=>$value) {?>
								<tr>
                                    <td><?=$no+1;?></td>
                                    <td><?=$value["judul_berita_ina"]?></td>
                                    <td><?=$value["judul_berita_eng"]?></td>
                                    <td><?=$value["isi_berita_ina"]?></td>
                                    <td><?=$value["isi_berita_eng"]?></td>
                                    <td><?=$value["tanggal_berita"]?></td>
                                    <td>
                                    	<!--
                                        <a class="edit" href="javascript:;">
                                        Edit </a>
                                        -->
                                        <a class="editNews" id="<?=$value["id_berita"]?>">
                                        Edit </a>
                                    </td>
                                    <td>
                                        <a class="deleteNews" id="<?=$value["id_berita"]?>" href="javascript:;">
                                        Delete </a>
                                    </td>
                                </tr>
                                <?php } ?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
            
            <div id="NewsForm">
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
							<form action="" method="post" id="form_news" class="form-horizontal">
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
										<div class="col-md-4">
											<input type="text" name="title_eng" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Judul (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="title_ind" data-required="1" class="form-control"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">News (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="isi_eng" data-error-container="#editor1_error"></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Berita (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="isi_ind" data-error-container="#editor1_error"></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">News Date</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
												<input type="text" class="form-control" readonly name="datepicker">
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
											<button type="submit" name="submit" id="submit_news" class="btn green" value="">Submit</button>
											<button type="button" id="CancelButton" class="btn default">Cancel</button>
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
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
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
	//$('#NewsForm').hide();
	
	$('#add_new').click(function(e){

		$('#NewsForm').show();
		document.getElementById('submit_news').value = "insert";
		document.getElementById('form_news').action="<?=base_url()."index.php/".$modul."/insert"?>";

		//$('#NewsForm').show();
		Query("POST","","<?=base_url()?>index.php/News/Form","#NewsForm","");
	});
	
	$('#CancelButton').click(function(e){
		$('#NewsForm').hide();
	});
	
	// initialize select2 tags
	$("#news_tags").change(function() {
		form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input 
	}).select2({
		tags: ["Pantai", "Wisata", "Jalan Jalan", "Renang", "Piknik"]
	});
	
	$('.editNews').click(function(e){
		var id = $(this).attr('id');
		Query("GET","id="+id,"<?=base_url()?>index.php/News/Form","#NewsForm","");
	});

	$('.deleteNews').click(function (e) {
            e.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }

			var id = $(this).attr("id");
            Query("GET", "id="+id, "<?=base_url()?>index.php/News/Delete","","");
        });
			
function Query(xType,xData,xUrl,xHasil,xEvent) {
	 	 $.ajax({
			cache:false,
			type: xType,
			url: xUrl,    
			data: xData,
			success: function (html){                 
			  $(xHasil).html(html);
			  eval(xEvent);				
			} 
		});
}
});
</script>
<!-- END CUSTOMIZE JQUERY -->


</body>
<!-- END BODY -->
</html>