<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_kategorisarana extends MY_Model
	{
		protected 	 $table = 'pr_kategori_sarana_prasarana';	 	 
		protected 	 $primary_key = 'id_kategori_sarana_prasarana';
	
		public function __construct() {        
			parent::__construct();
		}
		
		
		public function validate()
		{
			$kategori_sarana_prasarana_ina 	= $this->input->post('category_ind');
            $kategori_sarana_prasarana_eng 	= $this->input->post('category_eng');			
            $icon 	  						 = $this->input->post('category_icon');	
			
            $data = array(
                   'kategori_sarana_prasarana_ina'=>$kategori_sarana_prasarana_ina,
                   'kategori_sarana_prasarana_eng'=>$kategori_sarana_prasarana_eng,
				   'icon'=>$icon                
                    );
            $this->insert_into($data);    
		}

	}

?>