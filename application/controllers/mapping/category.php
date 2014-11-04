<?php
//Access_Controller
 class Category extends Access_Controller 
 {
 	
 	function __construct()
 	{
 		parent::__Construct();
		//session_start();
		//if(!$this->session->userdata('is_login')){
			//redirect ('/ccrom/login');}

			$this->load->helper(array('form', 'url'));
 			//$this->load->library('encrypt');
 			//$this->load->library('image_lib');
 			$this->load->model('category_m');
 	}
 	
 	function index(){


 		$data= array(
 			'category'	     => $this->category_m->view(),
            'menu'           => "category",
 			);

 		//echo $file;
 		$this->load->view("admin/mapview/catement",$data);	
 	}

 	//insert new map or new layer
 	function insert()
 	{
 		$config['upload_path'] = './ASSETMAP/point';
 		$config['allowed_types'] = 'png|jpg|jpeg';
 		$config['max_size']  = '1000';
        $config['width']     = 32;
        $config['height']   = 37;
 		
 		$this->load->library('upload', $config);
 		
 		if ( ! $this->upload->do_upload('file')){
 			$error = $this->upload->display_errors();
            //$this->session->set_flashdata('message3', $error);
            //redirect('mapping/category');
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
                    'name_category'         => $this->input->post('name'),
					'description'           => $this->input->post('desc'),
                    'icon'                  => $path
            );		
            $this->category_m->insert($data);
            $this->session->set_flashdata('message', 'Data successfully saved');
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


 	//delete a layer of map
 	function delete($id,$name){

 		$point = $this->category_m->view_by_id($id);
		$icon = $point->row()->icon;
                
			if(file_exists('./ASSETMAP/point/'.$icon)){
				unlink('./ASSETMAP/point/'.$icon);}
		
 		$this->category_m->hapus($id);
 		$this->session->set_flashdata('message3', 'Data "'.$name.'" successfully removed');
 		redirect('/MAPPING/category');
 	}


 	//update. actually this function just delete a layer and then upload a new layer
 	function update(){
        if (isset($_FILES['file_icon'])){

                $config['upload_path'] = './ASSETMAP/point';
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size']  = '1000';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('file_icon')){
                    $error = $this->upload->display_errors();
                    $id=$this->input->post('id_cat');
                    $data=array(
                            'name_category'         => $this->input->post('name'),
                            'description'           => $this->input->post('desc'),
                    );      
                    $this->category_m->update($data,$id);

                    $this->session->set_flashdata('message2', 'data successfully updated. but the picture is not update because'.$error);
                     echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-warning fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center>data successfully updated. but the picture is not update because'.$error.' wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                    </div>';
                    echo "<script>$(document).ajaxStop(function(){
                    window.location.reload();
                    });</script>";
                    //redirect('mapping/category');
                }

                else{
                    $file = array('upload_data' => $this->upload->data());
                    $path = $file['upload_data']['file_name'];
                    $id=$this->input->post('id_cat');  
                    
                    $point = $this->category_m->view_by_id($id);
                    $icon = $point->row()->icon;
                
                    if(file_exists('./ASSETMAP/point/'.$icon)){
                    unlink('./ASSETMAP/point/'.$icon);}

                    $data=array(
                            'name_category'         => $this->input->post('name'),
                            'description'           => $this->input->post('desc'),
                            'icon'                  => $path
                    );      
                    $this->category_m->update($data,$id);
                    $this->session->set_flashdata('message', 'Data "'.$this->input->post('name').'" successfully saved');
                    echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center>Data successfully save. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                    </div>';
                    echo "<script>$(document).ajaxStop(function(){
                    window.location.reload();
                    });</script>";
                    //redirect('/mapping/category');

                }
        }
        else{
                    $id=$this->input->post('id_cat');
                    $data=array(
                            'name_category'         => $this->input->post('name'),
                            'description'           => $this->input->post('desc'),
                    );      
                    $this->category_m->update($data,$id);
                    $this->session->set_flashdata('message', 'Data "'.$this->input->post('name').'" successfully updated without icon');
                    echo '<div id="prefix_788326886857" class="Metronic-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <center>Data "'.$this->input->post('name').'" successfully updated without icon. wait for reload page.. <img src="'.base_url().'assets/global/img/input-spinner.gif"/></center>
                    </div>';
                    echo "<script>$(document).ajaxStop(function(){
                    window.location.reload();
                    });</script>";
                    
                   // redirect('mapping/category');
        }


 	}

 	
 }