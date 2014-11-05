<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Controller {
	
	public $route = "admin/index.php";
	private $class = "configuration";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Attractions");	
		$this->load->library('pagination_lib');
	}
	
	public function index()
	{
		$data["class"] = $this->class;	
		$data["konten"] = "admin/configuration/configuration.form.view.php";
		$this->load->view($this->route, $data);
	}
}
