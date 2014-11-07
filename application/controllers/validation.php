<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Validation extends CI_Controller 
	{
		
		public function index()
	{
		$data['title'] 			= "Gallery";
		$data['small_title']	= "Galeri Photo";
		$this->load->view('form_valid', $data);
	}
	}
	
?>