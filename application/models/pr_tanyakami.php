<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_tanyakami extends CI_Models 
	{
		protected 	 $table = 'pr_tanya_kami';	 	 
		protected 	 $primary_key = 'id_tanya_kami';
	
		public function __construct() {        
			parent::__construct();
		}
			
	}

?>