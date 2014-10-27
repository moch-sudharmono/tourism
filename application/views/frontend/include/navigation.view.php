<!-- BEGIN NAVIGATION -->
<div class="header-navigation pull-right font-transform-inherit">
  <ul>
    <li class="home" id="home">
      <a href="<?php echo base_url() ?>">
        Home 
      </a>
    </li>
    <li class="news" id="news">
      <a href="<?php echo base_url() ?>frontend/news">
        Berita 
      </a>
    </li>
    <li class="dropdown dropdown-megamenu">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
        Wakatobi
      </a>
      <ul class="dropdown-menu">
        <li>
          <div class="header-navigation-content">
            <div class="row">
              <div class="col-md-4 header-navigation-col">
                <h4>Wanci</h4>
                <ul>
                  <li><a href="<?php echo base_url() ?>">Pantai 1</a></li>
                  <li><a href="<?php echo base_url() ?>">Pantai 2</a></li>
                  <li><a href="<?php echo base_url() ?>">Pantai 3</a></li>
                </ul>
              </div>
              <div class="col-md-4 header-navigation-col">
                <h4>Kalidupa</h4>
                <ul>
                  <li><a href="<?php echo base_url() ?>">Base Layer</a></li>
                  <li><a href="<?php echo base_url() ?>">Character</a></li>
                  <li><a href="<?php echo base_url() ?>">Chinos</a></li>
                  <li><a href="<?php echo base_url() ?>">Combats</a></li>
                </ul>
              </div>
              <div class="col-md-4 header-navigation-col">
                <h4>Tomia</h4>
                <ul>
                  <li><a href="<?php echo base_url() ?>">Belts</a></li>
                  <li><a href="<?php echo base_url() ?>">Caps</a></li>
                  <li><a href="<?php echo base_url() ?>">Gloves</a></li>
                </ul>

                <h4>Binongko</h4>
                <ul>
                  <li><a href="<?php echo base_url() ?>">Jackets</a></li>
                  <li><a href="<?php echo base_url() ?>">Bottoms</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle ina" data-toggle="dropdown" data-target="#" href="#">
        Potensi Wisata
      </a>
      <a class="dropdown-toggle eng" data-toggle="dropdown" data-target="#" href="#">
        Potensi Wisata
      </a>
      <ul class="dropdown-menu">
      	<?php 
			$potensi_wisata = isset( $potensi_wisata )?$potensi_wisata:array();
			foreach( $potensi_wisata as $row ):
		?>
	        <li>
            	<a href="<?php echo base_url() ?>frontend/attraction/" class="ina"><?php echo $row->kategori_ina ?></a>
                <a href="<?php echo base_url() ?>" class="eng"><?php echo $row->kategori_ina ?></a>
            </li>
        <?php
        	endforeach;
        ?>
      </ul>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
        Fasilitas Wisata 
      </a>
        
      <ul class="dropdown-menu">
        <li><a href="feature-typography.html">Bandara</a></li>
        <li><a href="feature-buttons.html">Hotel</a></li>
        <li><a href="feature-forms.html">Rumah Makan</a></li>
      </ul>
    </li>
    <li class="tour_packages" id="tour_packages">
      <a href="<?php echo base_url() ?>frontend/tour_packages">
        Paket Wisata 
      </a>
    </li>
    <li class="tour_packages" id="promotion">
      <a href="<?php echo base_url() ?>frontend/promotion">
        Promosi
      </a>
    </li>
    <li class="gallery" id="gallery">
      <a href="<?php echo base_url() ?>frontend/gallery">
        Gallery
      </a>
    </li>
    <li class="contact" id="contact"><a href="<?php echo base_url() ?>frontend/contact">Tanya Kami</a></li>

    <!-- BEGIN TOP SEARCH -->
    <li class="menu-search">
      <span class="sep"></span>
      <i class="fa fa-search search-btn"></i>
      <div class="search-box">
        <form action="#">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">Search</button>
            </span>
          </div>
        </form>
      </div> 
    </li>
    <!-- END TOP SEARCH -->
  </ul>
</div>
<!-- END NAVIGATION -->