<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_tag extends MY_Model 
	{
		protected 	 $table = 'pr_berita_tag';	 	 
		protected 	 $primary_key = 'id_berita_tag';
	
		public function __construct() {        
			parent::__construct();
		}
		
		public function validate()
		{
			$tag = $this->input->post('tag');
            
			
            $data = array(
                   'tag'=>$tag          
                    );
            $this->insert_into($data);    
		}
		
		
	}

?>