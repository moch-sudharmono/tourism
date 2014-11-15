<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i> Tabel Data Slideshow / <em>Slideshow Table</em>
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
                <th>Gambar/<em>Image</em></th>
                <th>Deskripsi</th>
                <th>Description</th>                
                <th>Status</th>
                <th width="250">Aksi / <em>Action</em></th>
            </tr>
            </thead>
            <tbody>
            <?php			
                if( isset($slideshow) and !empty($slideshow) ):
                foreach( $slideshow as $row ):
            ?>
            <tr>
                <td><?php echo $row->gambar ?></td>
                <td><?php echo PotongKata($row->keterangan_ina, 30) ?></td>
                <td><?php echo PotongKata($row->keterangan_eng, 30) ?></td>
                <td><?php echo $row->publish? "Publish":"NotPublish" ?></td>
                <td align="center"> 
                    <a href="<?php echo base_url() ?>index.php/admin/slideshow/form/<?php echo $row->id_slideshow ?>"> 
                    	<i class="fa fa-edit"></i> Ubah / <em>Edit</em> 
                    </a> 
                    |
                    <a href="<?php echo base_url() ?>admin/slideshow/delete/<?php echo $row->id_slideshow ?>" class="hapus_attraction"> 
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
        location.href = "<?php echo base_url() ?>index.php/admin/slideshow/form/0"
    });
	
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
</script>
