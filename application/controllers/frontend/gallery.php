<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public $route = "frontend/index";
	private $class = "gallery";
	
	public function __construct(){
		//function check access			
		parent::__construct();
		$this->load->model("admin/Lokasi_wisata_kategori");	
	}
	
	public function index()
	{
		
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
		$data["class"] = $this->class;
		$data["konten"] = "frontend/gallery/gallery.main.view.php";
		$this->load->view($this->route, $data);
	}
}