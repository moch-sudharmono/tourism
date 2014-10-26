<?php
	$packages = isset($packages)?$packages:array();
	if( isset($packages) and !empty($packages) ):
	foreach( $packages as $row ):
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
                        <img src="<?php echo base_url() ?>inc/frontend/pages/img/posts/img1.jpg" alt="">
                      </div>
                      <div class="item">
                        <!-- BEGIN VIDEO -->   
                        <iframe src="http://player.vimeo.com/video/56974716?portrait=0" style="width:100%; border:0" allowfullscreen="" height="259"></iframe>
                        <!-- END VIDEO -->   
                      </div>
                      <div class="item active">
                        <img src="<?php echo base_url() ?>inc/frontend/pages/img/posts/img3.jpg" alt="">
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
              	<a href="#" class="ina"><?php echo strtoupper($row->paket_wisata_ina) ?></a>
                <a href="#" class="eng"><?php echo strtoupper($row->paket_wisata_eng) ?></a>
              </h2>
              <p class="ina">
              	 <?php echo $row->deskripsi_ina ?>
              </p>
              <p class="eng">
              	 <?php echo $row->deskripsi_eng ?>
              </p>
                                    
            </div>
            <!-- END LEFT SIDEBAR -->            
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