<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public $route = "frontend/index";
	private $class = "contact";
	
	public function index()
	{
		$data["class"] = $this->class;
		$data["konten"] = "frontend/contact/contact.main.view.php";
		$this->load->view($this->route, $data);
	}
}