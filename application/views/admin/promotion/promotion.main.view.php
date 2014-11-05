<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i> Tabel Data Promosi / <em>Promotion Table</em>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button id="addnew_tag" class="btn green">
                        	Tambah / <em>Add New </em> <i class="fa fa-plus"></i>
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
                <th>Judul</th><th>Title</th>
                <th>Deskripsi</th><th>Description</th>
                <th width="250">Aksi / <em>Action</em></th>
            </tr>
            </thead>
            <tbody>
            <?php			
                if( isset($promotion) and !empty($promotion) ):
                foreach( $promotion as $row ):
            ?>
            <tr>
                <td><?php echo $row->promosi_ina ?></td><td><?php echo $row->promosi_eng ?></td>
                <td><?php echo PotongKata($row->deskripsi_ina, 30) ?></td><td><?php echo PotongKata($row->deskripsi_eng, 30) ?></td>
                <td align="center"> 
                    <a href="<?php echo base_url() ?>admin/promotion/form/<?php echo $row->id_promosi ?>"> 
                    	<i class="fa fa-edit"></i> Ubah / <em>Edit</em> 
                    </a> 
                    |
                    <a href="<?php echo base_url() ?>admin/promotion/delete/<?php echo $row->id_promosi ?>" class="hapus_promosi"> 
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
        location.href = "<?php echo base_url() ?>index.php/admin/promotion/form/0"
    });
	
	$(".hapus_promosi").click(function(e) {
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