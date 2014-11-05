<!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
<div class="row margin-bottom-40">
  <!-- BEGIN SALE PRODUCT -->
  <div class="col-md-12 sale-product">
    <h2>Potensi Wisata / <em>Attraction</em></h2>
    <div class="owl-carousel owl-carousel5">

      	
      	<?php
        	$lokasi = isset($lokasi)?$lokasi:array();
			foreach( $lokasi as $row ):
		?>
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="<?php echo base_url()  ?>upload/<?php echo $row->gambar ?>" class="img-responsive" alt="<?php echo $row->gambar ?>"
            style="width:200px; height:100px;"
            >
            <div>
              <a href="<?php echo base_url()  ?>upload/<?php echo $row->gambar ?>" class="btn btn-default fancybox-button">Zoom</a>
            </div>
          </div>
          <center>
          <h3 class="ina">
          	<a href="#"><?php echo $row->nama_lokasi_wisata_ina ?></a>
          </h3>
          <h3 class="eng">
          	<a href="#"><?php echo $row->nama_lokasi_wisata_eng ?></a>
          </h3>
          </center>
        </div>
        <?php
        	endforeach;
		?>
        

      
      
    </div>
  </div>
  <!-- END SALE PRODUCT -->
</div>
<!-- END SALE PRODUCT & NEW ARRIVALS -->