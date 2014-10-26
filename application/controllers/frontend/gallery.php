<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public $route = "frontend/index";
	private $class = "gallery";
	
	public function index()
	{
		$data["class"] = $this->class;
		$data["konten"] = "frontend/gallery/gallery.main.view.php";
		$this->load->view($this->route, $data);
	}
}