<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-edit"></i> Tabel Data Testimoni / <em>Testimonial Table</em>
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
            <table width="100%" class="table table-striped table-hover table-bordered" id="tag_table">
            <thead>
            <tr>
                <th>Lokasi Wisata / Tourism</th>
                <th>Testimoni / Testimonial</th>
                <th>Tanggal / Date</th>
                <th width="250">Aksi / <em>Action</em></th>
            </tr>
            </thead>
            <tbody>
            <?php			
                if( isset($testimoni) and !empty($testimoni) ):
                foreach( $testimoni as $row ):
            ?>
            <tr>
                <td><?php echo $row->nama_lokasi_wisata_ina.'/'.$row->nama_lokasi_wisata_eng ?></td>
                <td><?php echo $row->testimoni ?></td>
                <td><?php echo TglIndo($row->tanggal_testimoni) ?></td>
                <td align="center"> 
                    <a href="<?php echo base_url() ?>admin/testimonial/form/<?php echo $row->id_testimoni_lokasi_wisata ?>"> 
                    	<i class="fa fa-send"></i> <?php if ($row->publish=="N") { echo "Belum Dipublikasi / <em>Not Published</em>";} else {echo "Sudah Dipublikasi / <em>Published</em>";} ?>
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
        location.href = "<?php echo base_url() ?>index.php/admin/testimonial/form/0"
    });
	
	$(".hapus_testimoni").click(function(e) {
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
