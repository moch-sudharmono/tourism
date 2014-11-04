<?php
//Access_Controller
 class Point extends Access_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
		

			$this->load->helper(array('form', 'url'));
 	
 			$this->load->model('map_m');
            $this->load->model('point_m');
            $this->load->model('category_m');
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
                            function ".$add."(location,desc,picture,name,panorama) {
                              
                              var marker = new google.maps.Marker({
                                position: location,
                                map: map,
                                icon: '".base_url()."ASSETMAP/point/".$kat->icon."'
                              });
                              ".$varmarker.".push(marker);
                              setinfo(marker,desc,picture,name,panorama);
                            }

                            function ".$set."(map) {
                              for (var i = 0; i < ".$varmarker.".length; i++) {
                                ".$varmarker."[i].setMap(map);
                              }
                            }";

            // $ceklis=$ceklis."$('#".$cekbox."').click(function(){
            //                     var c = this.checked ;
            //                     if(c)".$set."(map);
            //                     else ".$set."(null);
            //                 });";



            $ceklis=$ceklis."$('table').delegate('#".$cekbox."', 'click', function() {
                                var c = this.checked ;
                                if(c)".$set."(map);
                                else ".$set."(null);
                            });";

            
            $htmli= $htmli."<tr>
                                <td>
                                     ".$kat->name_category."
                                </td>
                                <td>
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
                $button = '<button class="btn blue btn-block" data-toggle="modal" href="#dialo'.$nameuniq3.'">view panorama</button>';
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


            $addpo=$addpo.$add."(new google.maps.LatLng(".$poi->lat.", ".$poi->lng."),'".$poi->desc_point."','".$picture."','".$poi->name."','".$button."');";
            //echo $poi->desc_point;
            $titiklat = $poi->lat;
            $titiklng = $poi->lng;
        }
        //BEGIN load point-------------------------


        //END load point--------------------------------


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
            'pointmarker'=> $this->point_m->viewjointable(),
            );
 		$this->load->view("admin/mapview/pointer",$data);
        
 	}









    //------------------------------------------------------------------- insert ----------------------------------------------------










    function insert(){

        $config['upload_path'] = './MAP_UPLOAD/GALLERY';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size']  = '1000';
        $config['max_width']     = '275';
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('picture')){
                                
                                $error1 = $this->upload->display_errors();
                                $config['upload_path'] = './MAP_UPLOAD/PANORAMA';
                                $config['allowed_types'] = 'png|jpg|jpeg';
                                $config['max_size']  = '1000';
                                $config['max_width']     = '3271';
                                
                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                
                                if ( ! $this->upload->do_upload('panorama')){
                                    $error2 = $this->upload->display_errors();
                                    
                                    $data=array(
                                            'name'         => $this->input->post('name'),
                                            'category'     => $this->input->post('category'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'lat'           => $this->input->post('lat'),
                                            'lng'           => $this->input->post('lng'),
                                    );      
                                    $this->point_m->insert($data);

                                    $this->session->set_flashdata('message2', 'Data successfully saved without picture and panorama, because problem for picture is '.$error1.' and problem for panorama is '.$error2 );
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location.reload();
                                            });</script>";
                                     
                                }


                                // else--------------------------------

                                else{
                                    $file = array('upload_data' => $this->upload->data());
                                    $path = $file['upload_data']['file_name'];
                                                                    
                                    $data=array(
                                            'name'         => $this->input->post('name'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'category'     => $this->input->post('category'),
                                            'lat'          => $this->input->post('lat'),
                                            'lng'          => $this->input->post('lng'),
                                            'panorama'     => $path,
                                    );      
                                    $this->point_m->insert($data);

                                    $this->session->set_flashdata('message2', 'Data and panorama successfully saved without picture, because problem for picture is '.$error1);
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location.reload();
                                            });</script>";
                                }
        }



        else{
                                $file1 = array('upload_data' => $this->upload->data());
                                $path1 = $file1['upload_data']['file_name'];
                                            
                                $config['upload_path'] = './MAP_UPLOAD/PANORAMA';
                                $config['allowed_types'] = 'png|jpg|jpeg';
                                $config['max_size']  = '1000';
                                $config['max_width']     = '3271';
                                
                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                
                                if ( ! $this->upload->do_upload('panorama')){
                                    $error2 = $this->upload->display_errors();
                                    
                                    $data=array(
                                            'name'          => $this->input->post('name'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'category'     => $this->input->post('category'),
                                            'lat'           => $this->input->post('lat'),
                                            'lng'           => $this->input->post('lng'),
                                            'picture'       => $path1,
                                            
                                    );      
                                    $this->point_m->insert($data);

                                    $this->session->set_flashdata('message2', 'Data and picture successfully saved without panorama, because problem for panorama is '.$error2 );
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location.reload();
                                            });</script>";
                                     
                                }


                                // else--------------------------------

                                else{

                                    $file2 = array('upload_data' => $this->upload->data());
                                    $path2 = $file2['upload_data']['file_name'];
                                                                    
                                    $data=array(
                                            'name'         => $this->input->post('name'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'category'     => $this->input->post('category'),
                                            'lat'          => $this->input->post('lat'),
                                            'lng'          => $this->input->post('lng'),
                                            'panorama'     => $path2,
                                            'picture'      => $path1
                                    );      
                                    $this->point_m->insert($data);

                                    $this->session->set_flashdata('message', 'Data, picture and panorama successfully saved');
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location.reload();
                                            });</script>";
                                }
        }

    }


    function delete($id,$nama){
        $point = $this->point_m->view_by_id($id);
        $picture  = $point->row()->picture;
        $PANORAMA = $point->row()->panorama;
        
            
            if(file_exists('./MAP_UPLOAD/GALLERY/'.$picture)){
                unlink('./MAP_UPLOAD/GALLERY/'.$picture);}
            
            if(file_exists('./MAP_UPLOAD/PANORAMA/'.$PANORAMA)){
                unlink('./MAP_UPLOAD/PANORAMA/'.$PANORAMA);}

        
        $this->point_m->hapus($id);
        $this->session->set_flashdata('message3', 'Data "'.$nama.'" successfully removed');
        redirect('/MAPPING/point');
    }

    function edit($id){

        $cek = $this->point_m->view_by_id_join($id);
        $titiklat = $cek->row()->lat;
        $titiklng = $cek->row()->lng;
        $ikon = $cek->row()->icon;
        if($ikon){
            $ikon = $cek->row()->icon;
        }
        else{
            $ikon = 'default.png';
        }
        $data=array(
            'titiklat'  => $titiklat,
            'titiklng'  => $titiklng,
            'ikon'      => $ikon,
            'kategori'  => $this->category_m->view_asc(),
            'menu'      => 'point',
            'dataedit' => $this->point_m->view_by_id_join($id)
        );

        $this->load->view('mapview/edit',$data);
    }





    //-----------------------------------------------------------  UPDATE ---------------------------------------------------------





    function UPDATE(){
        $id= $this->input->post('id_pointer');

        $config['upload_path'] = './MAP_UPLOAD/GALLERY';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size']  = '1000';
        $config['max_width']     = '275';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('picture')){
                                
                                $error1 = $this->upload->display_errors();
                                $config['upload_path'] = './MAP_UPLOAD/PANORAMA';
                                $config['allowed_types'] = 'png|jpg|jpeg';
                                $config['max_size']  = '1000';
                                $config['max_width']     = '3271';
                                
                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                
                                if ( ! $this->upload->do_upload('panorama')){
                                    $error2 = $this->upload->display_errors();
                                    
                                    $data=array(
                                            'name'         => $this->input->post('name'),
                                            'category'     => $this->input->post('category'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'lat'           => $this->input->post('lat'),
                                            'lng'           => $this->input->post('lng'),
                                    );      
                                    $this->point_m->update($data,$id);


                                    $this->session->set_flashdata('message2', 'Data successfully saved without picture and panorama change, because problem for picture is '.$error1.' and problem for panorama is '.$error2 );
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                           window.location='".site_url()."mapping/point';
                                            });</script>";
                                     
                                }


                                // else--------------------------------

                                else{
                                    $file = array('upload_data' => $this->upload->data());
                                    $path = $file['upload_data']['file_name'];

                                    $point = $this->point_m->view_by_id($id);
							        $PANORAMA = $point->row()->panorama;
							            
							            if(file_exists('./MAP_UPLOAD/PANORAMA/'.$PANORAMA)){
							                unlink('./MAP_UPLOAD/PANORAMA/'.$PANORAMA);}
                                                                    
                                    $data=array(
                                            'name'         => $this->input->post('name'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'category'     => $this->input->post('category'),
                                            'lat'          => $this->input->post('lat'),
                                            'lng'          => $this->input->post('lng'),
                                            'panorama'     => $path,
                                    );      
                                    $this->point_m->update($data,$id);

                                    $this->session->set_flashdata('message2', 'Data and panorama successfully saved without picture change, because problem for picture is '.$error1);
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location='".site_url()."mapping/point';
                                            });</script>";
                                }
        }


        // else--------------------------------

        else{
                                $file1 = array('upload_data' => $this->upload->data());
                                $path1 = $file1['upload_data']['file_name'];
                                            
                                $config['upload_path'] = './MAP_UPLOAD/PANORAMA';
                                $config['allowed_types'] = 'png|jpg|jpeg';
                                $config['max_size']  = '1000';
                                $config['max_width']     = '3271';
                                
                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                
                                if ( ! $this->upload->do_upload('panorama')){
                                    $error2 = $this->upload->display_errors();

                                    $point = $this->point_m->view_by_id($id);
							        $picture  = $point->row()->picture; 
							            if(file_exists('./MAP_UPLOAD/GALLERY/'.$picture)){
							                unlink('./MAP_UPLOAD/GALLERY/'.$picture);}
                                    
                                    $data=array(
                                            'name'          => $this->input->post('name'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'category'     => $this->input->post('category'),
                                            'lat'           => $this->input->post('lat'),
                                            'lng'           => $this->input->post('lng'),
                                            'picture'       => $path1,
                                            
                                    );      
                                    $this->point_m->update($data,$id);

                                    $this->session->set_flashdata('message2', 'Data and picture successfully saved without panorama change, because problem for panorama is '.$error2 );
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location='".site_url()."mapping/point';
                                            });</script>";
                                     
                                }


                                // else--------------------------------

                                else{

                                    $file2 = array('upload_data' => $this->upload->data());
                                    $path2 = $file2['upload_data']['file_name'];

                                    $point = $this->point_m->view_by_id($id);
							        $picture  = $point->row()->picture;
							        $PANORAMA = $point->row()->panorama;
							        
							            
							            if(file_exists('./MAP_UPLOAD/GALLERY/'.$picture)){
							                unlink('./MAP_UPLOAD/GALLERY/'.$picture);}
							            
							            if(file_exists('./MAP_UPLOAD/PANORAMA/'.$PANORAMA)){
							                unlink('./MAP_UPLOAD/PANORAMA/'.$PANORAMA);}
                                                                    
                                    $data=array(
                                            'name'         => $this->input->post('name'),
                                            'desc_point'   => $this->input->post('desc'),
                                            'category'     => $this->input->post('category'),
                                            'lat'          => $this->input->post('lat'),
                                            'lng'          => $this->input->post('lng'),
                                            'panorama'     => $path2,
                                            'picture'      => $path1
                                    );      
                                    $this->point_m->update($data,$id);

                                    $this->session->set_flashdata('message', 'Data, picture and panorama successfully saved');
                                    //redirect('/mapping/category');
                                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                                        </div>';
                                    echo "<script>$(document).ajaxStop(function(){
                                            window.location='".site_url()."mapping/point';
                                            });</script>";
                                }
        }

    }







 	
 }