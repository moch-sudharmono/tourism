<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Titik Perjalanan / <em>Node</em> Data
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
                        <a href="<?php echo base_url().'admin/node/form/0'; ?>" class="btn green">
                        Tambah / <em>Add New</em> <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
        	<th width="50">
            	No
            </th>
            <th>
                 Titik Perjalanan / <em>Node</em>
            </th>
            
            <th width="250">
                 Aksi / <em>Action</em>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
		foreach($node as $no=>$val){
		?>
        <tr>
        	<td align="right">
                 <?php echo $no+1; ?>
            </td>
            <td>
                 <?php echo $val['nodes']; ?>
            </td>
            <td>
                <a href="<?php echo base_url().'admin/node/form/'.$val['id_nodes']; ?>">
                       <i class="fa fa-edit"></i> Ubah / Edit
                </a>
                |
                <a class="delete_node" href="<?php echo base_url().'admin/node/delete/'.$val['id_nodes']; ?>">
                <i class="fa fa-trash-o"></i> Hapus / Delete </a>
            </td>
        </tr>
        <?php } ?>
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
	
	$(".delete_node").click(function(e) {
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