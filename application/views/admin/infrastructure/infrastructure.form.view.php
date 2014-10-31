<?php
	$infrastructure = isset($infrastructure)?$infrastructure:array();
	$id_sarana_prasarana = isset( $infrastructure[0]->id_sarana_prasarana )?$infrastructure[0]->id_sarana_prasarana:0;
	$id_kategori_sarana_prasarana = isset( $infrastructure[0]->id_kategori_sarana_prasarana )?$infrastructure[0]->id_kategori_sarana_prasarana:0;	
	$id_peta = isset( $infrastructure[0]->id_peta )?$infrastructure[0]->id_peta:0;
	$nama_ina = isset( $infrastructure[0]->nama_ina )?$infrastructure[0]->nama_ina:"";
	$nama_eng = isset( $infrastructure[0]->nama_eng )?$infrastructure[0]->nama_eng:"";
	$deskripsi_ina = isset( $infrastructure[0]->deskripsi_ina )?$infrastructure[0]->deskripsi_ina:"";
	$deskripsi_eng = isset( $infrastructure[0]->deskripsi_eng )?$infrastructure[0]->deskripsi_eng:"";
	$url = isset( $infrastructure[0]->url )?$infrastructure[0]->url:"";	
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Sarana dan Prasarana / <em>Infrastructure</em> Form
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/infrastructure/save" id="form_infrastructure" method="post" class="form-horizontal">
        <input type="hidden" name="id_sarana_prasarana" value="<?php echo $id_sarana_prasarana ?>" />
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
                    <label class="control-label col-md-3">Kategori/Category<span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" id="id_kategori_sarana_prasarana" name="id_kategori_sarana_prasarana">
                            <option value="">Please Choose Option</option>
                            <?php 
							$infrastructure_category = (isset($infrastructure_category)?$infrastructure_category:array());
							foreach($infrastructure_category as $value){ 
							?>
                            <option value="<?php echo $value->id_kategori_sarana_prasarana?>">
                            <?php echo $value->kategori_sarana_prasarana_ina." / <i>".$value->kategori_sarana_prasarana_eng."</i>";?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Title (English)
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $nama_eng; ?>" name="nama_eng" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Judul (Bahasa) 
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $nama_ina; ?>" name="nama_ina" data-required="1" class="form-control"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Description (English)
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="deskripsi_eng" data-error-container="#editor1_error">
                         <?php echo $deskripsi_eng; ?>
                        </textarea>
                        <div id="editor1_error">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Penjelasan (Bahasa)
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="deskripsi_ina" data-error-container="#editor1_error"><?php echo $deskripsi_ina; ?></textarea>
                        <div id="editor2_error">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Url 
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $url; ?>" name="url" data-required="1" class="form-control"/>
                    </div>
                </div>
                
               <div class="form-group">
                    <label class="control-label col-md-3">Map Position 
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="id_peta" ID="id_peta">
                            <option value="">Please Choose Option</option>
                            <?php
							$pointer = (isset($pointer)?$pointer:array());
							foreach($pointer as $val){
							?>
                            <option value="<?php echo $val->id_peta?>">
                            <?php echo $val->id_peta;?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                                                                                        
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green" name="submit" id="submit_infra" value="">Submit</button>
                        <button type="button" ID="CancelButton" class="btn default">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/infrastructure"
    });
	
	$("#id_kategori_sarana_prasarana").val("<?php echo $id_kategori_sarana_prasarana; ?>");
	$("#id_peta").val("<?php echo $id_peta ?>");
</script>