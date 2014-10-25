<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Route extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Route";
		$data['small_title']	= "Rute Perjalanan";
		$this->load->view('route', $data);
	}
}

?>