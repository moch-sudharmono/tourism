<?php
	$route = isset($route)?$route:array();
	$infrastructure = isset($infrastructure)?$infrastructure:array();
	$edges = isset($edges)?$edges:array();
	
	$id_transportation = isset( $route['id_transportation'])?$route['id_transportation']:0;
	$deskripsi_ina = isset( $route['deskripsi_ina'] )?$route['deskripsi_ina']:"";
	$deskripsi_eng = isset( $route['deskripsi_eng'] )?$route['deskripsi_eng']:"";
	$waktu_perjalanan = isset( $route['waktu_perjalanan'] )?$route['waktu_perjalanan']:"";
	$estimasi_biaya = isset( $route['estimasi_biaya'] )?$route['estimasi_biaya']:"";
	$id_sarana_prasarana = isset( $route['id_sarana_prasarana'] )?$route['id_sarana_prasarana']:"";
	$id_edges = isset( $route['id_edges'] )?$route['id_edges']:"";
	
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
        <form action="<?php echo base_url() ?>admin/route/save" method="post" id="form_sample_3" class="form-horizontal">
        	<input type="hidden" name="id_transportation" value="<?php echo $id_transportation ?>" />
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
                    <label class="control-label col-md-3">Rute / <em>Route</em> <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" id="id_edges" name="id_edges">
                            <option value="">Please Choose Option</option>
							<?php foreach($edges as $val) { ?>
                            <option value="<?php echo $val['id_edges']; ?>">
                            	<?php echo $val['node_edge_from'].' - '.$val['node_edge_to']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>     
                <div class="form-group">
                    <label class="control-label col-md-3">Sarana Prasarana / <em>Infrastructure</em> <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="id_sarana_prasarana" id="id_sarana_prasarana">
                            <option value="">Please Choose Option</option>
							<?php 
							foreach($infrastructure as $nox=>$value) { 							
							?>
                            <option value="<?php echo $value['id_sarana_prasarana']; ?>">
                            	<?php echo $value['nama_ina'].' / '.$value['nama_eng']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>                                    
                
                <div class="form-group">
                    <label class="control-label col-md-3">Description (English) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="deskripsi_eng" data-error-container="#editor1_error"><?php echo $deskripsi_eng; ?></textarea>
                        <div id="editor1_error">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Deskripsi (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="deskripsi_ina" data-error-container="#editor1_error"><?php echo $deskripsi_ina; ?></textarea>
                        <div id="editor2_error">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Waktu Perjalanan / <em>Travel Time</em> <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $waktu_perjalanan; ?>" name="waktu_perjalanan" data-required="1" class="form-control"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Estimasi Biaya / <em>Cost</em> <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $estimasi_biaya; ?>" name="estimasi_biaya" data-required="1" class="form-control"/>
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
        location.href = "<?php echo base_url() ?>admin/route"
    });
	
	$("#id_edges").val("<?php echo $id_edges; ?>");
	$("#id_sarana_prasarana").val("<?php echo $id_sarana_prasarana ?>");

</script>