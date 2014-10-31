<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<?php
	$news = isset($news)?$news:array();
	$id_berita = isset( $news[0]->id_berita )?$news[0]->id_berita:0;
	$judul_berita_ina = isset( $news[0]->judul_berita_ina )?$news[0]->judul_berita_ina:"";
	$judul_berita_eng = isset( $news[0]->judul_berita_eng )?$news[0]->judul_berita_eng:"";
	$isi_berita_ina = isset( $news[0]->isi_berita_ina )?$news[0]->isi_berita_ina:"";
	$isi_berita_eng = isset( $news[0]->isi_berita_eng )?$news[0]->isi_berita_eng:"";
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Form Berita / <em>News Form</em>
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/news/save" method="post" id="form_news" class="form-horizontal">
        	<input type="hidden" name="id_berita" value="<?php echo $id_berita ?>" />
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
                    <label class="control-label col-md-2">Judul (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $judul_berita_ina ?>" name="judul_berita_ina" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Title (English) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $judul_berita_eng ?>" name="judul_berita_eng" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Berita (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="isi_berita_ina" data-error-container="#editor1_error"><?php echo $isi_berita_ina ?></textarea>
                        <div id="editor2_error">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">News (English) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <textarea class="ckeditor form-control" rows="6" name="isi_berita_eng" data-error-container="#editor1_error"><?php echo $isi_berita_eng ?></textarea>
                        <div id="editor1_error">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Tag <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-9">
                        <?php
                        	$berita_tag = isset($berita_tag)?$berita_tag:array();
							$i = 0;
							foreach( $berita_tag as $row ):
							if( $i % 3 == 0 ):
								echo "<br />";
							endif;
							$i++;
						?>
                        	<div class="col-md-4">
                        	<label>
	                        	<input type="checkbox" name="id_berita_tag[]" id="id_berita_tag" class="id_berita_tag" value="<?php echo $row->id_berita_tag ?>" /> 
								<?php echo $row->tag_ina ?> / <?php echo $row->tag_eng ?> 
                            </label>
                            </div>
                        <?php	
							endforeach;
						?>
                    </div>
                </div>                                                                  
            </div>
            <h3> Foto-foto / <em>Photos</em></h3>
            <hr />
            <div class="form-group">
                <div class="col-md-12" align="center">
                    <a class="btn yellow" data-target="#newsupload" data-toggle="modal">Unggah Foto / <em>Upload Photos</em> </a>
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
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="button" id="CancelButton" class="btn default">Batal / Cancel</button>
                    	<button type="submit" name="submit" id="submit_news" class="btn green" value="">Simpan / Save </button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
</div>


<div id="newsupload" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
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

<script>
$(".id_berita_tag").each(function(index, element) {
	var value = $(this).val();
   	<?php
		foreach( $berita_tag_trans as $rb ):
	?>
		if( value == "<?php echo $rb->id_berita_tag ?>" )
		{
			$(this).attr("checked", "checked");
		}
	<?php	
		endforeach;
	?> 
});
</script>

<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/news"
    });
</script>