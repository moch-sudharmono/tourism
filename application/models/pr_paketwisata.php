<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_paketwisata extends MY_Model 
	{
		protected 	 $table = 'pr_paket_wisata';	 	 
		protected 	 $primary_key = 'id_paket_wisata';
	
		public function __construct() {        
			parent::__construct();
		}
			
		public function validate()
		{
			$title_eng 		= $this->input->post('title_eng');
            $title_ind 		= $this->input->post('title_ind');			
            $description_eng  = $this->input->post('description_eng');			
            $description_ind  = $this->input->post('description_ind');
			$url			  = $this->input->post('url')	;
			
            $data = array(
                   'paket_wisata_eng'=>$title_eng,
                   'paket_wisata_ina'=>$title_ind,
				   'deskripsi_eng'=>$description_eng,
				   'deskripsi_ina'=>$description_ind ,
				   'url'=>$url               
                    );
            $this->insert_into($data);    
		}
	}

?>