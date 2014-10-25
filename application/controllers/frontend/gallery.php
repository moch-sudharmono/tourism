<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public $route = "frontend/index";
	
	public function index()
	{
		$data["konten"] = "frontend/gallery/gallery.main.view.php";
		$this->load->view($this->route, $data);
	}
}