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
		
		$sitemap = $this->SitemapModel->displayAllJoin($limit, $offset);
		/*echo "<pre>";
		print_r($sitemap);
		echo "</pre>";
		exit;*/

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
		$sitemap = $this->SitemapModel->displaySelectedData($where);
		$parent = $this->SitemapModel->displayAll();
		$data["sitemap"] = $sitemap; 
		$data["class"] = $this->class;
		$data["parent"] = $parent; 
		$data["konten"] = "admin/sitemap/sitemap.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_sitemap = $this->input->post("id_sitemap");
		$sitemap_no = $this->input->post("sitemap_no");
		$parent_menu = $this->input->post("parent_menu");
		$nama_sitemap_eng = $this->input->post("nama_sitemap_eng");
		$nama_sitemap_ina = $this->input->post("nama_sitemap_ina");
		$url = $this->input->post("url");
		$css_id = yyyymmdd($this->input->post("css_id"));
		$css_class = yyyymmdd($this->input->post("css_class"));
		
		
		$data = array(
			"sitemap_no"=>$sitemap_no,
			"parent_id"=>$parent_menu,
			"nama_sitemap_eng"=>$nama_sitemap_eng,
			"nama_sitemap_ina"=>$nama_sitemap_ina,
			"url"=>$url,
			"css_id"=>$css_id,
			"css_class"=>$css_class
		);
		
		//print_r($data); exit;
		
		$where = array(
			"id_sitemap"=>$id_sitemap
		);
		
		if( $id_sitemap != 0 ):
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