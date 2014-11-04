<?PHP $this->load->view('admin/header');?>
	<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>inc/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>inc/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>

<!-- END PAGE LEVEL STYLES -->

<!-- panorama -->
        <link rel="stylesheet" href="<?PHP echo base_url()?>ASSETMAP/panorama/ddpanorama.css" />
        <script src="<?PHP echo base_url()?>inc/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/jquery.ba-outside-events.min.js"> </script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/imagesloaded.pkgd.min.js"> </script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/ddpanorama.min.js"> </script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/ddpanorama.gensample.js"> </script>
<!-- endpanorama -->

<!-- summernute-->
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-summernote/summernote.css">
<!-- summernote -->


<!-- style urang kumaha urang -->
<style type="text/css">
    .modal-boge{
        width:690px;
    }

    select.icon-menu option {
    background-repeat:no-repeat;
    background-position:bottom left;
    padding-left:30px;
    }

    .progress { position:relative; width:auto; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
    .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
    .percent { position:absolute; display:inline-block; top:3px; left:48%; }

</style>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript">

var layers=[];
var markers = [];
var infowindow = new google.maps.InfoWindow({   
      maxWidth: 300,
      minWidth: 100
  });

<?PHP echo $kl;?>

var map;
//variable dari controller
<?PHP echo $variable; ?>

function initialize() {
    var latlng = new google.maps.LatLng(<?PHP echo $titiklat;?>,<?PHP echo $titiklng;?>);
    var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.MAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);

    google.maps.event.addListener(map, 'click', function(event) {
        addMarker(event.latLng);
    });
  
      //pointer dari controller
  <?PHP echo $addpo;?>

  

  

}

<?PHP echo $extrac; ?>

function addMarker(location) {
  setAllMap(null);
  var marker = new google.maps.Marker({
    position: location,
    draggable: true,
    title: 'Drag Me!',
    map: map
  });
  markers.push(marker);

   $("#x").val(location.lat());
    $("#y").val(location.lng());    
    google.maps.event.addListener(marker, 'dragend', function (event) {
    document.getElementById("x").value = this.getPosition().lat();
    document.getElementById("y").value = this.getPosition().lng();
});

}

// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

function toggleLayers(i)
{

  if(layers[i].getMap()==null) {
     layers[i].setMap(map);
  }
  else {
     layers[i].setMap(null);
  }
  //document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";
}

function setinfo(marker,teks,picture,name,panorama){

    
    google.maps.event.addListener(marker, 'click', function() {
       
        var contentString = "<center><h3 style='min-Width:300px;'><font color='#303030'>"+name+"</font></h3>"+picture+"<br/><br/>"+panorama+"</center><font color='black'>"+teks+"</font>";
        infowindow.setContent(contentString);
        infowindow.open(map,marker);
        
    
    });
}




google.maps.event.addDomListener(window, 'load', initialize);

	</script>


</head>

<body onLoad="initialize()" class="page-header-fixed page-quick-sidebar-over-content">
<?PHP $this->load->view('admin/sidebar');?>
<div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">
                Pengaturan Titik Lokasi
            </h3>
<!--<div id="status"></div> -->






            <div class="row">
                <div class="col-md-6">
