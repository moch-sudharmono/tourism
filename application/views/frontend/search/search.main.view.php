<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
      
      
<h1 class="ina">Hasil Pencarian</h1>
<h1 class="eng">Search Results</h1>
<div class="content-page">
  <form action="<?php echo base_url() ?>frontend/home/search_result" method="post" class="content-search-view2">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search..." value="<?php echo isset($query)?$query:""; ?>" name="query">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-primary">Search</button>
      </span>
    </div>
  </form>
  <?php
  	$hasil = isset($hasil)?$hasil:array();
	foreach( $hasil as $row ):
  ?>
  <div class="search-result-item">
    <h4 class="ina"><a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $row->id_lokasi_wisata ?>/<?php echo SEO($row->nama_lokasi_wisata_ina) ?>"><?php echo $row->nama_lokasi_wisata_ina ?></a></h4>
    <h4 class="eng"><a href="<?php echo base_url() ?>frontend/profile/location/<?php echo $row->id_lokasi_wisata ?>/<?php echo SEO($row->nama_lokasi_wisata_eng) ?>"><?php echo $row->nama_lokasi_wisata_eng ?></a></h4>
    <div class="ina">
		<?php echo PotongKata($row->deskripsi_ina, 30) ?>    
    </div>
    <div class="eng">
    	<?php echo PotongKata($row->deskripsi_eng, 30) ?>   
    </div>

  </div>
  <?php
  	endforeach;
  ?>

  <!--<div class="row">
    <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
    <div class="col-md-8 col-sm-8">
      <ul class="pagination pull-right">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><span>2</span></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div>
  </div>-->
</div>

</div>
</div>
</div>
</div>
