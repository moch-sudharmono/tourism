<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
            <li class="start home admin_menu" id="home">
                <a href="<?php echo base_url() ?>admin/home">
                <i class="icon-home"></i>
                <span class="title">Utama / <em>Dashboard</em></span>                    
                <!--<span class="selected"></span>-->
                </a>
                
            </li>
            <li class="parent admin_menu">
                <a href="<?php echo base_url() ?>news">
                <i class="icon-basket"></i>
                <span class="title">Berita / <em>News</em></span>
                <span class="arrow "></span>
                </a>	
                <ul class="sub-menu">
                    <li id="news">
                        <a href="<?php echo base_url() ?>news">
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
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>profile">
                <i class="icon-basket"></i>
                <span class="title">Lokasi Wisata / <em>Profile</em></span>
                <span class="arrow "></span>
                </a>					
            </li>				
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>testimonial">
                <i class="icon-rocket"></i>
                <span class="title">Testimoni / <em>Testimonial</em></span>
                <span class="arrow "></span>
                </a>					
            </li>      
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>gallery">
                <i class="icon-basket"></i>
                <span class="title">Galeri foto / <em>Gallery</em></span>
                <span class="arrow "></span>
                </a>					
            </li>	
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>attraction">
                <i class="icon-basket"></i>
                <span class="title">Paket Wisata / <em>Potential Attraction</em></span>
                <span class="arrow "></span>
                </a>					
            </li>
            <li class="admin_menu parent">
                <a href="<?php echo base_url() ?>infrastructure">
                <i class="icon-basket"></i>
                <span class="title">Sarana Prasarana / <em>Infrastructure</em></span>
                <span class="arrow "></span>
                </a>		
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url() ?>infrastructure/categories">
                        Kategori / <em>Categories</em>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>infrastructure">
                        Daftar Sarana Prasarana / <em>Infrastructure Data</em>
                        </a>
                    </li>
                </ul>			
            </li>	
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>sitemap">
                <i class="icon-basket"></i>
                <span class="title">Peta Situs / <em>Sitemap</em></span>
                <span class="arrow "></span>
                </a>					
            </li>
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>askus">
                <i class="icon-basket"></i>
                <span class="title">Tanya Kami / <em>Ask Us</em></span>
                <span class="arrow "></span>
                </a>					
            </li>
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>route">
                <i class="icon-basket"></i>
                <span class="title">Rute Perjalanan / <em>Route</em></span>
                <span class="arrow "></span>
                </a>					
            </li>   
            <li class="admin_menu">
                <a href="<?php echo base_url() ?>promotion">
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

<script>
	<?php if( isset($class) and !empty($class) ): ?>
		$(".admin_menu").removeClass("active");
		$("#<?php echo $class ?>").addClass("active"); 
		$("#<?php echo $class ?>").parents("li").addClass("active"); 
	<?php endif; ?>
</script>