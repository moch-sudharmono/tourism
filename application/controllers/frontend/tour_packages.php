<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour_packages extends CI_Controller {
	public $route = "frontend/index";
	private $class = "tour_packages";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Lokasi_wisata_kategori");
		$this->load->model("frontend/Tour_packages_m");
		$this->load->library('pagination_lib');
	}
	
	public function index()
	{
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		$limit = 10;
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;
		
		$packages = $this->Tour_packages_m->displayAll($limit, $offset);
		
		// Paging
		
		$total_row =  $this->Tour_packages_m->countAllData();
		$url = base_url() . "frontend/news/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["packages"] = $packages; 
		$data["class"] = $this->class;

		//for right sidebar
		$data["images"] = $this->Tour_packages_m->displayAllImage(); 
		$data["konten"] = "frontend/tour_packages/packages.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function detail($id_paket_wisata=0)
	{
		$where = array(
			"id_paket_wisata"=>$id_paket_wisata
		);
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
		$data["class"] = $this->class;
		$data["packages"] = $this->Tour_packages_m->displaySelectedData($where); 
		$data["image"] = $this->Tour_packages_m->displayImageSelectedData($where); 
		$data["images"] = $this->Tour_packages_m->displayAllImage(); 
		$data["konten"] = "frontend/tour_packages/packages.detail.view.php";
		$this->load->view($this->route, $data);
	}
}