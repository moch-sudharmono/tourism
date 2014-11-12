<?php
	$packages = isset($packages)?$packages:array();
	$image = isset($image)?$image:array();
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
                    <div class="carousel slide" id="myCarousel">
                      <!-- Carousel items -->
                      <?php 
					  	if( !empty($image) and isset($image) ):
					  ?>
                      <div class="carousel-inner">
                        <?php
							$no = 0;
					  		foreach($image as $val):
							$no++;
						?>
                        <div class="item <?php echo $no==1?"active":"" ?>">
                          <img alt="" src="<?php echo base_url() ?>upload/<?php echo $val->gambar?>" height="400" style="height:400px !important; width:100%;">
                        </div>
                        <?php
                        	endforeach;
						?>
                      </div>
                      <?php 
					  	else:
					  ?>
							
                      <?php 
					  	endif;
					  ?>
                      <?php
                      	if( !empty($image) and isset($image) and count($image) > 1 ):
					  ?>
                      <!-- Carousel nav -->
                      <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a data-slide="next" href="#myCarousel" class="carousel-control right">
                        <i class="fa fa-angle-right"></i>
                      </a>
                      <?php endif; ?>
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
              
              <p>
              Link Website terkait : 
              <a href="<?php echo $row->url; ?>" target="_blank">Website</a>
              </p>
                                    
            </div>
            <!-- END LEFT SIDEBAR -->   
            <!-- BEGIN RIGHT SIDEBAR -->            
            <?php  
				$this->load->view("frontend/tour_packages/packages.right.view.php")
			?>
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