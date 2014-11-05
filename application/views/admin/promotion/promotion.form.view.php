<?php
	$promotion = isset( $promotion )?$promotion:array();
	$id_promosi = isset( $promotion[0]->id_promosi )?$promotion[0]->id_promosi:"";
	$id_promosi_kategori = isset( $promotion[0]->id_promosi_kategori )?$promotion[0]->id_promosi_kategori:"";
	$promosi_ina = isset( $promotion[0]->promosi_ina )?$promotion[0]->promosi_ina:"";
	$promosi_eng = isset( $promotion[0]->promosi_eng )?$promotion[0]->promosi_eng:"";
	$deskripsi_ina = isset( $promotion[0]->deskripsi_ina )?$promotion[0]->deskripsi_ina:"";
	$deskripsi_eng = isset( $promotion[0]->deskripsi_eng )?$promotion[0]->deskripsi_eng:"";
	$tanggal_promosi = isset( $promotion[0]->tanggal_promosi )?$promotion[0]->tanggal_promosi:"";
	$tanggal_promosi = ddmmyyyy($tanggal_promosi);
	$tanggal_kadarluarsa = isset( $promotion[0]->tanggal_kadarluarsa )?$promotion[0]->tanggal_kadarluarsa:"";
	$tanggal_kadarluarsa = ddmmyyyy($tanggal_kadarluarsa);
?>
<div class="portlet box purple">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Form Promosi / <em>Promotion Form</em>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal form_promotion" action="<?php echo base_url() ?>admin/promotion/save">
            <input type="hidden" name="id_promosi" value="<?php echo $id_promosi ?>" />
            
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Kategori / <em>Category</em></label>
                    <div class="col-md-10">
	                    <select id="id_promosi_kategori" name="id_promosi_kategori" class="form-control">
                        	<?php
								 if( isset($promotion_category) and !empty($promotion_category) ):
								 foreach( $promotion_category as $rp ):
							?>
                            	<option value="<?php echo $rp->id_kategori_promosi ?>"> 
									<?php echo $rp->kategori_promosi_ina ?> /  <em><?php echo $rp->kategori_promosi_eng ?></em>
                                </option>
                            <?php	 
								 endforeach;
								 endif; 
							?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Judul (Bahasa)</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="promosi_ina" placeholder="" value="<?php echo $promosi_ina ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Title (English)</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="promosi_eng" placeholder="" value="<?php echo $promosi_eng ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Deskripsi (Bahasa)</label>
                    <div class="col-md-10">
	                    <textarea class="form-control ckeditor" name="deskripsi_ina"><?php echo $deskripsi_ina ?></textarea>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Description (English)</label>
                    <div class="col-md-10">
	                    <textarea class="form-control ckeditor" data-error-container="#deskripsi_eng_error" name="deskripsi_eng"><?php echo $deskripsi_eng ?></textarea>
                        <div id="deskripsi_eng_error"></div>
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Gambar Sampul / <em>Cover</em></label>
                    <div class="col-md-10">
	                    <input type="file" name="" />
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tanggal Promosi / <em>Promotion Date</em></label>
                    <div class="col-md-2">
                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                            <input type="text" class="form-control tanggal_promosi" value="<?php echo $tanggal_promosi ?>" name="tanggal_promosi"  id="tanggal_promosi" readonly/>
                            <span class="input-group-btn">
                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tanggal Kadarluarsa / <em>Expired Date</em></label>
                    <div class="col-md-2">
                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                            <input type="text" class="form-control" value="<?php echo $tanggal_kadarluarsa ?>" name="tanggal_kadarluarsa" id="tanggal_kadarluarsa" readonly  />
                            <span class="input-group-btn">
                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Berkas Pendukung / <em>Files</em></label>
                    <div class="col-md-10">
	                    <input type="file" name="" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Foto Pendukung / <em>Photos</em></label>
                    <div class="col-md-10">
	                    <input type="file" name="" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="button" class="btn default" id="back_promotion">Batal / Cancel</button>
                        <button type="submit" class="btn blue">Simpan / Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script src="<?php base_url()?>inc/global/plugins/jquery.ui.datepicker.validation.min.js" type="text/javascript"></script>

<script>
	$("#back_promotion").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/promotion"
    });
	
	$("#id_promosi_kategori").val("<?php echo $id_promosi_kategori ?>")
	
	$(".date").datepicker();  
	
	
	
	jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});
	
	$( ".form_promotion" ).validate({
	  rules: {
		  id_promosi_kategori: {
			required: true
		},
		 promosi_ina: {
			required: true
		},
		promosi_eng: {
			required: true
		},
		tanggal_promosi: {
		  required: true 
		},
		tanggal_kadarluarsa: {
		  required: true
		}
	  }
	});

</script>