<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->

<?php
	$attractions = isset($attractions)?$attractions:array();
	$id_paket_wisata = isset( $attractions[0]->id_paket_wisata )?$attractions[0]->id_paket_wisata:0;
	$paket_wisata_ina = isset( $attractions[0]->paket_wisata_ina )?$attractions[0]->paket_wisata_ina:"";
	$paket_wisata_eng = isset( $attractions[0]->paket_wisata_eng )?$attractions[0]->paket_wisata_eng:"";
	$deskripsi_ina = isset( $attractions[0]->deskripsi_ina )?$attractions[0]->deskripsi_ina:"";
	$deskripsi_eng = isset( $attractions[0]->deskripsi_eng )?$attractions[0]->deskripsi_eng:"";	
	$url = isset( $attractions[0]->url )?$attractions[0]->url:"";
?>                  
					<!-- BEGIN VALIDATION STATES-->
                    <div id="AttractionForm">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Potential Attraction
							</div>							
						</div>
                        
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?php echo base_url().'admin/attraction/save'; ?>" id="form_attraction" method="post" class="form-horizontal">
								<div class="form-body">									
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">

										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
                                    <h3> Informasi Umum / <em>General Information</em> </h3>
                <hr />
									<div class="form-group">
										<label class="control-label col-md-3">Title (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="text"
                                            value="<?php echo $paket_wisata_eng; ?>" name="title_eng" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Judul (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="text"
                                            value="<?php echo $paket_wisata_ina; ?>" name="title_ind" data-required="1" class="form-control"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">Description (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="form-control ckeditor" rows="6" name="description_eng" data-error-container="#editor1_error"><?php echo $deskripsi_eng; ?></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Deskripsi (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" rows="6" name="description_ind" data-error-container="#editor1_error"><?php echo $deskripsi_ina; ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
                                    <div class="form-group">

										<label class="control-label col-md-3">Url <span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="text" name="url" value="<?php echo $url; ?>" data-required="1" class="form-control"/>
										</div>
									</div>
																											
								</div>
                                
                               <h3> Foto-foto / <em>Photos</em></h3>
                <hr />
                <div class="form-group">
                	<div class="col-md-12" align="center">
                    	<a class="btn yellow" data-target="#static2" data-toggle="modal">Unggah Foto / <em>Upload Photos</em> </a>
                    </div>
                    <div class="col-md-12" align="center">
                        <textarea name="gambar" id="gambar" class="form-control" readonly="readonly"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <?php
                    	$gambar = isset($gambar)?$gambar:array();
						foreach( $gambar as $row ):
					?>
                        <div class="col-md-2" align="center">
                        <a href="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" target="_blank">
							<img src="<?php echo base_url() ?>upload/thumbs/<?php echo $row->gambar ?>" alt="<?php echo $row->gambar ?>" />                      </a>      
                        </div>
                    <?php
                    	endforeach;
					?>
                </div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue" name="submit" id="submit_attract" value="">Save/Simpan</button>
											<button type="button" ID="CancelButton" class="btn default">Batal / Cancel</button>
										</div>
									</div>
								</div>
                                <input type="hidden" name="id_attraction" value="<?php  echo $id_paket_wisata; ?>" />
							</form>
							<!-- END FORM-->
                            
						</div>
                    </div>
                    
                    
						<!-- END VALIDATION STATES-->      


<div id="static2" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Unggah Foto-foto / <em>Upload Photos</em></h4>
    </div>
    <div class="modal-body">
       <?php 
	   			$config = array(
							"filetype"=>"gif|jpe?g|png",
							"filetype_caption"=>"JPG, GIF, PNG",
							"filesize"=>5000000,
							"filesize_caption"=>"5 MB",
							"content"=>"gambar"
						);
		   		$this->load->view("admin/attraction/attractionImage.php",$config) 
	?>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue">Selesai / Done</button>
    </div>
</div>



<script src="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function() { 
   UIExtendedModals.init();
   
   FormValidation.init();
});
</script>
<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/attraction"
    });
</script>
<script>
$(".id_sarana_prasarana").each(function(index, element) {
	var value = $(this).val();
   	<?php
		foreach( $tag as $rb ):
	?>
		if( value == "<?php echo $rb->id_sarana_prasarana ?>" )
		{
			$(this).attr("checked", "checked");
		}
	<?php	
		endforeach;
	?> 
});
</script>
<script>
	
	$( "#form_attraction" ).validate({
	  rules: {
		 title_eng: {
			required: true
		},title_ind: {
			required: true
		},
		description_ind: {
			required: true
		},
		description_eng: {
			required: true
		},
		url: {
			required: true
		}
	  }
	});

</script>
