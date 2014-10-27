<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public $route = "frontend/index.php";
	private $class = "news";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("frontend/News_m");
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
		
		$news = $this->News_m->displayAll($limit, $offset);
		$popular = $this->News_m->displayPopular();
		$news_tag = $this->News_m->displayNewsTag();
		
		foreach( $news as $rn ):
			$w = array( "id_berita"=>$rn->id_berita );
			$rn->tags = $this->News_m->getNewsTag($w);
		endforeach;
		// Paging
		$total_row =  $this->News_m->countAllData();
		$url = base_url() . "frontend/news/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["popular"] = $popular; 
		$data["news"] = $news; 
		$data["news_tag"] = $news_tag; 
		$data["class"] = $this->class;
		
		$data["konten"] = "frontend/news/news.main.view.php";
		//print_r($data); exit;
		$this->load->view($this->route, $data);
	}
	
	public function detail($id_berita=0)
	{
		$where = array(
			"id_berita"=>$id_berita
		);
		
		$news = $this->News_m->displaySelectedData($where);
		$popular = $this->News_m->displayPopular();
		$news_tag = $this->News_m->displayNewsTag();
		
		foreach( $news as $rn ):
			$w = array( "id_berita"=>$rn->id_berita );
			$rn->tags = $this->News_m->getNewsTag($w);
		endforeach;
		
		$data["class"] = $this->class;
		$data["popular"] = $popular; 
		$data["news"] = $news; 
		$data["news_tag"] = $news_tag; 
		$data["konten"] = "frontend/news/news.detail.view.php";
		$this->load->view($this->route, $data);
	}
}