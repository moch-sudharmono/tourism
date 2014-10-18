<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Askus extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Ask Us";
		$data['small_title']	= "Tanya Kami";
		$this->load->view('askus', $data);
	}
}

?>