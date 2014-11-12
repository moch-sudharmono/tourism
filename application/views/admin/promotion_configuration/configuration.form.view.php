<?php
	$web_title = isset($web_title)?$web_title:"";
	$our_contact = isset($our_contact)?$our_contact:"";
	$theme = isset($theme)?$theme:"";
	$map_id = isset($map_id)?$map_id:"";
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa  fa-wrench"></i>Pengaturan / <em>Configuration</em>
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" method="post" id="form_node" class="form-horizontal">
        	<input type="hidden" name="id_nodes" value="" />
            <div class="form-body">									
                
                <div class="form-group">
                    <label class="control-label col-md-4">Tema / <em>Theme</em>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control update" name="theme" id="theme" data-field="val_varchar" >
                        	<option value="">-- Pilih Tema / Select Theme--</option>
                            <option value="red">Merah / Red</option>
                            <option value="green">Hijau / Green</option>
                            <option value="blue">Biru / Blue</option>
                            <option value="gray">Abu-abu / Gray</option>
                            <option value="orange">Jingga / Orange</option>
                            <option value="turquoise">Pirus / Turquoise</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4">Judul Website / <em>Web Title</em>
                    </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control update" value="<?php echo $web_title ?>" name="web_title" data-field="val_varchar" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4">Kontak Kami / <em>Our Contact</em>
                    </label>
                    <div class="col-md-8">
                        <textarea name="our_contact" class="form-control update" id="our_contact" data-field="val_text"><?php echo $our_contact ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-4">Kontak Peta / <em>Map Contact</em>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control update" name="map_id" data-field="val_int">
                        	<?php
                            	$map = isset($map)?$map:array();
								foreach( $map as $rm ):
							?>
                            	<option value="<?php echo $rm->id ?>"><?php echo $rm->name ?></option>
                            <?php
                            	endforeach;
							?>
                        </select>
                    </div>
                </div>
                                                                                        
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/node"
    });	
</script>
<script>
	$("#theme").val("<?php echo $theme ?>");
	$("#map_id").val("<?php echo $map_id ?>");
	
	$(".update").change(function(e) {
        var varname = $(this).attr("name");
		var field = $(this).attr("data-field");
		var value = $(this).val();
		var data = "varname=" + varname + "&field=" + field + "&value=" + value;
		//alert(data);
		ajax("post", data, "<?php echo base_url() ?>admin/promotion_configuration/update", "", "")
    });
	
	$("#our_contact").change(function(){
		 var editorText = CKEDITOR.instances.my_editor.getData();
		 alert(editorText)
	});
	
</script>