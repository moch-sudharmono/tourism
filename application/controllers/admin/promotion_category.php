<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion_category extends Access_Controller {

	public $route = "admin/index.php";
	private $class = "promotion_category";
	
	public function __construct(){
		//function check access			
		parent::__construct();	

		$this->load->model("admin/Kategori_promosi");
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
		
		$category = $this->Kategori_promosi->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Kategori_promosi->countAllData();
		$url = base_url() . "admin/promotion_category/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["category"] = $category; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/promotion/category.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_kategori_promosi=0)
	{	
		$where = array("id_kategori_promosi"=>$id_kategori_promosi);
		$category = $this->Kategori_promosi->displaySelectedData($where);
		
		$data["category"] = $category; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/promotion/category.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_kategori_promosi = $this->input->post("id_kategori_promosi");
		$kategori_promosi_ina = $this->input->post("kategori_promosi_ina");
		$kategori_promosi_eng = $this->input->post("kategori_promosi_eng");

		$data = array(
			"kategori_promosi_ina"=>$kategori_promosi_ina,
			"kategori_promosi_eng"=>$kategori_promosi_eng
		);
		
		//print_r($data); exit;
		
		$where = array(
			"id_kategori_promosi"=>$id_kategori_promosi
		);
		
		if( $id_kategori_promosi != 0 ):
			$result = $this->Kategori_promosi->update($data, $where);
		else:
			$result = $this->Kategori_promosi->insert($data);
		endif;
		
		if( $result ):
			redirect("admin/promotion_category");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_kategori_promosi=0)
	{
		$where = array(
			"id_kategori_promosi"=>$id_kategori_promosi
		);
		
		if( $id_kategori_promosi != "" ):
			$result = $this->Kategori_promosi->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/promotion_category");
		else:
			echo "Gagal";
		endif;
	}
}

?>