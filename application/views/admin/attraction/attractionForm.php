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
							<form action="<?php echo base_url().'index.php/admin/attraction/save'; ?>" id="form_attraction" method="post" class="form-horizontal">
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
										<label class="control-label col-md-2">Title (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-3">
											<input type="text"
                                            value="<?php echo $paket_wisata_eng; ?>" name="title_eng" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-2">Judul (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text"
                                            value="<?php echo $paket_wisata_ina; ?>" name="title_ind" data-required="1" class="form-control"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-2">Description (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="form-control ckeditor" rows="6" name="description_eng" data-error-container="#editor1_error"><?php echo $deskripsi_eng; ?></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-2">Deskripsi (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" rows="6" name="description_ind" data-error-container="#editor1_error"><?php echo $deskripsi_ina; ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
                                    <div class="form-group">

										<label class="control-label col-md-2">Url <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="url" value="<?php echo $url; ?>" data-required="1" class="form-control"/>
										</div>
									</div>
																											
								</div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Foto Pendukung / <em>Photos</em></label>
                                        <div class="col-md-10">
                                            <?php include("attractionImage.php")?>
                                        </div>
                                    </div>
                                </div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue" name="submit" id="submit_attract" value="">Submit</button>
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


<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>index.php/admin/attraction"
    });
</script>