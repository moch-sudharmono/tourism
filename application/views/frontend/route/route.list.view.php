<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>inc/global/plugins/select2/select2.css"/>
<link href="<?php echo base_url(); ?>inc/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/admin/pages/css/timeline.css" rel="stylesheet" type="text/css"/>


<!-- BEGIN PAGE CONTENT-->

<div class="main">
  <div class="container">
    <div class="col-md-9">

        <h3>Sistem Informasi Rute / Routing Information System</h3>
		<hr />
        <ul class="timeline">
            <?php
				//print_r($route);
            	$route = isset($route)?$route:array();
				foreach( $route as $no=>$row ):
				if( $no%2 == 0 )
					$color = "blue";
				else
					$color = "yellow";
			?>
            <li class="timeline-<?php echo $color ?>">
                <div class="timeline-time">
                    <span class="date">
                     <h4><?php echo $row["location_from"] ?></h4> 
                    </span>
                    <span class="time">
                    	<h3> <?php echo $row["location_to"] ?> </h3>
                    </span>
                </div>
                <div class="timeline-icon">
                    <i class="fa  fa-angle-double-down"></i>
                </div>
                <?php
					if(!empty($row["transportation"])):
					foreach( $row["transportation"] as $n=>$r ):
				?>
                <div class="timeline-body">
                    <h2 class="ina"> <img src="<?php echo base_url() ?>upload/<?php echo $r["icon"] ?>"> <?php echo $r["nama_ina"] ?></h2>
                    <h2 class="eng"><?php echo $r["nama_eng"] ?></h2>
                    <div class="timeline-content">
                        <div class="ina">
                        	<p>
								<?php echo $r["deskripsi_ina"] ?>
                            </p>
                            <p>
                            	Waktu Tempuh: <?php echo $r["waktu_perjalanan"] ?> Jam
                            </p>
                            <p>
                            	Estimasi Biaya: Rp <?php echo number_format($r["estimasi_biaya"]) ?>
                            </p>
                        </div>
                        <div class="eng">
                        	<p>
                        	<?php echo $r["deskripsi_eng"] ?>
                            </p>
                            <p>
                            	Travel Time: <?php echo $r["waktu_perjalanan"] ?> Jam
                            </p>
                            <p>
                            	Estimated Cost: IDR <?php echo number_format($r["estimasi_biaya"]) ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                	endforeach;
					else:
				?>
                <div class="timeline-body">
                    <h2> <i class="fa fa-info"></i> Informasi / <em>Information</em></h2>
                    <div class="timeline-content">
                        <div class="ina">
                        	Data Transportasi tidak ditemukan
                        </div>
                        <div class="eng">
                        	Transportation Data not Found
                        </div>
                    </div>
                </div>
                <?php
					endif;
				?>
                
            </li>
           	<?php endforeach; ?>
            
        </ul>
    </div>
    
    <!-- BEGIN RIGHT SIDEBAR -->            
    <div class="col-md-3 col-sm-3 blog-sidebar">
      <!-- CATEGORIES START -->
      <h2 class="no-top-space ina">Pilihan Rute</h2>
      <h2 class="no-top-space eng">Route Option</h2>
      <ul class="nav sidebar-categories margin-bottom-40">
        <li>
        	<a href="#" class="ina">Semua Kemungkinan Rute</a>
            <a href="#" class="eng">All Posible Route</a>
        </li>
        <li>
        	<a href="#" class="ina">Rute Termurah</a>
            <a href="#" class="eng">Cheapest Route</a>
        </li>
        <li>
        	<a href="#" class="ina">Rute Tersingkat</a>
            <a href="#" class="eng">Shortest Route</a>
        </li>

      </ul>
      <!-- CATEGORIES END -->
      <h2 class="no-top-space ina">Cari Rute</h2>
      <h2 class="no-top-space eng">Find Route</h2>
      <div class="form-group">
        	<select name="edge_from"  id="edge_from" class="form-control">
            	<option>asd</option>
            </select>
        </div>
        <div class="form-group">
        	<select name="edge_to" class="form-control" id="edge_to">
            	<option>asd</option>
            </select>
        </div>
        <div class="form-group" align="center">
        	<button type="submit"  class="btn blue" name="cari"><i class="fa fa-search"></i> Temukan / Find</button>
        </div>

    </div>
    <!-- END RIGHT SIDEBAR -->
  </div>
</div>
<!-- END PAGE CONTENT-->

<!-- END Search Route -->
<script type="text/javascript" src="<?php echo base_url(); ?>inc/global/plugins/select2/select2.min.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>inc/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>inc/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>inc/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script>
	$("#edge_to").select2({
            placeholder: "Select an option",
            allowClear: true
    });
	$("#edge_from").select2({
            placeholder: "Select an option",
            allowClear: true
    });
</script>