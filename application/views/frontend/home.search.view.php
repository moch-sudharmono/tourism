<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>inc/global/plugins/select2/select2.css"/>
<link href="<?php echo base_url(); ?>inc/global/css/plugins.css" rel="stylesheet" type="text/css"/>

<?php  
	$nodes = isset($nodes)?$nodes:array();
?>
<!-- Search Route -->   
<form action="<?php echo base_url() ?>frontend/home/search_route" method="post">
<div class="row service-box margin-bottom-40">
  <div class="col-md-4 col-sm-4">
    <div class="service-box-heading">
      <em><i class="fa fa-location-arrow blue"></i></em>
      <span>Asal / <em>Departure</em></span>
    </div>
    <div>
        <div class="form-group">
            <select name="edge_from"  id="edge_from" class="form-control">
            	<?php 
					foreach( $nodes as $no=>$row ):
				?>
                	<option value="<?php echo $row["id_nodes"] ?>"><?php echo $row["nodes"] ?></option>
                <?php 
					endforeach; 
				?>
            </select>
        </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="service-box-heading">
      <em><i class="fa fa-check red"></i></em>
      <span>Tujuan / <em>Destination</em></span>
    </div>
    
    <div class="form-group">
        <select name="edge_to" class="form-control" id="edge_to">
            	<?php 
					foreach( $nodes as $no=>$row ):
				?>
                	<option value="<?php echo $row["id_nodes"] ?>"><?php echo $row["nodes"] ?></option>
                <?php 
					endforeach; 
				?>
            </select>
    </div>

  </div>
  <div class="col-md-4 col-sm-4">
    <div class="service-box-heading">
      <em><i class="fa fa-compress green"></i></em>
      <span>Temukan / <em> Find</em></span>
    </div>
    <div class="form-group">
            <button type="submit"  class="btn blue" name="cari"><i class="fa fa-search"></i> Temukan / Find</button>
    </div>
  </div>
</div>
</form>
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