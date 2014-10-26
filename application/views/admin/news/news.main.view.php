<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i>News Data
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
                        <a href="<?php echo base_url() . "admin/news/form/0"; ?>" class="btn green">
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
        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
        <tr>
            <th>Judul</th>
            <th>Title</th>
            <th>Isi</th>
            <th>Content</th>
            <th>Tanggal / <em>Date</em></th>
            <th width="250">Aksi / <em>Action</em></th>
        </tr>
        </thead>
        <tbody>
            <?php
				
				if( isset($news) and !empty($news) ): 
				foreach( $news as $row ):
			?>
            <tr>
                <td><?php echo $row->judul_berita_ina ?></td>
                <td><?php echo $row->judul_berita_eng ?></td>
                <td><?php echo PotongKata($row->isi_berita_ina, 20) ?></td>
                <td><?php echo PotongKata($row->isi_berita_eng, 20) ?></td>
                <td><?php echo $row->tanggal_berita ?></td>
                <td align="center">
                    <a href="<?php echo base_url() ?>admin/news/form/<?php echo $row->id_berita ?>">
                    	<i class="fa fa-edit"></i> Ubah / <em>Edit</em> 
                    </a>
                    |
                    <a href="<?php echo base_url() ?>admin/news/delete/<?php echo $row->id_berita ?>" class="delete_news">
                    	<i class="fa fa-trash-o"></i> Hapus / <em>Delete</em> 
                    </a>
                </td>
            </tr>
            <?php 
				endforeach;
				endif; 
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
	$(".delete_news").click(function(e) {
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