<?php
	$gallery = isset($gallery)?$gallery:array();
?>
<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12">
        <h1>Gallery</h1>
        <div class="content-page">
          <div class="row margin-bottom-40">
            <?php
            	foreach( $gallery as $row ):
			?>
            <div class="col-md-3 col-sm-4 gallery-item">
              <a data-rel="fancybox-button" title="Project Name" href="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" class="fancybox-button">
                	<img alt="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" src="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" class="img-responsive" style="height:150px; width:300px;">
                <div class="zoomix"><i class="fa fa-search"></i></div>
              </a> 
            </div>
            <?php
            	endforeach;
			?>
                    
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
  </div>
</div>