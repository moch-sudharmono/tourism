<?php
	$sitemap = isset( $sitemap )?$sitemap:array();
	$id_sitemap = isset( $sitemap[0]->id_sitemap )?$sitemap[0]->id_sitemap:"";
	$sitemap_no = isset( $sitemap[0]->sitemap_no )?$sitemap[0]->sitemap_no:"";
	$parent = isset($parent)?$parent:array();
	$parent_id = isset( $sitemap[0]->parent_id )?$sitemap[0]->parent_id:"";
	$nama_sitemap_ina = isset( $sitemap[0]->nama_sitemap_ina )?$sitemap[0]->nama_sitemap_ina:"";
	$nama_sitemap_eng = isset( $sitemap[0]->nama_sitemap_eng )?$sitemap[0]->nama_sitemap_eng:"";
	$url = isset( $sitemap[0]->url )?$sitemap[0]->url:"";
	$css_id = isset( $sitemap[0]->css_id )?$sitemap[0]->css_id:"";
	$css_class = isset( $sitemap[0]->css_class )?$sitemap[0]->css_class:"";
	$icon = isset( $sitemap[0]->icon )?$sitemap[0]->icon:"";
?>

<!-- BEGIN VALIDATION STATES-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Sitemap Form
        </div>							
    </div>
    
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?php echo base_url() ?>admin/sitemap/save" method="post" class="form-horizontal">
        <input type="hidden" name="id_sitemap" value="<?php echo $id_sitemap; ?>" />
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
                    <label class="control-label col-md-3">Sitemap No
                    </label>
                    <div class="col-md-4">
                        <input type="text" name="sitemap_no" value="<?php echo $sitemap_no; ?>" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Parent Menu
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="parent_menu" id="parent_id">
                            <option value="">Please Choose Option</option>
                            <?php foreach($parent as $value){ ?>
                                <option value="<?php echo $value->id_sitemap;?>">
                                    <?php echo $value->nama_sitemap_ina;?> 
                                    /
                                    <?php echo $value->nama_sitemap_eng;?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Nama Menu (Bahasa)
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $nama_sitemap_ina; ?>" name="nama_sitemap_ina" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Menu Name (English)
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $nama_sitemap_eng; ?>" name="nama_sitemap_eng" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">URL 
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $url; ?>" name="url" data-required="1" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">CSS ID
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $css_id; ?>" name="css_id" data-required="1" class="form-control"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">CSS Class 
                    </label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $css_class; ?>" name="css_class" data-required="1" class="form-control"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">Icon Select 
                    </label>
                    <div class="col-md-4">
                        <select class="form-control" name="menu_icon">
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
                        <button type="submit" class="btn green">Submit</button>
                        <button type="button" ID="CancelButton" class="btn default">Batal</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <!-- END VALIDATION STATES-->
<script>
	$("#CancelButton").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/sitemap";
    });
	$("#parent_id").val("<?php echo $parent_id; ?>");
</script>