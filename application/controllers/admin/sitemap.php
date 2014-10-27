<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	public $route = "admin/index.php";
	private $class = "sitemap";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/SitemapModel");
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
		
		$sitemap = $this->SitemapModel->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->SitemapModel->countAllData();
		$url = base_url() . "admin/sitemap/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["sitemap"] = $sitemap; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/sitemap/sitemap.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_sitemap=0)
	{	
		$where = array("id_sitemap"=>$id_sitemap);
		$promotion = $this->SitemapModel->displaySelectedData($where);
		
		$data["sitemap"] = $sitemap; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/sitemap/sitemap.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_promosi_kategori = $this->input->post("id_promosi_kategori");
		$id_promosi = $this->input->post("id_promosi");
		$promosi_ina = $this->input->post("promosi_ina");
		$promosi_eng = $this->input->post("promosi_eng");
		$deskripsi_ina = $this->input->post("deskripsi_ina");
		$deskripsi_eng = $this->input->post("deskripsi_eng");
		$tanggal_promosi = yyyymmdd($this->input->post("tanggal_promosi"));
		$tanggal_kadarluarsa = yyyymmdd($this->input->post("tanggal_kadarluarsa"));
		
		
		$data = array(
			"promosi_ina"=>$promosi_ina,
			"promosi_eng"=>$promosi_eng,
			"deskripsi_ina"=>$deskripsi_ina,
			"deskripsi_eng"=>$deskripsi_eng,
			"tanggal_promosi"=>$tanggal_promosi,
			"tanggal_kadarluarsa"=>$tanggal_kadarluarsa,
			"id_promosi_kategori"=>$id_promosi_kategori
		);
		
		//print_r($data); exit;
		
		$where = array(
			"id_sitemap"=>$id_sitemap
		);
		
		if( $id_promosi != 0 ):
			$result = $this->SitemapModel->update($data, $where);
		else:
			$result = $this->SitemapModel->insert($data);
		endif;
		
		if( $result ):
			redirect("admin/sitemap");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_sitemap=0)
	{
		$where = array(
			"id_sitemap"=>$id_sitemap
		);
		
		if( $id_sitemap != "" ):
			$result = $this->SitemapModel->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/sitemap");
		else:
			echo "Gagal";
		endif;
	}
}

?>