<?php
	$profile = isset($profile)?$profile:array();
	$id_lokasi_wisata = isset($profile[0]->id_lokasi_wisata)?$profile[0]->id_lokasi_wisata:0;
	//echo $id_lokasi_wisata;
	foreach( $profile as $row ):
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
                          <img alt="" src="<?php echo base_url() ?>upload/<?php echo $rg->gambar ?>" height="400" style="height:400px !important; width:100%;">
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
              	<a href="#" class="ina"><?php echo strtoupper($row->nama_lokasi_wisata_ina) ?></a>
                <a href="#" class="eng"><?php echo strtoupper($row->nama_lokasi_wisata_eng) ?></a>
              </h2>
              <div class="ina">
              	 <?php echo $row->deskripsi_ina ?>
              </div>
              <div class="eng">
              	 <?php echo $row->deskripsi_eng ?>
              </div>
              
              <hr />
              
              <h2 class="ina"> Tampilan Pada Peta </h2>
              <h2 class="eng"> View on Map </h2>
              <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>
              
              
              <hr />
              
              <h2 class="ina"> Sarana dan Prasarana </h2>
              <h2 class="eng"> Infrastructure </h2>
              <?php
              	$sarana = isset($sarana)?$sarana:array();
				foreach( $sarana as $rs ):
			  ?>              
              	<h3 class="ina">
					<img src="<?php echo base_url() ?>upload/<?php echo $rs->icon ?>" />
					<?php echo $rs->kategori_sarana_prasarana_ina ?>
                </h3>
              	<h3 class="eng">
                	<img src="<?php echo base_url() ?>upload/<?php echo $rs->icon ?>" />
					<?php echo $rs->kategori_sarana_prasarana_eng ?>
                </h3>
                <?php
                	if( !empty($rs->sarana) ):
				?>
                <ul class="blog">
                	<?php 
						foreach( $rs->sarana as $r ): 
					?>
                	<li class="ina">
                    	<a href="#"> <?php echo $r->nama_ina ?> </a>
                        <div>
							<?php echo PotongKata($r->deskripsi_ina, 30) ?> ...
                        </div>
                    </li>
                    <li class="eng">
                    	<a href="#"> <?php echo $r->nama_eng ?> </a>
                        <div>
							<?php echo PotongKata($r->deskripsi_eng, 30) ?> ...
                        </div>
                    </li>
                    <?php
                    	endforeach;
					?>
                </ul>
                <?php
					else:
				?>
                	<div class="ina">Sarana dan Prasarana tidak ditemukan</div>
                    <div class="eng">Infrastructure not Found</div>
                <?php
                	endif;
				?>
                <hr />
              <?php
              	endforeach;
			  ?>
              
              <h2 class="ina">Komentar</h2>
              <h2 class="eng">Testimonial</h2>
              <div>
              	<?php  
					$data["id_lokasi_wisata"] = $id_lokasi_wisata; 
					$this->load->view("frontend/profile/profile.testimonial.view.php", $data)
				?>
              </div>
            </div>
            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <?php  
				$this->load->view("frontend/profile/profile.right.view.php")
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





<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="<?php echo base_url() ?>inc/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>


<?php
	$lat = $row->lat;
	$lng = $row->lng;
	
	$name = $row->name;
	$desc_point = $row->desc_point;
	
	if( !empty( $lat ) and !empty($lng) ):
?>

<script type="text/javascript">
//main function to initiate the module

var map;
$(document).ready(function(){
  map = new GMaps({
	div: '#map',
	lat: <?php echo $lat ?>,
	lng: <?php echo $lng ?>,
  });
   var marker = map.addMarker({
		lat: <?php echo $lat ?>,
		lng: <?php echo $lng ?>,
		title: '<?php echo $name ?>',
		infoWindow: {
			content: "<?php echo $desc_point ?>"
		}
	});

   marker.infoWindow.open(map, marker);
});
			
</script>

<?php
	endif;
?>

<?php endforeach; ?>