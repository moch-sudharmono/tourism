<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public $route = "frontend/index";
	
	public function index()
	{
		$data["konten"] = "frontend/news/news.main.view.php";
		$this->load->view($this->route, $data);
	}
}