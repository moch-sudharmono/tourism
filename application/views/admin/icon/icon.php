<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i> Tabel Data Icon / <em>Icon Table</em>
        </div>
        <div class="tools">
            
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button id="addnew_tag" class="btn green" data-target="#static1" data-toggle="modal">
                        	Tambah / <em>Add New </em> <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!--<div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#">
                                Print </a>
                            </li>
                            <li>
                                <a href="#">
                                Save as PDF </a>
                            </li>
                            <li>
                                <a href="#">
                                Export to Excel </a>
                            </li>
                        </ul>
                    </div>
                </div>-->
            </div>
        </div>
            <table class="table table-striped table-hover table-bordered" id="tag_table">
            <thead>
            <tr>
                <th>Icon Detail</th>
                <th>Icon</th>
                <th width="250">Aksi / <em>Action</em></th>
            </tr>
            </thead>
            <tbody>
            <?php			
                if( isset($icon) and !empty($icon) ):
                foreach( $icon as $row ):
            ?>
            <tr>
                <td><?php echo $row->icon ?></td>
                <td>
                        <div class="col-md-2" align="center">
                        <a href="<?php echo base_url() ?>upload/<?php echo $row->icon ?>" target="_blank">
							<img src="<?php echo base_url() ?>upload/<?php echo $row->icon ?>" alt="<?php echo $row->icon ?>" />                      </a>      
                        </div>
                    
                 </td>
                <td align="center"> 
                   
                    <a href="<?php echo base_url() ?>admin/icon/delete/<?php echo $row->id_icon ?>" class="hapus_attraction"> 
                    	<i class="fa fa-trash-o"></i> Hapus / <em>Delete</em> 
                    </a>
                </td>
            </tr>
            <?php	
                endforeach;
                endif
            ?>
            </tbody>
            </table>
            <div align="right">
                <ul class="pagination">
                    <?php echo $paging; ?>
                </ul>
            </div>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

<div id="static1" class="modal container fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Unggah Icon / <em>Upload Icon</em></h4>
    </div>
    <div class="modal-body">
       <?php 
	   			$this->load->view("admin/icon/iconForm.php") 
	?>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default" id="cancel">Batal / Cancel</button>
        <button type="button" data-dismiss="modal" class="btn blue" id="save">Selesai / Done</button>
    </div>
</div>

<script src="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>inc/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>

<script>
	
	$(".hapus_attraction").click(function(e) {
        if( confirm("Anda yakin / Are you Sure ?") )
		{
			return true;
		}
		else
		{
			return false;
		}
    });
	
	$("#save").click(function(e) {
         var x = document.getElementById('filename').innerHTML;
		 var res = x.substring(4);
		 //alert(x);
		 location.href = "<?php echo base_url() ?>admin/icon/save/"+res;
    });
</script>

<script>
jQuery(document).ready(function() { 
   UIExtendedModals.init();
   
   FormValidation.init();
});
</script>