<!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box purple" >
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-share-square-o"></i>Lapisan Peta
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="expand">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body collapse">
                           
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                            <tr>
                                <th>
                                     Nama
                                </th>
                                <th>
                                     Tampilkan
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?PHP foreach($datamap->result() as $row){
                                $cek = "<input type='checkbox' onclick='toggleLayers(".$row->id.");'/>";
                                ?>
                                    <tr>
                                        <td>
                                             <?PHP echo $row->name;?>
                                        </td>
                                        <td>
                                            <?PHP echo $cek;?>
                                        </td>
                                    </tr>
                            <?PHP } ?>
                            </tbody>
                            </table>
                            <div class="form-actions right">
                                <a href="<?PHP echo site_url()?>mapping/map"><i class="fa fa-table"></i>&nbsp;Atur Lapisan Peta</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

                <div class="col-md-6">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-map-marker"></i>Lokasi
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="expand">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body collapse">
                           
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_2">
                            <thead>
                            <tr>
                                <th>
                                     Lokasi
                                </th>
                                <th>
                                     Tampilkan
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?PHP echo $htmli;?>
                            </tbody>
                            </table>
                            <a href="<?PHP echo site_url()?>mapping/category"><i class="fa fa-table"></i>&nbsp;Atur Kategori</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="portlet solid blue-hoki">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-map-marker"></i>Peta
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: block;">
                           <div id="map_canvas" style="height:500px;"></div>
                        </div>
                    </div>





            <?php $alert = $this->session->flashdata('message');
             $alert2 = $this->session->flashdata('message2');
             $alert3 = $this->session->flashdata('message3');
                if($alert != null){?>
                <div id="prefix_1348305658607" class="Metronic-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center><?php echo $this->session->flashdata('message')?></center>
                </div>
                   <?php }
                else if($alert2 != null){?>  
                    <div id="prefix_42260307460" class="Metronic-alerts alert alert-warning fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>   
                        <center><?php echo $this->session->flashdata('message2')?></center>
                    </div>
                     <?php }
                else if($alert3 != null){?>
                <div id="prefix_788326886857" class="Metronic-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center><?php echo $this->session->flashdata('message3')?></center>
                </div>
                <?php }?>




                                <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-plus"></i>Tambah Lokasi
                                        </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="expand">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body collapse" >
                                        <!-- BEGIN FORM-->
                                        <form method="post"  action="<?php echo site_url()?>/mapping/point/insert" class="form-horizontal" onsubmit="return postForm1()" enctype="multipart/form-data" id="myForm"> 
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Longitude (Garis Bujur)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" id="y" name="lng" class="form-control input-circle" placeholder="ketik longitude" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    
                                                    <label class="col-md-3 control-label">Latitude (Garis Lintang)</label>
                                                    <div class="col-md-4">
                                                        <input type="text" id="x" name="lat" class="form-control input-circle" placeholder="ketik latitude" required>
                                                        <span class="help-block">
                                                        *Anda juga dapat meng-click pada peta untuk mendapatkan Latitude dan Longitude
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Nama</label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-map-marker"></i>
                                                            <input type="text" name="name" class="form-control input-circle" placeholder="nama lokasi" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Kategori</label>
                                                    <div class="col-md-4">
                                                    
                                                            <select class="form-control input-inline input-medium" name="category" required>
                                                                 <option disabled selected value="none">Pilih Kategori...</option>
                                                                 <?PHP foreach($kategori->result() as $ori){ ?>
                                                                  <option value="<?PHP echo $ori->id_cat; ?>" style="background-image:url(<?PHP echo base_url()?>ASSETMAP/point/<?PHP echo $ori->icon; ?>);"> <?PHP echo $ori->name_category; ?></option>
                                                                <?PHP } ?>
                                                            </select>
                                                            <span class="help-inline">Jika tidak ada kategori yang sesuai, anda dapat menambahkan kategori <a href="<?PHP echo site_url()?>mapping/category">di sini</a></span>
                                                       
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                        <label class="control-label col-md-3">Gambar</label>
                                                        <div class="col-md-9">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="<?PHP echo base_url()?>ASSETMAP/noimage.gif" alt=""/>
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px;">
                                                                </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                    <span class="fileinput-new">
                                                                    Pilih Gambar </span>
                                                                    <span class="fileinput-exists">
                                                                    Ubah </span>
                                                                    <input type="file" name="picture">
                                                                    </span>
                                                                    <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                                    Hapus </a>
                                                                </div>

                                                                <span class="help-inline"> Besar file yang diizinkan adalah <font color="#EC5A5A">1MB</font> dan ukuran lebar <font color="#EC5A5A">275 </font>pixel. Download tutorial cara mengedit ukuran gambar <a href="<?PHP echo base_url()?>ASSETMAP/HOW_TO_RESIZE.rar">di sini</a>. Tapi anda juga boleh mengosongkan gambar ini</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                       

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Panorama</label>
                                                        <div class="col-md-9">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 400px; height: 100px;">
                                                                    <img src="<?PHP echo base_url()?>ASSETMAP/noimage.gif" alt=""/>
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px;">
                                                                </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                    <span class="fileinput-new">
                                                                    Pilih Gambar </span>
                                                                    <span class="fileinput-exists">
                                                                    Ubah </span>
                                                                    <input type="file" name="panorama">
                                                                    </span>
                                                                    <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                                    Hapus </a>
                                                                </div>
                                                                <span class="help-inline">Besar file yang diizinkan adalah <font color="#EC5A5A">1MB</font> dan ukuran lebar<font color="#EC5A5A">3271 </font>pixel. Klik<a href="#tips" data-toggle="modal"> di sini</a> Jika anda ingin melihat contoh panorama. Download tutorial cara mengedit ukuran gambar <a href="<?PHP echo base_url()?>ASSETMAP/apps/HOW_TO_RESIZE.rar">di sini</a>. Tapi anda juga dapat mengosongkan gambar ini</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Deskripsi</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                 <textarea class="form-control" id="summernote1" rows="3" cols="60" name="desc"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="progress">
                                                        <div class="bar"></div >
                                                        <div class="percent">0%</div >
                                                    </div>
                                                    <div id="status"></div>

                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn btn-circle blue">Simpan</button>
                                                                </form>
                                                                <!--<button type="button" onclick="return resetForm(this.form);" class="btn btn-circle default">Cancel</button>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                        <!-- END FORM-->
                                            </div>
                                    </div>
                                </div>              


            <!-- Editable Table -->
            
                    <div class="portlet box red">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Tabel lokasi
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_3">
                            <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                     Nama lokasi
                                </th>
                                <th>
                                     kategori
                                </th>
                                <th>
                                     Ubah
                                </th>
                                <th>
                                     Hapus
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?PHP $i=0; foreach($pointmarker->result() as $rowpo){ $i++;
                                ?>
                                    <tr>
                                        <td>
                                            <?PHP echo  $i;?>
                                        </td>
                                        <td>
                                             <?PHP echo $rowpo->name;?>
                                        </td>
                                        <td>
                                            <?PHP echo $rowpo->name_category;?>
                                        </td>
                                        <td>
                                            <a href="<?PHP echo base_url()?>mapping/point/edit/<?PHP echo $rowpo->id?>"  data-toggle="modal" >
                                            Ubah </a>
                                        </td>
                                        <td>
                                            <a href="#" class="deletee">    
                                            <span style="display:none;" class="satu"><?PHP echo $rowpo->id?></span>
                                            <span style="display:none;" class="dua"><?PHP echo $rowpo->name?></span>
                                            Hapus
                                            </a>
                                        </td>
                                    </tr>
                            <?PHP } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
         


            <div class="modal fade bs-modal-lg in" id="tips" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Tips</h4>
                        </div>
                        <div class="modal-body">
                           <div class="tabbable-custom nav-justified">
                                <ul class="nav nav-tabs nav-justified">
                                    
                                    <li class="active">
                                        <a href="#tab_1_1_1" data-toggle="tab">
                                        Bahasa </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_1_1_2" data-toggle="tab">
                                        English </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                   <div class="tab-pane  active" id="tab_1_1_1">
                                        <p>
                                             Panorama
                                        </p>
                                         <p>
                                            <p>Anda bisa menambahkan gambar panorama 360 derajat pada sebuah titik. sehingga pengguna dapat melihat lebih jelas isi atau gambaran pada sebuah lokasi yang telah anda tandai. contoh gambar panorama 360 derajat adalah sebagai berikut:</p>
                                            <center><img src = "<?PHP echo base_url()?>ASSETMAP/Tips/beach2.jpg" style = "max-width: 850px";?></center>
                                            <p>kami sangat menyarankan gambar yang anda unggah memiliki ukuran lebar 3271 pixel. agar presisi dengan template yang telah kami sediakan.
                                               Anda dapat mendownload tutorial cara mengedit ukuran gambar <a href="<?PHP echo base_url()?>ASSETMAP/apps/HOW_TO_RESIZE.rar">di sini</a>. ini adalah hasil dari gambar yang akan anda unggah:</p>
                                            <center><script>addSamplePano( "<?PHP echo base_url()?>ASSETMAP/Tips/beach2.jpg", {width:653, minSpeed:30});</script>
                                            <p>klik dan tahan mouse Anda pada gambar, kemudian geser ke kanan atau ke kiri</p></center>
                                        </p>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab_1_1_2">
                                        <p>
                                            Panoramic
                                        </p>
                                        <p>
                                            <p>You can add a 360-degree panoramic images in a point. so users can see more clearly the content or images on a place that you have marked. 360 degree panoramic image examples are as follows: </p>
                                            <center><img src = "<?PHP echo base_url()?>ASSETMAP/Tips/beach2.jpg" style = "max-width: 850px";?></center>
                                             <p>we strongly recommend that you upload the picture has a size of 3271 pixel to be precise with the templates that we have provided. 
                                                You can download tutorial how to resize image <a href="<?PHP echo base_url()?>ASSETMAP/apps/HOW_TO_RESIZE.rar">here</a>.
                                                This is the result of the image you want to upload:</p>
                                              <center><script>addSamplePano( "<?PHP echo base_url()?>ASSETMAP/Tips/beach2.jpg", {width:653, minSpeed:30});</script>
                                            <p>click and hold your mouse on the image, then slide to the right or to the left</p></center>
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn default" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END MODAL FORM-->

            <?PHP echo $modalpop ?>




