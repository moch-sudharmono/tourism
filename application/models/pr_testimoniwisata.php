<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_testimoniwisata extends MY_Model 
	{
		protected 	 $table = 'pr_testimoni_lokasi_wisata';	 	 
		protected 	 $primary_key = 'id_testimoni_lokasi_wisata';
	
		public function __construct() {        
			parent::__construct();
		}
			
	}

?>