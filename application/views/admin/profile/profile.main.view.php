<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue col-md-12">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i> Tag Table
        </div>
        <div class="tools">
            
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="<?php echo base_url() ?>admin/profile/form/0" class="btn green">
                        	Tambah / <em>Add New</em> <i class="fa fa-plus"></i>
                        </a>
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
            <table class="table table-striped table-hover table-bordered" id="profile_table">
            <thead>
            <tr>
                <th>Lokasi</th><th>Location</th>
                <th>Profil</th><th>Profile</th>
                <th width="250">Aksi / <em>Action</em></th>
            </tr>
            </thead>
            <tbody>
            <?php			
                if( isset($profile) and !empty($profile) ):
                foreach( $profile as $row ):
            ?>
            <tr>
                <td><?php echo $row->nama_lokasi_wisata_ina ?></td>
                <td><?php echo $row->nama_lokasi_wisata_eng ?></td>
                <td><?php echo PotongKata($row->deskripsi_ina, 20) ?></td>
                <td><?php echo PotongKata($row->deskripsi_eng, 20) ?></td>
                <td align="center"> 
                    <a href="<?php echo base_url() ?>admin/profile/form/<?php echo $row->id_lokasi_wisata ?>"> <i class="fa fa-edit">
                    	</i> Ubah / <em>Edit</em> 
                    </a> 
                    |
                    <a href="<?php echo base_url() ?>admin/profile/delete/<?php echo $row->id_lokasi_wisata ?>" class="delete_profile"> 
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
	
	$(".delete_profile").click(function(e) {
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