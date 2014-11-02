<link href="<?php echo base_url() ?>inc/admin/pages/css/timeline.css" rel="stylesheet" type="text/css"/>

<!-- BEGIN PAGE CONTENT-->

<div class="main">
  <div class="container">
    <div class="col-md-9">
        <ul class="timeline">
            <?php
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
					foreach( $row["transportation"] as $n=>$r ):
				?>
                <div class="timeline-body">
                    <h2 class="ina"> <img src="<?php echo base_url() ?>upload/<?php echo $r["icon"] ?>"> <?php echo $r["nama_ina"] ?></h2>
                    <h2 class="eng"><?php echo $r["nama_eng"] ?></h2>
                    <div class="timeline-content">
                        <div class="ina">
                        	<?php echo $r["deskripsi_ina"] ?>
                        </div>
                        <div class="eng">
                        	<?php echo $r["deskripsi_eng"] ?>
                        </div>
                    </div>
                </div>
                <?php
                	endforeach;
				?>
                
            </li>
           	<?php endforeach; ?>
            
        </ul>
    </div>
</div>
</div>
<!-- END PAGE CONTENT-->