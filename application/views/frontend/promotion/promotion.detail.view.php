<?php
	$promotion = isset($promotion)?$promotion:array();
	$files = isset($files)?$files:array();
	$image = isset($image)?$image:array();
	foreach( $promotion as $row ):
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
                      <div class="carousel-inner">
                        <?php
							$no = 0;
                        	foreach( $image as $rg ):
							$no++;
						?>
                        <div class="item <?php echo $no==1?"active":"" ?>">
                          <img alt="" src="<?php echo base_url() ?>upload/<?php echo $rg->gambar ?>">
                        </div>
                        <?php
                        	endforeach;
						?>
                      </div>
                     
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
              	<a href="#" class="ina"><?php echo strtoupper($row->promosi_ina) ?></a>
                <a href="#" class="eng"><?php echo strtoupper($row->promosi_eng) ?></a>
              </h2>
              <div class="ina">
              	 <?php echo $row->deskripsi_ina ?>
              </div>
              <div class="eng">
              	 <?php echo $row->deskripsi_eng ?>
              </div>
              
              <div class="file">
              	<h4 class="ina">Berkas Promosi</h4>
                <h4 class="eng">Promotion File</h4>
              	<ul>
              	<?php
					foreach($files as $val){
				?>
                 <li>
              	 <a href="<?php echo base_url() ?>upload/<?php echo $val['berkas']; ?>"> Download </a>
                 </li>
                 <?php 
				 	}
				?>
                </ul>
              </div>
              
              
              <ul class="blog-info">
                <li><i class="fa fa-calendar"></i> <?php echo TglOnlyIndo($row->tanggal_promosi) ?></li>
                <li><i class="fa fa-calendar"></i> 
                	<label class="eng">Expired on </label>
					<label class="ina">Berakhir pada</label>
					<?php echo TglOnlyIndo($row->tanggal_kadarluarsa) ?></li>
                <li><i class="fa fa-tags"></i>  
                	<label class="ina"><?php echo $kategori[0]->kategori_promosi_ina ?></label> 
                    <label class="eng"><?php echo $kategori[0]->kategori_promosi_eng ?></label>
                </li>
              </ul>

                                    
            </div>
            <!-- END LEFT SIDEBAR -->
            
            <!-- BEGIN RIGHT SIDEBAR -->            
            <?php  
				$this->load->view("frontend/promotion/promotion.right.view.php")
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
<?php endforeach; ?>