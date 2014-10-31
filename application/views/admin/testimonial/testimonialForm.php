<?php
	$testimonial = isset($testimonial)?$testimonial:array();
	$id_testimoni_lokasi_wisata = isset( $testimonial[0]->id_testimoni_lokasi_wisata )?$testimonial[0]->id_testimoni_lokasi_wisata:0;
	$lokasi_wisata_ina = isset( $testimonial[0]->nama_lokasi_wisata_ina )?$testimonial[0]->nama_lokasi_wisata_ina:"";
	$lokasi_wisata_eng = isset( $testimonial[0]->nama_lokasi_wisata_eng )?$testimonial[0]->nama_lokasi_wisata_eng:"";
	$testimoni = isset( $testimonial[0]->testimoni )?$testimonial[0]->testimoni:"";
	$tanggal = isset( $testimonial[0]->tanggal_testimoni )?$testimonial[0]->tanggal_testimoni:"";
	$tanggal_testimoni = ddmmyyyy($tanggal);
?>                  
<div class="portlet box purple">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Form Tag
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/testimonial/save">
            <input type="hidden" name="id_testimoni" value="<?php echo $id_testimoni_lokasi_wisata ?>" />
            
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Lokasi Wisata / <em>Tourism</em></label>
                    <div class="col-md-10">
	                    <input type="text" class="form-control" name="lokasi_wisata" placeholder="" value="<?php echo $lokasi_wisata_ina.'/'.$lokasi_wisata_eng ?>">
                    </div>
                </div>
            </div>
            
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Testimoni/testimonial</label>
                    <div class="col-md-10">
	                    <textarea class="form-control ckeditor" name="testimoni"><?php echo $testimoni ?></textarea>
                    </div>
                </div>
            </div>
            
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Tanggal Testimoni / <em>Testimonial Date</em></label>
                    <div class="col-md-2">
                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                            <input type="text" class="form-control tanggal_promosi" value="<?php echo $tanggal_testimoni ?>" name="tanggal_promosi"  readonly />
                            <span class="input-group-btn">
                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
           
            
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <button type="button" class="btn default" id="CancelButton" name="reject">Batal / Cancel</button>
                        <button type="submit" class="btn red publish" id="reject" name="reject" value="Reject" data-title="Anda Yakin Menolak / Are you seure to Reject ?">Tolak / Reject</button>
                        <button type="submit" class="btn blue publish" id="approved" name="approved" value="Approved" data-title="Anda Yakin Menerima / Are you seure to Publish ?">Terima / Approved</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/testimonial"
    });
	
	$(".publish").click(function(e) {
		var title = $(this).attr("data-title");
        if( confirm(title) )
		{
			return true;
		}
		else
		{
			return false;
		}
    });
</script>