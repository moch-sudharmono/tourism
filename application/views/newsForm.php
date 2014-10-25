<?php include("cssfile.php"); ?>
<?php include("jsfile.php"); ?>

            <div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>News Form
							</div>							
						</div>
                        
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?php echo base_url()."index.php/".$modul."/".$action?>" method="post" id="form_news" class="form-horizontal">
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
										<label class="control-label col-md-3">Title (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="text" 
                                            		value="<?php echo (isset($value["judul_berita_eng"])? $value["judul_berita_eng"]: '') ?>" 
                                                    name="title_eng" data-required="1" class="form-control"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Judul (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="text" value="<?php echo (isset($value["judul_berita_ina"])? $value["judul_berita_ina"]: '') ?>" name="title_ind" data-required="1" class="form-control"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">News (English) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="isi_eng" data-error-container="#editor1_error"><?php echo (isset($value["isi_berita_eng"])? $value["isi_berita_eng"]: '') ?> </textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Berita (Bahasa) <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="isi_ind" data-error-container="#editor1_error"><?php echo (isset($value["isi_berita_ina"])? $value["isi_berita_ina"]: '') ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">News Date</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
												<input type="text" class="form-control" value="<?php echo (isset($value["tanggal_berita"])? $value["tanggal_berita"]: '') ?>" readonly name="datepicker">
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											
										</div>
									</div>
                                    
                                    <!--<div class="form-group">
										<label class="control-label col-md-3"> Tags <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="hidden" class="form-control" id="news_tags" value="" name="select2tags">
											<span class="help-block">
											select tags </span>
										</div>
									</div>-->
																											
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" name="submit" class="btn green" value="save">Submit</button>
											<button type="button" id="CancelButton" class="btn default">Cancel</button>
                                            <input type="hidden" value="<?php echo (isset($id)? $id: '') ?>" name="id_news" data-required="1" class="form-control"/>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>

<script>
jQuery(document).ready(function() { 
	
	// initialize select2 tags
	$("#news_tags").change(function() {
		form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input 
	}).select2({
		tags: ["Pantai", "Wisata", "Jalan Jalan", "Renang", "Piknik"]
	});
});
</script>