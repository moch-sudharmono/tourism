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
            <i class="fa fa-gift"></i>Node Form
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/node/save" method="post" id="form_sample_3" class="form-horizontal">
        	<input type="hidden" name="id_nodes" value="<?php echo $id_nodes ?>" />
            <div class="form-body">									
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="alert alert-success display-hide">
                    <button class="close" data-close="alert"></button>
                    Your form validation is successful!
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Titik Perjalanan / <em>Nodes</em>
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $nodes; ?>" name="nodes" data-required="1" class="form-control"/>
                    </div>
                </div>
                
                                                                                        
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="button" id="CancelButton" class="btn default">Batal / Cancel</button>
                        <button type="submit" name="submit" class="btn green" value="save">Simpan / Save</button>
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