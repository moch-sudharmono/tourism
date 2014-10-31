<?php
	//Route di set $route[0] agar tinggal pakai saja arraynya
	$edge = !empty($edge)?$edge[0]:array();
	
	$id_edges = isset( $edge['id_edges'] )?$edge['id_edges']:"";
	$edges_from = !empty($edges_from)?$edges_from:array();	
	$edges_to = !empty($edges_to)?$edges_to:array();
	
	$id_nodes_edge_from = isset( $edge['edge_from'] )?$edge['edge_from']:"";	
	$id_nodes_edge_to = isset( $edge['edge_to'])?$edge['edge_to']:"";

	
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Route Form
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/edge/save" method="post" id="form_sample_3" class="form-horizontal">
        	<input type="hidden" name="id_edges" value="<?php echo $id_edges ?>" />
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
                    <label class="control-label col-md-3">Titik Awal / <em>First Edge</em> <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" id="id_nodes_edge_from" name="id_nodes_edge_from">
                            <option value="">Please Choose Option</option>
							<?php foreach($edges_from as $val) { ?>
                            <option value="<?php echo $val['id_nodes']; ?>">
                            	<?php echo $val['nodes']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>     
                <div class="form-group">
                    <label class="control-label col-md-3">Titik Akhir / <em>Last Edge</em> <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="id_nodes_edge_to" id="id_nodes_edge_to">
                            <option value="">Please Choose Option</option>
							<?php 
							foreach($edges_to as $val) { 							
							?>
                            <option value="<?php echo $val['id_nodes']; ?>">
                            	<?php echo $val['nodes']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>                                    
                
                                                                           
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" name="submit" class="btn green" value="save">Submit</button>
                        <button type="button" id="CancelButton" class="btn default">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/edge"
    });
	
	$("#id_nodes_edge_from").val("<?php echo $id_nodes_edge_from; ?>");
	$("#id_nodes_edge_to").val("<?php echo $id_nodes_edge_to ?>");

</script>