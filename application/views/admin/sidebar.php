<?php
	$row = $this->m_configuration->getConfiguration()->row();
	$segment2 = $this->uri->segment(2);
	$segment3 = $this->uri->segment(3);
	$segment1 = $this->uri->segment(1);

	if($segment2=='module' || $segment2=='agenda' || $segment2=='discussion' || $segment2=='category_com' || $segment2=='member')
	{
		$active = 'comdev';
	}
	else if($segment2 == 'configuration')
	{
		$active = 'conf';
	}
	else if($segment1 == 'mapping')
	{
		$active = 'mapping';
	}
?>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
				<?PHP echo $row->system_name?>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="hor-menu hor-menu-light hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="classic-menu-dropdown <?PHP if($active=='mapping') echo 'active' ?>">
					<a href="<?PHP echo base_url() ?>mapping/point">
						Pemetaan
					</a>
				</li>
				<li class="classic-menu-dropdown">
					<a href="<?php echo base_url() ?>admin/home">
						Promosi
					</a>
				</li>
				<li class="classic-menu-dropdown <?PHP if($active=='comdev') echo 'active' ?>">
					<a href="<?PHP echo base_url() ?>admin/module">
						Pengembangan Masyarakat
						<span class="selected"></span>
					</a>
				</li>
				<li class="classic-menu-dropdown <?PHP if($active=='conf') echo 'active' ?>">
					<a href="<?PHP echo base_url() ?>admin/configuration">
						Pengaturan
					</a>
				</li>
			</ul>
		</div>
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<span class="username username-hide-on-mobile"><?PHP echo $this->session->userdata('name');?>
					 </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#dialog-changepass" data-toggle="modal">
							<i class="icon-user"></i> Ubah Password </a>
						</li>
						<li>
							<a href="<?PHP echo base_url()?>admin/login/logout">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
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

				<?PHP 
					if($active == 'comdev')
					{
				?>

				<li class="start <?PHP if($segment2 == 'module') echo 'active open' ?>">
					<a href="javascript:;">
					<i class="icon-book-open"></i>
					<span class="title">Modul</span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="<?PHP if($segment2 == 'module' && $segment3 == '') echo 'open' ?>">
							<a href="<?PHP echo base_url() ?>admin/module">
							<i class="icon-list"></i>
							<span class="badge badge-roundless badge-danger" id="notifmodule" style="display:none"><i class="fa fa-exclamation"></i></span>
							Daftar Modul</a>
						</li>
						<li class="<?PHP if($segment2 == 'module' && $segment3 == 'comments') echo 'open' ?>">
							<a href="<?PHP echo base_url() ?>admin/module/comments">
							<i class="icon-bubble"></i>
							<span class="badge badge-roundless badge-danger" id="notifmodule" style="display:none"><i class="fa fa-exclamation"></i></span>
							Komentar</a>
						</li>
					</ul>
				</li>
				<li class="start <?PHP if($segment2 == 'discussion') echo 'active open' ?>">
					<a href="javascript:;">
					<i class="icon-bubbles"></i>
					<span class="title">Forum Diskusi</span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="<?PHP if($segment2 == 'discussion' && $segment3 == '') echo 'open' ?>">
							<a href="<?PHP echo base_url() ?>admin/discussion">
							<i class="icon-list"></i>
							<span class="badge badge-roundless badge-danger" id="notifmodule" style="display:none"><i class="fa fa-exclamation"></i></span>
							Daftar Diskusi</a>
						</li>
						<li class="<?PHP if($segment2 == 'discussion' && $segment3 == 'comments') echo 'open' ?>">
							<a href="<?PHP echo base_url() ?>admin/discussion/comments">
							<i class="icon-bubble"></i>
							<span class="badge badge-roundless badge-danger" id="notifmodule" style="display:none"><i class="fa fa-exclamation"></i></span>
							Komentar</a>
						</li>
					</ul>
				</li>
				<li class="start <?PHP if($segment2 == 'agenda') echo 'active open' ?>">
					<a href="<?PHP echo base_url() ?>admin/agenda">
					<i class="icon-calendar"></i>
					<span class="title">Agenda</span>
					</a>
				</li>	
				<li class="start <?PHP if($segment2 == 'member') echo 'active open' ?>">
					<a href="<?PHP echo base_url() ?>admin/member">
					<i class="icon-user"></i>
					<span class="title">Daftar Member</span>
					</a>
				</li>
				<li class="start <?PHP if($segment2 == 'category_com') echo 'active open' ?>">
					<a href="<?PHP echo base_url() ?>admin/category_com">
					<i class="icon-list"></i>
					<span class="title">Kategori</span>
					</a>
				</li>	
				<?PHP
					}
					else if($active == 'mapping')
					{
				?>
				<li class="start <?php if($this->uri->segment(2)=="point") echo 'active open'; ?>">
					<a href="<?PHP echo site_url()?>mapping/point">
					<i class="icon-pointer"></i>
					Lokasi</a>
				</li>
				<li class="start <?php if($this->uri->segment(2)=="category") echo 'active open'; ?>">
					<a href="<?PHP echo site_url()?>mapping/category">
					<i class="icon-map"></i>
					Kategori</a>
				</li>
				<li class="start <?php if($this->uri->segment(2)=="map") echo 'active open'; ?>">
					<a href="<?PHP echo site_url()?>mapping/map">
					<i class="icon-layers"></i>
					Lapisan Peta</a>
				</li>
				<?PHP
					}
				?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<div class="modal fade bs-modal-sm in" id="dialog-changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Ubah Password</h4>
						</div>
						<div class="modal-body">
							<form method="post" action="<?PHP echo base_url()?>admin/configuration/changePassword" enctype="multipart/form-data" role="form">
								<div class="form-body">
									<div class="form-group">
										<label><b>Password Lama</b></label>
										<input class="form-control" type="password" name="old_password" placeholder="Password Lama">
									</div>
									<div class="form-group">
										<label><b>Password Baru</b></label>
										<input class="form-control" type="password" name="new_password" placeholder="Password Baru">
									</div>
									<div class="form-group">
										<label><b>Konfirmasi Password</b></label>
										<input class="form-control" type="password" name="new_password_conf" placeholder="Konfirmasi Password Baru">
										<input type="hidden" name="page" value="<?PHP echo $this->uri->segment(2)?>">
										<input type="hidden" name="page2" value="<?PHP echo $this->uri->segment(1)?>">
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn blue">Simpan</button>
							</form>
							<button type="button" class="btn default" data-dismiss="modal">Batal</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>