<script src="<?PHP echo base_url()?>inc/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?PHP echo base_url()?>inc/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?PHP echo base_url()?>inc/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url()?>inc/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url()?>inc/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?PHP echo base_url()?>inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?PHP echo base_url()?>inc/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>inc/admin/pages/scripts/table-editable.js"></script>
<script src="<?PHP echo base_url()?>inc/admin/pages/scripts/ui-alert-dialog-api.js"></script>
<script src="<?PHP echo base_url()?>inc/admin/pages/scripts/components-form-tools.js"></script>


<!-- summernotejs -->
<script type="text/javascript" src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>/inc/admin/pages/scripts/components-editors.js"></script>
<!-- summernotejs -->





<!-- progres bar -->
<script src="<?PHP echo base_url()?>/ASSETMAP/form.js"></script>
<!-- end progres bar -->
<script>
(function() {

var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');

$('form').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    complete: function(xhr) {
        bar.width("100%");
        percent.html("100%");
        //window.location.href = '<?PHP echo site_url()?>mapping/map';
        status.html(xhr.responseText);
    }
}); 

})();       
</script>


<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
 

    $('#sample_editable_3').dataTable({
         "aLengthMenu": [[15, 25, 50, 100, -1], [15, 25, 50, 100, "All"]]
    });
     $('#sample_editable_2').dataTable();
      $('#sample_editable_1').dataTable();

  ComponentsEditors.init();
    $('#summernote1').summernote({height:300});
    $('#desc_edit').summernote({height:300});


   $('table').delegate('.deletee', 'click', function() {
    var id_module = $(this).find('span.satu').text();
        var name = $(this).find('span.dua').text();
        bootbox.confirm("are you sure to delete this data?",function(result){
            if(result == true)
            {
                window.location = "<?PHP echo base_url()?>mapping/point/delete/"+id_module+"/"+name;
            }
        });
    });

   $('table').delegate('.editdialog', 'click', function() {
    var id = $(this).find('span.satu').text();
        var nama = $(this).find('span.dua').text();
        var desc = $(this).find('span.tiga').find('textarea').val();

        $('#id_map').val(id);
        $('#name_edit').val(nama);
        $('#desc_edit').code(desc);

        $('#dialogedit').modal();
    });

   


    <?PHP echo $ceklis;?>



});


var postForm1 = function() {
    var content = $('textarea[name="desc"]').html($('#summernote1').code());
}
var postForm2 = function() {
    var content = $('textarea[name="desc"]').html($('#desc_edit').code());
}

function resetForm(form) {
    // clearing inputs
    var inputs = form.getElementsByTagName('input');
    for (var i = 0; i<inputs.length; i++) {
        switch (inputs[i].type) {
            // case 'hidden':
            case 'text':
                inputs[i].value = '';
                break;
            case 'radio':
            case 'checkbox':
                inputs[i].checked = false;   
        }
    }

    // clearing selects
    var selects = form.getElementsByTagName('select');
    for (var i = 0; i<selects.length; i++)
        selects[i].selectedIndex = 0;

    // clearing textarea
    var text= form.getElementsByTagName('textarea');
    for (var i = 0; i<text.length; i++)
        text[i].innerHTML= '';

    return false;
}

</script>


<!-- footer -->
<?PHP $this->load->view('admin/footer');?>