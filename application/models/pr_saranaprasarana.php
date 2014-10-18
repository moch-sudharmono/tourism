<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_saranaprasarana extends CI_Models 
	{
		protected 	 $table = 'pr_sarana_prasarana';	 	 
		protected 	 $primary_key = 'id_sarana_prasarana';
	
		public function __construct() {        
			parent::__construct();
		}
			
	}

?>