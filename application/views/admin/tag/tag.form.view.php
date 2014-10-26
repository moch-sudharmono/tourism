<div class="portlet box purple col-md-7">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Form Tag
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>admin/tag/save">
            <input type="hidden" name="id_berita_tag" />
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tag</label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="tag" placeholder="Inputkan Tag">
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="button" class="btn default">Batal / Cancel</button>
                        <button type="submit" class="btn blue">Simpan / Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>