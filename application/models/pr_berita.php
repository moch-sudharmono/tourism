<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_berita extends MY_Model 
	{
		protected 	 $table = 'pr_berita';	 	 
		protected 	 $primary_key = 'id_berita';
	
		public function __construct() {        
			parent::__construct();
		}
		
		public function insert($data)
		{
			$this->insert_into($data);  
		}
		
		public function update($data,$id)
		{
			$this->update_table($data,$id);
		}
	}

?>