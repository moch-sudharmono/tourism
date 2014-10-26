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
				
				<li>
					<a href="<?php echo base_url()?>">
					<i class="icon-home"></i>
					<span class="title">Utama / <em>Dashboard</em></span>                    
					<!--<span class="selected"></span>-->
					<span class="arrow"></span>
					</a>
					
				</li>
				<li class="start active open">
					<a href="<?php echo base_url()?>index.php/news">
					<i class="icon-basket"></i>
					<span class="title">Berita / <em>News</em></span>
                    <span class="arrow "></span>
					</a>	
                    <ul class="sub-menu">
                    	<li>
							<a href="<?php echo base_url()?>index.php/news">
							Daftar Berita / <em>News Data</em>
                            </a>
						</li>
						<li class="start active open">
							<a href="<?php echo base_url()?>index.php/tag">
							Tag
                            </a>
						</li>
                    </ul>				
				</li>
				<li>
					<a href="<?php echo base_url()?>index.php/profile">
					<i class="icon-basket"></i>
					<span class="title">Lokasi Wisata / <em>Profile</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>				
                <li>
					<a href="<?php echo base_url()?>index.php/testimonial">
					<i class="icon-rocket"></i>
					<span class="title">Testimoni / <em>Testimonial</em></span>
					<span class="arrow "></span>
					</a>					
				</li>      
                <li>
					<a href="<?php echo base_url()?>index.php/gallery">
					<i class="icon-basket"></i>
					<span class="title">Galeri foto / <em>Gallery</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>	
                <li>
					<a href="<?php echo base_url()?>index.php/attraction">
					<i class="icon-basket"></i>
					<span class="title">Paket Wisata / <em>Potential Attraction</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>
				 <li>
					<a href="<?php echo base_url()?>index.php/infrastructure">
					<i class="icon-basket"></i>
					<span class="title">Sarana Prasarana / <em>Infrastructure</em></span>
                    <span class="arrow "></span>
					</a>		
                    <ul class="sub-menu">
						<li>
							<a href="<?php echo base_url()?>index.php/infrastructure/categories">
							Kategori / <em>Categories</em>
                            </a>
						</li>
                        <li>
							<a href="<?php echo base_url()?>index.php/infrastructure">
							Daftar Sarana Prasarana / <em>Infrastructure Data</em>
                            </a>
						</li>
                    </ul>			
				</li>	
                <li>
					<a href="<?php echo base_url()?>index.php/sitemap">
					<i class="icon-basket"></i>
					<span class="title">Peta Situs / <em>Sitemap</em></span>
                    <span class="arrow "></span>
					</a>					
				</li>
                <li>
					<a href="<?php echo base_url()?>index.php/askus">
					<i class="icon-basket"></i>
					<span class="title">Tanya Kami / <em>Ask Us</em></span>
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
								<i class="fa fa-edit"></i><?php echo $title?> Table
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
											<button id="sample_editable_1_new" class="btn green">
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
									 Titik Perjalanan
								</th>
								<th>
									 Delete
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Jogja
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 Jakarta
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 Makassar
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 Bau Bau
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 Wakatobi
								</td>
								<td>

									<a class="delete" href="javascript:;">
									Delete </a>
								</td>
							</tr>
							<tr>
								<td>
									 Surabaya
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
			<!-- END PAGE CONTENT -->
	
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
<?php include('jsfile.php'); ?>
</body>
<!-- END BODY -->
</html>