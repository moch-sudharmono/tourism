<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Node extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Node Travel";
		$data['small_title']	= "Titik Perjalanan";
		$this->load->view('node', $data);
	}
}

?>