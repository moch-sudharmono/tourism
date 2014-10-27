<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attraction extends CI_Controller {
	public $route = "frontend/index.php";
	private $class = "attraction";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->library("navigation_lib");
		
	}
	
	public function index()
	{
		$data["potensi_wisata"] = $this->navigation_lib->potensi_wisata();
		$data["class"] = $this->class;
		$data["konten"] = "frontend/attraction/attraction.main.view.php";
		$this->load->view($this->route, $data);
	}
}