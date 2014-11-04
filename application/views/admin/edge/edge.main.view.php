<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Jalur Perjalanan / <em>Edge</em> Data
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
                        <a href="<?php echo base_url().'admin/edge/form/0'; ?>" class="btn green">
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
        <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
        	<th>
            	No
            </th>
            <th>
                 Titik Awal / <em>First Node</em>
            </th>
            <th>
                 Titik Akhir / <em>Last Node</em>
            </th>
            <th width="250">
                 Aksi / <em>Action</em>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
		foreach($edge as $no=>$val){
		?>
        <tr>
        	<td align="right">
                 <?php 				 	
				 	echo $no+1; 
				 ?>
            </td>
            <td>
                 <?php echo $val['node_edge_from']; ?>
            </td>
            <td>
                 <?php echo $val['node_edge_to']; ?>
            </td>
            <td>
                <a href="<?php echo base_url().'admin/edge/form/'.$val['id_edges']; ?>">
                       <i class="fa fa-edit"></i> Ubah / Edit
                </a>
                |
                <a class="delete_edge" href="<?php echo base_url().'admin/edge/delete/'.$val['id_edges']; ?>">
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
	
	$(".delete_edge").click(function(e) {
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