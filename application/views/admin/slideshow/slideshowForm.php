<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/global/plugins/typeahead/typeahead.css">
<!-- END PAGE LEVEL STYLES -->

<?php
	$slideshow = isset( $slideshow )?$slideshow:array();
	$id_slideshow = isset( $slideshow[0]->id_slideshow )?$slideshow[0]->id_slideshow:"";
	$deskripsi_ina = isset( $slideshow[0]->keterangan_ina )?$slideshow[0]->keterangan_ina:"";
	$deskripsi_eng = isset( $slideshow[0]->keterangan_eng )?$slideshow[0]->keterangan_eng:"";
	$publish = isset( $slideshow[0]->publish )?$slideshow[0]->publish:"";
	$gambar = isset( $slideshow[0]->gambar )?$slideshow[0]->gambar:"";
	
?>
<div class="portlet box purple">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Form Slideshow / <em>Slideshow Form</em>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal form_slideshow" action="<?php echo base_url() ?>admin/slideshow/save">
            <input type="hidden" name="id_slideshow" value="<?php echo $id_slideshow ?>" />
            
            <div class="form-body">
				<div class="form-group">
					<label class="col-md-2 control-label">Gambar Sampul / <em>Cover</em></label>
					<div class="col-md-10">
                    	<div class="col-md-2" align="center">
                        <a href="<?php echo base_url() ?>upload/<?php echo $gambar ?>" target="_blank">
							<img src="<?php echo base_url() ?>upload/thumbs/<?php echo $gambar ?>" alt="<?php echo $gambar ?>" />                      </a>      
                        </div>
						<div class="form-group">
                            <div class="col-md-12" align="center">
                                <a class="btn yellow" data-target="#static2" data-toggle="modal">Unggah Foto / <em>Upload Photos</em> </a>
                            </div>
                            <div class="col-md-12" align="center">
                                <textarea name="gambar" id="gambar" class="form-control" readonly="readonly"></textarea>
                            </div>
                        </div>
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
           
            <div class="form-group">
				<label class="col-md-2 control-label">Publish</label>
				<div class="col-md-10">
					<div class="radio-list col-md-10">&nbsp;
					<label class="radio-inline">
						<input type="radio" name="publish" id="publish" value="Y" <?php echo $publish=="Y"? "checked":"" ?> > Ya/Yes</label>
					<label class="radio-inline">
						<input type="radio" name="publish" id="publish" value="N" <?php echo $publish=="N"? "checked":"" ?> > Tidak/No </label>
					</div>
				</div>
			</div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="button" class="btn default" id="back_slideshow	">Batal / Cancel</button>
                        <button type="submit" class="btn blue">Simpan / Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

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
		   		$this->load->view("admin/slideshow/slideshowImage.php",$config) 
	?>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue">Selesai / Done</button>
    </div>
</div>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url()?>inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script>
	$("#back_slideshow").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/slideshow"
    });
	

	/*jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});*/
	
	$( ".form_promotion" ).validate({
	  rules: {
		  gambar: {
			required: true
		},
		 publish: {
			required: true
		}
	  }
	});

</script>

