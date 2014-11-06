<!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
<div class="row margin-bottom-40">
  <!-- BEGIN SALE PRODUCT -->
  <div class="col-md-12 sale-product">
    <h2><i class="fa fa-paper-plane fa-lg"></i> Potensi Wisata / <em>Attraction</em></h2>
    <hr />
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
              <a href="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" class="btn btn-default fancybox-button">Zoom</a>
              <a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $row->id_lokasi_wisata ?>/<?php echo $row->nama_lokasi_wisata_ina ?>" class="btn btn-default ina">Detail</a>
              <a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $row->id_lokasi_wisata ?>/<?php echo $row->nama_lokasi_wisata_eng ?>" class="btn btn-default eng">Detail</a>
            </div>
          </div>
       
        </div>
        <?php
        	endforeach;
		?>
        

      
      
    </div>
  </div>
  <!-- END SALE PRODUCT -->
</div>
<!-- END SALE PRODUCT & NEW ARRIVALS -->