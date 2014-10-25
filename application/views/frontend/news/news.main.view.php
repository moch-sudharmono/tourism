<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <h2>Berita / <em>News</em></h2>
        <div class="content-page">
          <div class="row">
            <!-- BEGIN LEFT SIDEBAR -->            
            <div class="col-md-9 col-sm-9 blog-posts">
              
              <?php
              	$news = isset($news)?$news:array();
				foreach( $news as $row ):
			  ?>
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <!-- BEGIN CAROUSEL -->            
                  <div class="front-carousel">
                    <div class="carousel slide" id="myCarousel">
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                        <div class="item">
                          <img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/works/img1.jpg">
                        </div>
                        <div class="item">
                          <img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/works/img2.jpg">
                        </div>
                        <div class="item active">
                          <img alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/works/img3.jpg">
                        </div>
                      </div>
                      <!-- Carousel nav -->
                      <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a data-slide="next" href="#myCarousel" class="carousel-control right">
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>                
                  </div>
                  <!-- END CAROUSEL -->             
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3>
                      <a href="blog-item.html">
                      	<label class="ina"><?php echo strtoupper($row->judul_berita_ina) ?></label>
                        <label class="eng"><?php echo strtoupper($row->judul_berita_eng) ?></label>
                      </a>
                  </h3>
                  <ul class="blog-info">
                    <li><i class="fa fa-calendar"></i> <?php echo TglIndo($row->tanggal_berita) ?></li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                  </ul>
                  <p class="ina">
                  	<?php echo $row->isi_berita_ina ?>
                  </p>
                  <p class="eng">
                  	<?php echo $row->isi_berita_eng ?>
                  </p>
                  <a href="blog-item.html" class="more">Read more <i class="icon-angle-right"></i></a>
                </div>
              </div>
              <hr class="blog-post-sep">
             <?php endforeach; ?>
             
              <ul class="pagination">
                <li><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">Next</a></li>
              </ul>               
            </div>
            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="col-md-3 col-sm-3 blog-sidebar">

              <!-- BEGIN RECENT NEWS -->                            
              <h2>Berita Terpopuler</h2>
              <div class="recent-news margin-bottom-10">
                <div class="row margin-bottom-10">
                  <div class="col-md-3">
                    <img class="img-responsive" alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/people/img2-large.jpg">                        
                  </div>
                  <div class="col-md-9 recent-news-inner">
                    <h3><a href="#">Letiusto gnissimos</a></h3>
                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                  </div>                        
                </div>
                <div class="row margin-bottom-10">
                  <div class="col-md-3">
                    <img class="img-responsive" alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/people/img1-large.jpg">                        
                  </div>
                  <div class="col-md-9 recent-news-inner">
                    <h3><a href="#">Deiusto anissimos</a></h3>
                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                  </div>                        
                </div>
                <div class="row margin-bottom-10">
                  <div class="col-md-3">
                    <img class="img-responsive" alt="" src="<?php echo base_url() ?>inc/frontend/pages/img/people/img3-large.jpg">                        
                  </div>
                  <div class="col-md-9 recent-news-inner">
                    <h3><a href="#">Tesiusto baissimos</a></h3>
                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                  </div>                        
                </div>
              </div>
              <!-- END RECENT NEWS -->                            

              <!-- BEGIN BLOG PHOTOS STREAM -->
              <div class="blog-photo-stream margin-bottom-20">
                <h2>Gambar-gambar</h2>
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
                <h2>Tags</h2>
                <ul>
                  <li><a href="#"><i class="fa fa-tags"></i>OS</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Metronic</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Dell</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Conquer</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>MS</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Google</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Keenthemes</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Twitter</a></li>
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