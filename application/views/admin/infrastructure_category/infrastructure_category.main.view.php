<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Kategori Sarana Prasarana / <em>Infrastructure Categories</em> Data
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
            <a href="#portlet-config" data-toggle="modal" class="config">
            </a>
            <a href="javascript:;" class="reload">
            </a>
            <a href="javascript:;" class="remove">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="<?php echo base_url().'admin/infrastructure_category/form/0'; ?>" class="btn green">
                        Add New <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
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
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
        <tr>
            <th>No.</th>
            <th>
                 Kategori
            </th>
            <th>
                 Category
            </th>
            <th width="150">
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
            <td>
                <a class="delete_category" href="<?php echo base_url().'admin/infrastructure_category/delete/'.$value->id_kategori_sarana_prasarana; ?>">
                <i class="fa fa-trash-o"></i> Delete 
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