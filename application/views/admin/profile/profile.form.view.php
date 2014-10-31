<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->

<?php
	$profile = isset( $profile )?$profile:array();
	$id_lokasi_wisata = isset( $profile[0]->id_lokasi_wisata )?$profile[0]->id_lokasi_wisata:"";
	$id_lokasi_wisata_kategori = isset( $profile[0]->id_lokasi_wisata_kategori )?$profile[0]->id_lokasi_wisata_kategori:"";
	
	$nama_lokasi_wisata_ina = isset( $profile[0]->nama_lokasi_wisata_ina )?$profile[0]->nama_lokasi_wisata_ina:"";
	$nama_lokasi_wisata_eng = isset( $profile[0]->nama_lokasi_wisata_ina )?$profile[0]->nama_lokasi_wisata_ina:"";
	
	$deskripsi_ina = isset( $profile[0]->deskripsi_ina )?$profile[0]->deskripsi_ina:"";
	$deskripsi_eng = isset( $profile[0]->deskripsi_eng )?$profile[0]->deskripsi_eng:"";
	
	$id_peta = isset( $profile[0]->id_peta )?$profile[0]->id_peta:"";
	$parent_id = isset( $profile[0]->parent_id )?$profile[0]->parent_id:"";
	
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Form Profile Lokasi / <em>Location Profile Form</em>
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/profile/save" method="post" id="profile_form" class="form-horizontal">
        	<input type="hidden" name="id_lokasi_wisata" value="<?php echo $id_lokasi_wisata ?>" />
            
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
                    <label class="control-label col-md-3">Lokasi Acuan / Parent Location <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                       <select name="parent_id" id="parent_id" class="form-control">
                       	<option value="">-- Lokasi Utama / Parent Location --</option>
					   	<?php
					   		$parent = isset($parent)?$parent:array();
                       		foreach( $parent as $row ):
						?>
                        	<option value="<?php echo $row->id_lokasi_wisata ?>"> 
								<?php echo $row->nama_lokasi_wisata_ina  ?> /  <?php echo $row->nama_lokasi_wisata_eng  ?>
                            </option>
                        <?php
							endforeach;
					   	?>
                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Kategori / Category <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                       <select name="id_lokasi_wisata_kategori" id="id_lokasi_wisata_kategori" class="form-control">
					   	<?php
					   		$kategori = isset($kategori)?$kategori:array();
                       		foreach( $kategori as $row ):
						?>
                        	<option value="<?php echo $row->id_lokasi_wisata_kategori ?>"> 
								<?php echo $row->kategori_ina  ?> /  <?php echo $row->kategori_eng  ?>
                            </option>
                        <?php
							endforeach;
					   	?>
                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Lokasi (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $nama_lokasi_wisata_ina ?>" name="nama_lokasi_wisata_ina" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Location (English) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $nama_lokasi_wisata_eng ?>" name="nama_lokasi_wisata_eng" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Peta / Map <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                       <select name="id_peta" id="id_peta" class="form-control">
					   	<?php
					   		$pointer = isset($pointer)?$pointer:array();
                       		foreach( $pointer as $row ):
						?>
                        	<option value="<?php echo $row->id ?>"> 
								<?php echo $row->name  ?>
                            </option>
                        <?php
							endforeach;
					   	?>
                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Profil (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="deskripsi_ina"><?php echo $deskripsi_ina ?></textarea>
                        <div id="editor2_error">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Profile (English) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="deskripsi_eng"><?php echo $deskripsi_eng ?></textarea>
                        <div id="editor1_error">
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
                            	<img src="<?php echo base_url() ?>upload/thumbs/<?php echo $row->gambar ?>" alt="<?php echo $row->gambar ?>" />                            
                        	</a>
                        </div>
                    <?php
                    	endforeach;
					?>
                </div>
                
                <h3> Sarana Prasarana / <em>Infrastructure</em></h3>
                <hr />
                <?php
					$sarana_prasarana = isset($sarana_prasarana)?$sarana_prasarana:array();
                	foreach( $sarana_prasarana as $row ):
				?>
                <div class="form-group">
                    <label class="control-label col-md-3">
                    	<?php echo $row->kategori_sarana_prasarana_ina ?> / <em><?php echo $row->kategori_sarana_prasarana_eng ?></em>
                    </label>
                    <?php foreach( $row->sarana_prasarana as $rs ): ?>
                    <div class="col-md-4">
                        <label>
                        <input type="checkbox" name="id_sarana_prasarana[]" class="id_sarana_prasarana" value="<?php echo $rs->id_sarana_prasarana ?>" />
                        <?php echo $rs->nama_ina ?> / <em><?php echo $rs->nama_eng ?></em>
                        </label>
                    </div>
                    
                    <?php endforeach; ?>
                </div>
                <hr />
                <?php
                	endforeach;
				?>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="button" id="back" class="btn default">Batal / Cancel</button>
                            <button type="submit" name="submit" id="submit_news" class="btn green" value="">Simpan / Save </button>
                        </div>
                    </div>
                </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
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
	   		$this->load->view("upload/formupload.view.php", $config);
	   ?>
       
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue" id="SelectFile">Selesai / Done</button>
    </div>
</div>




<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>inc/admin/pages/scripts/ui-extended-modals.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() { 
   UIExtendedModals.init();
});
</script>
<!-- END JAVASCRIPTS -->

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
	$("#back").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/profile"
    });
	<?php if( isset($parent_id) and !empty($parent_id) ): ?>
	$("#parent_id").val("<?php echo $parent_id; ?>");
	<?php endif; ?>
	
	<?php if( isset($id_lokasi_wisata_kategori) and !empty($id_lokasi_wisata_kategori) ): ?>
	$("#id_lokasi_wisata_kategori").val("<?php echo $id_lokasi_wisata_kategori ?>");
	<?php endif; ?>
	<?php if( isset($id_peta) and !empty($id_peta) ): ?>
	$("#id_peta").val("<?php echo $id_peta ?>");
	<?php endif; ?>
</script>

