<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_berita extends MY_Model 
	{
		protected 	 $table = 'pr_berita';	 	 
		protected 	 $primary_key = 'id_berita';
	
		public function __construct() {        
			parent::__construct();
		}
		
		public function validate()
		{
			$title_eng = $this->input->post('title_eng');
            $title_ind = $this->input->post('title_ind');			
            $isi_eng = $this->input->post('isi_eng');			
            $isi_ind = $this->input->post('isi_ind');
			
            $data = array(
                   'judul_berita_eng'=>$title_eng,
                   'judul_berita_ina'=>$title_ind,
				   'isi_berita_eng'=>$isi_eng,
				   'isi_berita_ina'=>$isi_ind                    
                    );
            $this->insert_into($data);    
		}
		
		
	}

?>