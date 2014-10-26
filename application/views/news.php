<?php include('header.php'); ?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
				<?php include('sidebar.php'); ?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo $title?> <small><?php echo $small_title?></small>
			</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i><?php echo $title?> Data
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
											<a href="<?php echo base_url().'index.php/news/add'; ?>" class="btn green">
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
								<th>Judul</th>
								<th>Title</th>
                                <th>Konten</th>
                                <th>Content</th>
								<th>Tanggal/Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							</thead>
							<tbody>
                            	<?php foreach($query as $no=>$value) {?>
								<tr>
                                    <td><?php echo $no+1;?></td>
                                    <td><?php echo $value["judul_berita_ina"]?></td>
                                    <td><?php echo $value["judul_berita_eng"]?></td>
                                    <td><?php echo $value["isi_berita_ina"]?></td>
                                    <td><?php echo $value["isi_berita_eng"]?></td>
                                    <td><?php echo $value["tanggal_berita"]?></td>
                                    <td>
                                    	<!--
                                        <a class="edit" href="javascript:;">
                                        Edit </a>
                                        -->
                                        <a href="<?php echo base_url().'index.php/news/edit?id='.$value["id_berita"]; ?>" class="editNews" id="<?=$value["id_berita"]?>">
                                        Edit </a>
                                    </td>
                                    <td>
                                        <a class="deleteNews" id="<?php echo $value["id_berita"]?>" href="javascript:;">
                                        Delete </a>
                                    </td>
                                </tr>
                                <?php } ?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
            
<<<<<<< HEAD
            <div id="NewsForm">
           

			</div>
            </div>
=======
>>>>>>> origin/master
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<?php include("jsfile.php"); ?>

<!-- CUSTOMIZE JQUERY -->
<script>
jQuery(document).ready(function() { 
<<<<<<< HEAD
	$('#NewsForm').hide();
	
	$('#add_new').click(function(e){

		$('#NewsForm').show();
		//document.getElementById('form_news').action="<?=base_url()."index.php/".$modul."/insert"?>";

		//$('#NewsForm').show();
		Query("POST","","<?=base_url()?>index.php/News/Form","#NewsForm","");
		//document.getElementById('submit_news').value = "insert";
	});
	
	$('#CancelButton').click(function(e){
		$('#NewsForm').hide();
	});
	
	// initialize select2 tags
	$("#news_tags").change(function() {
		form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input 
	}).select2({
		tags: ["Pantai", "Wisata", "Jalan Jalan", "Renang", "Piknik"]
	});
	
	$('.editNews').css( 'cursor', 'pointer' ).click(function(e){
		var id = $(this).attr('id');
		$('#NewsForm').show();
		Query("GET","id="+id,"<?=base_url()?>index.php/News/Form","#NewsForm","");
	});

=======
>>>>>>> origin/master
	$('.deleteNews').click(function (e) {
            e.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }

			var id = $(this).attr("id");
            Query("GET", "id="+id, "<?php echo base_url()?>index.php/News/Delete","","");
			Query("GET", "", "<?php echo base_url()?>index.php/News","","");
        });
			
function Query(xType,xData,xUrl,xHasil,xEvent) {
	 	 $.ajax({
			cache:false,
			type: xType,
			url: xUrl,    
			data: xData,
			success: function (html){                 
			  $(xHasil).html(html);
			  eval(xEvent);				
			} 
		});
}
});
</script>
<!-- END CUSTOMIZE JQUERY -->


</body>
<!-- END BODY -->
</html>