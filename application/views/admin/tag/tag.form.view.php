<?php
	$tag = isset( $tag )?$tag:array();
	$id_berita_tag = isset( $tag[0]->id_berita_tag )?$tag[0]->id_berita_tag:"";
	$tag = isset( $tag[0]->tag )?$tag[0]->tag:"";
?>
<div class="portlet box purple col-md-7">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Form Tag
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>admin/tag/save">
            <input type="hidden" name="id_berita_tag" value="<?php echo $id_berita_tag ?>" />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tag</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="tag" placeholder="Inputkan Tag" value="<?php echo $tag ?>">
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="button" class="btn default" id="back_tag">Batal / Cancel</button>
                        <button type="submit" class="btn blue">Simpan / Submit</button>
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