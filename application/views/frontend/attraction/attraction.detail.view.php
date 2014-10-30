<?php
	$attraction = isset($attraction)?$attraction:array();
	if( isset($attraction) and !empty($attraction) ):
	foreach( $attraction as $row ):
?>
<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">

        <div class="content-page">
          <div class="row">
            <!-- BEGIN LEFT SIDEBAR -->            
            <div class="col-md-9 col-sm-9 blog-item">
              <div class="blog-item-img">
                <!-- BEGIN CAROUSEL -->            
                <div class="front-carousel">
                  <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="item">
                        <img src="<?php echo base_url() ?>upload/slideshow/dive-wakatobi.png" alt="">
                      </div>
                      <div class="item active">
                        <img src="<?php echo base_url() ?>upload/slideshow/Reefs-within-Wakatobi-sanctuary_aerial-view_photo-by-Didi-Lotze.png" alt="">
                      </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>                
                </div>
                <!-- END CAROUSEL -->             
              </div>
              <h2>
              	<a href="#" class="ina"><?php echo strtoupper($row->nama_lokasi_wisata_ina) ?></a>
                <a href="#" class="eng"><?php echo strtoupper($row->nama_lokasi_wisata_eng) ?></a>
              </h2>
              <div class="ina">
              	 <?php echo $row->deskripsi_ina ?>
              </div>
              <div class="eng">
              	 <?php echo $row->deskripsi_eng ?>
              </div>
                                    
            </div>
            <!-- END LEFT SIDEBAR -->  
            
            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="col-md-3 col-sm-3 blog-sidebar">
                                       
              <!-- BEGIN BLOG PHOTOS STREAM -->
              <div class="blog-photo-stream margin-bottom-20">
                <h3>Foto-foto / <em>Photos</em></h3>
                <ul class="list-unstyled">
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/people/img5-small.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/works/img1.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/people/img4-large.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/works/img6.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/pics/img1-large.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/pics/img2-large.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/works/img3.jpg"></a></li>
                  <li><a href="#"><img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/people/img2-large.jpg"></a></li>
                </ul>                    
              </div>
              <!-- END BLOG PHOTOS STREAM -->
              
              <!-- BEGIN SARANA -->                            
              <h3>Sarana dan Prasarana / <em>Infrastructure</em></h3>
              <div class="recent-news margin-bottom-10">
                <ul>
                	<li>
                    	Hotel
                    	<ul>
                        	<li>Hotel 1</li>
                            <li>Hotel 2</li>
                        </ul>
                    </li>
                    <li>Bandara</li>
                </ul>
              </div>
              <!-- END SARANA -->  
              
              <!-- BEGIN PETA -->                            
              <h3>Peta / <em>Map</em></h3>
              <div class="recent-news margin-bottom-10">
                <img src="<?php echo base_url() ?>upload/location/staticmap.gif" />
              </div>
              <!-- END PETA -->  
              
            </div>
            <!-- END RIGHT SIDEBAR -->   
                      
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>
<?php 
	endforeach; 
	else:
?>
	<h4 class="ina"> Data tidak ditemukan </h4>
	<h4 class="eng"> Data not Found </h4>
<?php	
	endif;
?>