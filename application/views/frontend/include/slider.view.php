<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-40">
  <div class="fullwidthbanner-container revolution-slider">
    <div class="fullwidthabnner">
      <ul id="revolutionul">
        <!-- THE NEW SLIDE -->
        <?php
        	$slide = isset($slide)?$slide:array();
			foreach( $slide as $row ):
		?>
        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo base_url() ?>inc/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
          <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
          <img src="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" alt="">
          
          <div class="ina">
          			
            <div class="caption lft slide_title_white slide_item_left"
                data-x="30"
                data-y="90"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                <?php echo $row->keterangan_ina ?>
             </div>
          </div>
          <div class="eng">
          
            <div class="caption lft slide_title_white slide_item_left"
                data-x="30"
                data-y="90"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
               	<?php echo $row->keterangan_eng ?>
               
             </div>
          </div>
        </li>    
		<?php
        	endforeach;
		?>
	</ul>
      
    </div>
</div>
<!-- END SLIDER -->