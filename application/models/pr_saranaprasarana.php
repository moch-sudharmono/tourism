<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_saranaprasarana extends MY_Model
	{
		protected 	 $table = 'pr_sarana_prasarana';	 	 
		protected 	 $primary_key = 'id_sarana_prasarana';
	
		public function __construct() {        
			parent::__construct();
		}
		
		
		public function validate()
		{
			$id_kategori_sarana_prasarana 	= $this->input->post('cbo_cat');
            $nama_ina 						= $this->input->post('title_ind');			
            $nama_eng 	 					= $this->input->post('title_eng');			
            $deskripsi_ina 	  			   = $this->input->post('desc_ind');
			$deskripsi_eng				   = $this->input->post('desc_eng');
			$url		 					 = $this->input->post('url');
			$id_peta		 				 = $this->input->post('cbo_map');
			
            $data = array(
                   'id_kategori_sarana_prasarana'=>$id_kategori_sarana_prasarana,
                   'nama_ina'=>$nama_ina,
				   'nama_eng'=>$nama_eng,
				   'deskripsi_ina'=>$deskripsi_ina,
				   'deskripsi_eng'=>$deskripsi_eng ,
				   'url'=>$url,
				   'id_peta'=>$id_peta                 
                    );
            $this->insert_into($data);    
		}

	}

?>