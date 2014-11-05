<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public $route = "frontend/index.php";
	private $class = "news";
	
	public function __construct(){
		//function check access			
		parent::__construct();
		$this->load->model("admin/Lokasi_wisata_kategori");	
		$this->load->model("frontend/News_m");
		$this->load->model("admin/berita");
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
			$rn->gambar = $this->News_m->getNewsPicture($w);
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
		
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
		
		$data["popular"] = $popular; 
		$data["news"] = $news; 
		$data["news_tag"] = $news_tag; 
		$data["class"] = $this->class;
		
		$data["konten"] = "frontend/news/news.main.view.php";
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
			$rn->gambar = $this->News_m->getNewsPicture($w);
		endforeach;
		
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
		
		$data["class"] = $this->class;
		$data["popular"] = $popular; 
		$data["news"] = $news; 
		$data["news_tag"] = $news_tag; 
		$data["konten"] = "frontend/news/news.detail.view.php";
		$this->load->view($this->route, $data);
		// Insert Log
		$this->updateLog($id_berita);
	}
	
	public function updateLog($id_berita=0)
	{
		
		$data = $this->session->all_userdata();
		$session_id = $data["session_id"];
		$ip_address = $data["ip_address"];
		$data["id_berita"] = $id_berita;
		$where = array(
			"id_berita"=>$id_berita,
			"session_id"=>$session_id,
			"ip_address"=>$ip_address
		);
		$sd = $this->berita->displaySelectedBeritaLog($where);
		
		if( !$sd ):
			$this->berita->insertBeritaLog($data);
		endif;
	}
	
	public function tag($id_berita_tag=0)
	{
		
		$where = array(
			"id_berita_tag"=>$id_berita_tag
		);
		
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		$limit = 10;
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;
		
		$news = $this->News_m->displayAllperTag($limit, $offset, $where);
		$popular = $this->News_m->displayPopular();
		$news_tag = $this->News_m->displayNewsTag();
		
		foreach( $news as $rn ):
			$w = array( "id_berita"=>$rn->id_berita );
			$rn->tags = $this->News_m->getNewsTag($w);
			$rn->gambar = $this->News_m->getNewsPicture($w);
		endforeach;
		// Paging
		$total_row =  $this->News_m->countAllDataperTag($where);
		$url = base_url() . "frontend/news/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		// For Navigation
		$data["potensi_wisata"] =  $this->Lokasi_wisata_kategori->display();
		// End Navigation
		
		$data["popular"] = $popular; 
		$data["news"] = $news; 
		$data["news_tag"] = $news_tag; 
		$data["class"] = $this->class;
		
		$data["konten"] = "frontend/news/news.main.view.php";
		$this->load->view($this->route, $data);
	}
}