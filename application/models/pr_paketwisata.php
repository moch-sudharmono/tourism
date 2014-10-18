<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_paketwisata extends CI_Models 
	{
		protected 	 $table = 'pr_paket_wisata';	 	 
		protected 	 $primary_key = 'id_paket_wisata';
	
		public function __construct() {        
			parent::__construct();
		}
			
	}

?>