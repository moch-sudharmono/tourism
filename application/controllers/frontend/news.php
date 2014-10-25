<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public $route = "frontend/index";
	
	public function index()
	{
		$this->load->model("frontend/News_m");
		$this->load->library('pagination_lib');
		
		// Paging
		$limit = 10;
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		// Hitung Jumlah Komentar
		$total_row = 10;
		$url = base_url() . "news/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;

		$data["paging"] = $this->pagination_lib->paging($data_paging);
		$data["news"] = $this->News_m->displayAll(); 
		
		$data["konten"] = "frontend/news/news.main.view.php";
		$this->load->view($this->route, $data);
	}
}