<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_profile extends MY_Model 
	{
		protected 	 $table = 'pr_lokasi_wisata';	 	 
		protected 	 $primary_key = 'id_lokasi_wisata';
	
		public function __construct() {        
			parent::__construct();
		}
		
		public function validate($data)
		{
			
            $this->insert_into($data);    
		}
		
		
	}

?>