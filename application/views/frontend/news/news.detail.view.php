<?php
	$news = isset($news)?$news:array();
	foreach( $news as $row ):
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
					  	if( !empty($row->gambar) and isset($row->gambar) ):
					  ?>
                      <div class="carousel-inner">
                        <?php
							$no = 0;
                        	foreach( $row->gambar as $rg ):
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
					  	else:
					  ?>

                      <?php 
					  	endif;
					  ?>
                      <?php
                      	if( !empty($row->gambar) and isset($row->gambar) and count($row->gambar) > 1 ):
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
              	<a href="#" class="ina"><?php echo strtoupper($row->judul_berita_ina) ?></a>
                <a href="#" class="eng"><?php echo strtoupper($row->judul_berita_eng) ?></a>
              </h2>
              <div class="ina">
              	 <?php echo $row->isi_berita_ina ?>
              </div>
              <div class="eng">
              	 <?php echo $row->isi_berita_eng ?>
              </div>
              <ul class="blog-info">
                <li><i class="fa fa-calendar"></i> <?php echo TglIndo($row->tanggal_berita) ?></li>
                <li><i class="fa fa-comments"></i> 17</li>
                <li><i class="fa fa-tags"></i> 
					<?php
						foreach( $row->tags as $rt ):
							echo "
								<label class='ina'>
								<a href='" . base_url() . "frontend/news/tag/". $rt->id_berita_tag ." / ". SEO($rt->tag_ina) . "'>
								" . $rt->tag_ina . "</a>
								|
								</label>
							";	
							echo "
								<label class='eng'>
								<a href='" . base_url() . "frontend/news/tag/". $rt->id_berita_tag ." / ". SEO($rt->tag_eng) . "'>
								" . $rt->tag_eng . "</a> 
								|
								</label> 
							";	
						endforeach;
					?>             
                </li>
              </ul>

                                    
            </div>
            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <?php  
				$this->load->view("frontend/news/news.right.view.php")
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