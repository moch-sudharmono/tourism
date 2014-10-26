<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Promotion";
		$data['small_title']	= "Promosi";
		$this->load->view('promotion', $data);
	}
	
	public function add()
	{
		$data['title'] 			= "Promotion";
		$data['small_title']	= "Promosi";
		$this->load->view('promotionForm', $data);
	}
	
	public function edit()
	{
		$data['title'] 			= "Promotion";
		$data['small_title']	= "Promosi";
		$this->load->view('promotionForm', $data);
	}
}

?>