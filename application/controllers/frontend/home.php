<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public $route = "frontend/index.php";
	private $class = "home";
	
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->library("navigation_lib");
		
	}
	
	public function index()
	{
		// For Navigation
		$d = $this->navigation_lib->load_all();
		$data["potensi_wisata"] = $d["potensi_wisata"];
		// End For Navigation
		
		$data["class"] = $this->class;
		$data["konten"] = "frontend/home.view.php";
		$this->load->view($this->route, $data);
	}
}