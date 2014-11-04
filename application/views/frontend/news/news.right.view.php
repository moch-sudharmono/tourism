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
            <?php echo PotongKata($rp->isi_berita_ina, 20) ?>
        </p>
        <p class="eng">
            <?php echo PotongKata($rp->isi_berita_eng, 20) ?>
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

  <!-- BEGIN BLOG TAGS -->
  <div class="blog-tags margin-bottom-20">
    <h3>Tag / <em>Tags</em></h3>
    <ul>
    <?php
        if( isset($news_tag) and !empty($news_tag) ):
        foreach( $news_tag as $rnt ):
    ?>
      <li>
        <a href="<?php echo base_url() ?>frontend/news/tag/<?php echo $rnt->id_berita_tag ?>/<?php echo SEO($rnt->tag_ina) ?>" class="ina"><i class="fa fa-tags"></i><?php echo $rnt->tag_ina ?></a>
        <a href="<?php echo base_url() ?>frontend/news/tag/<?php echo $rnt->id_berita_tag ?>/<?php echo SEO($rnt->tag_eng) ?>" class="eng"><i class="fa fa-tags"></i><?php echo $rnt->tag_eng ?></a>
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