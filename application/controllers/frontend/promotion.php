<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {
	public $route = "frontend/index";
	private $class = "promotion";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("frontend/Promotion_m");
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
		
		$promotion = $this->Promotion_m->displayAll($limit, $offset);
		
		$categories = $this->Promotion_m->display();
		// Paging
		$total_row =  $this->Promotion_m->countAllData();
		$url = base_url() . "frontend/promotion/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["promotion"] = $promotion; 
		$data["class"] = $this->class;
		$data["categories"] = $categories;
		$data["konten"] = "frontend/promotion/promotion.list.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function category($id_kategori_promosi)
	{	
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		$limit = 10;
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;
		
		$kondisi = array(
			"id_promosi_kategori"=>$id_kategori_promosi
		);
		
		$promotion = $this->Promotion_m->displaySelectedData($kondisi);
		
		$categories = $this->Promotion_m->display();
		// Paging
		$total_row =  $this->Promotion_m->countAllData();
		$url = base_url() . "frontend/promotion/category/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["promotion"] = $promotion; 
		$data["class"] = $this->class;
		$data["categories"] = $categories;
		$data["konten"] = "frontend/promotion/promotion.list.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function detail($id_promosi=0)
	{
		$where = array(
			"id_promosi"=>$id_promosi
		);
		
		$promotion = $this->Promotion_m->displaySelectedData($where);
		$file = $this->Promotion_m->displayFileSelectedData($where);
		$image = $this->Promotion_m->displayImageSelectedData($where);
		
		$kondisi = array(
			"id_kategori_promosi"=>$promotion[0]->id_promosi_kategori
		);
		
		$kategori = $this->Promotion_m->displayCategorySelectedData($kondisi);
		$categories = $this->Promotion_m->display();
		
		$data["class"] = $this->class;
		$data["promotion"] = $promotion; 
		$data["kategori"] = $kategori;
		$data["categories"] = $categories;
		$data["file"] = $file;
		$data["image"] = $image;
		$data["konten"] = "frontend/promotion/promotion.detail.view.php";
		$this->load->view($this->route, $data);
	}
}