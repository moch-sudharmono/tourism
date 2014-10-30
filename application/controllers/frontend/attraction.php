<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attraction extends CI_Controller {
	public $route = "frontend/index.php";
	private $class = "attraction";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Lokasi_wisata");
		$this->load->model("admin/Lokasi_wisata_kategori");
		$this->load->model("admin/Sarana_prasarana");
		$this->load->library('pagination_lib');
	}
	
	public function index()
	{
		echo "";
	}
	
	public function display($id_lokasi_wisata_kategori=0)
	{
		$lokasi_wisata_kategori_seo = $this->uri->segment(5);
		
		$where = array(
			"id_lokasi_wisata_kategori"=>$id_lokasi_wisata_kategori
		);
		
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		$limit = 10;
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;
		
		$data["attraction"] = $this->Lokasi_wisata->displaySelectedDataPaging($where, $limit, $offset);
		
		// Paging
		$total_row =  $this->Lokasi_wisata->countSelectedData($where);
		$url = base_url() . "frontend/attraction/display/". $id_lokasi_wisata_kategori ."/".$lokasi_wisata_kategori_seo."/?paging=true";
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
		$data["class"] = $this->class;
		$data["konten"] = "frontend/attraction/attraction.main.view.php";
		$this->load->view($this->route, $data);
		
	}
	
	public function detail($id_lokasi_wisata=0)
	{
		$where = array(
			"id_lokasi_wisata"=>$id_lokasi_wisata
		);

		$data["attraction"] = $this->Lokasi_wisata->displaySelectedData($where);
		
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
	
		$data["class"] = $this->class;
		$data["konten"] = "frontend/attraction/attraction.detail.view.php";
		$this->load->view($this->route, $data);
	}
}