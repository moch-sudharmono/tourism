<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Kategori Sarana Prasarana / <em>Infrastructure Categories</em> Data
        </div>
        <div class="tools">
            
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="<?php echo base_url().'admin/infrastructure_category/form/0'; ?>" class="btn green">
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
        <table width="100%" class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
        <tr>
            <th width="50">No.</th>
            <th>
                 Kategori
            </th>
            <th>
                 Category
            </th>
            <th width="250">
                 Aksi / Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($category as $no=>$value){?>
        <tr>
            <td align="right"><?php echo $no+1?></td>
            <td><?php echo $value->kategori_sarana_prasarana_ina?></td>
            <td><?php echo $value->kategori_sarana_prasarana_eng?></td>
            <td align="center">
            	<a href="<?php echo base_url() ?>admin/infrastructure_category/form/<?php echo $value->id_kategori_sarana_prasarana ?>">
                    	<i class="fa fa-edit"></i> Ubah / <em>Edit</em> 
                </a>
                |
                <a class="delete_category" href="<?php echo base_url().'admin/infrastructure_category/delete/'.$value->id_kategori_sarana_prasarana; ?>">
                <i class="fa fa-trash-o"></i> Hapus / <em>Delete</em> 
                </a>
            </td>
        </tr>
        <?php }?>
        </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
<script>
	$(".delete_category").click(function(e) {
        if( confirm("Anda yakin / Are you sure ?") )
		{
			return true;
		}
		else
		{
			return false;
		}
    });
</script>