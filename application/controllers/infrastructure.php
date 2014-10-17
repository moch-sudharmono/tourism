<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infrastructure extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Infrastructure";
		$data['small_title']	= "Sarana dan Prasarana";
		$this->load->view('infrastructure', $data);
	}
	
	public function categories()
	{
		$data['title'] 			= "Infrastructure Category";
		$data['small_title']	= "Kategori Sarana dan Prasarana";
		$this->load->view('categories', $data);
	}
}

?>