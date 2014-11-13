<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
            <!--<li class="start home admin_menu" id="home">
                <a href="<?php echo base_url() ?>admin/home">
                <i class="icon-home"></i>
                <span class="title">Utama / <em>Dashboard</em></span>                    
                <!--<span class="selected"></span>-->
                </a>
                
            </li>-->
            <li class="parent admin_menu">
                <a href="#">
                <i class="fa fa-file-text-o"></i>
                <span class="title">Berita / <em>News</em></span>
                <span class="arrow "></span>
                </a>	
                <ul class="sub-menu">
                    <li id="news">
                        <a href="<?php echo base_url() ?>admin/news">
                        Daftar Berita / <em>News Data</em>
                        </a>
                    </li>
                    <li id="tag">
                        <a href="<?php echo base_url() ?>admin/tag">
                        	Tag
                        </a>
                    </li>
                </ul>				
            </li>
            <li class="admin_menu" id="profile">
                <a href="<?php echo base_url() ?>admin/profile">
                <i class="fa fa-map-marker"></i>
                <span class="title">Lokasi Wisata / <em>Profile</em></span>
                </a>					
            </li>				
            <li class="admin_menu" id="testimoni">
                <a href="<?php echo base_url() ?>admin/testimonial">
                    <i class="fa fa-comments-o"></i>
                    <span class="title">Testimoni / <em>Testimonial</em></span>

                </a>					
            </li>      
            <!--<li class="admin_menu">
                <a href="<?php echo base_url() ?>gallery">
                <i class="icon-basket"></i>
                <span class="title">Galeri foto / <em>Gallery</em></span>
                <span class="arrow "></span>
                </a>					
            </li>	-->
            <li class="admin_menu" id="attraction">
                <a href="<?php echo base_url() ?>admin/attraction">
                <i class="fa fa-building-o"></i>
                <span class="title">Paket Wisata / <em>Potential Attraction</em></span>

                </a>					
            </li>
            <li class="admin_menu parent">
                <a href="<?php echo base_url() ?>admin/infrastructure">
                <i class="fa fa-life-bouy"></i>
                <span class="title">Sarana Prasarana / <em>Infrastructure</em></span>
                <span class="arrow "></span>
                </a>		
                <ul class="sub-menu parent">
                    <li id="infrastructure_category">
                        <a href="<?php echo base_url() ?>admin/infrastructure_category">
                        Kategori / <em>Categories</em>
                        </a>
                    </li>
                    <li id="infrastructure">
                        <a href="<?php echo base_url() ?>admin/infrastructure">
                        Daftar Sarana Prasarana / <em>Infrastructure Data</em>
                        </a>
                    </li>
                </ul>			
            </li>	
           <!-- <li class="admin_menu" id="sitemap">
                <a href="<?php echo base_url() ?>admin/sitemap">
                <i class="fa fa-sitemap"></i>
                <span class="title">Peta Situs / <em>Sitemap</em></span>
                </a>					
            </li>-->
            <li class="admin_menu" id="askus">
                <a href="<?php echo base_url() ?>admin/askus">
                <i class="fa fa-question"></i>
                <span class="title">Tanya Kami / <em>Ask Us</em></span>

                </a>					
            </li>
            <li class="admin_menu parent">
                <a href="<?php echo base_url() ?>admin/route">
                <i class="fa fa-road"></i>
                <span class="title">Rute Perjalanan / <em>Route</em></span>
                <span class="arrow "></span>
                </a>	
                <ul class="sub-menu">
                    <li id="route">
                        <a href="<?php echo base_url() ?>admin/route">
                        Rute Perjalanan / <em>Route</em>
                        </a>
                    </li>
                    <li id="edge">
                        <a href="<?php echo base_url() ?>admin/edge">
                        Jalur Perjalanan / <em>Edges</em>
                        </a>
                    </li>
                    <li id="node">
                        <a href="<?php echo base_url() ?>admin/node">
                        Titik Perjalanan / <em>Nodes</em>
                        </a>
                    </li>
                </ul>						
            </li>   
            <li class="admin_menu parent">
                <a href="<?php echo base_url() ?>admin/promotion">
                <i class="fa fa-tags"></i>
                <span class="title">Promosi / <em>Promotion</em></span>
                <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li id="promotion">
                        <a href="<?php echo base_url() ?>admin/promotion">
                        Promosi / <em>Promotion</em>
                        </a>
                    </li>
                    <li id="promotion_category">
                        <a href="<?php echo base_url() ?>admin/promotion_category">
                        	Kategori / <em>Category</em>
                        </a>
                    </li>
                </ul>						
            </li> 
            <li class="admin_menu" id="icon">
                <a href="<?php echo base_url() ?>admin/icon">
                <i class="fa fa-info"></i>
                <span class="title">Icon</span>

                </a>					
            </li>   
            <!--<li class="admin_menu" id="configuration">
                <a href="<?php echo base_url() ?>admin/promotion_configuration">
                	<i class="fa  fa-wrench"></i>
               	 	<span class="title">Pengaturan / <em>Configuration</em></span>
                </a>
                				
            </li>  -->  
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->

<script>
	<?php if( isset($class) and !empty($class) ): ?>
		$(".admin_menu").removeClass("active");
		$("#<?php echo $class ?>").addClass("active"); 
		$("#<?php echo $class ?>").parents("li").addClass("active"); 
	<?php endif; ?>
</script>