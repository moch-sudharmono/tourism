<style>
	#font1 {
	  font-family: "Open Sans";
	  font-style: normal;
	  font-weight: 400;
	  font-size:20px; color:#FFFFFF;
	  padding-top:15px;
	  src: local("Open Sans"), local("OpenSans"), url("http://fonts.gstatic.com/s/opensans/v10/uYKcPVoh6c5R0NpdEY5A-Q.woff") format("woff");
	}
</style>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<span id="font1">Tourism System</span>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->

        <div class="hor-menu hor-menu-light hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="classic-menu-dropdown">
					<a href="<?php echo base_url() ?>mapping/point">
						Pemetaan
					</a>
				</li>
				<li class="classic-menu-dropdown active">
					<a href="<?php echo base_url() ?>admin/news">
						Promosi
                        <span class="selected"></span>
					</a>
				</li>
				<li class="classic-menu-dropdown">
					<a href="<?php echo base_url() ?>admin/module">
						Pengembangan Masyarakat
						
					</a>
				</li>
				<li class="classic-menu-dropdown">
					<a href="<?php echo base_url() ?>admin/configuration">
						Pengaturan
					</a>
				</li>
			</ul>
		</div>
        
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
					
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<!--<img alt="" class="img-circle hide1" src="<?php echo base_url();?>inc/admin/layout/img/avatar3_small.jpg"/>-->
					<span class="username username-hide-on-mobile">
					Admin </span>
					<!--<i class="fa fa-angle-down"></i>-->
					</a>
					<ul class="dropdown-menu">
                    	<!--
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
                        -->
                        <li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> Ubah Password </a>
						</li>
						<li>
							<a href="<?php echo base_url() ?>admin/login/logout">
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