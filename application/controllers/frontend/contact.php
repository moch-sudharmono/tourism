<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public $route = "frontend/index";
	
	public function index()
	{
		$data["konten"] = "frontend/contact/contact.main.view.php";
		$this->load->view($this->route, $data);
	}
}