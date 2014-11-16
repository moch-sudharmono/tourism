<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="../../../../inc/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/typeahead/typeahead.css">
<!-- END PAGE LEVEL STYLES -->

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
	
	$cover = isset( $promotion[0]->cover )?$promotion[0]->cover:"";
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
	                    <a class="btn yellow" data-target="#static1" data-toggle="modal">Pilih File / <em>Choose File</em></a>
                    </div>
                    <div class="col-md-12" align="center">
                        <textarea name="gambar" id="gambar" class="form-control" readonly="readonly"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <?php
                    	//$cover = isset($cover)?$cover:array();
						if (isset($cover)) :
						
						else :
					?>
                        <div class="col-md-2" align="center">
                        <a href="<?php echo base_url() ?>upload/<?php echo $cover ?>" target="_blank">
							<img src="<?php echo base_url() ?>upload/thumbs/<?php echo $cover ?>" alt="<?php echo $cover ?>" />                      </a>      
                        </div>
                    <?php
					    endif 
					?>
                </div>
                
            <hr />
        <!--    <div class="form-body">
				<div class="form-group">
					<label class="col-md-2 control-label">Gambar Sampul / <em>Cover</em></label>
					<div class="col-md-10">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<span class="btn default btn-file">
                                <span class="fileinput-new">Pilih File / <em>Choose File</em> </span>
                                <span class="fileinput-exists">Ubah/<em>Change</em> </span>
                                    <input type="file" name="cover_promo">
                                </span>
                                <span class="fileinput-filename">
                            </span>
							&nbsp; <a href="#" class="close fileinput-exists" data-dismiss="fileinput">
							</a>
						</div>
					</div>
				</div>	
			</div>-->
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
	                    <a class="btn yellow" data-target="#static3" data-toggle="modal">Pilih File / <em>Choose File</em></a>
                    </div>
                    <div class="col-md-12" align="center">
                        <textarea name="file" id="file" class="form-control" readonly="readonly"></textarea>
                    </div>
                </div>
            </div>
           <div class="form-group">
                    <?php
                    	$file = isset($file)?$file:array();
						foreach( $file as $row ):
					?>
                        <div class="col-md-2" align="center">
                        <a href="<?php echo base_url() ?>upload/<?php echo $row->berkas ?>" target="_blank"><?php echo $row->berkas ?>
						</a>      
                        </div>
                    <?php
                    	endforeach;
					?>
                </div>
            <hr />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Foto Pendukung / <em>Photos</em></label>
                    <div class="col-md-10">
	                    <a class="btn yellow" data-target="#static2" data-toggle="modal">Pilih File / <em>Choose File</em></a>
                    </div>
                    <div class="col-md-12" align="center">
                        <textarea name="foto" id="foto" class="form-control" readonly="readonly"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <?php
                    	$foto = isset($foto)?$foto:array();
						foreach( $foto as $row ):
					?>
                        <div class="col-md-2" align="center">
                        <a href="<?php echo base_url() ?>upload/<?php echo $row->gambar ?>" target="_blank">
							<img src="<?php echo base_url() ?>upload/thumbs/<?php echo $row->gambar ?>" alt="<?php echo $row->gambar ?>" />                      
                        </a> 
                        <br />
                        <center><a href="<?php echo base_url() ?>admin/promotion/deleteimage/<?php echo $row->id_promosi_gambar ?>/<?php echo $id_promosi ?>/<?php echo urlencode($row->gambar) ?>" class="deleteImage"><i class="fa fa-times"></i></a></center>     
                        </div>
                        
                    <?php
                    	endforeach;
					?>
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

<div id="static1" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Unggah Foto-foto / <em>Upload Photos</em></h4>
    </div>
    <div class="modal-body">
       <?php 
	   			$config1 = array(
							"content"=>"gambar"
						);
		   		$this->load->view("admin/promotion/promotionFile2.php", $config1) 
	?>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue">Selesai / Done</button>
    </div>
</div>

<div id="static2" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Unggah Foto-foto / <em>Upload Photos</em></h4>
    </div>
    <div class="modal-body">
       <?php 
	   			$config1 = array(
							"filetype"=>"gif|jpe?g|png",
							"filetype_caption"=>"JPG, GIF, PNG",
							"filesize"=>5000000,
							"filesize_caption"=>"5 MB",	
							"content"=>"foto"
						);
		   		$this->load->view("admin/promotion/promotionImage.php", $config1) 
	?>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue">Selesai / Done</button>
    </div>
</div>


<div id="static3" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Unggah File / <em>Upload Files</em></h4>
    </div>
    <div class="modal-body">
       <?php 
	   			$config = array(
							"filetype"=>"pdf",
							"filetype_caption"=>"PDF",
							"filesize"=>5000000,
							"filesize_caption"=>"5 MB",	
							"content"=>"file"
						);
		   		$this->load->view("admin/promotion/promotionFile.php", $config) 
	?>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue">Selesai / Done</button>
    </div>
</div>


<script src="<?php echo base_url()?>inc/global/plugins/jquery.ui.datepicker.validation.min.js" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url()?>inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script>
	$("#back_promotion").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/promotion"
    });
	
	$("#id_promosi_kategori").val("<?php echo $id_promosi_kategori ?>")
	
	$(".date").datepicker();  
	
	
	
	/*jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});*/
	
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

<script>
	$(".deleteImage").click(function(e) {
        if( confirm("Anda Yakin / Are you sure ?") )
		{
			return true;
		}
		else
		{
			return false;
		}
    });
</script>

