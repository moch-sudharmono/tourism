<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public $route = "frontend/index.php";
	
	public function index()
	{
		$data["konten"] = "frontend/home.view.php";
		$this->load->view($this->route, $data);
	}
}