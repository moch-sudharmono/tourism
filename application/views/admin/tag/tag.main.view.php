<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue col-md-7">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i> Tabel Tag / <em>Tag Table</em>
        </div>
        <div class="tools">
            
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button id="addnew_tag" class="btn green">
                        	Tambah / <em>Add New</em> <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-striped table-hover table-bordered" id="tag_table">
            <thead>
            <tr>
                <th>Tag</th>
                <th width="250">Aksi / <em>Action</em></th>
            </tr>
            </thead>
            <tbody>
            <?php			
                if( isset($tag) and !empty($tag) ):
                foreach( $tag as $row ):
            ?>
            <tr>
                <td><?php echo $row->tag_ina ?> / <?php echo $row->tag_eng ?></td>
                <td align="center"> 
                    <a href="<?php echo base_url() ?>admin/tag/form/<?php echo $row->id_berita_tag ?>"> <i class="fa fa-edit">
                    	</i> Ubah / <em>Edit</em> 
                    </a> 
                    |
                    <a href="<?php echo base_url() ?>admin/tag/delete/<?php echo $row->id_berita_tag ?>" class="hapus_tag"> 
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

<script>
	$("#addnew_tag").click(function(e) {
        location.href = "<?php echo base_url() ?>admin/tag/form/0"
    });
	
	$(".hapus_tag").click(function(e) {
        if( confirm("Anda yakin / Are you Sure ?") )
		{
			return true;
		}
		else
		{
			return false;
		}
    });
</script>