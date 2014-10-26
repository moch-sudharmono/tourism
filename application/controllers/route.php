<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Route extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Route";
		$data['small_title']	= "Rute Perjalanan";
		$this->load->view('route', $data);
	}
	
	public function add()
	{
		$data['title'] 			= "Route";
		$data['small_title']	= "Rute Perjalanan";
		$this->load->view('routeForm', $data);
	}
	
	public function edit()
	{
		$data['title'] 			= "Route";
		$data['small_title']	= "Rute Perjalanan";
		//need to be include find by id
		$this->load->view('routeForm', $data);
	}
}

?>