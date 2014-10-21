<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?=base_url();?>inc/global/plugins/respond.min.js"></script>
<script src="<?=base_url();?>inc/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=base_url();?>inc/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=base_url();?>inc/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>inc/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="<?=base_url();?>inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?=base_url();?>inc/admin/pages/scripts/table-editable.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() { 
	
	$(".date").datepicker();   
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   
   FormValidation.init();
   TableEditable.init();
});
</script>
<!-- END JAVASCRIPTS -->