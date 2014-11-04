<?php
	$category = isset($category)?$category:array();
	$id_kategori_sarana_prasarana = isset( $category[0]->id_kategori_sarana_prasarana )?$category[0]->id_kategori_sarana_prasarana:0;
	$kategori_sarana_prasarana_ina = isset( $category[0]->kategori_sarana_prasarana_ina )?$category[0]->kategori_sarana_prasarana_ina:"";
	$kategori_sarana_prasarana_eng = isset( $category[0]->kategori_sarana_prasarana_eng )?$category[0]->kategori_sarana_prasarana_eng:"";
	
?>
<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Kategori Sarana Prasarana / <em>Infrastructure Category</em> Form
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url().'admin/infrastructure_category/save' ?>" id="form_sarana_kat" class="form-horizontal" method="post"	>
        	<input type="hidden" name="id_kategori_sarana_prasarana" value="<?php echo $id_kategori_sarana_prasarana ?>" />
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
                        <input type="text" value="<?php echo $kategori_sarana_prasarana_eng ?>" name="kategori_sarana_prasarana_eng" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Kategori (Bahasa) <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $kategori_sarana_prasarana_ina ?>" name="kategori_sarana_prasarana_ina" data-required="1" class="form-control"/>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-md-3">Icon Select <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="kategori_icon">
                            <option value="">Please Choose Option</option>
                            <option value="Option 1">Cart</option>
                            <option value="Option 2">Rocket</option>
                            <option value="Option 3">Door</option>
                        </select>
                    </div>
                </div>
                                                                                        
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green" name="submit" id="submit_infra_kat" value="">Submit</button>
                        <button type="button" ID="CancelButton" class="btn default">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
 <script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/infrastructure_category"
    });
</script>
<script>
	/*jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});*/
	$( "#form_sarana_kat" ).validate({
	  rules: {
		 kategori_sarana_prasarana_eng: {
			required: true
		},
		kategori_sarana_prasarana_ina: {
			required: true
		},
		kategori_icon: {
			required: true
		}
	  }
	});

</script>
