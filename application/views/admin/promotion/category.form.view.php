<?php
	$category = isset($category)?$category:array();
	$id_kategori_promosi = isset( $category[0]->id_kategori_promosi )?$category[0]->id_kategori_promosi:0;
	$kategori_promosi_ina = isset( $category[0]->kategori_promosi_ina )?$category[0]->kategori_promosi_ina:"";
	$kategori_promosi_eng = isset( $category[0]->kategori_promosi_eng )?$category[0]->kategori_promosi_eng:"";
	
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Kategori Promosi / <em>Promotion Category</em> Form
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url().'admin/promotion_category/save' ?>" id="form_promosi_kat" class="form-horizontal" method="post"	>
        	<input type="hidden" name="id_kategori_promosi" value="<?php echo $id_kategori_promosi ?>" />
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
                    <label class="control-label col-md-3">Category (English) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $kategori_promosi_eng ?>" name="kategori_promosi_eng" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Kategori (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $kategori_promosi_ina ?>" name="kategori_promosi_ina" data-required="1" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="button" ID="CancelButton" class="btn default">Batal / Cancel</button>
                        <button type="submit" class="btn green" name="submit" id="submit_promotion_kat" value="">Simpan / Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
 <script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/promotion_category"
    });
</script>
<script>
	/*jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});*/
	$( "#form_promosi_kat" ).validate({
	  rules: {
		 kategori_promosi_eng: {
			required: true
		},
		kategori_promosi_ina: {
			required: true
		}
	  }
	});

</script>
