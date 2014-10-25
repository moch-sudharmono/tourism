<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour_packages extends CI_Controller {
	public $route = "frontend/index";
	
	public function index()
	{
		$data["konten"] = "frontend/tour_packages/packages.main.view.php";
		$this->load->view($this->route, $data);
	}
}