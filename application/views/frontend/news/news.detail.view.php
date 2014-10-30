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
                <li><i class="fa fa-user"></i> By admin</li>
                <li><i class="fa fa-calendar"></i> <?php echo TglIndo($row->tanggal_berita) ?></li>
                <li><i class="fa fa-comments"></i> 17</li>
                <li><i class="fa fa-tags"></i> 
					<?php
						foreach( $row->tags as $rt ):
							echo "<label class='ina'>" . $rt->tag_ina . " | </label> ";	
							echo "<label class='eng'>" . $rt->tag_eng . " | </label> ";	
						endforeach;
					?>                
                </li>
              </ul>

                                    
            </div>
            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="col-md-3 col-sm-3 blog-sidebar">
              <!-- BEGIN RECENT NEWS -->                            
              <h3>Terpopuler / <em>Most View</em></h3>
              <div class="recent-news margin-bottom-10">
                <?php
                	if( isset( $popular ) and !empty($popular) ):
					foreach( $popular as $rp ):
				?>
                <div class="row margin-bottom-10">
                  <div class="col-md-12">
                    <h3>
                    	<a href="<?php echo base_url() ?>frontend/news/detail/<?php echo $rp->id_berita ?>/<?php echo SEO($rp->judul_berita_ina) ?>" class="ina">
                      		<?php echo strtoupper($rp->judul_berita_ina) ?>
                      	</a>
                      	<a href="<?php echo base_url() ?>frontend/news/detail/<?php echo $rp->id_berita ?>/<?php echo SEO($rp->judul_berita_eng) ?>" class="eng">
                      		<?php echo strtoupper($rp->judul_berita_eng) ?>
                      	</a>
                    </h3>
                    <p class="ina">
                  		<?php echo PotongKata($row->isi_berita_ina, 20) ?>
                  	</p>
                  	<p class="eng">
                  		<?php echo PotongKata($row->isi_berita_eng, 20) ?>
                  	</p>
                    
                    
                  </div>                      
                </div>
                <?php
                  	endforeach;
					else:
				?>
                	<label class="ina"> Data tidak ditemukan</label>
                    <label class="eng"> Data not Found</label>
                <?php	
					endif;
				?>
              </div>
              <!-- END RECENT NEWS -->                            

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

              <!-- BEGIN BLOG TAGS -->
              <div class="blog-tags margin-bottom-20">
                <h3>Tag / <em>Tags</em></h3>
                <ul>
                <?php
                	if( isset($news_tag) and !empty($news_tag) ):
					foreach( $news_tag as $rnt ):
				?>
                  <li>
                  	<a href="#" class="ina"><i class="fa fa-tags"></i><?php echo $rnt->tag_ina ?></a>
                    <a href="#" class="eng"><i class="fa fa-tags"></i><?php echo $rnt->tag_ina ?></a>
                  </li>
                <?php
					endforeach;
                	endif;
				?>
                </ul>
              </div>
              <!-- END BLOG TAGS -->
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
<?php endforeach; ?>