<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>Rute / <em>Route</em> Data
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
                        <a href="<?php echo base_url().'admin/route/form/0'; ?>" class="btn green">
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
        	<th>
            	No
            </th>
            <th>
                 Sarana Prasarana / <em>Infrastructure</em>
            </th>
            <th>
                 Rute
            </th>
            <th>
                 Waktu Perjalanan (Jam) / <em>Travel Time (Hour)</em>
            </th>
            <th>
                 Perkiraan Biaya (Rp) / <em>Estimated Cost (IDR)</em>
            </th>            
            <th width="250">
                 Aksi / <em>Action</em>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
		foreach($route as $no=>$val){
		?>
        <tr>
        	<td align="right" width="50">
                 <?php echo $no+1; ?>
            </td>
            <td>
                 <?php echo $val['nama_ina'].' / '.$val['nama_eng']; ?>
            </td>
            <td>
                 <?php echo $val['node_edge_from'].' - '.$val['node_edge_to']; ?> 
            </td>
            <td align="right">
                 <?php echo $val['waktu_perjalanan']; ?>
            </td>
            <td align="right">
                 <?php echo number_format($val['estimasi_biaya']); ?>
            </td>
            <td align="center">
                <a href="<?php echo base_url().'admin/route/form/'.$val['id_transportation']; ?>">
                       <i class="fa fa-edit"></i> Ubah / Edit
                </a>
                |
                <a class="delete_route" href="<?php echo base_url().'admin/route/delete/'.$val['id_transportation']; ?>">
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
	
	$(".delete_route").click(function(e) {
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