<!-- BEGIN RIGHT SIDEBAR -->            
<div class="col-md-3 col-sm-3 blog-sidebar">
    <!-- CATEGORIES START -->
    <?php
    	$terkait = isset($terkait)?$terkait:array();
		if( !empty($terkait) ):
	?>
    <h2 class="no-top-space ina">Lokasi Terkait</h2>
    <h2 class="no-top-space eng">Linked Location</h2>
    <ul class="nav sidebar-categories margin-bottom-40">
		<?php
			foreach( $terkait as $r ):
		?>
        	<li class="ina">
                <a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $r->id_lokasi_wisata ?>/<?php echo SEO($r->nama_lokasi_wisata_ina) ?>">
                <?php echo $r->nama_lokasi_wisata_ina ?>
                </a>
            </li>
            <li class="eng">
                <a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $r->id_lokasi_wisata ?>/<?php echo SEO($r->nama_lokasi_wisata_eng) ?>">
                    <?php echo $r->nama_lokasi_wisata_eng ?>
                </a>
            </li>
		<?php
        	endforeach;
		?>
    </ul>
    <?php endif; ?>
    <!-- CATEGORIES END -->
    
    <!-- CATEGORIES START -->
    <h2 class="no-top-space ina">Kategori</h2>
    <h2 class="no-top-space eng">Categories</h2>
    <ul class="nav sidebar-categories margin-bottom-40">
		<?php
        	$kategori = isset($kategori)?$kategori:array();
			foreach( $kategori as $row ):
		?>
        	<li class="ina" id="<?php echo SEO($row->kategori_ina) ?>">
            	<a href="<?php echo base_url() ?>frontend/profile/display/<?php echo $row->id_lokasi_wisata_kategori ?>/<?php echo SEO($row->kategori_ina) ?>">
					<?php echo $row->kategori_ina ?> (<?php echo $row->total ?>)
                </a>
            </li>
            <li class="eng" id="<?php echo SEO($row->kategori_eng) ?>">
            	<a href="<?php echo base_url() ?>frontend/profile/display/<?php echo $row->id_lokasi_wisata_kategori ?>/<?php echo SEO($row->kategori_eng) ?>">
					<?php echo $row->kategori_eng ?> (<?php echo $row->total ?>)
                </a>
            </li>
		<?php
        	endforeach;
		?>
    </ul>
    <!-- CATEGORIES END -->
    
    <!-- BEGIN BLOG PHOTOS STREAM -->
    <div class="blog-photo-stream margin-bottom-20">
    <h2 class="ina">Foto - foto</h2>
    <h2 class="eng">Photos Stream</h2>
    <ul class="list-unstyled">
    	<?php

        	$gambar = isset( $gambar  )?$gambar:array();
			foreach( $gambar as $rg ):
		?>
      		<li class="ina">
                <a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $rg->id_lokasi_wisata ?>/<?php echo SEO($rg->nama_lokasi_wisata_ina) ?>">
                	<img alt="" src="<?php echo base_url() ?>upload/thumbs/<?php echo $rg->gambar ?>">
                </a>
            </li>
            
            <li class="eng">
                <a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $rg->id_lokasi_wisata ?>/<?php echo SEO($rg->nama_lokasi_wisata_eng) ?>">
                	<img alt="" src="<?php echo base_url() ?>upload/thumbs/<?php echo $rg->gambar ?>">
                </a>
            </li>
        <?php
        	endforeach;
		?>
    </ul>                    
    </div>
    <!-- END BLOG PHOTOS STREAM --
  
</div>
<!-- END RIGHT SIDEBAR --> 

<?php
	if( isset( $kategori_class ) and !empty($kategori_class) ):
?>
	<script>$("#<?php echo $kategori_class ?>").addClass("active");</script>
<?php endif; ?>
