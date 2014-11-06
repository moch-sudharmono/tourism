<!-- BEGIN RIGHT SIDEBAR -->            
<div class="col-md-3 col-sm-3 blog-sidebar">

  <!-- BEGIN RECENT NEWS -->                            
  <h3>Kategori / <em>Category</em></h3>
  <div class="recent-news margin-bottom-10">
    <?php
        if( isset( $categories ) and !empty($categories) ):
        foreach( $categories as $rp ):
    ?>
    <div class="row margin-bottom-10">
      <div class="col-md-12">
        <h4>
		<a href="<?php echo base_url();?>frontend/promotion/category/<?php echo $rp->id_kategori_promosi?>/<?php echo $rp->kategori_promosi_ina?>">
		<?php echo $rp->kategori_promosi_ina?> / <?php echo $rp->kategori_promosi_eng?>
        </a>
        </h4>
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

  <!-- BEGIN BLOG TAGS -->
  <div class="blog-tags margin-bottom-20">
    <h3>Gambar / <em>Image</em></h3>
    <ul>
    <?php
        if( isset($images) and !empty($images) ):
        foreach( $images as $rnt ):
    ?>
      <li>
        <a href="<?php echo base_url() ?>frontend/promotion/detail/<?php echo $rnt->id_promosi ?>" class="ina">
        	<img alt="" src="<?php echo base_url() ?>upload/<?php echo $rnt->gambar ?>">
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