<?php
	$tag = isset( $tag )?$tag:array();
	$id_berita_tag = isset( $tag[0]->id_berita_tag )?$tag[0]->id_berita_tag:"";
	$tag_ina = isset( $tag[0]->tag_ina )?$tag[0]->tag_ina:"";
	$tag_eng = isset( $tag[0]->tag_eng )?$tag[0]->tag_eng:"";
?>
<div class="portlet box purple col-md-7">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Form Tag / <em>Tag Form</em>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>admin/tag/save">
            <input type="hidden" name="id_berita_tag" value="<?php echo $id_berita_tag ?>" />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tag (Bahasa)</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="tag_ina" placeholder="Inputkan Tag" value="<?php echo $tag_ina ?>">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tag (English)</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="tag_eng" placeholder="Inputkan Tag" value="<?php echo $tag_eng ?>">
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="button" class="btn default" id="back_tag">Batal / Cancel</button>
                        <button type="submit" class="btn blue">Simpan / Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script>
	$("#back_tag").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/tag"
    });
</script>