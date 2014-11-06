<?php
	//Route di set $route[0] agar tinggal pakai saja arraynya
	$node = !empty($node)?$node[0]:array();
	$id_nodes = isset( $node['id_nodes'])?$node['id_nodes']:0;
	$nodes = isset( $node['nodes'] )?$node['nodes']:"";
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa  fa-wrench"></i>Pengaturan / <em>Configuration</em>
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/node/save" method="post" id="form_node" class="form-horizontal">
        	<input type="hidden" name="id_nodes" value="<?php echo $id_nodes ?>" />
            <div class="form-body">									
                
                <div class="form-group">
                    <label class="control-label col-md-3">Tema / <em>Theme</em>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control">
                        	<option value="">-- Pilih Tema / Select Theme--</option>
                            <option value="red">-- Merah / Red--</option>
                            <option value="green">-- Hijau / Green--</option>
                            <option value="blue">-- Biru / Blue--</option>
                            <option value="gray">-- Abu-abu / Gray--</option>
                            <option value="orange">-- Jingga / Orange--</option>
                            <option value="turquoise">-- Pirus / Turquoise--</option>
                        </select>
                    </div>
                </div>
                
                                                                                        
            </div>

        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/node"
    });
	
</script>

<script>
/*	jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});*/
	$( "#form_node" ).validate({
	  rules: {
		 nodes: {
			required: true
		}
	});
</script>