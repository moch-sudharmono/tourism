<!-- BEGIN RIGHT SIDEBAR -->            
<div class="col-md-3 col-sm-3 blog-sidebar">                   

  <!-- BEGIN BLOG TAGS -->
  <div class="blog-tags margin-bottom-20">
    <h3 class="ina">Gambar</h3>
    <h3 class="eng">Image</h3>
    <ul>
    <?php
        if( isset($images) and !empty($images) ):
        foreach( $images as $rnt ):
    ?>
      <li>
        <a href="<?php echo base_url() ?>frontend/tour_packages/detail/<?php echo $rnt->id_paket_wisata ?>">
        	<img alt="" src="<?php echo base_url() ?>upload/thumbs/<?php echo $rnt->gambar ?>">
        </a>
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