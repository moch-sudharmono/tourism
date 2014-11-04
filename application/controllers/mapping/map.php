<?php
//Access_Controller
 class Map extends Access_Controller 
 {
 	
 	function __construct()
 	{
 		parent::__Construct();


			$this->load->helper(array('form', 'url'));

 			$this->load->model('map_m');
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


 		$data= array(
 			'datamap'	=> $this->map_m->view(),
 			'kl' 		=> $file,
 			'layer' 	=> $layer,
            'menu'      => 'map'
 			);

 		//echo $file;
 		$this->load->view("admin/mapview/insert",$data);	
 	}

 	//insert new map or new layer
 	function insert()
 	{
 		$config['upload_path'] = './MAP_UPLOAD/MAP';
 		$config['allowed_types'] = 'kml';
 		$config['max_size']  = '25000';
 		
 		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
 		if ( ! $this->upload->do_upload('file')){
 			$error = $this->upload->display_errors();
            //$this->session->set_flashdata('message3', $error);
            //redirect('/mapping/map');
            echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center>'.$error.'please choose file again</center>
                </div>';
            echo '<style>.bar { background-color: #FF4242; }</style>';

 		}

 		else{
 			$file = array('upload_data' => $this->upload->data());
            $path = $file['upload_data']['file_name'];
                                            
            $data=array(
                    'name'         => $this->input->post('name'),
					'description'  => $this->input->post('desc'),
                    'path'         => $path
            );		
            $this->map_m->insert($data);

            // echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-danger fade in">
            //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            //         <center>Data successfully saved. you can close this form, or you can add data again.</center>
            //     </div>';
            
            $this->session->set_flashdata('message', 'Data successfully saved');
            echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                </div>';
            echo "<script>$(document).ajaxStop(function(){
                    window.location.reload();
                    });</script>";
            //redirect('/mapping/map');


 		}
 	}


 	//delete a layer of map
 	function delete($id,$name){

 		$map = $this->map_m->view_by_id($id);
		$mapp = $map->row()->path;
                
			if(file_exists('./MAP_UPLOAD/MAP/'.$mapp)){
				unlink('./MAP_UPLOAD/MAP/'.$mapp);}
		
 		$this->map_m->hapus($id);
 		$this->session->set_flashdata('message2', 'Data "'.$name.'" successfully removed');
 		redirect('/mapping/map');
 	}


 	//update. actually this function just delete a layer and then upload a new layer
 	function update(){
        $id= $this->input->post('id_map');
         $data=array(
                    'name'         => $this->input->post('name'),
                    'description'  => $this->input->post('desc')
            );  
        $this->map_m->update($data,$id);
        $this->session->set_flashdata('message', 'Data '.$this->input->post('name').' successfully update');
      
            echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                </div>';
            echo "<script>$(document).ajaxStop(function(){
                    window.location.reload();
                    });</script>";


 	}

 	
 }