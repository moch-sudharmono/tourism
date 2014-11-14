<!-- <?PHP $this->load->view("frontend/header");?> -->

  <!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>

<!-- END PAGE LEVEL STYLES -->

<!-- panorama -->
        <link rel="stylesheet" href="<?PHP echo base_url()?>ASSETMAP/panorama/ddpanorama.css" />
        <script src="<?PHP echo base_url()?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/jquery.ba-outside-events.min.js"> </script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/imagesloaded.pkgd.min.js"> </script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/ddpanorama.min.js"> </script>
        <script type="text/javascript" src="<?PHP echo base_url()?>ASSETMAP/panorama/ddpanorama.gensample.js"> </script>
<!-- endpanorama -->

<!-- summernute-->
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url()?>/assets/global/plugins/bootstrap-summernote/summernote.css">
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
	
	#loaddiv
    {
        margin:100px auto;
        border: #785e4f 4px groove;
        padding: 30px auto;
        font-weight: bold;
        z-index: 100;
        filter: alpha(opacity=75);
        width: 250px;
        position: absolute;
        background-color: #FFFFFF; /* BACKGROUND-COLOR: #e7b047; */
        text-align: center;
        opacity: .75
    }
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
    //var latlng = new google.maps.LatLng(<?PHP echo $titiklat;?>,<?PHP echo $titiklng;?>);
    
	//this for Raja ampat
        /*var latlng = new google.maps.LatLng(-1.0167750045997908,131.5887451171875);
        var myOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.MAP
        }*/
    // end

    //this for wakatobi
        var latlng = new google.maps.LatLng(-5.52308952580472,123.83788995444775);
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.MAP
        }
    //end

    //this for seruyan
        /*var latlng = new google.maps.LatLng(-2.4652638365062964,112.5494384765625);
        var myOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.MAP
        }*/

    //end

    //this for Sikka
        /*var latlng = new google.maps.LatLng(-8.645300887978031,122.6348876953125);
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.MAP
        }*/
    //end
	showLoad();
    map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	hideLoad()
    // google.maps.event.addListener(map, 'click', function(event) {
    //     addMarker(event.latLng);
    // });
  
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
  showLoad();
  if(layers[i].getMap()==null){
     layers[i].setMap(map);
  }
  else {
     layers[i].setMap(null);
	 hideLoad();
  }
  document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";
}

function setinfo(marker,teks,picture,name,panorama,wiskom){

    
    google.maps.event.addListener(marker, 'click', function() {
       
        var contentString = "<center><h3 style='min-Width:300px;'><font color='#303030'>"+name+"</font></h3>"+picture+"<br/><br/>"+wiskom+panorama+"</center><font color='black'>"+teks+"</font>";
        infowindow.setContent(contentString);
        infowindow.open(map,marker);
        
    
    });
}




google.maps.event.addDomListener(window, 'load', initialize);


function hideLoad()
{
   var loaddiv = document.getElementById("loaddiv");
   if (loaddiv == null)
   {
      alert("Sorry can't find the loaddiv");
      return;
   }
   //div found
    $('#loaddiv').hide();

}

// A function to hide the loading message
function showLoad()
{
   var loaddiv = document.getElementById("loaddiv");
   if (loaddiv == null)
   {
      alert("Sorry can't find your loaddiv");
      return;
   }
   //div found
    $('#loaddiv').show();
     setTimeout(function(){ jQuery("#loaddiv").hide(); }, 10000);
}
  </script>

<body onLoad="initialize()" class="page-header-fixed page-quick-sidebar-over-content">

<div class="container">
<!--<div id="status"></div> -->

            <div class="row">
                  <div class="col-md-4">
                    <div class="portlet box blue" style="z-index:1; position:absolute; margin-left:auto; margin-right:auto;">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-map-marker"></i><font size="2pt">Kategori</font>
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="expand">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body collapse">
                          <ul class="nav nav-tabs">
                            <li class="active">
                              <a href="#portlet_tab1" data-toggle="tab">
                              Kategori</a>
                            </li>
                            <li>
                              <a href="#portlet_tab2" data-toggle="tab">
                              Map Layer</a>
                            </li>
                          </ul>

                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
                                <p>
                                   <table class="table table-striped table-hover table-bordered" id="sample_editable_2">
                                    <thead>
                                    <tr>
										<th>icon</th>
                                        <th style="padding:3px;">
                                             Place
                                        </th >
                                        <th style="padding:3px;">
                                             Show on map
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP echo $htmli;?>
                                    </tbody>
                                    </font>
                                    </table>  
                                </p>
                              </div>
                              <div class="tab-pane" id="portlet_tab2">
                                <p>
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                      <thead>
                                      <tr>
                                          <th>
                                               Name
                                          </th>
                                          <th>
                                               Show on map
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
                                </p>
                              </div>
                            </div>
                          </div>

                        </div>
                    </div>
                  </div>
  </div>
</div>

<div id="loaddiv"><font color="black">Loading... please wait!</font></div>
<div id="map_canvas" style="height:750px;"></div>




            <?PHP echo $modalpop ?>

<script type="text/javascript" src="<?PHP echo base_url()?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<script src="<?PHP echo base_url()?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?PHP echo base_url()?>assets/admin/pages/scripts/table-editable.js"></script>
<script src="<?PHP echo base_url()?>assets/admin/pages/scripts/ui-alert-dialog-api.js"></script>
<script src="<?PHP echo base_url()?>assets/admin/pages/scripts/components-form-tools.js"></script>

<script>

jQuery(document).ready(function() {        

     $('#sample_editable_2').dataTable({
       "aLengthMenu": [[12, 25, 50, 100], [12, 25, 50, 100]],
	   "order": [[ 1, "asc" ]]
     });
	 
	 $('#sample_editable_1').dataTable({
       "aLengthMenu": [[12, 25, 50, 100], [12, 25, 50, 100]]
     });

    <?PHP echo $ceklis;?>



});

</script>


<!-- <?PHP $this->load->view("frontend/footer_map");?> -->