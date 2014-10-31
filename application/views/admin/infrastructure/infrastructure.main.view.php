<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Sarana dan Prasarana / <em>Infrastructure</em> Data
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
                        <a href="<?php echo base_url() . "admin/infrastructure/form/0"; ?>" class="btn green">
                        Tambah / Add New <i class="fa fa-plus"></i>
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
        <table width="100%" class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
        <tr>
            <th>No.</th>
            <th>
                 Judul
            </th>
            <th>
                 Title
            </th>
            <th>
                 URL
            </th>
            <th width='250px'>
                 Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php 
		if(isset($infrastructure)){
		foreach($infrastructure as $no=>$value) {
		?>
        <tr>
            <td><?php echo $no+1?></td>
            <td><?php echo $value->nama_ina;?></td>
            <td><?php echo $value->nama_eng;?></td>
            <td><?php echo $value->url;?></td>
            <td>
                <a href="<?php echo base_url() ?>admin/infrastructure/form/<?php echo $value->id_sarana_prasarana ?>">
                    	<i class="fa fa-edit"></i> Ubah / <em>Edit</em> 
                </a>
                |
                <a href="<?php echo base_url() ?>admin/infrastructure/delete/<?php echo $value->id_sarana_prasarana ?>" class="delete_infrastructure">
                    <i class="fa fa-trash-o"></i> Hapus / <em>Delete</em> 
                </a>
            </td>
        </tr>
        <?php }}?>
        
        </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
<script>
	
	$(".delete_infrastructure").click(function(e) {
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