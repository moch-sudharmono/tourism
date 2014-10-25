<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Promotion";
		$data['small_title']	= "Promosi";
		$this->load->view('promotion', $data);
	}
}

?>