<?php
//Access_Controller
 class Map extends CI_Controller 
 {
    public $route = "frontend/index.php";
	private $class = "mapping";
	
    function __construct()
    {
        parent::__Construct();
           $this->load->helper(array('form', 'url'));
            $this->load->model('map_m');
            $this->load->model('point_m');
            $this->load->model('category_m');
            $this->load->model('CommunityDev/m_module');
	    $this->load->model("frontend/Lokasi_wisata");
	   $this->load->library("navigation_lib");
    }

    function index(){
			
            	   $tes2= base_url().'MAP_UPLOAD/MAP';
                    $file="";
                    $i=0;
                    $filemap = $this->map_m->view();
                    $layer="";
                    foreach($filemap->result() as $row){
                        $file = $file."layers[".$row->id."] = new  google.maps.KmlLayer('".$tes2."/".$row->path."',{preserveViewport: false, suppressInfoWindows: false});";
                        $layer = $layer."".$row->name." <input type='checkbox' onclick='toggleLayers(".$row->id.");'/>";
                            $i++;
                    }

                    //BEGIN load category-------------------------------
                    $kategori = $this->category_m->view();
                    $extrac = "";
                    $ceklis = "";
                    $htmli   = "";
                    $variable = "";
                    $htmli="";
                    foreach($kategori->result() as $kat){
                        $nameuniq= preg_replace('/\s+/', '', $kat->name_category.$kat->id_cat);
                        $singlename= preg_replace('/\s+/', '', $kat->name_category);
                        $add=$nameuniq."addmarker";
                        $set=$nameuniq."setallmap";
                        $varmarker=$nameuniq."array";
                        $cekbox=$nameuniq."cekbox";
                        $variable=$variable."var ".$varmarker." = [];";
                        $extrac=$extrac."
                                        function ".$add."(location,desc,picture,name,panorama,wiskom) {
                                          
                                          var marker = new google.maps.Marker({
                                            position: location,
                                            map: map,
                                            icon: '".base_url()."ASSETMAP/point/".$kat->icon."'
                                          });
                                          ".$varmarker.".push(marker);
                                          setinfo(marker,desc,picture,name,panorama,wiskom);
                                        }

                                        function ".$set."(map) {
                                          for (var i = 0; i < ".$varmarker.".length; i++) {
                                            ".$varmarker."[i].setMap(map);
                                          }
                                        }";



                        $ceklis=$ceklis."$('table').delegate('#".$cekbox."', 'click', function() {
                                            var c = this.checked ;
                                            if(c)".$set."(map);
                                            else ".$set."(null);
                                        });";

                        
                        $htmli= $htmli."<tr>
											<td><img src='".base_url()."ASSETMAP/point/".$kat->icon."'></td>
                                            <td style='padding:4px;'>
                                                 ".$kat->name_category."
                                            </td>
                                            <td style='padding:4px;'>
                                                <input id='".$cekbox."' type='checkbox' checked/>
                                            </td>
                                        </tr>";
                    }
                    //END load category-------------------------------
                    $point=$this->point_m->viewjoin();
                    $addpo = "";
                    $jspopup="";
                    $modalpop="";
                    foreach($point->result() as $poi){
                        $nameuniq2= preg_replace('/\s+/', '', $poi->name_category.$poi->id_cat);
                        $nameuniq3= preg_replace('/\s+/', '', $poi->name_category.$poi->id);
                        $add=$nameuniq2."addmarker";
                        
                        if($poi->picture){
                            $picture= '<img src="'.base_url().'MAP_UPLOAD/GALLERY/'.$poi->picture.'" style="max-width:275px;">';
                        }
                        else{
                            $picture="";
                        }
                        if($poi->panorama){
                            $button = '<button class="btn blue btn-block " data-toggle="modal" href="#dialo'.$nameuniq3.'">view panorama</button>';
                        }
                        else{
                            $button = "";
                        }
                        if($poi->panorama){
                        $modalpop= $modalpop.'
                        <div class="modal fade bs-modal-lg in" id="dialo'.$nameuniq3.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-boge" style>
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <script>addSamplePano("'.base_url().'MAP_UPLOAD/PANORAMA/'.$poi->panorama.'", {width:653, minSpeed:30});</script>
                                                <p>click and hold your mouse on the image, then slide to the right or to the left</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>';
                        }


                        $kom = $this->m_module->getModuleList();
                        $ada =0;
									
                        foreach($kom->result() as $reskom){
                            if($reskom->id_pointer == $poi->id){
                                $ada = 1;
                            }
                        }
						
						
						$adawis=0;                        }

                        if($ada==1 && $adawis == 1){
                        $wiskom = '<div class="btn-group btn-group-justified">'.
                                            '<a class="btn green"  href="'.site_url().'frontend/profile/location/'.$poi->id.'">Wisata</a>'.
                                            '<a class="btn yellow"  href="'.site_url().'community_development/view_by_location/'.$poi->id.'">Komunitas</a>'.
                                        '</div>';
                        }
						else if($ada==0 && $adawis == 1){
                        $wiskom = '<div class="btn-group btn-group-justified">'.
                                            '<a class="btn green"  href="'.site_url().'frontend/profile/location/'.$poi->id.'">Wisata</a>'.
                                            
                                        '</div>';
                        }
						else if($ada==1 && $adawis == 0){
                        $wiskom = '<div class="btn-group btn-group-justified">'.
                                          
                                            '<a class="btn yellow"  href="'.site_url().'community_development/view_by_location/'.$poi->id.'">Komunitas</a>'.
                                        '</div>';
                        }
                        else{
                            $wiskom = "";
                        }


                        $addpo=$addpo.$add."(new google.maps.LatLng(".$poi->lat.", ".$poi->lng."),'".$poi->desc_point."','".$picture."','".$poi->name."','".$button."','".$wiskom."');";
                        //echo $poi->desc_point;
                        $titiklat = $poi->lat;
                        $titiklng = $poi->lng;
                    }
                    //BEGIN load point-------------------------


                    //END load point--------------------------------

					//jogres
						$d = $this->navigation_lib->load_all();
					//endjogress
					
                    $data= array(
                        'contact'   => $this->m_configuration->getConfiguration(),
                        'datamap'   => $this->map_m->view(),
                        'titiklat'  => $titiklat,
                        'titiklng'  => $titiklng,
                        'kl'        => $file,
                        'layer'     => $layer,
                        'extrac'    => $extrac,
                        'ceklis'    => $ceklis,
                        'htmli'     => $htmli,
                        'addpo'     => $addpo,
                        'variable'  => $variable,
                        'modalpop'  => $modalpop,
                        'kategori'  => $this->category_m->view_asc(),
                        'menu'      => 'point',
                        'pointmarker'=> $this->point_m->viewjoin()
                        );
						
					$data['potensi_wisata'] = $d['potensi_wisata'];
					$data["class"] = $this->class;
					$data["konten"] = "frontend/map.php";
					$this->load->view($this->route, $data);    
 }

}
        